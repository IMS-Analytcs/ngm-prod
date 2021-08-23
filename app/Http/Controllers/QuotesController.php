<?php

namespace App\Http\Controllers;

use App\Emails\AppMailer;
use App\Models\Expenses;
use App\Models\expensesCategory;
use App\Models\PartNumberQuote;
use App\Models\PartNumbers;
use App\Models\PSC;
use App\Models\Quote;
use App\Models\quoteExpenses;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ExpensesController;

class QuotesController extends Controller
{

    public function index()
    {
        // $quotes = Quote::all()->where('status', '==', 'aguardando');
        $quotes = Quote::select('*')
            ->where('status',  'aguardando')
            ->orWhere('status',  'rascunho')
            ->orderBy('id', 'desc')
            ->get();

        $allPartNumberQuote = PartNumberQuote::all();
        $allQuoteExpenses = quoteExpenses::all();
        return view('Quotes.listQuotes', compact('quotes', 'allPartNumberQuote', 'allQuoteExpenses'));
    }

    public function create()
    {
        $allPartNumbers = PartNumbers::all();
        return view('Quotes.newQuote', compact('allPartNumbers'));
    }

    public function addcreate()
    {
        return view('Quotes.addQuote');
    }

    public function store(Request $request, AppMailer $mailer)
    {

        // dd($request->qtde_expense[]);

        //Variável para facilitar os teste fora do ambiente LDAP
        $username = isset(Auth::user()->username) ? Auth::user()->username : 'user.teste';


        if ($request->rascunho ==  1) {
            $status = 'rascunho';
        } else {
            $status =  "aguardando";
        }
        //Registra cotação
        $Quotes = new Quote();
        $Quotes->state = $request->state;
        $Quotes->city = $request->cidade;
        $Quotes->client_name = $request->client_name;
        $Quotes->lead = $request->lead;
        $Quotes->account_manager = $request->account_manager;
        $Quotes->owner = $username;
        $Quotes->status = $status;
        $Quotes->initial_value =  $request->vlr_total;
        $Quotes->save();

        $value_quote = 0;

        if (!empty($request->partNumbers)) {
            // dd($request->qtde_expense);
            //Identifica PartNumber adicionando e quantidade
            $listPartnumber = [];
            foreach ($request->partNumbers as $PartNumber) {

                $qtde = 0;
                for ($i = 0; $i < count($request->partNumbers); $i++) {

                    if ($request->partNumbers[$i] == $PartNumber) {
                        $qtde++;
                    }

                    if ($i == count($request->partNumbers) - 1) {

                        $newItem = ['idPartnumber' => $PartNumber, 'qtde' => $qtde];
                        array_push($listPartnumber, $newItem);
                    }
                }
            }

            $listPartnumber = array_map("unserialize", array_unique(array_map("serialize", $listPartnumber)));

            //Registra partnumbers da cotação
            foreach ($listPartnumber as $PartNumber) {



                $PartNumberValue = PartNumbers::find($PartNumber['idPartnumber']);

                $value_quote += $PartNumberValue['valor'] * $PartNumber['qtde'];

                PartNumberQuote::create([
                    'quote_id' => $Quotes->id,
                    'part_number_id' => $PartNumber['idPartnumber'],
                    'unity_value' => $PartNumberValue['valor'],
                    'quantity' => $PartNumber['qtde'],
                ]);
            }

            if (!empty($request->idExpense)) {

                // //Identifica Despesas adicionadas e quantidade
                $listExpenses = [];


                $listExpenses = array_map("unserialize", array_unique(array_map("serialize", $listExpenses)));


                //  dd($request->idExpense );

                //Registra despesas da cotação
                $cont = 0;
                foreach ($request->idExpense as $Expense) {

                    $ExpenseValue = Expenses::find($Expense);

                    $value = isset($ExpenseValue['value']) ? $ExpenseValue['value'] : 0;
                    $quantity = isset($ExpenseValue['qtde']) ? $ExpenseValue['qtde'] : 0;

                    $value_quote += intval($value) * intval($quantity);

                    quoteExpenses::create([
                        'quote_id' => $Quotes->id,
                        'expense_id' => $Expense,
                        'unity_value' => $value,
                        'quantity' => $request->qtde_expense[$cont],
                        'partnumber_id' => $request->idPartnumber[$cont] != 0 ? $request->idPartnumber[$cont] : null
                    ]);

                    $cont++;
                }
            }
        }


        // $mailer->sendEmailRegisterQuote($Quotes);

        return redirect('quotes');
    }

    public function pdf($id)
    {
        $quote = Quote::findOrFail($id);
        $part_number_quote = DB::table('part_number_quote')->where('quote_id', $id)
            ->join('part_number', 'part_number_quote.part_number_id', '=', 'part_number.id')
            ->get();

        $expenses = DB::table('quotes')->where('quotes.id', $id)
            ->select(
                'quote_expenses.quantity as quote_quantity',
                'part_number.nameParNumber as nameParNumber',
                'expenses.nameExpenses as nameExpenses',
                'partnumber_expenses.type as type',
                'partnumber_expenses.quantity as partnumber_quantity',
                'quote_expenses.unity_value as unity_value'
            )
            ->join('quote_expenses', 'quote_expenses.quote_id', '=', 'quotes.id')
            ->join('expenses', 'quote_expenses.expense_id', '=', 'expenses.id')
            ->join('part_number_quote', 'part_number_quote.quote_id', '=', 'quote_expenses.quote_id')
            ->join('part_number', 'part_number.id', '=', 'part_number_quote.part_number_id')
            ->join('partnumber_expenses', 'partnumber_expenses.part_number_id', '=', 'part_number.id')
            ->get();
        $partnumber_subtotal = 0;
        foreach ($part_number_quote as $p) {
            $subtotal = $p->unity_value * $p->quantity;
            $partnumber_subtotal = $subtotal + $partnumber_subtotal;
        }

        $expenses_subtotal = 0;
        foreach ($expenses as $e) {
            $subtotal2 = $subtotal2 = number_format(str_replace(",", ".", str_replace(".", "", $e->unity_value)), 2, '.', '') * $e->quote_quantity;
            $expenses_subtotal = $subtotal2 + $expenses_subtotal;
        }

        // dd($part_number_quote) ;
        PDF::setOptions(['isRemoteEnabled', true]);

        $pdf = PDF::loadView('Quotes.pdf', ['quote' => $quote, 'partnumber_subtotal' => $partnumber_subtotal, 'expenses_subtotal' => $expenses_subtotal], compact('part_number_quote', 'expenses'));
        return $pdf->download($quote->client_name . "-" . $quote->lead . '.pdf');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {

        $editquotes = Quote::find($id);

        $totalQuote = 0;

        $listParnumbers = Quote::select('pn.*',  'pnq.unity_value', 'pnq.quantity')
            ->join('part_number_quote as pnq', 'quotes.id', 'pnq.quote_id')
            ->join('part_number as pn', 'pn.id', 'pnq.part_number_id')
            ->where('quotes.id', $id)
            ->get()
            ->map(function ($query) use ($totalQuote) {

                $query->subtotal = $query->unity_value * $query->quantity;
                return $query;
            });

        $listExpenses = [];
        $expenses = new ExpensesController();    
        foreach ($listParnumbers as $partumber) {
            $result =  $expenses->getExpensePartNumber($id, $partumber->id, $editquotes->state, $editquotes->city);             
            $listExpenses[] = $result;
            
            break; //Break utilizado para resolver a duplicidade de despesas, mas preicsa se implmentado solução adequada para esse LOOP

        }


        // $listExpenses =  $listExpenses[0];
        return view('Quotes.newQuote', compact('editquotes', 'listParnumbers', 'listExpenses', 'totalQuote'));
    }



    public function editPsc($id)
    {
        $editpsc = Quote::find($id);
        $allpsc = PSC::all();

        return view('Psc.newPsc', compact('editpsc', 'allpsc'));
    }

    public function update(Request $request, $id)
    {
        $value_quote = 0;
        $historic = $request->input('historic');

        // dd($request->idExpense);

        $versao = 0; //versao da partnumber

        //pega a partnumber  que esta sendo 'editada'
        $editquote = Quote::find($id);
        

        $idOrigem = null;
        $versao = null;

        //Definir ID Origem e Versão
        if ($editquote->id_origin > 0) { //Já tem uma versão

            $idOrigem = $editquote->id_origin;
            $quote = Quote::select('version', 'id_origin')
                ->where('id_origin', $idOrigem)
                ->orderBy('version', 'desc')
                ->first();
            $versao   = $quote->version + 1;
        } else { //Versão original
            $idOrigem = $editquote->id;
            $versao = 1;
        }

        //Atualiza se estiver recuperando um historico
        if ($historic) {
            $quote = Quote::select('version', 'id')
                ->where('id_origin', $idOrigem)
                ->orderBy('version', 'desc')
                ->first();               
           
            $quote->status = 'old';
            $quote->save();
        } 

        //Pegar id origem da cotação
        $Quotes = new Quote;

        //A coluna id_origin recebe o ID de origem do priemiro registro da cotação
        $Quotes->id_origin = $idOrigem;

        // A Coluna versão recebe o valor sequencial para cada versão;
        $Quotes->version = $versao;

        $Quotes->state = $request->state;
        $Quotes->city = $request->cidade;
        $Quotes->client_name = $request->client_name;
        $Quotes->lead = $request->lead;
        $Quotes->account_manager = $request->account_manager;

        // $updateQuote = Quote::where('id_origin', $idOrigem)->update(['status' => 'old']);

        //alterado os status
        $Quotes->status = 'aguardando';
        $editquote->status = 'old';
        $editquote->save();
        $Quotes->save();
      


        $qtde = 0;


        if (!empty($request->partNumbers)) {

            $listPartnumber = [];
            $cont = 0;
            foreach ($request->partNumbers as $PartNumber) {

                $partNumber = PartNumbers::find($PartNumber);

                $partnumber_quote = new PartNumberQuote();
                $partnumber_quote->part_number_id = $PartNumber;
                $partnumber_quote->quote_id = $Quotes->id;
                $partnumber_quote->unity_value = $partNumber->valor;
                $partnumber_quote->quantity = $request->qtde_partner[$cont];
                $partnumber_quote->save();

                $value_quote += $partNumber->valor * $request->qtde_partner[$cont];
                $cont++;
            }
        }

        if (!empty($request->idExpense)) {

            //Identifica Despesas adicionadas e quantidade
            $listExpenses = [];
            foreach ($request->idExpense as $expense) {

                $qtde = 0;
                for ($i = 0; $i < count($request->idExpense); $i++) {

                    if (intval($request->idExpense[$i]) == intval($expense)) {
                        $qtde = $qtde + intval($request->qtde_expense[$i]);
                    }

                    if ($i == count($request->idExpense) - 1) {

                        $newItem = ['idExpense' => $expense, 'qtde' => $qtde];
                        array_push($listExpenses, $newItem);
                    }
                }
            }

            $listExpenses = array_map("unserialize", array_unique(array_map("serialize", $listExpenses)));

            //Registra despesas da cotação
            // dd($listExpenses);

            $cont = 0;
            foreach ($request->idExpense as $Expense) {

                $ExpenseValue = Expenses::find($Expense);

                $value = isset($ExpenseValue['value']) ? $ExpenseValue['value'] : 0;
                $quantity = isset($ExpenseValue['qtde']) ? $ExpenseValue['qtde'] : 0;

                // $value_quote += intval($value) * intval($quantity);

                quoteExpenses::create([
                    'quote_id' => $Quotes->id,
                    'expense_id' => $Expense,
                    'unity_value' => $value,
                    'quantity' => $request->qtde_expense[$cont],
                    'partnumber_id' => $request->idPartnumber[$cont] != 0 ? $request->idPartnumber[$cont] : null
                ]);

                $value_quote +=  $value *  $request->qtde_expense[$cont];

                $cont++;
            }
        }

        $Quotes->initial_value = $value_quote;
        $Quotes->save();

        return redirect('quotes');
    }

    public function destroy($id)
    {
        //
    }

    public function editListPartNumberInQuotes($id)
    {
        $quote = Quote::find($id);
        $retorno = $quote->part_numbers()->get();
        return response()->json($retorno, 200);
    }

    public function editStatusQuotes($id, Request $request, AppMailer $mailer)
    {
        $quote = Quote::find($id);
        $quote->status = $request->input('status');
        $quote->save();

        //Dispara email de boas vindas após cadastro
        // $mailer->sendEmailChangeStatus($quote);

        return redirect('/quotes');
    }

    public function StatusOrder($id, Request $request, AppMailer $mailer)
    {
        $quote = Quote::find($id);
        $quote->status_order = $request->input('status');
        $quote->final_value = $request->input('final_value');
        $quote->final_date = $request->input('dta_end');
        $quote->save();

        $mailer->sendEmailChangeStatusOrder($quote);

        return redirect('/order');
    }

    public function getExpensesQuote($id)
    {
        try {

            $ExpensesQuote = array();
            $Expenses = Quote::find($id)->expenses;
            // $categoriaExpense = Quote::find($id)->expenses->where('category_id', $quote->category_id)->get();
            // dd($ExpensesQuote['category_id']);
            foreach ($Expenses as $item) {
                $ExpensesQuote['id'] = $item->id;
                $ExpensesQuote['nameExpenses'] = $item->nameExpenses;
                $ExpensesQuote['value'] = $item->value;
                $ExpensesQuote['state'] = $item->state;
                $ExpensesQuote['city'] = $item->city;
                $ExpensesQuote['status'] = $item->status;
                $ExpensesQuote['category_id'] = $item->category_id;
                $ExpensesQuote['nacional_expense'] = $item->nacional_expense;
                $ExpensesQuote['pivot'] = ['quote_id' => $item->pivot->quote_id, 'expense_id' => $item->expense_id];

                $categoria = expensesCategory::find($item->category_id)->category;
                $ExpensesQuote['categoriadespesa'] = $categoria;
                //echo $categoria;
                // array_push($ExpensesQuote, $newarr);
            }

            return response()->json([$ExpensesQuote], 200);
        } catch (\Throwable $th) {
            // throw $th;
            dd($th);
        }
    }

    public function historic($id)
    {
        $result = Quote::select('*')
            ->where('id', $id)
            ->orWhere('id_origin', $id)
            ->get();

        return view('Quotes.QuotesHistoric', compact('result'));
    }

    public function historicedit($id)
    {

        $historic = true;


        $editquotes = Quote::find($id);

        $totalQuote = 0;

        $listParnumbers = Quote::select('pn.*',  'pnq.unity_value', 'pnq.quantity')
            ->join('part_number_quote as pnq', 'quotes.id', 'pnq.quote_id')
            ->join('part_number as pn', 'pn.id', 'pnq.part_number_id')
            ->where('quotes.id', $id)
            ->get()
            ->map(function ($query) use ($totalQuote) {

                $query->subtotal = $query->unity_value * $query->quantity;
                return $query;
            });

        $listExpenses = [];
        $expenses = new ExpensesController();
        foreach ($listParnumbers as $partumber) {
            $result =  $expenses->getExpensePartNumber($id, $partumber->id, $editquotes->state, $editquotes->city);
            $listExpenses[] = $result;
            break;
        }

        return view('Quotes.newQuote', compact('editquotes', 'listParnumbers', 'listExpenses', 'totalQuote', 'historic'));
    }

    public function ajaxInfoQuote($idQuote)
    {

        $quote = Quote::select('*')->where('id', $idQuote)->get()->map(function ($quote) {

            //Formma data para padrão BR e adicionar no retorno da query
            $date = Carbon::parse($quote->created_at);
            $quote->date = $date->format("d/m/Y");
            return $quote;
        });
        return json_encode($quote[0]);
    }

    public function getExpensesRegional(Request $request)
    {

        $state = $request->state;
        $city = $request->city;
    }
}
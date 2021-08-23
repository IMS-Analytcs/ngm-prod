<?php

namespace App\Http\Controllers;

use App\Emails\AppMailer;
use App\Models\OperationalCost;
use App\Models\partnumber_expenses;
use App\Models\PartNumberQuote;
use App\Models\PartNumbers;
use App\Models\PSC;
use App\Models\Quote;
use App\Models\quoteExpenses;
use App\Models\ResponsePSC;
use App\Models\StatusPsc;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Expenses;

class PSCController extends Controller
{

    public function expensePartNumber($estado, $cidade, $idPartnumber)
    {


        $cidade = $cidade;
        $estado = $estado;

        //Busca a categoria de todas as despesas previsar para a PartNumber
        $listCategoyExpense = PartNumbers::select(
            'ec.id',
            'ec.category',
            'pe.type',
            'pe.quantity',
            'part_number.nameParNumber',
            'ec.id as idCategory'
        )
            ->join('partnumber_expenses as pe', 'pe.part_number_id', '=', 'part_number.id')
            ->join('expenses_categories as ec', 'ec.id', 'pe.expense_id')
            ->where('part_number.id', $idPartnumber)
            ->get();


        //Busca despesas cadastrdas levando em consideração o ESTADA/CIDADE ou DESPESA NACIONAL
        $listExpenses = PartNumbers::select(
            'part_number.id',
            'part_number.nameParNumber',
            'ec.id as idCategory',
            'ec.category',
            'pe.quantity',
            'pe.type',
            'e.nameExpenses',
            'e.value',
            'e.state',
            'e.city',
            'e.nacional_expense',
            'e.id as expense_id'
        )
            ->join('partnumber_expenses as pe', 'pe.part_number_id', '=', 'part_number.id')
            ->join('expenses_categories as ec', 'ec.id', 'pe.expense_id')
            ->join('expenses as e', 'e.category_id', 'ec.id')
            ->where('part_number.id', $idPartnumber)
            ->where(function ($query) use ($estado, $cidade) {
                $query->where('e.city', $cidade)
                    ->Where('e.state', $estado);
            })
            ->orWhere(function ($query) use ($idPartnumber) {
                $query->where('e.nacional_expense', 1)
                    ->where('pe.part_number_id', $idPartnumber);
            })
            ->get();



        //Crria Array do depsesas cadastradas e não cadastradas
        $listCategoyExpense->map(function ($category)  use ($listExpenses) {

            $i = 1;
            foreach ($listExpenses as  $expense) {

                if ($category->id ==  $expense->idCategory) {
                    $category->id                = $expense->id;
                    $category->nameParNumber     =  $expense->nameParNumber;
                    $category->idCategory        = $expense->idCategory;
                    $category->category          = $expense->category;
                    $category->quantity          = $expense->quantity;
                    $category->value             = $expense->value;
                    $category->type              = $expense->type;
                    $category->nameExpenses      = $expense->nameExpenses;
                    $category->state             = $expense->state;
                    $category->city              = $expense->city;
                    $category->nacional_expense  = $expense->nacional_expense;
                    $category->expense_id        = $expense->expense_id;
                }

                $i++;
            }

            return  $category;
        });

        return $listCategoyExpense;
    }

    public function visualizarpsc($id)
    {
        $psc   = PSC::find($id);
        $quote = Quote::find($psc->quote_id);

        $totalQuote = 0;

        $partnumbers = Quote::select('quotes.state', 'quotes.city',  'pn.*',  'pnq.unity_value', 'pnq.quantity')
            ->join('part_number_quote as pnq', 'quotes.id', 'pnq.quote_id')
            ->join('part_number as pn', 'pn.id', 'pnq.part_number_id')
            ->where('quotes.id', $quote->id)
            ->get()
            ->map(function ($query) use ($totalQuote) {

                $query->subtotal = $query->unity_value * $query->quantity;
                return $query;
            });



        $listExpenses = [];
        $expenses = new ExpensesController();
        foreach ($partnumbers as $partumber) {
            $result =  $expenses->getExpensePartNumber($quote->id, $partumber->id, $quote->state, $quote->city);
            $listExpenses[] = $result;

            break;
        }


        $cost = DB::table('operational_cost')->get();
        $status_psc = DB::table('status_psc')->get();

        return view('Psc.visualizarpsc', compact('psc', 'quote', 'cost', 'status_psc', 'partnumbers', 'listExpenses', 'totalQuote'));
    }


    public function pendente()
    {
        //PartNumber
        $psc = DB::table('psc')
            ->select('psc.id as idPSc', 'spsc.description', 'psc.*', 'quotes.*')
            ->join('quotes', 'quotes.id', '=', 'psc.quote_id')
            ->leftJoin('status_psc as spsc', 'psc.status_psc_id', 'spsc.id')
            ->where('status_psc_id', '!=', 5)
            ->orWhere('status_psc_id', null)
            ->orWhere('status_psc_id', 0)
            ->get();

        //   dd($psc);

        return view('Psc.psc', compact(
            'psc',
        ));
    }

    public function finalizado()
    {
        //PartNumber
        $psc = DB::table('psc')
            ->select('psc.id as idPSc', 'spsc.description', 'psc.*', 'quotes.*')
            ->join('quotes', 'quotes.id', '=', 'psc.quote_id')
            ->leftJoin('status_psc as spsc', 'psc.status_psc_id', 'spsc.id')
            ->where('status_psc_id', 5)
            ->orWhere('status_psc_id', 6)
            ->get();

        return view('Psc.psc', compact(
            'psc',
        ));
    }

    public function create($id)
    {
        $quote = Quote::find($id);
        return view('Psc.newPsc', compact('quote'));
    }

    public function store(Request $request, AppMailer $mailer)
    {
        if (
            !empty($request->input('lead')) &&
            !empty($request->input('motivo')) &&
            !empty($request->input('pre_venda')) &&
            !empty($request->input('email')) &&
            !empty($request->input('data_final')) &&
            !empty($request->input('concorrente')) &&
            !empty($request->input('escopo')) &&
            !empty($request->input('justificativa')) &&
            !empty($request->input('quote_id'))
        ) {
            $lead = $request->input('lead');
            $motivo = $request->input('motivo');
            $pre_venda = $request->input('pre_venda');
            $email = $request->input('email');
            $data_final = $request->input('data_final');
            $concorrente = $request->input('concorrente');
            $escopo = $request->input('escopo');
            $justificativa = $request->input('justificativa');
            $quote_id = $request->input('quote_id');
            $psc = new PSC();
            $psc->lead = $lead;
            $psc->motivo = $motivo;
            $psc->pre_venda = $pre_venda;
            $psc->email = $email;
            $psc->data_final = $data_final;
            $psc->concorrente = $concorrente;
            $psc->escopo = $escopo;
            $psc->justificativa = $justificativa;
            $psc->quote_id = $quote_id;
            $psc->save();

            $pscMail = PSC::orderBy('created_at', 'desc')->first();
            $mailer->sendEmailRegisterPSC($pscMail);

            return back()->with('success', 'PSC cadastrado!');
        }
        return back()->with('warning', 'PSC inválido!');
        dd($request->all());
    }

    public function show($id)
    {
        //
    }

    public function edit($id, Request $request)
    {
        if (
            !empty($request->input('lead')) &&
            !empty($request->input('motivo')) &&
            !empty($request->input('pre_venda')) &&
            !empty($request->input('email')) &&
            !empty($request->input('data_final')) &&
            !empty($request->input('concorrente')) &&
            !empty($request->input('escopo')) &&
            !empty($request->input('justificativa')) &&
            !empty($request->input('quote_id'))
        ) {
            $lead = $request->input('lead');
            $motivo = $request->input('motivo');
            $pre_venda = $request->input('pre_venda');
            $email = $request->input('email');
            $data_final = $request->input('data_final');
            $concorrente = $request->input('concorrente');
            $escopo = $request->input('escopo');
            $justificativa = $request->input('justificativa');
            $quote_id = $request->input('quote_id');
            $psc = PSC::find($id);
            $psc->lead = $lead;
            $psc->motivo = $motivo;
            $psc->pre_venda = $pre_venda;
            $psc->email = $email;
            $psc->data_final = $data_final;
            $psc->concorrente = $concorrente;
            $psc->escopo = $escopo;
            $psc->justificativa = $justificativa;
            $psc->quote_id = $quote_id;
            $psc->save();
            return back()->with('success', 'PSC Editado!');
        }
        return back()->with('warning', 'PSC inválido!');
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        PSC::find($id)->delete();
        return back();
    }

    public function getValueAnalista($horaAnalista, $analistaJunior, $analistaPleno, $analistaSenior, $analistaMaster)
    {

        //Hora analista seja 200

        //Quantidade de horas de atuação de cada nível
        $horasJunior = $horaAnalista / 100 * $analistaJunior;
        $horasPleno = $horaAnalista / 100 * $analistaPleno;
        $horasSenior = $horaAnalista / 100 * $analistaSenior;
        $horasMaster = $horaAnalista / 100 * $analistaMaster;

        $operationcalCostJunior = OperationalCost::select('cost_hour')->where('type', 'ANL')->where('level', 'J')->get()->first();
        $operationcalCostPleno = OperationalCost::select('cost_hour')->where('type', 'ANL')->where('level', 'P')->get()->first();
        $operationcalCostSenior = OperationalCost::select('cost_hour')->where('type', 'ANL')->where('level', 'S')->get()->first();
        $operationcalCostMaster = OperationalCost::select('cost_hour')->where('type', 'ANL')->where('level', 'M')->get()->first();

        $valorJunior = $horasJunior * $operationcalCostJunior->cost_hour;
        $valorPleno = $horasPleno * $operationcalCostPleno->cost_hour;
        $valorSenior = $horasSenior * $operationcalCostSenior->cost_hour;
        $valorMaster = $horasMaster * $operationcalCostMaster->cost_hour;

        $somaTodos = $valorJunior + $valorPleno + $valorSenior + $valorMaster;

        return number_format($somaTodos, 2, ",", ".");
    }

    public function getValueIMP($horaIPM, $ipmJunior, $ipmPleno, $ipmSenior, $ipmMaster)
    {

        //Hora analista seja 200

        //Quantidade de horas de atuação de cada nível
        $horasJunior = $horaIPM / 100 * $ipmJunior;
        $horasPleno = $horaIPM / 100 * $ipmPleno;
        $horasSenior = $horaIPM / 100 * $ipmSenior;
        $horasMaster = $horaIPM / 100 * $ipmMaster;

        $operationcalCostJunior = OperationalCost::select('cost_hour')->where('type', 'IPM')->where('level', 'J')->get()->first();
        $operationcalCostPleno = OperationalCost::select('cost_hour')->where('type', 'IPM')->where('level', 'P')->get()->first();
        $operationcalCostSenior = OperationalCost::select('cost_hour')->where('type', 'IPM')->where('level', 'S')->get()->first();
        $operationcalCostMaster = OperationalCost::select('cost_hour')->where('type', 'IPM')->where('level', 'M')->get()->first();

        $valorJunior = $horasJunior * $operationcalCostJunior->cost_hour;
        $valorPleno = $horasPleno * $operationcalCostPleno->cost_hour;
        $valorSenior = $horasSenior * $operationcalCostSenior->cost_hour;
        $valorMaster = $horasMaster * $operationcalCostMaster->cost_hour;

        $somaTodos = $valorJunior + $valorPleno + $valorSenior + $valorMaster;

        return number_format($somaTodos, 2, ",", ".");
    }

    public function editStatusPSC($id, Request $request, AppMailer $mailer)
    {

        $psc = PSC::find($id);
        $psc->status = $request->input('status');
        $psc->save();

        $mailer->sendEmailChangeStatusPSC($psc);

        return back();
    }

    public function pscCotacao(Request $request, AppMailer $mailer)
    {

        // dd($request->expenseID);


        $part_number_idArray =  $request->input('part_number_id');
        $QtdQuotePartnumberArray =  $request->input('QtdQuotePartnumber');
        $valorUnitarioPartnumberArray =  $request->input('valorUnitarioPartnumber');
        $expenseIDArray =  $request->input('expenseID');
        $CategoryExpenseArray = $request->input('CategoryExpense');
        $QtdExpensesPartNumberArray =  $request->input('QtdExpensesPartNumber');
        $valorUnitarioExpensesArray =  $request->input('valorUnitarioExpenses');
        $typeExpenseArray =  $request->input('typeExpense');
        $idpsc = $request->input('psc_id');

        $psc = PSC::find($idpsc);
        $psc->status_psc_id = $request->status_psc;
        $psc->update();

        $responsePSC = new ResponsePSC();
        $responsePSC->response = $request->input('response');
        $responsePSC->psc_id = $idpsc;
        $responsePSC->save();

        if ($request->status_psc == 5) { //PSC APROVADO
            // Fazer um update
            $AntigaQuote = Quote::find($request->input('quote_id'));
            $AntigaQuote->status = "old";
            $AntigaQuote->update();

            $buscaQuote = Quote::find($request->input('quote_id'));

            $idOrigem = null;
            $versao = null;
            //Definir ID Origem e Versão
            if ($buscaQuote->id_origin > 0) { //Já tem uma versão

                $idOrigem = $buscaQuote->id_origin;
                $quote = Quote::select('version', 'id_origin')
                    ->where('id_origin', $idOrigem)
                    ->orderBy('version', 'desc')
                    ->first();
                $versao   = $quote->version + 1;
            } else { //Versão original
                $idOrigem = $buscaQuote->id;
                $versao = 1;
            }

            $quote_id_nova = $request->input('quote_id');
            $quote = new Quote();
            $quote->client_name = $buscaQuote->client_name;
            $quote->lead = $buscaQuote->lead;
            $quote->account_manager = $buscaQuote->account_manager;
            $quote->status = "aguardando";
            $quote->state = $buscaQuote->state;
            $quote->city = $buscaQuote->city;
            $quote->status_order = $buscaQuote->status_order;
            $quote->final_value = $buscaQuote->final_value;
            $quote->owner = $buscaQuote->owner;
            $quote->final_date = $buscaQuote->final_date;
            $quote->id_origin = $idOrigem;
            $quote->version = $versao;
            $quote->initial_value = $request->total;
            $quote->psc = 1;
            $quote->save();
            $lastInsertedIDQuote = Quote::orderBy('id', 'desc')->take(1)->first();

            foreach ($part_number_idArray as $key => $part_number_id) {

                // dd($quote->id);
                $partNumberQuote = new PartNumberQuote();

                $partNumberQuote->quote_id = $lastInsertedIDQuote->id;
                //  $partNumberQuote->quote_id = $quote->id;
                $partNumberQuote->part_number_id = $part_number_id;
                $partNumberQuote->unity_value = $valorUnitarioPartnumberArray[$key];
                $partNumberQuote->quantity = $QtdQuotePartnumberArray[$key];
                $partNumberQuote->save();
            }




            $cont = 0;
            foreach ($request->expenseID as $Expense) {


                $quoteExpense = new quoteExpenses();
                $quoteExpense->quote_id   =  $lastInsertedIDQuote->id;
                $quoteExpense->unity_value = $request->valorUnitarioExpenses[$cont];
                $quoteExpense->expense_id = $Expense;
                $quoteExpense->quantity   = $request->QtdExpensesPartNumber[$cont];
                $quoteExpense->save();

                $cont++;
            }
        }

        $statuspsc = StatusPsc::find($request->input('status_psc'));
        $mailer->sendEmailAlteraStatusPSC($request->input('idpsc'), $statuspsc->description, $request->input('response'));

        return redirect('/psc-pendente');
    }
}
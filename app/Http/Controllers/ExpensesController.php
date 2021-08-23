<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Expenses;
use App\Models\expensesCategory;
use App\Models\partnumber_expenses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\PartNumbers;
use App\Models\Quote;
use LdapRecord\Models\Relations\OneToMany;

class ExpensesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allExpenses = Expenses::select('*')->get();
        $expensesCategory = expensesCategory::select('*')->get();

        // $arrayAllExpenses = array('allExpenses' => $allExpenses);
        return view('Expenses.listExpenses', compact('allExpenses', 'expensesCategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $expense = new Expenses();

        $this->validate($request, $expense->rules());
        // $this->validate($request, $expense->messages());

        $nameExpenses = $request->input('nameExpenses');
        $category = $request->input('category');
        $value = $request->input('value');
        $nacional_expense = $request->input('nacional_expense');

        $hasCatNational = Expenses::where('category_id', $request->input('category'))->where('nacional_expense', 1)->first();

        if ($hasCatNational) {

            $state = 'estado';
            $city = 'cidade';

            //verifica se existe despesa nacional com a categoria vinda do form
            $create['success'] = false;
            $create['msg'] = 'Não pode cadastrar despesa com essa categoria. Já existe uma cadastrada como Nacional.';
            return json_encode($create);
        }

        if ($nacional_expense) {
            $state = 'Nacional ';
            $city = 'Despesa';
        } else {
            $state = $request->input('state');
            $city = $request->input('city');
        }

        $expense->nameExpenses = $nameExpenses;
        $expense->category_id = $category;
        $expense->value = $value;
        $expense->state = $state;
        $expense->city = $city;
        $expense->nacional_expense = $nacional_expense;
        $salvo = $expense->save();
        if ($salvo) {
            $create['success'] = true;
            $create['msg'] = 'Despesa criada com sucesso!';
            return json_encode($create);
        } else {
            $create['success'] = false;
            $create['msg'] = 'Erro ao criar Despesa!';
            return json_encode($create);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {

        if (!empty($request->input('nameExpenses'))) {

            $expense = Expenses::find($id);

            $nameExpenses = $request->input('nameExpenses');
            $category = $request->input('category');
            $value = $request->input('value');
            $nacional_expense = $request->input('nacional_expense');

            $hasCatNational = Expenses::where('category_id', $request->input('category'))->where('nacional_expense', 1)->where('id', '!=', $id)->first();

            if ($hasCatNational) {

                //verifica se existe despesa nacional com a categoria vinda do form
                $editar['success'] = false;
                $editar['msg'] = 'Não pode cadastrar despesa com essa categoria. Já existe uma cadastrada como Nacional.';
                return json_encode($editar);
            }

            if ($nacional_expense) {
                $state = 'Nacional ';
                $city = 'Despesa';
            } else {
                $state = $request->input('state');
                $city = $request->input('city');
            }

            $expense->nameExpenses = $nameExpenses;
            $expense->category_id = $category;
            $expense->value = $value;
            $expense->state = $state;
            $expense->city = $city;
            $expense->nacional_expense = $nacional_expense;

            $editado = $expense->save();
            if ($editado) {
                $editar['success'] = true;
                $editar['msg'] = 'Atualizada com sucesso!';
                return json_encode($editar);
            } else {
                $editar['success'] = false;
                $editar['msg'] = 'Erro ao atualizar Despesa!';
                return json_encode($editar);
            }
        } else {
            $editar['success'] = false;
            $editar['msg'] = 'Preecha os campos Obrigatórios.';
            return json_encode($editar);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $expense = Expenses::find($id);

        if ($expense && $expense->status === 1) {
            $expense->status = 0;
            $expense->save();
            return redirect('expenses');
        } else if ($expense && $expense->status === 0) {
            $expense->status = 1;
            $expense->save();
            return redirect('expenses');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function getExpensePartNumber($idQuote, $idPartnumber, $estado, $cidade)
    {
        $listExpense = Quote::select('pn.id as idPartnumber', 'pn.nameParNumber', 'e.id as idExpense', 'e.nameExpenses', 'pn.descricao', 'pn.hora_analista', 'pn.hora_ipm',  'qe.unity_value', 'qe.quantity')
            // $listExpense = Quote::select('*' )    
            ->leftJoin('quote_expenses as qe', 'qe.quote_id', 'quotes.id')
            ->leftJoin('expenses as e', 'e.id', 'qe.expense_id')
            ->leftJoin('part_number as pn', 'qe.partnumber_id', 'pn.id')
            ->where('quotes.id',  $idQuote)
            // ->where('pn.id',$idPartnumber)        
            ->get()
            ->map(function ($query) {
                $query->subtotal = (float)$query->unity_value * (int)$query->quantity;

                if ($query->nameParNumber == null) {
                    $query->nameParNumber = "Customizado";
                }
                return $query;
            });





        // return response()->json($listCategoyExpense, 200);
        return $listExpense;
    }

    public function expensePartNumber(Request $request, $idPartnumber)
    {


        $cidade = $request->cidade;
        $estado = $request->estado;

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

            return $category;
        });

        return response()->json($listCategoyExpense, 200);
    }


    public function listExpensesInQuote(Request $request)
    {

        $result = DB::table('expenses')->where('nameExpenses', 'LIKE', '%' . $request->input('nameParNumber') . '%')
            ->orWhere('state', 'LIKE', '%' . $request->input('nameParNumber') . '%')->get();
        //where('title','LIKE','%'.$request->input('busca').'%')->paginate(100)
        return $result;
    }

    public function getExpensesRegional(Request $request)
    {

        $state = $request->state;
        $city = $request->city;

        $ExpensesRregional = Expenses::select('*')
            ->where(function ($query) use ($state) {
                $query->where('state', $state)
                    ->orWhere('state', 'Despesa Nacional');
            })
            ->where(function ($query) use ($city) {
                $query->where('city', $city)
                    ->orWhere('city', '');
            })
            ->get();


        return json_encode($ExpensesRregional);
    }
}
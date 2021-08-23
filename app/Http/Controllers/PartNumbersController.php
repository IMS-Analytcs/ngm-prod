<?php

namespace App\Http\Controllers;

use App\Emails\AppMailer;
use App\Models\BU;
use App\Models\expensesCategory;
use App\Models\Familia;
use App\Models\Group;
use App\Models\Manufacturer;
use App\Models\OperationalCost;
use App\Models\PartNumbers;
use App\Models\partnumber_expenses;
use App\Models\Type;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PartNumbersController extends Controller
{

    public function index()
    {
        $grupo = Group::All();
        $familia = Familia::All();
        $fabricante = Manufacturer::All();
        $tipo = Type::All();
        $bu = Bu::All();
        $allPartNumbers = PartNumbers::all()->unique('nameParNumber')->where('status', 1);

        $arrayPartNumbers = array('allPartNumbers' => $allPartNumbers);
        $fabricantes = array('fabricante' => $fabricante);
        $grupos = array('grupo' => $grupo);
        $familias = array('familia' => $familia);
        $bus = array('bu' => $bu);
        $tipos = array('tipo' => $tipo);

        return view(
            'PartNumbers.listpartNumbers',
            compact(
                'allPartNumbers',
                'fabricante',
                'grupo',
                'familia',
                'tipo',
                'bu'
            )

        );
    }

    public function create(Request $request, AppMailer $mailer)
    {

        //Variável para facilitar os teste fora do ambiente LDAP
        $username = isset(Auth::user()->username) ? Auth::user()->username : 'user.teste';

        if (
            !empty($request->input('DocumentType')) &&
            $request->input('DocumentType') === "IMS"

        ) {

            $typePartNumber = $request->input('DocumentType');
            $nameParNumber = $request->input('nameParNumber');
            $servico = $request->input('servico');
            $unidade = $request->input('unidade');
            $modalidade = $request->input('modalidade');
            $horasQuantidade = $request->input('horasQuantidade');
            $bu1 = $request->input('bu1');
            $bu2 = $request->input('bu2');

            try {
                $partNumber = new PartNumbers;
                $partNumber->typePartNumber = $typePartNumber;
                $partNumber->nameParNumber = $nameParNumber;

                if ($request->file('sow')->isValid()) {
                    if (
                        $request->file('sow')->extension() === 'pdf' ||
                        $request->file('sow')->extension() === 'txt' ||
                        $request->file('sow')->extension() === 'doc' ||
                        $request->file('sow')->extension() === 'docx'
                    ) {
                        $request->file('sow')->store('partNumber');
                        $partNumber->sow = $request->file('sow')->store('partNumber');
                    } else {
                        return redirect('/formPartNumber')->with('warning', 'Extensão de arquivo inválido!');
                    }
                }
                $partNumber->servico = $servico;
                $partNumber->unidade = $unidade;
                $partNumber->modalidade = $modalidade;
                $partNumber->horasQuantidade = $horasQuantidade;
                $partNumber->bu1_id = $bu1;
                $partNumber->bu2_id = $bu2;
                $email = $username;
                $partNumber->owner = $username;
                $partNumber->save();
                $partNumberMail = PartNumbers::orderBy('created_at', 'desc')->first();

                $mailer->sendEmailRegisterPartNumber($partNumberMail);
            } catch (\Throwable $th) {

                return back();
            }

            return redirect('partNumbers');
        } else if (
            !empty($request->input('DocumentType')) &&
            $request->input('DocumentType') == "ISE"
        ) {

            $typePartNumber = $request->input('DocumentType');
            $nameParNumber = $request->input('nameParNumber');
            $bu1 = $request->input('bu1');
            $bu2 = $request->input('bu2');
            $hora_analista = $request->hora_analista;
            $hora_ipm = $request->hora_ipm;
            $analistaJunior = $request->input('analistaJunior');
            $analistaPleno = $request->input('analistaPleno');
            $analistaSenior = $request->input('analistaSenior');
            $analistaMaster = $request->input('analistaMaster');
            $ipmJunior = $request->input('ipmJunior');
            $ipmPleno = $request->input('ipmPleno');
            $ipmSenior = $request->input('ipmSenior');
            $ipmMaster = $request->input('ipmMaster');
            $fabricante = $request->input('fabricante');
            $grupo = $request->input('grupo');
            $familia = $request->input('familia');
            $tipo = $request->input('tipo');
            $quantity = $request->input('quantity');

            $alocationTeam = [
                'analistaJunior' => $analistaJunior,
                'analistaPleno' => $analistaPleno,
                'analistaSenior' => $analistaSenior,
                'analistaMaster' => $analistaMaster,
                'ipmJunior' => $ipmJunior,
                'ipmPleno' => $ipmPleno,
                'ipmSenior' => $ipmSenior,
                'ipmMaster' => $ipmMaster,
                'hoursAnalista' => $hora_analista,
                'hoursIpm' => $hora_ipm,
            ];

            $valor = $this->setPricePartNumber($alocationTeam);

            $partNumber = new PartNumbers;
            $partNumber->typePartNumber = $typePartNumber;
            $partNumber->nameParNumber = $nameParNumber;
            if ($request->file('sow')->isValid()) {
                if (
                    $request->file('sow')->extension() === 'pdf' ||
                    $request->file('sow')->extension() === 'txt' ||
                    $request->file('sow')->extension() === 'doc' ||
                    $request->file('sow')->extension() === 'docx'
                ) {
                    $request->file('sow')->store('partNumber');
                    $partNumber->sow = $request->file('sow')->store('partNumber');
                } else {
                    return redirect('/formPartNumber')->with('warning', 'Extensão de arquivo inválido!');
                }
            }
            $partNumber->bu1_id = $bu1;
            $partNumber->bu2_id = $bu2;
            $partNumber->hora_analista = $hora_analista;
            $partNumber->hora_ipm = $hora_ipm;
            $partNumber->analistaJunior = $analistaJunior;
            $partNumber->analistaPleno = $analistaPleno;
            $partNumber->analistaSenior = $analistaSenior;
            $partNumber->analistaMaster = $analistaMaster;
            $partNumber->ipmJunior = $ipmJunior;
            $partNumber->ipmPleno = $ipmPleno;
            $partNumber->ipmSenior = $ipmSenior;
            $partNumber->ipmMaster = $ipmMaster;
            $partNumber->manufacturers_id = $fabricante;
            $partNumber->groups_id = $grupo;
            $partNumber->familia_id = $familia;
            $partNumber->type_id = $tipo;
            $partNumber->valor = $valor;
            $email = $username;
            $partNumber->owner = $username;
            $partNumber->save();
            $partNumberMail = PartNumbers::orderBy('created_at', 'desc')->first();

            $idPartNumber = $partNumber->id;

            $i = 0;
            foreach ($request->expenses as $expense) {

                $partnumber_expenses = new partnumber_expenses();

                $partnumber_expenses->part_number_id = $idPartNumber;
                $partnumber_expenses->expense_id = $expense;
                $partnumber_expenses->quantity = $request->quantities[$i];
                $partnumber_expenses->type = $request->type_parnumber[$i];

                $partnumber_expenses->save();

                $i++;
            }

            $mailer->sendEmailRegisterPartNumber($partNumberMail);
            return redirect('partNumbers');
        }
        // return view('PartNumbers.listpartNumbers');
        return redirect('partNumbers');
    }

    public function formPartNumber()
    {

        $grupo = Group::All();
        $familia = Familia::All();
        $fabricantes = Manufacturer::All();
        $tipo = Type::All();
        $bu = Bu::All();

        $grupos = array('grupo' => $grupo);
        $familias = array('familia' => $familia);
        $bus = array('bu' => $bu);
        $tipos = array('tipo' => $tipo);

        return view('PartNumbers.formPartNumbersAdd', compact('fabricantes', 'grupo', 'familia', 'tipo', 'bu'));
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //

    }

    public function updatePN(Request $request, $id)
    {

        //Variável para facilitar os teste fora do ambiente LDAP
        $username = isset(Auth::user()->username) ? Auth::user()->username : 'user.teste';

        $historic = $request->input('historic');
        // dd($request->idExpense);
        $versao = 0; //versao da partnumber
        //pega a partnumber  que esta sendo 'editada'
        $editpartNumber = PartNumbers::find($id);

        //Pegar id origem da cotação
        $idOrigem = null;

        if ($editpartNumber->id_origin > 0) { //Já tem uma versão
            $idOrigem = $editpartNumber->id_origin;
            $versao = PartNumbers::select('version')
                ->where('id_origin', $idOrigem)
                ->orderBy('version', 'desc')
                ->first();

            $versao = $versao->version + 1;
        } elseif ($historic == 'true') {
            $idOrigem = $editpartNumber->id;
            $versao = PartNumbers::select('version')
                ->where('id_origin', $idOrigem)
                ->orderBy('version', 'desc')
                ->first();
            $versao = $versao->version + 1;
        } else { //Ainda é o registro original
            $idOrigem = $editpartNumber->id;
            $versao = 1;
        }

        if (!empty($request->input('DocumentType')) && $request->input('DocumentType') == "IMS") {
            $typePartNumber = $request->input('DocumentType');
            $nameParNumber = $request->input('nameParNumber');
            $servico = $request->input('servico');
            $unidade = $request->input('unidade');
            $modalidade = $request->input('modalidade');
            $horasQuantidade = $request->input('horasQuantidade');
            $bu1 = $request->input('bu1');
            $bu2 = $request->input('bu2');

            //pega a partnumber  que esta sendo 'editada'
            $editpartNumber = PartNumbers::where('id_origin', $id)->orderBy('id', 'desc')->first();
            if (!$editpartNumber) {
                $editpartNumber = PartNumbers::find($id);
            }

            $partNumber = new PartNumbers;

            //A coluna id_origin recebe o ID do registro que está sendo alterado.
            $partNumber->id_origin = $idOrigem;

            // A Coluna versão recebe o valor sequencial para cada versão;
            $partNumber->version = $versao;

            //alterado os status
            $editpartNumber->status = 0;
            $editpartNumber->save();

            $partNumber->typePartNumber = $typePartNumber;
            $partNumber->nameParNumber = $nameParNumber;
            if ($request->file('sow')->isValid()) {
                if (
                    $request->file('sow')->extension() === 'pdf' ||
                    $request->file('sow')->extension() === 'txt' ||
                    $request->file('sow')->extension() === 'doc' ||
                    $request->file('sow')->extension() === 'docx'
                ) {
                    $request->file('sow')->store('partNumber');
                    Storage::delete($partNumber->sow);
                    $partNumber->sow = $request->file('sow')->store('partNumber');
                } else {
                    return back()->with('warning', 'Extensão de arquivo inválido!');
                }
            }
            $partNumber->servico = $servico;
            $partNumber->unidade = $unidade;
            $partNumber->modalidade = $modalidade;
            $partNumber->horasQuantidade = $horasQuantidade;
            $partNumber->bu1_id = $bu1;
            $partNumber->bu2_id = $bu2;
            $email = $username;
            $partNumber->owner = $username;
            $partNumber->save();

            return redirect('/partNumbers');
        } else if (!empty($request->input('DocumentType')) && $request->input('DocumentType') == "ISE") {
            $typePartNumber = $request->input('DocumentType');
            $nameParNumber = $request->input('nameParNumber');
            $bu1 = $request->input('bu1');
            $bu2 = $request->input('bu2');
            $hora_analista = $request->hora_analista;
            $hora_ipm = $request->hora_ipm;
            $analistaJunior = $request->input('analistaJunior');
            $analistaPleno = $request->input('analistaPleno');
            $analistaSenior = $request->input('analistaSenior');
            $analistaMaster = $request->input('analistaMaster');
            $ipmJunior = $request->input('ipmJunior');
            $ipmPleno = $request->input('ipmPleno');
            $ipmSenior = $request->input('ipmSenior');
            $ipmMaster = $request->input('ipmMaster');
            $fabricante = $request->input('fabricante');
            $grupo = $request->input('grupo');
            $familia = $request->input('familia');
            $tipo = $request->input('tipo');
            $quantity = $request->input('quantity');

            $alocationTeam = [
                'analistaJunior' => $analistaJunior,
                'analistaPleno' => $analistaPleno,
                'analistaSenior' => $analistaSenior,
                'analistaMaster' => $analistaMaster,
                'ipmJunior' => $ipmJunior,
                'ipmPleno' => $ipmPleno,
                'ipmSenior' => $ipmSenior,
                'ipmMaster' => $ipmMaster,
                'hoursAnalista' => $hora_analista,
                'hoursIpm' => $hora_ipm,
            ];

            $valor = $this->setPricePartNumber($alocationTeam);

            $partNumber = new PartNumbers;

            //A coluna id_origin recebe o ID do registro que está sendo alterado.
            $partNumber->id_origin = $idOrigem;
            // A Coluna versão recebe o valor sequencial para cada versão;
            $partNumber->version = $versao;

            //alterado os status
            $editpartNumber->status = 0;
            $editpartNumber->save();

            $partNumber->typePartNumber = $typePartNumber;
            $partNumber->nameParNumber = $nameParNumber;

            if (!empty($request->file('sow'))) {

                if ($request->file('sow')->isValid()) {
                    if (
                        $request->file('sow')->extension() === 'pdf' ||
                        $request->file('sow')->extension() === 'txt' ||
                        $request->file('sow')->extension() === 'doc' ||
                        $request->file('sow')->extension() === 'docx'
                    ) {
                        $request->file('sow')->store('partNumber');
                        Storage::delete($partNumber->sow);
                        $partNumber->sow = $request->file('sow')->store('partNumber');
                    } else {
                        return back()->with('warning', 'Extensão de arquivo inválido!');
                    }
                }
            } else {
                $partNumber->sow = '';
            }

            $partNumber->bu1_id = $bu1;
            $partNumber->bu2_id = $bu2;
            $partNumber->hora_analista = $hora_analista;
            $partNumber->hora_ipm = $hora_ipm;
            $partNumber->analistaJunior = $analistaJunior;
            $partNumber->analistaPleno = $analistaPleno;
            $partNumber->analistaSenior = $analistaSenior;
            $partNumber->analistaMaster = $analistaMaster;
            $partNumber->ipmJunior = $ipmJunior;
            $partNumber->ipmPleno = $ipmPleno;
            $partNumber->ipmSenior = $ipmSenior;
            $partNumber->ipmMaster = $ipmMaster;
            $partNumber->manufacturers_id = $fabricante;
            $partNumber->groups_id = $grupo;
            $partNumber->familia_id = $familia;
            $partNumber->type_id = $tipo;
            $partNumber->valor = $valor;
            $email = $username;
            $partNumber->owner = $username;
            $partNumber->save();

            $idPartNumber = $partNumber->id;

            $partnumber_expenses_find = partnumber_expenses::where('part_number_id', $idPartNumber);
            if ($partnumber_expenses_find) {
                $partnumber_expenses_find->delete();
            }

            $i = 0;

            if (!empty($request->expenses)) {

                foreach ($request->expenses as $expense) {

                    $partnumber_expenses = new partnumber_expenses();

                    $partnumber_expenses->part_number_id = $idPartNumber;
                    $partnumber_expenses->expense_id = $expense;
                    $partnumber_expenses->quantity = $request->quantities[$i];
                    $partnumber_expenses->save();

                    $i++;
                }
            }

            return redirect('/partNumbers');
        }
    }

    public function edit($id, $edit = false, Request $request)
    {

        $result = PartNumbers::find($id);
        $grupo = Group::All();
        $familia = Familia::All();
        $fabricante = Manufacturer::All();
        $tipo = Type::All();
        $bu = Bu::All();
        $all = partnumber_expenses::All();
        $allCategory = expensesCategory::All();

        $fabricantes = array('fabricante' => $fabricante);
        $grupos = array('grupo' => $grupo);
        $familias = array('familia' => $familia);
        $bus = array('bu' => $bu);
        $tipos = array('tipo' => $tipo);
        $Expenses = array('all' => $all);
        $Category = array('allCategory' => $allCategory);

        $array = array('result' => $result);
        return view('PartNumbers.formPartNumbersEdit', compact(
            'result',
            'fabricante',
            'grupo',
            'familia',
            'tipo',
            'bu',
            'all',
            'allCategory'
        ));
    }

    public function update($id)
    {
        $partNumber = PartNumbers::find($id);

        if ($partNumber && $partNumber->status === 1) {
            $partNumber->status = 0;
            $partNumber->save();
            return redirect('partNumbers');
        } else if ($partNumber && $partNumber->status === 0) {
            $partNumber->status = 1;
            $partNumber->save();
            return redirect('partNumbers');
        }
    }

    public function destroy($id)
    {
        //
    }

    public function listPartNumberInQuote(Request $request)
    {
        // $result = PartNumbers::all();
        $result = PartNumbers::where('status', 1)
            ->where(function ($query) use ($request) {
                $query->where('nameParNumber', 'LIKE', '%' . $request->input('nameParNumber') . '%')
                    ->orWhere('sow', 'LIKE', '%' . $request->input('nameParNumber') . '%')
                    ->orWhere('valor', 'LIKE', '%' . $request->input('nameParNumber') . '%');
            })
            ->get();

        return $result;
    }

    public function seachPartNumberInQuote($id)
    {
        $partnumbers = PartNumbers::find($id);
        // $partnumbers = PartNumbers::select('part_number.*')
        // ->join('partnumber_expenses', 'partnumber_expenses.part_number_id', '=', 'part_number.id')
        // ->where('part_number.id', $id)->get();

        return response()->json($partnumbers, 200);
    }

    public function setPricePartNumber($alocationTeam)
    {

        //Custo por hora
        $costHour_AnalistJunior = OperationalCost::select('cost_hour')->where('type', 'ANL')->where('level', 'J')->get();
        $costHour_AnalistPleno = OperationalCost::select('cost_hour')->where('type', 'ANL')->where('level', 'P')->get();
        $costHour_AnalistSenior = OperationalCost::select('cost_hour')->where('type', 'ANL')->where('level', 'S')->get();
        $costHour_AnalistMaster = OperationalCost::select('cost_hour')->where('type', 'ANL')->where('level', 'M')->get();

        $costHour_IpmJunior = OperationalCost::select('cost_hour')->where('type', 'IPM')->where('level', 'J')->get();
        $costHour_IpmPleno = OperationalCost::select('cost_hour')->where('type', 'IPM')->where('level', 'P')->get();
        $costHour_IpmSenior = OperationalCost::select('cost_hour')->where('type', 'IPM')->where('level', 'S')->get();
        $costHour_IpmMaster = OperationalCost::select('cost_hour')->where('type', 'IPM')->where('level', 'M')->get();

        //Alocação por hora no projeto
        $alc_pm_AnalistJunior = ($alocationTeam['hoursAnalista'] / 100) * $alocationTeam['analistaJunior'];
        $alc_pm_AnalistPleno = ($alocationTeam['hoursAnalista'] / 100) * $alocationTeam['analistaPleno'];
        $alc_pm_AnalistSenior = ($alocationTeam['hoursAnalista'] / 100) * $alocationTeam['analistaSenior'];
        $alc_pm_AnalistMaster = ($alocationTeam['hoursAnalista'] / 100) * $alocationTeam['analistaMaster'];

        $alc_pm_IpmJunior = ($alocationTeam['hoursIpm'] / 100) * $alocationTeam['ipmJunior'];
        $alc_pm_IpmPleno = ($alocationTeam['hoursIpm'] / 100) * $alocationTeam['ipmPleno'];
        $alc_pm_IpmSenior = ($alocationTeam['hoursIpm'] / 100) * $alocationTeam['ipmSenior'];
        $alc_pm_IpmMaster = ($alocationTeam['hoursIpm'] / 100) * $alocationTeam['ipmMaster'];

        //Custo de atuanção no projeto
        $cost_AnalistJunior = $costHour_AnalistJunior[0]->cost_hour * $alc_pm_AnalistJunior;
        $cost_AnalistPleno = $costHour_AnalistPleno[0]->cost_hour * $alc_pm_AnalistPleno;
        $cost_AnalistSenior = $costHour_AnalistSenior[0]->cost_hour * $alc_pm_AnalistSenior;
        $cost_AnalistMaster = $costHour_AnalistMaster[0]->cost_hour * $alc_pm_AnalistMaster;

        $cost_IpmJunior = $costHour_IpmJunior[0]->cost_hour * $alc_pm_IpmJunior;
        $cost_IpmPleno = $costHour_IpmPleno[0]->cost_hour * $alc_pm_IpmPleno;
        $cost_IpmSenior = $costHour_IpmSenior[0]->cost_hour * $alc_pm_IpmSenior;
        $cost_IpmMaster = $costHour_IpmMaster[0]->cost_hour * $alc_pm_IpmMaster;

        //Custo IPM e Analistas
        $cost_analists = $cost_AnalistJunior + $cost_AnalistPleno + $cost_AnalistSenior + $cost_AnalistMaster;
        $cost_ipms = $cost_IpmJunior + $cost_IpmPleno + $cost_IpmSenior + $cost_IpmMaster;

        //Custo PartNumber
        $cost_partNumber = $cost_analists + $cost_ipms;

        return ($cost_partNumber);
        // OperationalCost
    }

    public function listExpensesCategory()
    {
        $all = expensesCategory::All();
        return $all;
    }

    public function seachExpenseCategory($id)
    {
        $partnumbers = expensesCategory::find($id);
        return response()->json($partnumbers, 200);
    }

    public function deleteExpenseCategory($id)
    {
        partnumber_expenses::find($id)->delete();
        return back();
    }

    public function downloadFile($id)
    {
        $dl = PartNumbers::find($id);
        // return Storage::download($dl->sow, $dl->nameParNumber);
        return Storage::download('partNumber/' . $dl->sow);
    }

    public function addExpenseAllPn()
    {

        $listPN = PartNumbers::all();

        foreach ($listPN as $pn) {

            // $PNE = new partnumber_expenses();
            // $PNE->part_number_id = $pn->id;
            // $PNE->expense_id = 2;
            // $PNE->type = 'anl';
            // $PNE->quantity = $pn->hora_analista / 8;
            // $PNE->save();

            $PNE = new partnumber_expenses();
            $PNE->part_number_id = $pn->id;
            $PNE->expense_id = 2;
            $PNE->type = 'ipm';
            $PNE->quantity = $pn->hora_analista / 24;
            $PNE->save();

            $PNE->part_number_id = $pn->id;
            $PNE->expense_id = 8;
            $PNE->type = 'anl';
            $PNE->quantity = 2;
            $PNE->save();

            $PNE->part_number_id = $pn->id;
            $PNE->expense_id = 8;
            $PNE->type = 'ipm';
            $PNE->quantity = 2;
            $PNE->save();
        }

        return ('despesas cadastradas');
    }

    public function fixPrice()
    {

        $listPN = PartNumbers::all();

        foreach ($listPN as $pn) {

            $alocationTeam = [
                'analistaJunior' => $pn->analistaJunior,
                'analistaPleno' => $pn->analistaPleno,
                'analistaSenior' => $pn->analistaSenior,
                'analistaMaster' => $pn->analistaMaster,
                'ipmJunior' => $pn->ipmJunior,
                'ipmPleno' => $pn->ipmPleno,
                'ipmSenior' => $pn->ipmSenior,
                'ipmMaster' => $pn->ipmMaster,
                'hoursAnalista' => $pn->hora_analista,
                'hoursIpm' => $pn->hora_ipm,
            ];

            $valor = $this->setPricePartNumber($alocationTeam);

            $updatePN = PartNumbers::find($pn->id);
            $updatePN->valor = $valor;
            $updatePN->save();
        }

        return ('Partnumbers atualizados');
    }

    public function historic($id)
    {
        $result = PartNumbers::select('*')
            ->where('id', $id)
            ->orWhere('id_origin', $id)
            ->get();
        return view(
            'PartNumbers.PartNumberHistoric',
            compact(
                'result',
            )
        );
    }

    public function historicedit($id)
    {

        $PartNumber = PartNumbers::select('*')
            ->join('groups as g', 'part_number.groups_id', 'g.id')
            ->join('familia as f', 'part_number.familia_id', 'f.id')
            ->join('manufacturers as m', 'part_number.manufacturers_id', 'm.id')
            // ->join('type as t', 'Partnumbers.type_id', 't.id')
            ->where('part_number.id', $id)
            ->get();

        // dd($PartNumber);

        $result = PartNumbers::find($id);
        $grupo = Group::All();
        $familia = Familia::All();
        $fabricante = Manufacturer::All();
        $tipo = Type::All();
        $bu = Bu::All();
        $all = partnumber_expenses::All();
        $allCategory = expensesCategory::All();

        $fabricantes = array('fabricante' => $fabricante);
        $grupos = array('grupo' => $grupo);
        $familias = array('familia' => $familia);
        $bus = array('bu' => $bu);
        $tipos = array('tipo' => $tipo);
        $Expenses = array('all' => $all);
        $Category = array('allCategory' => $allCategory);

        $historic = true;

        $array = array('result' => $result);
        return view('PartNumbers.formPartNumbersEdit', compact(
            'result',
            'fabricante',
            'grupo',
            'familia',
            'tipo',
            'bu',
            'all',
            'allCategory',
            'historic'
        ));
    }

    public function pdf($id)
    {
        $partnumber = PartNumbers::find($id);

        PDF::setOptions(['isRemoteEnabled', true]);

        $pdf = PDF::loadView('PartNumbers.pdf', ['partnumber' => $partnumber], compact('partnumber'));

        if ($partnumber->updated_sow === 0) {
            $partnumber->updated_sow = 1;
            $partnumber->sow = $partnumber->nameParNumber . "-" . $partnumber->id . '.pdf';
            $partnumber->update();

            $content = $pdf->download()->getOriginalContent();

            Storage::put('partNumber/' . $partnumber->nameParNumber . "-" . $partnumber->id . '.pdf', $content);

            return $pdf->download($partnumber->nameParNumber . "-" . $partnumber->id . '.pdf');
        } else {
            return Storage::download('partNumber/' . $partnumber->sow);
        }
    }
}
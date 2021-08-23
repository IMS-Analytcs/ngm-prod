<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BU;
use App\Models\Type_bu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allBu = DB::table('bus')
            ->join('type_bu', 'bus.type_id', '=', 'type_bu.id') //primeira tabela: base ; qual tabela e qual condição;
            ->select('bus.*', 'type_bu.type') // retorna todas as colunas da tabela bu ;
            ->get();
        $allBuType = Type_bu::select('*')->get();
        return view('BU.bus', compact('allBu', 'allBuType'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

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
    public function edit($id)
    {
        $bu = Bu::find($id);

        if ($bu && $bu->ativo === 1) {
            $bu->ativo = 0;
            $bu->save();
            return redirect('BUs');
        } else if ($bu && $bu->ativo === 0) {
            $bu->ativo = 1;
            $bu->save();
            return redirect('BUs');
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $nameBu = $request->nameBu;
        $type = $request->type;
        $description = $request->description;

        $bu = Bu::find($id);

        $bu->name = $nameBu;
        $bu->description = $description;
        $bu->type_id = $type;
        $bu->save();

        return redirect('BUs');

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

    public function store(Request $request)
    {
        $bu = new BU();
        $bu->name = $request->nameBu;
        $bu->description = $request->description;
        $bu->type_id = $request->type;
        $bu->ativo = true;
        $bu->save();
        return redirect('BUs');
    }
}

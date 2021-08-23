<?php

namespace App\Http\Controllers;

use App\Models\Manufacturer;
use App\Models\TypeManufacturer;
use Illuminate\Http\Request;

class FabricanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $allfabricantes = Manufacturer::All();
        $tiposFabricante = TypeManufacturer::select('*')->get();

        return view('Fabricante.listarFabricante', compact('allfabricantes', 'tiposFabricante'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fabri = new Manufacturer($request->all());
        $this->validate($request, $fabri->rules());

        if ($request->has('name')) {
            $fabri->save();
            return redirect('/Fabricante');
        }

        return view('Fabricante.listarFabricante');
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
    public function edit(Request $request, $id)
    {
        if ($request->has('name')) {

            $fabricante = Manufacturer::find($id);
            $fabricante->name = $request->input('name');
            $fabricante->typemanufacturer_id = $request->input('typemanufacturer_id');
            $fabricante->abbreviation = $request->input('abbreviation');
            $fabricante->partnership_level = $request->input('partnership_level');
            $fabricante->detailing = $request->input('detailing');
            $fabricante->contract_start = $request->input('contract_start');
            $fabricante->contract_end = $request->input('contract_end');
            $fabricante->save();

            return redirect('/Fabricante');
        }
        $result = Manufacturer::find($id);
        $array = array('result' => $result);
        return view('Fabricante.listarFabricante', $array);
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

        $fabricante = Manufacturer::find($id);

        if ($fabricante && $fabricante->active === 1) {
            $fabricante->active = 0;
            $fabricante->save();
            return redirect('/Fabricante');
        } else if ($fabricante && $fabricante->active === 0) {
            $fabricante->active = 1;
            $fabricante->save();
            return redirect('/Fabricante');
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

    public function getipofabricante()
    {
        $tipofabricante = TypeManufacturer::all();
        // var_dump($tipofabricante);
        return response()->json($tipofabricante, 200);
    }

    public function getfabricante()
    {
        $fabricante = Manufacturer::all();
        // var_dump($tipofabricante);
        return response()->json($fabricante, 200);
    }
}

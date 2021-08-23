<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Familia;
use App\Models\Group;
use App\Models\Manufacturer;
use Illuminate\Http\Request;

class FamiliaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allFamilia = Familia::join('manufacturers as m', 'm.id', '=', 'familia.manufecturer_id')
            ->join('groups as g', 'g.id', '=', 'familia.group_id')
            ->select('familia.name as familia', 'familia.id as idFamilia', 'familia.status as status', 'm.id as idManufecturer', 'm.name as Manufecturer', 'g.id as idGroup', 'g.name as Group')
            ->get();

        $allFabricantes = Manufacturer::select('id', 'name')->where('active', true)->get();
        $allGroups = Group::select('id', 'name')->where('active', true)->get();

        return view('Familia.familia', compact('allFamilia', 'allFabricantes', 'allGroups'));
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
        $Family = new Familia();
        $Family->name = $request->name;
        $Family->manufecturer_id = $request->manufecturer;
        $Family->group_id = $request->group;
        $Family->save();

        return redirect('/Familia');
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
        //
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
        $familia = Familia::find($id);

        if ($familia && $familia->status === 1) {
            $familia->status = 0;
            $familia->save();
            return redirect('Familia');
        } else if ($familia && $familia->status === 0) {
            $familia->status = 1;
            $familia->save();
            return redirect('Familia');
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
}
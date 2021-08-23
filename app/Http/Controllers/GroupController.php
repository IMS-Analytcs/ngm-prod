<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allgrupos = Group::All();
        return view('Grupos.listaGrupos', compact('allgrupos'));
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
        $grupo = new Group($request->all());
        $this->validate($request, $grupo->rules());

        if ($request->has('name')) {
            $grupo->save();
            return redirect('/groups');
        }

        return view('Grupos.listaGrupos');
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

            $grupo = Group::find($id);
            $grupo->name = $request->input('name');
            $grupo->manufacturer_id = $request->input('manufacturer_id');
            $grupo->description = $request->input('description');
            $grupo->save();

            return redirect('/groups');
        }
        $result = Group::find($id);
        $array = array('result' => $result);
        return view('Grupos.listaGrupos', $array);
    }

    public function update(Request $request, $id)
    {
        $grupo = Group::find($id);

        if ($grupo && $grupo->active === 1) {
            $grupo->active = 0;
            $grupo->save();
            return redirect('/groups');
        } else if ($grupo && $grupo->active === 0) {
            $grupo->active = 1;
            $grupo->save();
            return redirect('/groups');
        }
    }

    public function destroy($id)
    {
        //
    }
}
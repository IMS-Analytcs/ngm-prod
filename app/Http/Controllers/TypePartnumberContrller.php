<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\typePartnumber;


class TypePartnumberContrller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listTypesPartNumbers = typePartnumber::select('*')->get();

        return view('TypePartnumber.typePartnumber', compact('listTypesPartNumbers'));
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

        $type = $request->type;
        $description = $request->description;

        $TypePartnumber = new typePartnumber();

        $TypePartnumber->type = $type;
        $TypePartnumber->description = $description;
        $result = $TypePartnumber->save();

        if ($result) {

            return redirect('/PartnumberType');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      
        $TypePartnumber = typePartnumber::find($id);
        
        if($TypePartnumber->status){
            $TypePartnumber->status = false;
        } else {
            $TypePartnumber->status = true;
        }
        
        $result = $TypePartnumber->save();

        if ($result) {
            return redirect('/PartnumberType');
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
        $type = $request->type;
        $description = $request->description;

        $TypePartnumber = typePartnumber::find($id);
        

        $TypePartnumber->type = $type;
        $TypePartnumber->description = $description;
        $result = $TypePartnumber->save();

        if ($result) {
            return redirect('/PartnumberType');
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

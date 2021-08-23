<?php

namespace App\Http\Controllers;

use App\Models\PartNumbers;
use App\Models\PSC;
use App\Models\Quote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Ldap\User;
// use App\Models\User;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // TESTES PARA PEGAR O GRUPO
        // $users = User::all();

        
        
        // return($users);
        // dd(Auth::user());
        // $users->getDn();

        $cotacao_total = Quote::count();

        $cotacao_abertas = Quote::where('status', '!=', 'Aprovado')->count();

        $cotacao_ganhas = Quote::where('status_order', '=', 'Ganho')->count();

        $psc_abertas = PSC::where('status', '!=', 'APROVADO')->count();

        $part_number_total = PartNumbers::select('*')->count();

        $porcentagem_cotacao_ganha = $cotacao_total * $cotacao_abertas / 100;

        $ultimas_cotacoes = Quote::orderBy('created_at', 'desc')->take(3)->get();

        $array_ultimas_cotacoes = array('ultimas_cotacoes' => $ultimas_cotacoes);

        return view(
            'dashboard',
            compact(
                'cotacao_abertas',
                'part_number_total',
                'psc_abertas',
                'porcentagem_cotacao_ganha',
                'cotacao_ganhas',
                'ultimas_cotacoes'
            )
        );
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
        //
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

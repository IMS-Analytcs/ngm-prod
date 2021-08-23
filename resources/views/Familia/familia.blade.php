@extends('adminlte::page')

@section('title', 'Família')

@section('content_header')
<h1 class="font-weight-bold">Família</h1>
@endsection

@section('content')
<button type="button" class="btn btn-danger col-12 font-weight-bold mb-4" data-toggle="modal" data-target="#myModalAdd">
    Cadastrar Nova Familia
</button>

@include('Familia.modalAdd')


<div class="card">
    <h2 class="card-header">Itens no catálogo</h2>
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table text-center table-striped">
                <thead>
                    <tr>
                        <th>
                            <h5 class="font-weight-bold">Nome da Familia</h5>
                        </th>
                        <th>
                            <h5 class="font-weight-bold">Fabricante</h5>
                        </th>
                        <th>
                            <h5 class="font-weight-bold">Grupo</h5>
                        </th>
                        <th>
                            <h5 class="font-weight-bold">Ativar/ Desativar</h5>
                        </th>
                        <th>
                            <h5 class="font-weight-bold">Editar</h5>
                        </th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($allFamilia as $Familia)
                    <tr class="data-row">
                        <td class="nameFamilia">{{ $Familia->familia}}</td>
                        <td>{{ $Familia->Manufecturer}}</td>
                        <td class="category">{{ $Familia->Group}}</td>
                        <td>

                            @if($Familia->status === 0 )
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input"
                                    id="customSwitchStatus{{ $Familia->idFamilia }}" data-toggle="modal"
                                    data-target="#myModalstatus{{$Familia->idFamilia}}">
                                <label class="custom-control-label"
                                    for="customSwitchStatus{{$Familia->idFamilia}}"></label>
                            </div>
                            @else
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input"
                                    id="customSwitchStatus{{ $Familia->idFamilia }}" checked data-toggle="modal"
                                    data-target="#myModalstatus{{$Familia->idFamilia}}">
                                <label class="custom-control-label"
                                    for="customSwitchStatus{{$Familia->idFamilia}}"></label>
                            </div>
                            @endif

                        </td>
                        <td>
                            <p>
                                <button type="button" class="btn ml-lg-3 mr-lg-4" data-toggle="modal"
                                    data-target="#myModaledit{{$Familia->idFamilia}}"><img src="../img/editar.svg" alt=""
                                        width="24"></button>
                            </p>
                        </td>
                    </tr>
                    @include('Familia.modalEditStatusFamilia')
                    @include('Familia.modalFamilia')
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
@section('js')
<script src="{{ asset('js/script.js') }}"></script>
@stop
@endsection
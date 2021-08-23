@extends('adminlte::page')

@section('title', 'BU´s')

@section('content_header')
<h1 class="font-weight-bold">BU´S</h1>
@endsection

@section('content')


<button type="button" class="btn btn-danger col-12 font-weight-bold mb-4" data-toggle="modal" data-target="#myModal">
    Cadastrar Nova BU
</button>
<div class="modal fade col-sm-12" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Nova BU</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

                <form method="POST" class="form">
                    @csrf

                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label for="nameBu">Nome da BU</label>
                            <input type="text" id="nameBu" name="nameBu" class="form-control"
                                placeholder="Informe o nome">
                        </div>

                        <div class="col-sm-6 form-group">
                            <label for="type">Tipo</label>
                            <select type="text" id="value" name="type" class="form-control"
                                placeholder="Informe o tipo">

                                <option disabled selected>Informe o tipo</option>
                                @foreach ($allBuType as $BuType)
                                <option value="{{ $BuType->id }}">{{ $BuType->type }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label for="description">Descrição</label>
                            <input type="text" id="description" name="description" class="form-control"
                                placeholder="Informe uma descrição">
                        </div>
                    </div>

                    <div class="row justify-content-center mt-6">
                        <button type="submit" class="btn btn-danger font-weight-bold col-7">Cadastrar BU</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>


<!-- Listagem de Despesas -->

<div class="card">
    <h2 class="card-header">Itens no catálogo</h2>
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table text-center table-striped">
                <thead>
                    <tr>
                        <th>
                            <h5 class="font-weight-bold">Nome da BU</h5>
                        </th>
                        <th>
                            <h5 class="font-weight-bold">Descrição</h5>
                        </th>
                        <th>
                            <h5 class="font-weight-bold">Tipo</h5>
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

                    @foreach ($allBu as $Bu)
                    <tr class="data-row">
                        <td class="nameBu">{{ $Bu->name }}</td>
                        <td>{{ $Bu->description }}</td>
                        <td class="category">{{ $Bu->type }}</td>
                        <td>

                            @if (!$Bu->ativo)
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch{{ $Bu->id }}"
                                    data-toggle="modal" data-target="#myModal{{ $Bu->id }}">
                                <label class="custom-control-label" for="customSwitch{{ $Bu->id }}"></label>
                            </div>

                            @else
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch{{ $Bu->id }}"
                                    checked data-toggle="modal" data-target="#myModal{{ $Bu->id }}">
                                <label class="custom-control-label" for="customSwitch{{ $Bu->id }}"></label>
                            </div>
                            @endif

                        </td>
                        <td>
                            <p>
                                <button type="button" class="btn ml-lg-3 mr-lg-4" data-toggle="modal"
                                    data-target="#myModaledit{{ $Bu->id }}"><img src="../img/editar.svg" alt=""
                                        width="24"></button>
                            </p>
                        </td>
                    </tr>


                    @include('BU.modalEditStatusBU')
                    @include('BU.modalBU')
                    @endforeach
                </tbody>

            </table>

            {{-- <div onClick="reload()" class="modal fade col-xl-12" id="myModaledit1"  tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title" id="myModalLabel">Status da Bu</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

                </div>
            </div>
        </div>
    </div>
</div> --}}

        </div>
    </div>
</div>
</div>

@section('js')
<script src="{{ asset('js/script.js') }}"></script>
@stop
@endsection
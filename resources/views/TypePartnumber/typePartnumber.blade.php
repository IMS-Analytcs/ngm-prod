@extends('adminlte::page')

@section('title', 'BU´s')

@section('content_header')
    <h1 class="font-weight-bold">PartNumbers</h1>
@endsection

@section('content')


    <button type="button" class="btn btn-danger col-12 font-weight-bold mb-4" data-toggle="modal" data-target="#myModal">
        Cadastrar Novo tipo de PartNumber
    </button>
    <div class="modal fade col-sm-12" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Novo Tipo PartNumber</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">

                    <form method="POST" class="form">
                        @csrf

                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="type">Tipo</label>
                                <input type="text" id="type" name="type" class="form-control" placeholder="Informe o nome">
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
                            <button type="submit" class="btn btn-danger font-weight-bold col-7">Cadastrar tipo partNumber</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>


    <!-- Listagem de Despesas -->

    <div class="card">
        <h2 class="card-header">Tipos de PartNumber</h2>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table text-center table-striped">
                    <thead>
                        <tr>
                        <th>
                                <h5 class="font-weight-bold">Nome</h5>
                            </th>
                            <th>
                                <h5 class="font-weight-bold">Tipo</h5>
                            </th>
                            <th>
                                <h5 class="font-weight-bold">Descrição</h5>
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

                        @if (isset($listTypesPartNumbers))


                            @foreach ($listTypesPartNumbers as $TypePartNumber)
                                <tr class="data-row">
                                    <td class="nameBu">{{ $TypePartNumber->type }}</td>
                                    <td>{{ $TypePartNumber->description }}</td>
                                    <td class="category">{{ $TypePartNumber->description }}</td>
                                    <td>

                                        @if (!$TypePartNumber->status)
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input"
                                                    id="customSwitch{{ $TypePartNumber->id }}" data-toggle="modal"
                                                    data-target="#myModal{{ $TypePartNumber->id }}">
                                                <label class="custom-control-label"
                                                    for="customSwitch{{ $TypePartNumber->id }}"></label>
                                            </div>

                                        @else
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input"
                                                    id="customSwitch{{ $TypePartNumber->id }}" checked data-toggle="modal"
                                                    data-target="#myModal{{ $TypePartNumber->id }}">
                                                <label class="custom-control-label"
                                                    for="customSwitch{{ $TypePartNumber->id }}"></label>
                                            </div>
                                        @endif

                                    </td>
                                    <td>
                                        <p>
                                            <button type="button" class="btn ml-lg-3 mr-lg-4" data-toggle="modal"
                                                data-target="#myModaledit{{ $TypePartNumber->id }}"><img src="../img/editar.svg"
                                                    alt="" width="24"></button>
                                        </p>
                                    </td>
                                </tr>


                                 @include('TypePartnumber.modalEdittTypePartNumbers') 

                            @include('TypePartnumber.modalTypePartNumbers')
                            @endforeach

                        @endif
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

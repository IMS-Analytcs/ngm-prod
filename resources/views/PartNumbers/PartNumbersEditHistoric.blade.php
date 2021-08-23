@extends('adminlte::page')

@section('title', 'PartNumbers')


@section('content')
@if(session('warning'))
<div class="alert alert-danger alert-dismissible fade show text-center col-sm-12" role="alert">
    <h4 class="font-weight-bold">{{session('warning')}}</h4>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<div class="card">
    <h2 class="card-header">Visualizar PartNumber</h2>
    <div class="card-body">
        <div class="row h5">
            <div class="col-sm-6">
                <label for="DocumentType" class="mt-1">
                    <span>Tipo PartNumber</span>
                </label>
                <input type="text" value="{{$result->typePartNumber}}" class="form-control" name="DocumentType"
                    id="DocumentType" disabled>
            </div>
            <!-- Inputs PartNumbers - Comuns -->

            <div class="col-sm-6">
                <label for="nameParNumber" class="mt-1">Nome ParNumber</label>
                <input type="text" id="nameparnumber" name="nameParNumber" class="form-control"
                    placeholder="Ex: SV-IPS-VM-HC-ESX" value="{{$result->nameParNumber}}" disabled>
            </div>
            <div class="col-sm-12">
                <label for="sow">SOW:</label>
                <input class="form-control form-control-lg" id="sow" type="file" name="sow" disabled>
                <div class="filedoc">
                    @php
                    //verifica se tem arquivo
                    $hasFile = substr($result->sow,0,11);
                    @endphp

                    @if ($hasFile=="partNumber/")
                    <p><i class="fas fa-file-pdf text-danger mt-2"></i><a
                            href="{{ route('partNumbers.downloadFile',$result->id) }}"> | Baixar</a></p>
                    @endif
                </div>
            </div>
            <!-- Inputs PartNumbers - ISE -->
            {{-- <div  class="col-sm-12">
                            <label for="description" class="mt-1">Descrição:</label>
                            <textarea class="form-control" id="description" name="description"
                                style="resize: none" disabled></textarea>
            </div> --}}
            <!-- Inputs PartNumbers - ISE -->
            @if ($result->typePartNumber === 'IMS')
            <div class="col-sm-6">
                <label for="servico" class="mt-1">Serviço IMS</label>
                <select id="servico" name="servico" class="form-control">
                    @if ($result->servico == 'Serviço1')
                    <option value="Serviço1" selected>Serviço1</option>
                    <option value="Serviço2">Serviço2</option>
                    @endif
                    @if ($result->servico == 'Serviço2')
                    <option value="Serviço1">Serviço1</option>
                    <option value="Serviço2" selected>Serviço2</option>
                    @endif
                </select>
            </div>
            <div class="col-sm-6">
                <label for="unidade" class="mt-1">Unidade de medida</label>
                <select id="unidade" name="unidade" class="form-control">
                    @if ($result->unidade == 'Unidade1')
                    <option value="Unidade1" selected>Unidade1</option>
                    <option value="Unidade2">Unidade2</option>
                    @endif
                    @if ($result->unidade == 'Unidade2')
                    <option value="Unidade1">Unidade1</option>
                    <option value="Unidade2" selected>Unidade2</option>
                    @endif
                </select>
            </div>
            <div class="col-sm-6">
                <label for="modalidade" class="mt-1">Modalidade (ADM, OPE, SUP)</label>
                <select id="modalidade" name="modalidade" class="form-control">
                    @if ($result->modalidade == 'ADM')
                    <option value="ADM" selected>ADM</option>
                    <option value="OPE">OPE</option>
                    <option value="SUP">SUP</option>
                    @endif
                    @if ($result->modalidade == 'OPE')
                    <option value="ADM">AADMDM</option>
                    <option value="OPE" selected>OPE</option>
                    <option value="SUP">SUP</option>
                    @endif
                    @if ($result->modalidade == 'SUP')
                    <option value="ADM">ADM</option>
                    <option value="OPE">OPE</option>
                    <option value="SUP" selected>SUP</option>
                    @endif
                </select>
            </div>
            <div class="col-sm-6">
                <label for="horasQuantidade" class="mt-1">Horas/Quantidade</label>
                <select id="horasQuantidade" name="horasQuantidade" class="form-control">
                    @if ($result->horasQuantidade == 1)
                    <option value="1" selected>1 hora</option>
                    <option value="2">2 hora</option>
                    <option value="3">3 hora</option>
                    @endif
                    @if ($result->horasQuantidade == 2)
                    <option value="1">1 hora</option>
                    <option value="2" selected>2 hora</option>
                    <option value="3">3 hora</option>
                    @endif
                    @if ($result->horasQuantidade == 3)
                    <option value="1">1 hora</option>
                    <option value="2">2 hora</option>
                    <option value="3" selected>3 hora</option>
                    @endif
                </select>
            </div>
            <div class="col-sm-6">
                <label for="bu1" class="mt-1">BU 1</label>
                <select id="bu1" name="bu1" class="form-control">
                    </option>
                    @foreach($bu as $item)
                    @if($result->bu1_id == $item->id)
                    <option value="{{$item->id}}" selected>{{$item->name}}</option>
                    @else
                    <option value="{{$item->id}}">{{$item->name}}</option>
                    @endif
                    @endforeach
                </select>
            </div>
            <div class="col-sm-6">
                <label for="bu2" class="mt-1">BU 2</label>
                <select id="bu2" name="bu2" class="form-control">
                    </option>
                    @foreach($bu as $item)
                    @if($result->bu2_id == $item->id)
                    <option value="{{$item->id}}" selected>{{$item->name}}</option>
                    @else
                    <option value="{{$item->id}}">{{$item->name}}</option>
                    @endif
                    @endforeach
                </select>
            </div>
            @elseif($result->typePartNumber === 'ISE')

            <div class="col-sm-3">
                <label for="fabricante" class="mt-1">Fabricante</label>
                <select id="fabricante" name="fabricante" class="form-control" disabled>
                    @foreach($fabricante as $item)
                    @if($result->manufacturers_id == $item->id)
                    <option value="{{$item->id}}" selected>{{$item->name}}</option>
                    @else
                    <option value="{{$item->id}}">{{$item->name}}</option>
                    @endif
                    @endforeach
                </select>
            </div>

            <div class="col-sm-3">
                <label for="grupo" class="mt-1">Grupo</label>
                <select id="grupo" name="grupo" class="form-control" disabled>
                    @foreach($grupo as $item)
                    @if($result->groups_id == $item->id)
                    <option value="{{$item->id}}" selected>{{$item->name}}</option>
                    @else
                    <option value="{{$item->id}}">{{$item->name}}</option>
                    @endif
                    @endforeach
                </select>
            </div>

            <div class="col-sm-3">
                <label for="familia" class="mt-1">Familia</label>
                <select id="familia" name="familia" class="form-control" disabled>
                    @foreach($familia as $item)
                    @if($result->familia_id == $item->id)
                    <option value="{{$item->id}}" selected>{{$item->name}}</option>
                    @else
                    <option value="{{$item->id}}">{{$item->name}}</option>
                    @endif
                    @endforeach
                </select>
            </div>

            <div class="col-sm-3">
                <label for="tipo" class="mt-1">Tipo</label>
                <select id="tipo" name="tipo" class="form-control" disabled>
                    @foreach($tipo as $item)
                    @if($result->tipo_id == $item->id)
                    <option value="{{$item->id}}" selected>{{$item->name}}</option>
                    @else
                    <option value="{{$item->id}}">{{$item->type}}</option>
                    @endif
                    @endforeach
                </select>
            </div>



            <!-- Inputs PartNumbers - Comuns -->
            <div class="col-sm-6">
                <label for="bu1" class="mt-1">BU 1</label>
                <select id="bu1" name="bu1" class="form-control" disabled>
                    </option>
                    @foreach($bu as $item)
                    @if($result->bu1_id == $item->id)
                    <option value="{{$item->id}}" selected>{{$item->name}}</option>
                    @else
                    <option value="{{$item->id}}">{{$item->name}}</option>
                    @endif
                    @endforeach
                </select>
            </div>
            <div class="col-sm-6">
                <label for="bu2" class="mt-1">BU 2</label>
                <select id="bu2" name="bu2" class="form-control" disabled>
                    </option>
                    @foreach($bu as $item)
                    @if($result->bu2_id == $item->id)
                    <option value="{{$item->id}}" selected>{{$item->name}}</option>
                    @else
                    <option value="{{$item->id}}">{{$item->name}}</option>
                    @endif
                    @endforeach
                </select>
            </div>
            <!-- Inputs PartNumbers - IMS -->
            <div class="col-sm-6">
                <label for="hora_analista" class="mt-1">Hora Analista</label>
                <input type="number" id="hora_analista" name="hora_analista" class="form-control"
                    placeholder="Ex: 100:00" value="{{$result->hora_analista}}" disabled>
            </div>

            <div class="col-sm-6">
                <label for="hora_ipm" class="mt-1">Hora IPM</label>
                <input type="number" id="hora_ipm" name="hora_ipm" class="form-control" placeholder="Ex: 100:00"
                    value="{{$result->hora_ipm}}" disabled>
            </div>

            <div class="col-sm-3">
                <label for="analistaJunior" class="mt-1">
                    Analista Junior(%):
                </label>
                <input type="text" id="analistaJunior" name="analistaJunior" class="form-control"
                    value="{{$result->analistaJunior}}" disabled>
            </div>

            <div class="col-sm-3">
                <label for="analistaPleno" class="mt-1">
                    Analista Pleno(%):
                </label>
                <input type="text" id="analistaPleno" name="analistaPleno" class="form-control"
                    value="{{$result->analistaPleno}}" disabled>
            </div>

            <div class="col-sm-3">
                <label for="analistaSenior" class="mt-1">
                    Analista Senior(%):
                </label>
                <input type="text" id="analistaSenior" name="analistaSenior" class="form-control"
                    value="{{$result->analistaSenior}}" disabled>
            </div>

            <div class="col-sm-3">
                <label for="analistaMaster" class="mt-1">
                    Analista Master(%):
                </label>
                <input type="text" id="analistaMaster" name="analistaMaster" class="form-control"
                    value="{{$result->analistaMaster}}" disabled>
            </div>


            <div class="col-sm-3">
                <label for="ipmJunior" class="mt-1">
                    IPM Junior(%):
                </label>
                <input type="text" id="ipmJunior" name="ipmJunior" class="form-control" value="{{$result->ipmJunior}}"
                    disabled>
            </div>

            <div class="col-sm-3">
                <label for="ipmPleno" class="mt-1">
                    IPM Pleno(%):
                </label>
                <input type="text" id="ipmPleno" name="ipmPleno" class="form-control" value="{{$result->ipmPleno}}"
                    disabled>
            </div>

            <div class="col-sm-3">
                <label for="ipmSenior" class="mt-1">
                    IPM Senior(%):
                </label>
                <input type="text" id="ipmSenior" name="ipmSenior" class="form-control" value="{{$result->ipmSenior}}"
                    disabled>
            </div>

            <div class="col-sm-3">
                <label for="ipmMaster" class="mt-1">
                    IPM Master(%):
                </label>
                <input type="text" id="ipmMaster" name="ipmMaster" class="form-control" value="{{$result->ipmMaster}}"
                    disabled>
            </div>
            <div class="col-sm-12 form-group mt-4" name="tblExpenses">
                <label>Despesas previstas para cotação</label>
                <table class="table table-striped text-center">
                    <thead>
                        <tr>
                            <th scope="col">Despesas</th>
                            <th scope="col">Quantidade</th>
                        </tr>
                    </thead>
                    <tbody id="append-partnumbers">
                        @foreach($all as $item)
                        @if($result->id == $item->part_number_id)
                        <tr id='tr{{$item->id}}'>
                            <td>@foreach($allCategory as $item2)
                                @if($item2->id == $item->expense_id)
                                {{$item2->category}}
                                @endif
                                @endforeach
                            </td>
                            <td>
                                <p id='tipo-quantity_{{$item->id}}'>{{$item->quantity}}</p>
                                <input type='hidden' id='quantities_{{$item->id}}' name='quantities[]'
                                    value='{{$item->quantity}}' class='form-control' />
                            </td>
                            @endif
                            @endforeach
                        </tr>
                </table>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
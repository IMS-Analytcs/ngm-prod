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
    <h2 class="card-header">Nova PartNumber</h2>
    <div class="card-body">

        <form class="form" id="formPN" name="formPN" method="post" action="{{ URL('/partNumbers') }}"
            enctype="multipart/form-data">
            @csrf
            <div class="row h5">
                <div class="col-sm-6" id="DocumentTypeSelect">
                    <label for="DocumentType" class="mt-1">
                        <span>Tipo PartNumber</span>
                    </label>
                    <select id="DocumentType" name="DocumentType" class="form-control">
                        <!-- <option data-tipo="placeholder" selected>IMS ou ISE</option> -->
                        <!-- <option data-tipo="IMS">IMS</option> -->
                        <option data-tipo="ISE">ISE</option>
                    </select>
                </div>
                <!-- Inputs PartNumbers - Comuns -->

                <div id="nameparnumberSelect" class="col-sm-6">
                    <label for="nameParNumber" class="mt-1">Nome ParNumber</label>
                    <input type="text" id="nameparnumber" name="nameParNumber" class="form-control"
                        placeholder="Ex: SV-IPS-VM-HC-ESX">
                </div>
                <!-- Inputs PartNumbers - ISE -->
                {{-- <div id="descriptionSelect" class="col-sm-12">
                            <label for="description" class="mt-1">Descrição:</label>
                            <textarea class="form-control" id="description" name="description"
                                style="resize: none"></textarea>
                        </div> --}}
                <!-- Inputs PartNumbers - ISE -->
                <div id="sowSelect" class="col-sm-12">
                    <label for="sow">SOW:</label>
                    <input class="form-control form-control-lg" id="sow" type="file" name="sow">
                </div>
                <div id="fabricanteSelect" class="col-sm-3">
                    <label for="fabricante" class="mt-1">Fabricante</label>
                    <select id="fabricante" name="fabricante" class="form-control">
                        <option value="">
                            Selecione
                        </option>
                        @foreach ($fabricantes as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div id="grupoSelect" class="col-sm-3">
                    <label for="grupo" class="mt-1">Grupo</label>
                    <select id="grupo" name="grupo" class="form-control">
                        <option value="">
                            Selecione
                        </option>
                        @foreach ($grupo as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div id="familiaSelect" class="col-sm-3">
                    <label for="familia" class="mt-1">Familia</label>
                    <select id="familia" name="familia" class="form-control">
                        <option value="">
                            Selecione
                        </option>
                        @foreach ($familia as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div id="tipoSelect" class="col-sm-3">
                    <label for="tipo" class="mt-1">Tipo</label>
                    <select id="tipo" name="tipo" class="form-control">
                        <option value="">
                            Selecione
                        </option>
                        @foreach ($tipo as $item)
                        <option value="{{ $item->id }}">{{ $item->type }}</option>
                        @endforeach
                    </select>
                </div>



                <!-- Inputs PartNumbers - Comuns -->
                <div id="bu1Select" class="col-sm-6">
                    <label for="bu1" class="mt-1">BU 1</label>
                    <select id="bu1" name="bu1" class="form-control">
                        <option value="">Selecione o serviço
                        </option>
                        @foreach ($bu as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div id="bu2Select" class="col-sm-6">
                    <label for="bu2" class="mt-1">BU 2</label>
                    <select id="bu2" name="bu2" class="form-control">
                        <option value="">Selecione a unidade
                        </option>
                        @foreach ($bu as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>


                <!-- Inputs PartNumbers - IMS -->
                <div id="servicoSelect" class="col-sm-6">
                    <label for="servico" class="mt-1">Serviço IMS</label>
                    <select id="servico" name="servico" class="form-control">
                        <option value="">Selecione o serviço</option>
                        <option value="Serviço1">Serviço1</option>
                        <option value="Serviço2">Serviço2</option>
                    </select>
                </div>

                <div id="unidadeSelect" class="col-sm-6">
                    <label for="unidade" class="mt-1">Unidade de medida</label>
                    <select id="unidade" name="unidade" class="form-control">
                        <option value="">Selecione a unidade</option>
                        <option value="Unidade1">Unidade1</option>
                        <option value="Unidade2">Unidade2</option>
                    </select>
                </div>

                <div id="modalidadeSelect" class="col-sm-6">
                    <label for="modalidade" class="mt-1">Modalidade (ADM, OPE, SUP)</label>
                    <select id="modalidade" name="modalidade" class="form-control">
                        <option value="">Selecione o serviço
                        </option>
                        <option value="ADM">ADM</option>
                        <option value="OPE">OPE</option>
                        <option value="OPE">SUP</option>
                    </select>
                </div>

                <div id="horasQuantidadeSelect" class="col-sm-6">
                    <label for="horasQuantidade" class="mt-1">Horas/Quantidade</label>
                    <select id="horasQuantidade" name="horasQuantidade" class="form-control">
                        <option value="">Selecione a unidade
                        </option>
                        <option value="1">1 hora</option>
                        <option value="2">2 hora</option>
                        <option value="3">3 hora</option>
                    </select>
                </div>



                <div id="horaSelect" class="col-sm-6">
                    <label for="hora_analista" class="mt-1">Hora Analista</label>
                    <input type="number" id="hora_analista" name="hora_analista" class="form-control"
                        placeholder="Ex: 100:00">
                </div>

                <div id="horaSelectIpm" class="col-sm-6">
                    <label for="hora_ipm" class="mt-1">Hora IPM</label>
                    <input type="number" id="hora_ipm" name="hora_ipm" class="form-control" placeholder="Ex: 100:00">
                </div>

                <div id="analistaJuniorSelect" class="col-sm-3">
                    <label for="analistaJunior" class="mt-1">
                        Analista Junior(%):
                    </label>
                    <input type="text" id="analistaJunior" name="analistaJunior" class="form-control">
                </div>

                <div id="analistaPlenoSelect" class="col-sm-3">
                    <label for="analistaPleno" class="mt-1">
                        Analista Pleno(%):
                    </label>
                    <input type="text" id="analistaPleno" name="analistaPleno" class="form-control">
                </div>

                <div id="analistaSeniorSelect" class="col-sm-3">
                    <label for="analistaSenior" class="mt-1">
                        Analista Senior(%):
                    </label>
                    <input type="text" id="analistaSenior" name="analistaSenior" class="form-control">
                </div>

                <div id="analistaMasterSelect" class="col-sm-3">
                    <label for="analistaMaster" class="mt-1">
                        Analista Master(%):
                    </label>
                    <input type="text" id="analistaMaster" name="analistaMaster" class="form-control">
                </div>


                <div id="ipmJuniorSelect" class="col-sm-3">
                    <label for="ipmJunior" class="mt-1">
                        IPM Junior(%):
                    </label>
                    <input type="text" id="ipmJunior" name="ipmJunior" class="form-control">
                </div>

                <div id="ipmPlenoSelect" class="col-sm-3">
                    <label for="ipmPleno" class="mt-1">
                        IPM Pleno(%):
                    </label>
                    <input type="text" id="ipmPleno" name="ipmPleno" class="form-control">
                </div>

                <div id="ipmSeniorSelect" class="col-sm-3">
                    <label for="ipmSenior" class="mt-1">
                        IPM Senior(%):
                    </label>
                    <input type="text" id="ipmSenior" name="ipmSenior" class="form-control">
                </div>

                <div id="ipmMasterSelect" class="col-sm-3">
                    <label for="ipmMaster" class="mt-1">
                        IPM Master(%):
                    </label>
                    <input type="text" id="ipmMaster" name="ipmMaster" class="form-control">
                </div>

                <div class="col-sm-12 form-group mt-3" id="inptExpenses" name="inptExpenses">
                    <label for="partNumber">Despesas Previstas</label>
                    <select class="form-control itemdataedit" id="partNumber" name="partNumber"
                        style="width:100%;"></select>
                    <a href="#" data-toggle="modal" data-target="#myModalCategory">
                        <p class="text-right">Ver lista completa</p>
                    </a>
                </div>

                <div class="col-sm-12 form-group" id="tblExpenses" name="tblExpenses">
                    <label>Despesas previstas para cotação</label>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Despesas</th>
                                <th scope="col">Tipo</th>
                                <th scope="col">Quantidade</th>
                                <th scope="col">Ação</th>
                            </tr>
                        </thead>
                        <tbody id="append-partnumbers">
                            {{-- Carrega com javascript --}}
                    </table>
                    <input type="hidden" value="0" id="qtdExpenses" name="qtdExpenses" />
                </div>
            </div>
            <div id="buttonSelect" class="row justify-content-center mt-4">
                <button type="submit" id="btn_cadastrar" class="btn btn-danger font-weight-bold col-7">
                    CADASTAR PARTNUMBER
                </button>
            </div>
        </form>



    </div>
</div>
@include('PartNumbers.modalExpensesCategoryListFull')
@endsection

@section('js')


<script src="{{ asset('js/script.js') }}"></script>
<!-- <script>
    $("#formPN").submit(function(event) {

    var analistaJunior = parseInt($("#analistaJunior").val());
    var analistaPleno = parseInt($("#analistaPleno").val());
    var analistaSenior = parseInt($("#analistaSenior").val());
    var analistaMaster = parseInt($("#analistaMaster").val());

    var ipmJunior = parseInt($("#ipmJunior").val());
    var ipmPleno = parseInt($("#ipmPleno").val());
    var ipmSenior = parseInt($("#ipmSenior").val());
    var ipmMaster = parseInt($("#ipmMaster").val());

    TotalAnalista = analistaJunior + analistaPleno + analistaSenior + analistaMaster;
    TotalIpm = ipmJunior + ipmPleno + ipmSenior + ipmMaster;


    if ((TotalAnalista == 100) && (TotalIpm == 100)) { //Condição se validação estiver correta



    } else {

        if (TotalAnalista < 100) {
            alert("A Alocação de analistas deve totalizar 100%");
        }

        if (TotalIpm < 100) {
            alert("A Alocação de gestores deve totalizar 100%");
        }

        event.preventDefault();

    }

return;

});
</script> -->



<script>
//envia o token pro content
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

var url = "{{URL('')}}";

//
var arrPartNumbers = [];
var contador = 0;
var contadorDespesas = 0;

$('.itemdataedit').select2({
    placeholder: 'Pesquise pelo Nome',
    minimumInputLength: 2,
    ajax: {
        url: url + '/listExpensesCategory',
        delay: 250,
        type: 'GET',
        data: function(params) {
            return {
                search: params.term,
            };
        },
        processResults: function(data) {
            return {
                results: $.map(data, function(obj) {
                    return {
                        id: obj.id,
                        text: obj.category
                    };
                })
            };
        },
        cache: true
    }

}); //fim do select

function editQuantity1(contador) {


    document.getElementById("clickedit_" + contador).setAttribute("onClick", "javascript: editQuantity2(" +
        contador + ");");
    $('#tipo-quantity_' + contador).hide();
    document.getElementById("quantities_" + contador).setAttribute("type", "number");
    $('#icon-edit_' + contador).removeClass('far fa-edit');
    $('#icon-edit_' + contador).addClass('fas fa-check text-green');
}

function editQuantity2(contador) {


    document.getElementById("clickedit_" + contador).setAttribute("onClick", "javascript: editQuantity1(" +
        contador + ");");

    var input = document.getElementById("quantities_" + contador);
    var text = input.value;
    document.getElementById("tipo-quantity_" + contador).innerHTML = text;
    $('#tipo-quantity_' + contador).show();
    document.getElementById("quantities_" + contador).setAttribute("type", "hidden");
    $('#icon-edit_' + contador).removeClass('fas fa-check text-green');
    $('#icon-edit_' + contador).addClass('far fa-edit');
}

//Dispara quando seleciona no combo qualquer PartNumber
$('.itemdataedit').on('select2:select', function(e) {

    contadorDespesas++;
    var data = e.params.data;
    // console.log(data.id+" cont: "+contador);

    //seta id do partnumber no array
    arrPartNumbers[contador] = data.id;

    $.ajax({
        type: "GET",
        url: url + "/seachExpenseCategory/" + data.id,
        dataType: "json",
        encode: true,
    }).done(function(data) {
        console.log(data);
        $("#append-partnumbers").append(

            "<tr id='tr" + contador + "'>" +
            "<td>" + data.category + "</td>" +
            "<td>" +
            `<select id="type_parnumber_${contador}" name='type_parnumber[]' class="custom-select">
              <option selected>Selecione</option>
              <option value="anl">Analista</option>
              <option value="ipm">IPM</option>
            </select> ` +
            "</td>" +
            "<td><p id='tipo-quantity_" + contador + "'>1</p>" +
            "<input type='hidden' id='quantities_" + contador +
            "' name='quantities[]' value='1'class='form-control'/></td>" +
            "<td>" +
            "<a href='#tipo-quantity' id='clickedit_" + contador +
            "' title='Editar' onclick='editQuantity1(" + contador + ");'>" +
            "<i id='icon-edit_" + contador + "' class='far fa-edit' ></i>" +
            "</a>" +
            " <a href='#' title='Deletar' onclick='deletarExpenseCategory(" + contador + "," +
            data
            .id +
            ")'><i class='fas fa-trash-alt  ml-2 text-danger'></i></a>" +
            "<input hidden type='text' value='" + data.id +
            "' id='expenses[]' name='expenses[]' /> " +
            " </td>" +
            "</tr>"
        ); //fim do append
    });

    contador++;


    $("#qtdExpenses").val(contador);

});

function selectPart(id) {

    arrPartNumbers[contador] = id;
    $.ajax({
        type: "GET",
        url: url + "/seachExpenseCategory/" + id,
        dataType: "json",
        encode: true,
    }).done(function(data) {
        console.log("retorno seaach: " + data.nameParNumber);
        $("#append-partnumbers").append(
            "<tr id='tr" + contador + "'>" +
            "<td>" + data.category + "</td>" +
            "<td>" +
            `<select id="type_parnumber_${contador}" name='type_parnumber[]' class="custom-select">
              <option selected>Selecione</option>
              <option value="anl">Analista</option>
              <option value="ipm">IPM</option>
            </select> ` +
            "</td>" +
            "<td><p id='tipo-quantity_" + contador + "'>1</p>" +
            "<input type='hidden' id='quantities_" + contador +
            "' name='quantities[]' value='1' class='form-control'/></td>" +
            "<td>" +
            "<a href='#tipo-quantity' id='clickedit_" + contador +
            "' title='Editar' onclick='editQuantity1(" + contador + ");'>" +
            "<i id='icon-edit' class='far fa-edit' ></i>" +
            "</a>" +
            " <a href='#' title='Deletar' onclick='deletarExpenseCategory(" + contador + "," + data.id +
            ")'><i class='fas fa-trash-alt  ml-2 text-danger'></i></a>" +
            "<input hidden type='text' value='" + data.id +
            "' id='expenses[]' name='expenses[]' /> " +
            " </td>" +
            "</tr>"
        ); //fim do append
    });


    contador++;

    $("#qtdExpenses").val(contador);


    $("#myModalCategory").modal('hide');

}

function deletarExpenseCategory(cont, id) {

    var r = confirm("Certeza que deseja apagar essa Categoria?");
    if (r == true) {
        // alert("Apagado!");

        //Pesquisa e remove um elemento específico por valor
        arrPartNumbers.splice(arrPartNumbers.indexOf(id), 1);
        $("#tr" + cont).remove();
    }
}
</script>
@stop

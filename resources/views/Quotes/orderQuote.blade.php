@extends('adminlte::page')

@section('title', 'Cotações')

@section('content_header')
{{-- <h1>QUOTES</h1> --}}
<style>
.msg-success-cotacao {
    display: none;
}
</style>
@endsection

@section('content')

<div class="card">
    <h3 class="card-header"><i class="fas fa-file-invoice-dollar text-danger mr-2"></i>
        @if (!empty($editquotes) && !isset($historic))
        Pedido {{$editquotes->id}}
        @elseif(isset($historic))
        Historico da Cotação
        @else
        CADASTRAR COTAÇÃO
        @endif
    </h3>
    <div class="card-body">
        <div class="btn btn-success msg-success-cotacao" style="min-width: 120px">Cotação criada com sucesso!</div>
        @if (!empty($editquotes))
        <form method="POST" id="" action="{{ route('updatequote', ['id' => $editquotes->id]) }}">
            @method('PUT')
            @elseif(isset($historic))
            Historico da Cotação
            @else
            <form method="POST" id="" action="{{ route('addquote') }}">
                @endif

                @csrf
                <div class="row">

                    @php
                    $idEstado = !empty($editquotes) ? 'editestado' : 'estado';
                    $idCidade = !empty($editquotes) ? 'editcidade' : 'cidade';
                    @endphp

                    <div class="col-sm-6 form-group">
                        <label id="campo_estado">Estado</label>
                        <select required id="<?=$idEstado?>" name="state" class="stateexpenses form-control" disabled>
                        </select>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label id="campo_cidade">Município</label>
                        <select required disabled id="<?=$idCidade?>" name="cidade" onchange="getCidadExpenses(this)" class="cityexpenses form-control"
                            name="city"></select>
                    </div>


                    <div class="col-sm-4 form-group">
                        <label id="campo_cidade">Deal</label>
                        <input required type="text" class="form-control" id="lead" disabled name="lead"
                            placeholder="Identificação Deal"
                            value="@if (!empty($editquotes)) {{ $editquotes->lead }} @endif">
                    </div>

                    <div class="col-sm-4 form-group">
                        <label id="campo_cidade">Cliente</label>
                        <input required type="text" class="form-control" id="client_name" disabled name="client_name"
                            placeholder="Nome do Cliente"
                            value="@if (!empty($editquotes)) {{ $editquotes->client_name }} @endif">
                    </div>


                    <div class="col-sm-4 form-group">
                        <label id="campo_cidade">Account Manager (AM)</label>
                        <input required type="text" class="form-control" id="account_manager" disabled
                            name="account_manager" placeholder="Nome do Colaborador"
                            value="@if (!empty($editquotes)) {{ $editquotes->account_manager }} @endif">
                    </div>

                    <div class="col-md-10 form-group">
                        <label id="campo_cidade">PartNumber</label>
                        <select class="form-control js-data-part-number" disabled id="part_number_id"
                            name="part_number_id"></select>
                        <p class="text-right"> <a href="#" style="color: gray" data-toggle="modal" id="ver_mais"
                                name="ver_mais" data-target="#">Ver lista
                                completa</a>
                        </p>
                    </div>

                    <div class="col-sm-12 form-group">
                        <label>PartNumbers adicionados na cotação</label>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">PartNumbers</th>
                                    <th scope="col">Descrição</th>
                                    <th scope="col">Hora Analista</th>
                                    <th scope="col">Hora IPM</th>
                                    <th scope="col">Quantidade</th>
                                    <th scope="col">Valor</th>
                                    <th scope="col">SubTotal</th>
                                    {{-- <th scope="col">Ação</th> --}}
                                </tr>
                            </thead>
                            <tbody id="append-partnumbers">
                                {{-- CARREGA COM AJAX --}}
                            </tbody>
                        </table>
                    </div>


                    <div class="col-sm-12 form-group">
                        <label>Despesas previstas</label>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">PartNumber</th>
                                    <th scope="col">Despesa</th>
                                    <th scope="col">Recurso</th>
                                    <th scope="col">Quantidade</th>
                                    <th scope="col">Valor Unitário</th>
                                    <th scope="col">Valor Total</th>
                                    {{-- <th scope="col">Ação</th> --}}
                                </tr>
                            </thead>
                            <tbody id="append-expenses">
                                {{-- CARREGA COM AJAX --}}
                            </tbody>
                            <input type="hidden" name="arrExpenses[]" id="arrExpenses">
                        </table>
                    </div>


                    <div class="col-sm-6 form-group">


                        <div> Total da cotação <label>R$ </label> <label for="totl-cot" id="lb_vlr_total"> 0,00</label>
                        </div>

                        <input type="hidden" value="0" id="vlr_total" name="vlr_total">
                    </div>
                    <div class="col-sm-6 form-group text-right">

                        {{-- <a href='#' data-toggle="modal" data-target="#ModalDespesa" onclick='getLocalExpenses()'
                            class="btn btn-danger font-weight-bold pl-5 pr-5">Adicionar Despesa</a> --}}


                    </div>

                </div>
                @if(isset($historic))
                <input type="hidden" value="true" name="historic">
                @endif
                <div class="row justify-content-center mt-4 psc-footer">
                    <div class="col-sm-12 text-center">
                        {{-- <a href="{{route('addquote')}}" class="btn btn-outline-danger font-weight-bold pl-5
                        pr-5">CADASTRAR
                        COTAÇÃO</a> --}}
                        {{-- <button type="submit" class="btn btn-outline-danger font-weight-bold pl-5 pr-5">

                            @if (!empty($editquotes) && !isset($historic))
                            EDITAR COTAÇÃO
                            @elseif(isset($historic))
                            ATIVAR ESTÁ VERSÃO DA COTAÇÃO
                            @else
                            CADASTRAR COTAÇÃO
                            @endif

                        </button>
                        <p>ou</p>
                        <p> <a href="#" class="text-danger">Salvar como rascunho</a></p> --}}
                    </div>
                </div>
            </form>
    </div>
</div>
</div>
@include('Quotes.modalExpenses')
@include('Quotes.modalpartNumbersListFull')
@section('js')



@section('plugins.Select2', true)

<script>
$('.table').DataTable({
    "oLanguage": {
        "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json",
        "sEmptyTable": " ",
    }
});
$('#valueexpenses').maskMoney();
//envia o token pro content
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

//
var arrPartNumbers = [];
var arrExpenses = [];
var contador = 0;
var contatorDespesas = 0;
var idQuote;
var url = "{{ URL('/') }}"

$('.js-data-part-number').select2({
    placeholder: 'Pesquise pelo Nome',
    minimumInputLength: 2,
    ajax: {
        url: url + "/listPartNumbersQuotes",
        delay: 250,
        type: 'POST',
        data: function(params) {
            return {
                nameParNumber: params.term,
            };
        },
        processResults: function(data) {
            return {
                results: $.map(data, function(obj) {
                    return {
                        id: obj.id,
                        text: obj.nameParNumber
                    };
                })
            };

        },

        cache: true
    }

}); //fim do select
$('.js-data-part-number').on('select2:select', function(e) {
    selectPart(e.params.data.id)
});


//deleta o partNumber da lista
function deletarPN(cont, id, valor) {
    console.log(cont, id)


    var r = confirm("Certeza que deseja apagar esse PartNumber?");
    if (r == true) {
        // alert("Apagado!");
        $total = parseFloat($("#vlr_total").val()) - parseFloat(valor);
        $("#vlr_total").val($total);
        $("#lb_vlr_total").html($total);
        //Pesquisa e remove um elemento específico por valor
        arrPartNumbers.splice(arrPartNumbers.indexOf(id), 1);
        $("#tr" + cont).remove();
    }
}

function selectPart(id) {

    arrPartNumbers[contador] = id;
    // alert('add partnumber');

    $.ajax({
        type: "GET",
        url: url + "/seachPartNumberInQuote/" + id,
        dataType: "json",
        encode: true,
    }).done(function(data) {

        // console.log("retorno seaach: " + data);
        // console.log(Object.values(data));

        $total = parseFloat($("#vlr_total").val()) + parseFloat(data.valor);
        $("#vlr_total").val($total);
        $("#lb_vlr_total").html($total);

        $("#append-partnumbers").append(
            "<tr id='tr" + contador + "'>" +
            "<td> <input type='hidden' value='" + data.id +
            "'  id='partNumbers[]' name='partNumbers[]' /> " + data.nameParNumber + "</td>" +
            "<td>" + data.sow + "</td>" +
            "<td>" + data.hora_analista + ":00</td>" +
            "<td>" + data.hora_ipm + ":00</td>" +
            "<td><input type='hidden' name='qtde_partner[]' id='qtde_partner_" + contador +
            "' value='" + contador + "' /> " +
            "<span id='quantidadePartner_" + contador + "'>" + 1 + "</span>" + "</td>" +
            "<td>R$" + "<span id='valorUnitario_" + contador + "'>" + data.valor + "</span>" + "</td>" +
            "<td>R$" + "<span id='totalPartner_" + contador + "'>" + data.valor + "</span>" + "</td>" +
            "<td>" +
            "<a href='#' id='editPartnerNumber_" + contador +
            "' name='editPartnerNumber' onclick='editarPartner(" + contador + ")' title='Editar'>" +
            "" +
            "</a>" +
            " <a href='#' title='Deletar' onclick=''></a>" +
            " </td>" +
            "</tr>"
        ); //fim do append

        getExpenses(data.id);
    });

    contador++;

    $("#myModal").modal('hide');

}

function getExpenses(id) {

    //limpa a lista
    $("#append-expenses").html('');

    var edit = "{{ isset($editquotes) }}"
    console.log("aqui teste: " + edit);

    //console.log("aqui:"{{ $idEstado }});
    if (edit) {
        $estado = $("#editestado").val();
        $cidade = $("#editcidade").val();
    } else {
        $estado = $("#estado").val();
        $cidade = $("#cidade").val();
    }

    $params = '?estado=' + $estado + '&cidade=' + $cidade;

   // console.log(url + "/expenses/partnumber/" + id + $params)


    $.ajax({
        type: "GET",
        url: url + "/expenses/partnumber/" + id + $params,
        dataType: "json",
        encode: true,
    }).done(async function(data) {

        console.log("despesas >> " + data.length);
        console.log(data);
        for (var i = 0; i < data.length; i++) {

            var subtotal_depesa = data[i]['value'] ? parseFloat(data[i]['value']) * data[i]['quantity'] : 0;
            var valor = data[i]['value'] ? 'R$ ' + data[i]['value'] : "Despesa não informada";
            var quantidade = data[i]['quantity'] ? data[i]['quantity'] : 0;

            var total = parseFloat($("#vlr_total").val());
            $("#vlr_total").val(parseFloat(total + subtotal_depesa).toFixed(2));
            $("#lb_vlr_total").html(parseFloat(total + subtotal_depesa).toFixed(2));

            //  $total = parseFloat($("#vlr_total").val()) + parseFloat(total);
            // $("#vlr_total").val($total);
            //$("#lb_vlr_total").html($total);

            // total += data[i]['value'] ? parseFloat(data[i]['value']) * data[i]['quantity'] : 0;
            // $("#vlr_total").val(total);
            // $("#lb_vlr_total").html(total);


            await $("#append-expenses").append(
                "<tr id='tr_" + contatorDespesas + "'>" +
                "<td>" + data[i]['nameParNumber'] + "</td>" +
                "<td><input type='hidden' value='" + data[i]['expense_id'] +
                "' name='idExpense[]' id='idExpense[]' />" + data[i]['category'] + "</td>" +
                "<td>" + data[i]['type'] + "</td>" +
                "<td><input type='hidden' name='qtde_expense[]' id='qtde_expense_" +
                contatorDespesas +
                "' value='" +
                quantidade + "' /> " + "<span id='qtdSubTotal" + contatorDespesas + "' >" +
                quantidade +
                "</span>" + "</td>" +
                "<td id='vlr_expense[]' name='vlr_expense[]' > " + "<span id='vlr_expense_" +
                contatorDespesas + "'>" + valor + "</span>" + "</td>" +
                "<td>R$ " + "<span id='total_" + contatorDespesas + "'>" + subtotal_depesa + "</span>" +
                "</td>" +
                "</tr>"
            );
            arrExpenses[contatorDespesas] = data[i]['expense_id'];
            $("#arrExpenses").val(arrExpenses);
            // alert(data[i]['expense_id'])

            contatorDespesas++;
        }

    });

}

function getCidadExpenses(cidade){

    for (let index = 0; index < contador; index++) {
        getExpenses(arrPartNumbers[index]);
    }
}

//deleta despesa
function deletarDespesa(id, valor) {


    var r = confirm("Certeza que deseja apagar essa Despesas?");
    if (r == true) {


        $total = parseFloat($("#vlr_total").val()) - parseFloat(valor);
        $("#vlr_total").val($total);
        $("#lb_vlr_total").html($total);
        //Pesquisa e remove um elemento específico por valor

        $("#tr_" + id).remove();
    }
}



$('#editquoteform').submit(function(dados) {

    //   console.log(dados);
    console.log("Tamanho do array: " + arrPartNumbers.length);

    var formData = {
        _method: 'PUT',
        partnumbers: arrPartNumbers,
        state: $("#editestado").val(),
        city: $("#editcidade").val(),
        client_name: $("#client_name").val(),
        lead: $("#lead").val(),
        account_manager: $("#account_manager").val()
    };

    $.ajax({
        type: 'POST',
        url: url + "/updatequote/" + idQuote,
        data: formData,
        dataType: "json",
        encode: true,
    }).done(function(data) {

        console.log(data);
        if (data == 'success') {
            $('.msg-success-cotacao').show();
            document.location.reload(true);
        } else {
            $('.msg-erro-cotacao').show();
        }
    });
    dados.preventDefault();


});


//salva no banco
$('#addquoteform').submit(function(dados) {

    //   console.log(dados);
    console.log("Tamanho do array: " + arrPartNumbers.length);

    var formData = {
        partnumbers: arrPartNumbers,
        state: $("#estado").val(),
        client_name: $("#client_name").val(),
        lead: $("#lead").val(),
        account_manager: $("#account_manager").val()
    };

    $.ajax({
        type: "POST",
        url: url + "/addquote",
        data: formData,
        dataType: "json",
        encode: true,
    }).done(function(data) {

        console.log(data);
        if (data == 'success') {
            $('.msg-success-cotacao').show();
        } else {
            $('.msg-erro-cotacao').show();
        }
    });

    dados.preventDefault();

});
</script>




@if (!empty($editquotes))
<script>
//EDIÇÃO
function montaEditUF() {

    $.ajax({
        type: 'POST',
        url: 'http://api.londrinaweb.com.br/PUC/Estados/BR/0/10000',
        contentType: "application/json; charset=utf-8",
        dataType: "jsonp",
        async: true
    }).done(function(response) {
        estados = '';

        estados += "<option disabled>Selecione o estado</option>";
        $.each(response, function(e, estado) {
            selecionado = '';
            uf = "{{ $editquotes->state }}";
            console.log('uf estado: ' + uf);
            if (uf == estado.UF)
                selecionado = 'selected';

            estados += '<option ' + selecionado + ' value="' + estado.UF + '">' + estado.UF +
                '</option>';
        });

        $('#editestado').html(estados);

        montaEditCidade(uf);

        // montaEditCidade($('#editestado').val(), "BR");
        $('#editestado').change(function() {
            montaEditCidade($(this).val());
        });



    });

}

montaEditUF();

function montaEditCidade(estado) {
    $.ajax({
        type: 'POST',
        url: 'http://api.londrinaweb.com.br/PUC/Cidades/' + estado + '/BR/0/10000',
        contentType: "application/json; charset=utf-8",
        dataType: "jsonp",
        async: true
    }).done(function(response) {
        cidades = '';

        cidades += '<option disabled>Selecione a cidade</option>'
        $.each(response, function(c, cidade) {
            selecionado = '';
            city = "{{ $editquotes->city }}";

            if (city == cidade)
                selecionado = 'selected';

            cidades += '<option ' + selecionado + ' value="' + cidade + '">' + cidade + '</option>';

        });
        $('#editcidade').html(cidades);
    });
}

function listEditPartNumber(id) {


    //id do quote
    idQuote = id;

    console.log(url + "/editListPartNumberInQuotes/" + id, )


    var total = parseFloat($("#vlr_total").val());


    $.ajax({
        type: "GET",
        url: url + "/editListPartNumberInQuotes/" + id,
        dataType: "json",
        encode: true,
    }).done(function(data) {
        console.log(data);
        jQuery.each(data, function(index, item) {

            total += item.pivot.quantity * item.pivot.unity_value;
            $("#vlr_total").val(total);
            $("#lb_vlr_total").html(total);

            arrPartNumbers[index] = item.id;

            //     console.log(item.id);
            $("#append-partnumbers").append(
                "<tr id='tr" + index + "'>" +
                "<td>" + item.nameParNumber +
                " <input type='hidden' value='" + item.id +
                "'  id='partNumbers[]' name='partNumbers[]' /> " + data.nameParNumber +
                "</td>" +
                "<td>" + item.sow + "</td>" +
                "<td>" + item.hora_analista + "</td>" +
                "<td>" + item.hora_ipm + "</td>" +
                "<td>" + item.pivot.quantity + "</td>" +
                "<td>" + item.pivot.unity_value + "</td>" +
                "<td>" + item.pivot.quantity * item.pivot.unity_value + "</td>" +
                "</tr>"
            ); //fim do append

            contador++;

            getExpenses(item.id);
        }); //jQuery.each
    });
}




$('.itemdataedit').on('select2:select', function(e) {

    arrPartNumbers[contador] = id;

    $.ajax({
        type: "GET",
        url: url + "/seachPartNumberInQuote/" + id,
        dataType: "json",
        encode: true,
    }).done(function(data) {

        console.log("retorno seaach: " + data);
        console.log(Object.values(data));

        $total = parseFloat($("#vlr_total").val()) + parseFloat(data.valor);
        $("#vlr_total").val($total);
        $("#lb_vlr_total").html($total);

        $("#append-partnumbers").append(
            "<tr id='tr" + contador + "'>" +
            "<td> <input type='hidden' value='" + data.id +
            "'  id='partNumbers[]' name='partNumbers[]' /> " + data.nameParNumber +
            "</td>" +
            "<td>" + data.sow + "</td>" +
            "<td>" + data.hora_analista + ":00</td>" +
            "<td>" + data.hora_ipm + ":00</td>" +
            "<td>1</td>" +
            "<td>R$" + data.valor + "</td>" +
            "<td>R$" + data.valor + "</td>" +
            "<td>" +
            "<a href='#' title='Editar'>" +
            "" +
            "</a>" +
            " <a href='#' title='Deletar' onclick='deletarPN(" + contador + "," + data.id +
            "," + data
            .valor +
            ")'></a>" +
            " </td>" +
            "</tr>"
        ); //fim do append

        getExpenses(data.id);
    });

    contador++;

    $("#myModal").modal('hide');
});


function EditDespesa(idQuote) {

    $.ajax({
        type: "GET",
        url: url + "/getexpensesquote/" + idQuote,
        dataType: "json",
        encode: true,
    }).done(function(data) {


        jQuery.each(data, function(index, item) {

            //  console.log('Lista as despesas aqui.: '+item.nameExpenses);
            var nameExpenses = item.nameExpenses;
            var categoryexpenses = item.category_id;
            // var categoryexpensesName = $("#categoryexpenses option:selected").html();
            var categoryexpensesName = item.categoriadespesa;
            //var recurso = $("#recurso").val();
            var recurso = 'IPM';
            var valueexpenses = item.value;
            var qtdeExpenses = contatorDespesas;
            var subtotal = valueexpenses * qtdeExpenses;


            $total = parseFloat($("#vlr_total").val()) + parseFloat(subtotal);
            $("#vlr_total").val($total);
            $("#lb_vlr_total").html($total);

            $("#append-expenses").append(
                "<tr id='tr_" + contatorDespesas + "'>" +
                "<td><input type='hidden' value='1' name='idExpense[]' id='idExpense[]' />" +
                "Despesa Customizada</td>" +
                "<td>" + recurso + "</td>" +
                "<td> " + categoryexpensesName + "</td>" +
                "<td><input type='hidden' name='qtde_expense[]' id='qtde_expense_" +
                contatorDespesas + "' value='" +
                qtdeExpenses + "' /><p id='lb_qtde" + contatorDespesas + "'> " + qtdeExpenses +
                "</p></td>" +
                "<td id='vlr_expense[]' name='vlr_expense[]' >R$ " + "<span id='vlr_expense_" +
                contatorDespesas + "'>" + valueexpenses + "</span>" + "</td>" +
                "<td> R$ " + "<span id='subtotal_" + contatorDespesas + "'>" + subtotal +
                "</span>" + "</td>" +
                "<td>" +
                "<a href='#' id='editExpenses_" + contatorDespesas +
                "' name='editExpenses' onclick='editarDespesa(" + contatorDespesas +
                ")' title='Editar'>" +
                "<i class='far fa-edit'></i>" +
                "</a>" +
                " <a href='#' title='Deletar' onclick='deletarDespesa(" + contatorDespesas +
                "," +
                subtotal +
                ")'><i class='fas fa-trash-alt  ml-2 text-danger'></i></a>" +
                " </td>" +
                "</tr>" +

                "</tr>"
            );

            contatorDespesas++;

        });

    }).fail(function(data) {
        console.log(data);
    });
}


// EditDespesa('{{ $editquotes->id }}');
listEditPartNumber('{{ $editquotes->id }}');

$('#lead').prop('disabled', true)
$('#client_name').prop('disabled', true)
$('#account_manager').prop('disabled', true)
$('#part_number_id').prop('disabled', true)
$('#ver_mais').attr('data-target', '')
$('#ver_mais').removeAttr('style')
</script>


@endif

<script>
$("#addDespesa").click(function() {

    var nameExpenses = $("#nameExpenses").val();
    var categoryexpenses = $("#categoryexpenses").val();
    var categoryexpensesName = $("#categoryexpenses option:selected").html();
    var recurso = $("#recurso").val();
    var valueexpenses = $("#valueexpenses").val();
    var qtdeExpenses = $("#qtdeExpenses").val();
    var subtotal = valueexpenses * qtdeExpenses;


    $total = parseFloat($("#vlr_total").val()) + parseFloat(subtotal);
    $("#vlr_total").val($total);
    $("#lb_vlr_total").html($total);

    $("#append-expenses").append(
        "<tr id='tr_" + contatorDespesas + "'>" +
        "<td><input type='hidden' value='1' name='idExpense[]' id='idExpense[]' />" +
        "Despesa Customizada</td>" +
        "<td>" + recurso + "</td>" +
        "<td> " + categoryexpensesName + "</td>" +
        "<td><input type='hidden' name='qtde_expense[]' id='qtde_expense_" + contatorDespesas +
        "' value='" +
        qtdeExpenses + "' /><p id='lb_qtde" + contatorDespesas + "'> " + qtdeExpenses + "</p></td>" +
        "<td id='vlr_expense[]' name='vlr_expense[]' >R$ " + "<span id='vlr_expense_" +
        contatorDespesas + "'>" + valueexpenses + "</span>" + "</td>" +
        "<td> R$ " + "<span id='subtotal_" + contatorDespesas + "'>" + subtotal + "</span>" + "</td>" +
        "<td>" +
        "<a href='#' id='editExpenses_" + contatorDespesas +
        "' name='editExpenses' onclick='editarDespesa(" + contatorDespesas + ")' title='Editar'>" +
        "" +
        "</a>" +
        " <a href='#' title='Deletar' onclick='deletarDespesa(" + contatorDespesas + "," +
        subtotal +
        ")'></a>" +
        " </td>" +
        "</tr>" +

        "</tr>"
    );

    contatorDespesas++;

});

function editarPartner(cont) {

    if ($("#qtde_partner_" + cont).attr('type') == 'hidden') {
        stotal = $("#vlr_total").val() - $("#totalPartner_" + cont).html();
        $("#qtde_partner_" + cont).attr('type', 'number');
        $("#editPartnerNumber_" + cont).html('<i class="fas fa-check text-green"></i>');
        qtdAnterior = $("#qtde_partner_" + cont).val()
        qtdAntes = $("#qtde_partner_" + cont).val();
    } else {
        $("#qtde_partner_" + cont).attr('type', 'hidden');
        $("#editPartnerNumber_" + cont).html('<i class="far fa-edit"></i>');
        $("#quantidadePartner_" + cont).html($("#qtde_partner_" + cont).val());
        $("#totalPartner_" + cont).html($("#valorUnitario_" + cont).html() * $("#qtde_partner_" + cont).val())
        console.log($("#valorUnitario_" + cont).html() * $("#quantidadePartner_" + cont).val())

        $("#quantidadePartner_" + cont).html($("#qtde_partner_" + cont).val())

        qtdDepois = $("#qtde_partner_" + cont).val();
        if (qtdAntes < qtdDepois) {

            total = parseFloat(stotal) + parseFloat($("#totalPartner_" + cont).html());
        } else {
            total = parseFloat($("#vlr_total").val()) - parseFloat($("#totalPartner_" + cont).html() * (
                qtdAnterior - $(
                    "#qtde_partner_" + cont).val()));

        }

        $("#vlr_total").val(total);
        console.log(total)
        $("#lb_vlr_total").html(total);
    }

}

function editarDespesa(cont) {

    if ($("#qtde_expense_" + cont).attr('type') == 'hidden') {
        stotal = $("#vlr_total").val() - $("#subtotal_" + cont).html();
        $("#qtde_expense_" + cont).attr('type', 'number');
        $("#editExpenses_" + cont).html('<i class="fas fa-check text-green"></i>');
        $("#lb_qtde" + cont).attr('style')
        qtdAnterior = $("#qtde_expense_" + cont).val()
        qtdAntes = $("#qtde_expense_" + cont).val();
    } else {
        $("#qtde_expense_" + cont).attr('type', 'hidden');
        $("#editExpenses_" + cont).html('<i class="far fa-edit"></i>');
        $("#qtdSubTotal" + cont).html($("#qtde_expense_" + cont).val());
        $("#subtotal_" + cont).html($("#vlr_expense_" + cont).html() * $("#qtde_expense_" + cont).val())
        console.log($("#vlr_expense_" + cont).html() * $("#qtde_expense_" + cont).val())

        $("#lb_qtde" + cont).html($("#qtde_expense_" + cont).val())
        qtdDepois = $("#qtde_expense_" + cont).val();
        if (qtdAntes < qtdDepois) {

            total = parseFloat(stotal) + parseFloat($("#subtotal_" + cont).html());
        } else {
            total = parseFloat($("#vlr_total").val()) - parseFloat($("#subtotal_" + cont).html() * (qtdAnterior - $(
                "#qtde_expense_" + cont).val()));
        }

        $("#vlr_total").val(total);
        console.log(total)
        $("#lb_vlr_total").html(total);
    }

}

function editarDespesaEx(cont) {

    if ($("#qtde_expense_" + cont).attr('type') == 'hidden') {
        stotal = $("#vlr_total").val() - $("#total_" + cont).html();
        $("#qtde_expense_" + cont).attr('type', 'number');
        $("#editExpenses_" + cont).html('<i class="fas fa-check text-green"></i>');
        qtdAnterior = $("#qtde_expense_" + cont).val()
        qtdAntes = $("#qtde_expense_" + cont).val();
    } else {
        $("#qtde_expense_" + cont).attr('type', 'hidden');
        $("#editExpenses_" + cont).html('<i class="far fa-edit"></i>');
        $("#qtdSubTotal" + cont).html($("#qtde_expense_" + cont).val());
        $("#total_" + cont).html($("#vlr_expense_" + cont).html() * $("#qtde_expense_" + cont).val())
        console.log($("#vlr_expense_" + cont).html() * $("#qtde_expense_" + cont).val())

        $("#lb_qtde" + cont).html($("#qtde_expense_" + cont).val())

        qtdDepois = $("#qtde_expense_" + cont).val();

        if (qtdAntes < qtdDepois) {

            total = parseFloat(stotal) + parseFloat($("#total_" + cont).html());
        } else {
            total = parseFloat($("#vlr_total").val()) - parseFloat($("#total_" + cont).html() * (qtdAnterior - $(
                "#qtde_expense_" + cont).val()));
        }

        $("#vlr_total").val(total);
        console.log(total)
        $("#lb_vlr_total").html(total);

    }

}

$("#cidade").on("change", function() {

    $('#lead').prop('disabled', false)
    $('#client_name').prop('disabled', false)
    $('#account_manager').prop('disabled', false)
    $('#part_number_id').prop('disabled', false)
    $('#ver_mais').attr('data-target', '#myModal')
    $('#ver_mais').removeAttr('style')

})




function getLocalExpenses() {
    state = $("#estado").val();
    city = $("#cidade").val();

    alert(city)

    url = "{{ URL('/') }}"
    $.ajax({
        type: "GET",
        url: url + "/regional/expenses",
        dataType: "json",
        encode: true,
    }).done(function(data) {

        $.each(data, function(i) {
            $("#listExpenses").append(
                "<tr>" +
                "<td>" + data[i].nameExpenses + "</td>" +
                "<td>" + data[i].value + "</td>" +
                "<td>" + data[i].state + "</td>" +
                "<td>" + data[i].city + "</td>" +
                "<td>" +
                "<a href='#'' title='Adicionar na cotação' onclick='selectPart({{ '+data[i].id+' }})'>" +
                "<i class='fas fa-check text-green'></i></a>" +
                "</td>" +
                "</tr>"
            );
        });

    });
}
</script>
<script src="{{ asset('js/script.js') }}"></script>
@stop
@endsection

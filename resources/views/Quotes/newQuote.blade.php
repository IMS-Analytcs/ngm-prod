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
                EDITAR COTAÇÃO
            @elseif(isset($historic))
                Historico da Cotação
            @else
                CADASTRAR COTAÇÃO
            @endif
        </h3>
        <div class="card-body">
            <div class="btn btn-success msg-success-cotacao" style="min-width: 120px">Cotação criada com sucesso!</div>
            @if (!empty($editquotes))
                <form method="POST" id="formAddQuote" name="formAddQuote"
                    action="{{ route('updatequote', ['id' => $editquotes->id]) }}">
                    @method('PUT')
                @elseif(isset($historic))
                    Historico da Cotação
                @else
                    <form method="POST" id="formAddQuote" name="formAddQuote" action="{{ route('addquote') }}">
            @endif

            @csrf
            <div class="row">

                @php
                    $idEstado = !empty($editquotes) ? 'editestado' : 'estado';
                    $idCidade = !empty($editquotes) ? 'editcidade' : 'cidade';
                @endphp

                <div class="col-sm-6 form-group">
                    <label id="campo_estado">Estado</label>
                    <select required id="<?= $idEstado ?>" name="state" class="stateexpenses form-control">
                    </select>
                </div>
                <div class="col-sm-6 form-group">
                    <label id="campo_cidade">Município</label>
                    <select required id="<?= $idCidade ?>" name="cidade" onchange="getCidadExpenses(this)"
                        class="cityexpenses form-control" name="city"></select>
                </div>


                <div class="col-sm-4 form-group">
                    <label id="campo_cidade">Deal</label>
                    <input required type="text" class="form-control" id="lead" disabled="true" name="lead"
                        placeholder="Identificação Deal" value="@if (!empty($editquotes)) {{ $editquotes->lead }} @endif">
                </div>

                <div class="col-sm-4 form-group">
                    <label id="campo_cidade">Cliente</label>
                    <input required type="text" class="form-control" id="client_name" disabled name="client_name"
                        placeholder="Nome do Cliente" value="@if (!empty($editquotes)) {{ $editquotes->client_name }} @endif">
                </div>


                <div class="col-sm-4 form-group">
                    <label id="campo_cidade">Account Manager (AM)</label>
                    <input required type="text" class="form-control" id="account_manager" disabled name="account_manager"
                        placeholder="Nome do Colaborador" value="@if (!empty($editquotes)) {{ $editquotes->account_manager }} @endif">
                </div>

                <div class="col-sm-12 form-group">
                    <label id="campo_cidade">PartNumber</label>
                    <select class="form-control js-data-part-number" disabled id="part_number_id"
                        name="part_number_id"></select>
                    <p class="text-right"> <a href="#" style="color: gray" data-toggle="modal" id="ver_mais" name="ver_mais"
                            data-target="#">Ver lista
                            completa</a>
                    </p>
                </div>

                <div class="col-sm-12 form-group">
                    <label>PartNumbers adicionados na cotação</label>
                    <table id="listpartnumbers" name="listpartnumbers" class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">PartNumbers</th>
                                <th scope="col">Descrição</th>
                                <th scope="col">Hora Analista</th>
                                <th scope="col">Hora IPM</th>
                                <th scope="col">Quantidade</th>
                                <th scope="col">Valor</th>
                                <th scope="col">SubTotal</th>
                                <th scope="col">Ação</th>
                            </tr>
                        </thead>
                        <tbody id="append-partnumbers">
                            @if (isset($editquotes))
                                @foreach ($listParnumbers as $partNumber)
                                    <tr id='tr_{{ $partNumber->id }}'>
                                        <td>{{ $partNumber->nameParNumber }}
                                            <input type='hidden' value='{{ $partNumber->id }}' id='partNumbers[]'
                                                name='partNumbers[]' />
                                        </td>
                                        <td>{{ $partNumber->descricao }}</td>
                                        <td>{{ $partNumber->hora_analista }}</td>
                                        <td>{{ $partNumber->hora_ipm }} </td>
                                        <td>
                                            <input type="hidden" name="qtde_partner[]"
                                                id="qtde_partner_{{ $partNumber->id }}"
                                                value="{{ $partNumber->quantity }}">
                                            <span
                                                id="quantidadePartner_{{ $partNumber->id }}">{{ $partNumber->quantity }}</span>

                                        </td>
                                        <td>
                                            R$ <span
                                                id="valorUnitario_{{ $partNumber->id }}">{{ $partNumber->unity_value }}</span>
                                        </td>
                                        <td>
                                            R$ <span
                                                id="totalPartner_{{ $partNumber->id }}">{{ $partNumber->subtotal }}</span>
                                        </td>
                                        <td>
                                            <a href='#' id="editPartnerNumber_{{ $partNumber->id }}"
                                                name="editPartnerNumber" onclick="editarPartner({{ $partNumber->id }})"
                                                title='Editar'>
                                                <i class='far fa-edit'></i>
                                            </a>

                                            <a href='#' title='Deletar'
                                                onclick='deletarPN({{ $partNumber->id }},{{ $partNumber->id }}, {{ $partNumber->subtotal }} )'>
                                                <i class='fas fa-trash-alt  ml-2 text-danger'></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif



                            {{-- CARREGA COM AJAX --}}
                        </tbody>
                    </table>
                </div>


                <div class="col-sm-12 form-group">
                    <label>Despesas previstas</label>
                    <table class="table table-striped" id="listexpenses" name="listexpenses">
                        <thead>
                            <tr>
                                <th scope="col">PartNumber</th>
                                <th scope="col">Despesa</th>
                                <th scope="col">Recurso</th>
                                <th scope="col">Quantidade</th>
                                <th scope="col">Valor Unitário</th>
                                <th scope="col">Valor Total</th>
                                <th scope="col">Ação</th>
                            </tr>
                        </thead>
                        <tbody id="append-expenses">
                            @if (isset($editquotes))

                                @foreach ($listExpenses as $expenses)

                                    @foreach ($expenses as $item)

                                        {{ $randonKey = $item->idExpense . rand(100, 999) }}

                                        <tr id='tr_{{ $randonKey }}' partnumber='{{ $item->idPartnumber }}'>
                                            <td>
                                                {{ $item->nameParNumber }}
                                                <input type='hidden' value='{{ $item->idPartnumber }}'
                                                    name='idPartnumber[]' id='pn_{{ $randonKey }}' />
                                            </td>
                                            <td><input type='hidden' value='{{ $item->idExpense }}' name='idExpense[]'
                                                    id='exp_{{ $randonKey }}' />{{ $item->nameExpenses }}</td>
                                            <td>{{ $item->type }}</td>
                                            <td><input type='hidden' name='qtde_expense[]'
                                                    id='qtde_expense_{{ $randonKey }}'
                                                    value='{{ $item->quantity }}' />
                                                <span id='qtdSubTotal_{{ $randonKey }}'>{{ $item->quantity }} </span>
                                            </td>
                                            <td id='vlr_expense[]' name='vlr_expense[]'>
                                                <span id='vlr_expense_{{ $randonKey }}'> {{ $item->unity_value }}
                                                </span>
                                            </td>
                                            <td>
                                                R$ <span id='total_{{ $randonKey }}'>
                                                    {{ (float) $item->subtotal }}</span>
                                            </td>
                                            <td>
                                                <a href='#editExpenses' id='editExpenses_{{ $randonKey }}'
                                                    name='editExpenses' onclick='editarDespesaEx({{ $randonKey }})'
                                                    title='Editar'>
                                                    <i class='far fa-edit'></i>
                                                </a>
                                                <a href='#deletar' name="deletar" title='Deletar'
                                                    onclick='deletarDespesa({{ $randonKey }}, "subtotal_depesa")'>
                                                    <i class='fas fa-trash-alt  ml-2 text-danger'></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endforeach


                            @endif
                            {{-- CARREGA COM AJAX --}}
                        </tbody>
                        <input type="hidden" name="arrExpenses[]" id="arrExpenses">
                    </table>
                </div>


                <div class="col-sm-6 form-group">


                    <div> Total da cotação <label>R$ </label> <label for="totl-cot" id="lb_vlr_total">
                            {{ isset($editquotes) ? $editquotes->initial_value : 0 }}</label>
                    </div>

                    <input type="hidden" value="{{ isset($editquotes) ? $editquotes->initial_value : 0 }}" id="vlr_total"
                        name="vlr_total">
                </div>
                <div class="col-sm-6 form-group text-right">
                    <a href='#' data-toggle="modal" data-target="#ModalDespesa" onclick='getLocalExpenses()'
                        class="btn btn-danger font-weight-bold pl-5 pr-5">Adicionar Despesa</a>
                </div>

            </div>
            @if (isset($historic))
                <input type="hidden" value="true" name="historic">
            @endif
            <div class="row justify-content-center mt-4 psc-footer">
                <div class="col-sm-12 text-center">
                    {{-- <a href="{{route('addquote')}}" class="btn btn-outline-danger font-weight-bold pl-5
                        pr-5">CADASTRAR
                        COTAÇÃO</a> --}}
                    <button type="submit" class="btn btn-outline-danger font-weight-bold pl-5 pr-5">

                        @if (!empty($editquotes) && !isset($historic))
                            EDITAR COTAÇÃO
                        @elseif(isset($historic))
                            ATIVAR ESTÁ VERSÃO DA COTAÇÃO
                        @else
                            CADASTRAR COTAÇÃO
                        @endif

                    </button>
                    <p>ou</p>
                    <input type="hidden" id="rascunho" name="rascunho" value="0">
                    <p> <a href="#rascunho" class="text-danger" onclick="setRascunho()">Salvar como rascunho</a></p>
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


        function setRascunho() {
            $("#rascunho").val(1);


            $("#client_name").attr('required', false);
            $("#account_manager").attr('required', false);

            $("#formAddQuote").submit();

        }

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

            $total = parseFloat($("#vlr_total").val())
            console.log(cont, id)

            var r = confirm("Certeza que deseja apagar esse PartNumber?");
            if (r == true) {


                //Pecorre lista de desepsas e remove a despesas da PN    
                $('#listexpenses tr').each(function() {
                    var partnumberId = $(this).attr('partnumber')
                    console.log("PARTNUMBER ID ROW: " + partnumberId)
                    if (partnumberId == id) {

                        valueExpense = $(this).find("td:eq(5)").children("span").text();

                        $total = $total - valueExpense;
                        $(this).closest('tr').remove()
                    }
                });

                // alert("Apagado!");
                $total = $total - parseFloat(valor);
                $("#vlr_total").val($total.toFixed(2));
                $("#lb_vlr_total").html($total.toFixed(2));
                //Pesquisa e remove um elemento específico por valor
                arrPartNumbers.splice(arrPartNumbers.indexOf(id), 1);
                $("#tr_" + id).remove();

                for (let index = 0; index < contador; index++) {
                    getExpenses(arrPartNumbers[index, true]);
                }


            }
        }

        function selectPart(id) {

            arrPartNumbers[contador] = id;
            // alert('add partnumber');
            console.log(url + "/seachPartNumberInQuote/");

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
                    "<tr id='tr_" + id + "'>" +
                    "<td> <input type='hidden' value='" + data.id +
                    "'  id='partNumbers[]' name='partNumbers[]' /> " + data.nameParNumber + "</td>" +
                    "<td>" + data.descricao + "</td>" +
                    "<td>" + data.hora_analista + ":00</td>" +
                    "<td>" + data.hora_ipm + ":00</td>" +
                    "<td><input type='hidden' name='qtde_partner[]' id='qtde_partner_" + contador +
                    "' value='1' /> " +
                    "<span id='quantidadePartner_" + contador + "'>" + 1 + "</span>" + "</td>" +
                    "<td>R$" + "<span id='valorUnitario_" + contador + "'>" + data.valor + "</span>" + "</td>" +
                    "<td>R$" + "<span id='totalPartner_" + contador + "'>" + data.valor + "</span>" + "</td>" +
                    "<td>" +
                    "<a href='#' id='editPartnerNumber_" + contador +
                    "' name='editPartnerNumber' onclick='editarPartner(" + contador + ")' title='Editar'>" +
                    "<i class='far fa-edit'></i>" +
                    "</a>" +
                    " <a href='#' title='Deletar' onclick='deletarPN(" + contador + "," + data.id + "," + data
                    .valor +
                    ")'><i class='fas fa-trash-alt  ml-2 text-danger'></i></a>" +
                    " </td>" +
                    "</tr>"
                ); //fim do append

                getExpenses(data.id);
            });

            contador++;

            $("#myModal").modal('hide');

        }

        function getExpenses(id, update) {


            var edit = "{{ isset($editquotes) }}"
            console.log("aqui teste: " + edit);

            if (update) {
                $("#append-expenses").html('');
            }

            //console.log("aqui:"{{ $idEstado }});
            if (edit) {
                //limpa a lista
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

                    var subtotal_depesa = data[i]['value'] ? parseFloat(data[i]['value']) * data[i][
                        'quantity'
                    ] : 0;
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

                    if (valor != 'Despesa não informada') {
                        randonKey = data[i]['id'] + Math.floor((Math.random() * 100) + 1)
                        await $("#append-expenses").append(
                            "<tr id='tr_" + contatorDespesas + "' partnumber='" + id + "'>" +
                            "<td>" +
                            data[i]['nameParNumber'] +
                            "<input type='hidden' value='" + data[i]['id'] +
                            "' name='idPartnumber[]' id='pn_" + randonKey + "' />" +
                            "</td>" +
                            "<td><input type='hidden' value='" + data[i]['expense_id'] +
                            "' name='idExpense[]' id='exp_" + randonKey + "' />" + data[i]['category'] +
                            "</td>" +
                            "<td>" + data[i]['type'] + "</td>" +
                            "<td><input type='hidden' name='qtde_expense[]' id='qtde_expense_" +
                            contatorDespesas +
                            "' value='" +
                            quantidade + "' /> " + "<span id='qtdSubTotal_" + contatorDespesas + "' >" +
                            quantidade +
                            "</span>" + "</td>" +
                            "<td id='vlr_expense[]' name='vlr_expense[]' > " + "<span id='vlr_expense_" +
                            contatorDespesas + "'>" + valor + "</span>" + "</td>" +
                            "<td>R$ " + "<span id='total_" + contatorDespesas + "'>" + subtotal_depesa +
                            "</span>" +
                            "</td>" +
                            "<td>" +
                            "<a href='#' id='editExpenses_" + contatorDespesas +
                            "' name='editExpenses' onclick='editarDespesaEx(" + contatorDespesas +
                            ")' title='Editar'>" +
                            "<i class='far fa-edit'></i>" +
                            "</a>" +
                            " <a href='#' title='Deletar' onclick='deletarDespesa(" + contatorDespesas +
                            "," +
                            subtotal_depesa +
                            ")'><i class='fas fa-trash-alt  ml-2 text-danger'></i></a>" +
                            " </td>" +
                            "</tr>"
                        );
                    }

                    arrExpenses[contatorDespesas] = data[i]['expense_id'];
                    $("#arrExpenses").val(arrExpenses);
                    // alert(data[i]['expense_id'])

                    contatorDespesas++;
                }

            });

        }

        function getCidadExpenses(cidade) {

            var items = []
            var valueToRemove = 0;
            var totalQuote = $("#vlr_total").val();
            $('#DataTables_Table_1 tbody tr td:nth-child(6)').each(function() {
                var subtotal = parseFloat($(this).text().replace(/[^0-9]/gi, ''));
                valueToRemove += subtotal;
            });

            var newTotalQuote = totalQuote - valueToRemove;
            $("#lb_vlr_total").html(newTotalQuote)
            $("#vlr_total").val(newTotalQuote)

            console.log(newTotalQuote);

            for (let index = 0; index < contador; index++) {
                getExpenses(arrPartNumbers[index], true);
            }
        }

        //deleta despesa
        function deletarDespesa(id, valor) {

            $total = parseFloat($("#vlr_total").val())




            var r = confirm("Certeza que deseja apagar essa Despesas?");
            if (r == true) {


                $('#listexpenses tr').each(function() {
                    var rowId = $(this).attr('id')

                    if (rowId == 'tr_' + id) {

                        subtotalExpense = parseFloat($(this).find("td:eq(5)").children("span").text());


                        $total = $total - subtotalExpense;

                        $("#vlr_total").val($total.toFixed(2));
                        $("#lb_vlr_total").html($total.toFixed(2));

                        $(this).closest('tr').remove()

                    }
                });

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

                        console.log(item.id);
                        $("#append-partnumbers").append(
                            "<tr id='tr" + index + "'>" +
                            "<td>" + item.nameParNumber +
                            " <input type='hidden' value='" + item.id +
                            "'  id='partNumbers[]' name='partNumbers[]' /> " +
                            "</td>" +
                            "<td>" + item.descricao + "</td>" +
                            "<td>" + item.hora_analista + "</td>" +
                            "<td>" + item.hora_ipm + "</td>" +
                            "<td>" + item.pivot.quantity + "</td>" +
                            "<td>" + item.pivot.unity_value + "</td>" +
                            "<td>" + item.pivot.quantity * item.pivot.unity_value + "</td>" +
                            "<td>" +
                            "<a href='#' title='Editar'>" +
                            "<i class='far fa-edit'></i>" +
                            "</a>" +
                            " <a href='#' title='Deletar' onclick='deletarPN(" + index + "," + item
                            .id + "," + item.valor +
                            ")'><i class='fas fa-trash-alt  ml-2 text-danger'></i></a>" +
                            " </td>" +
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
                        "<td>" + data.descricao + "</td>" +
                        "<td>" + data.hora_analista + ":00</td>" +
                        "<td>" + data.hora_ipm + ":00</td>" +
                        "<td>1</td>" +
                        "<td>R$" + data.valor + "</td>" +
                        "<td>R$" + data.valor + "</td>" +
                        "<td>" +
                        "<a href='#' title='Editar'>" +
                        "<i class='far fa-edit'></i>" +
                        "</a>" +
                        " <a href='#' title='Deletar' onclick='deletarPN(" + contador + "," + data.id +
                        "," + data
                        .valor +
                        ")'><i class='fas fa-trash-alt  ml-2 text-danger'></i></a>" +
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

                        randonKey = data[i]['id'] + Math.floor((Math.random() * 100) + 1)
                        $("#append-expenses").append(
                            "<tr id='tr_" + contatorDespesas + "'>" +
                            "<td><input type='hidden' value='" + item.id +
                            "' name='idExpense[]' id='exp_" + randonKey + "' />" +
                            "Despesa Customizada " +
                            "<input type='hidden' value='0' name='idPartnumber[]' id='pn_" + randonKey +
                            "' />" +
                            "</td>" +
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
            //  listEditPartNumber('{{ $editquotes->id }}');

            $('#lead').prop('disabled', false)
            $('#client_name').prop('disabled', false)
            $('#account_manager').prop('disabled', false)
            $('#part_number_id').prop('disabled', false)
            $('#ver_mais').attr('data-target', '#myModal')
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

            randonKey = Math.floor((Math.random() * 100) + 1)
            $("#append-expenses").append(
                "<tr id='tr_" + contatorDespesas + "'>" +
                "<td><input type='hidden' value='1' name='idExpense[]' id='exp_" + randonKey + "' />" +
                "Despesa Customizada " +
                "<input type='hidden' value='0' name='idPartnumber[]' id='pn_" + randonKey + "' />" +
                "</td>" +
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
                "<i class='far fa-edit'></i>" +
                "</a>" +
                " <a href='#' title='Deletar' onclick='deletarDespesa(" + contatorDespesas + "," +
                subtotal +
                ")'><i class='fas fa-trash-alt  ml-2 text-danger'></i></a>" +
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

                var newSubtotal = $("#valorUnitario_" + cont).html() * $("#qtde_partner_" + cont).val();
                $("#totalPartner_" + cont).html(newSubtotal.toFixed(2))
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
                console.log(total.toFixed(2))
                $("#lb_vlr_total").html(total.toFixed(2));
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
                $("#qtdSubTotal_" + cont).html($("#qtde_expense_" + cont).val());
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

            value_expense = $("#vlr_expense_" + cont).html();
            value_expense = parseFloat(value_expense.match(/[-+]?([0-9]*\.[0-9]+|[0-9]+)/));

            qtde_expense = $("#qtde_expense_" + cont).val();

            subtotalExpense = value_expense * qtde_expense;
            total = $("#vlr_total").val();


            if ($("#qtde_expense_" + cont).attr('type') == 'hidden') {

                stotal = $("#vlr_total").val() - $("#total_" + cont).html();
                $("#qtde_expense_" + cont).attr('type', 'number');
                $("#editExpenses_" + cont).html('<i class="fas fa-check text-green"></i>');
                qtdAnterior = $("#qtde_expense_" + cont).val()
                qtdAntes = $("#qtde_expense_" + cont).val();
            } else {

                $("#qtde_expense_" + cont).attr('type', 'hidden');
                $("#editExpenses_" + cont).html('<i class="far fa-edit"></i>');
                $("#qtdSubTotal_" + cont).html($("#qtde_expense_" + cont).val());
                $("#total_" + cont).html(value_expense * qtde_expense)

                $("#lb_qtde" + cont).html($("#qtde_expense_" + cont).val())

                qtdDepois = $("#qtde_expense_" + cont).val();

                console.log('qtdAntes: ' + qtdAntes)
                console.log('qtdAntes: ' + qtdDepois)

                //Apagar valor anterior
                total -= (value_expense * qtdAntes)

                //Adiciona novo valor
                total += (value_expense * qtdDepois)


                //  if (qtdAntes < qtdDepois) {

                //    total = parseFloat(stotal) + parseFloat($("#total_" + cont).html());
                //} else {
                //   total = parseFloat($("#vlr_total").val()) - parseFloat($("#total_" + cont).html() * (qtdAnterior - $(
                //      "#qtde_expense_" + cont).val()));
                // }

                $("#vlr_total").val(total.toFixed(2));
                console.log(total.toFixed(2))
                $("#lb_vlr_total").html(total.toFixed(2));

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


        var customExpense = null;

        function getLocalExpenses() {


            //Limpa modal de desepesas antes de carregar novamente
            $("#listExpenses").empty();

            var state = $("#estado").val();
            var city = $("#cidade").val();
            var formData = {
                state: $("#estado").val(),
                city: $("#cidade").val()
            };

            url = "{{ URL('/') }}"
            $.ajax({
                type: "GET",
                url: url + "/regional/expenses",
                dataType: "json",
                data: formData,
                encode: true,
            }).done(function(data) {

                customExpense = data;

                $.each(data, function(i) {
                    $("#listExpenses").append(
                        "<tr>" +
                        "<td>" + data[i].nameExpenses + "</td>" +
                        "<td>" + data[i].value + "</td>" +
                        "<td>" + data[i].state + "</td>" +
                        "<td>" + data[i].city + "</td>" +
                        "<td>" +
                        // "<a href='#'' title='Adicionar na cotação' onclick='selectPart(2)'>" +
                        "<a href='#' title='Adicionar na cotação' onclick='addCutsomExpense(" + data[
                            i].id + ")'>" +
                        "<i class='fas fa-check text-green'></i></a>" +
                        "</td>" +
                        "</tr>"
                    );
                });

            });
        }

        function addCutsomExpense(idData) {

            var nameExpense;
            var idExpense;
            var valueExpense;


            customExpense.forEach(function(custom, i) {
                if (custom.id == idData) {
                    nameExpense = custom.nameExpenses;
                    idExpense = custom.id;
                    valueExpense = custom.value;

                }
            })
            console.log(nameExpense);


            randonKey = Math.floor((Math.random() * 100) + 1)
            $("#append-expenses").append(
                "<tr id='tr_" + contatorDespesas + "'>" +
                "<td> Despesa Customizada</td>" +
                "<td><input type='hidden' value='" + idExpense +
                "' name='idExpense[]' id='exp_" + randonKey + "' />" + nameExpense + "</td>" +
                "<td> customizado " +
                "<input type='hidden' value='0' name='idPartnumber[]' id='pn_" + randonKey + "' />" +
                "</td>" +
                "<td><input type='hidden' name='qtde_expense[]' id='qtde_expense_" +
                contatorDespesas +
                "' value='1' /> " +
                "<span id='qtdSubTotal_" + contatorDespesas + "' >1</span>" + "</td>" +
                "<td id='vlr_expense[]' name='vlr_expense[]' > " + "<span id='vlr_expense_" +
                contatorDespesas + "'>" + valueExpense + "</span>" + "</td>" +
                "<td>R$ " + "<span id='total_" + contatorDespesas + "'>" + valueExpense +
                "</span>" +
                "</td>" +
                "<td>" +
                "<a href='#' id='editExpenses_" + contatorDespesas +
                "' name='editExpenses' onclick='editarDespesaEx(" + contatorDespesas +
                ")' title='Editar'>" +
                "<i class='far fa-edit'></i>" +
                "</a>" +
                " <a href='#' title='Deletar' onclick='deletarDespesa(" + contatorDespesas + "," +
                valueExpense +
                ")'><i class='fas fa-trash-alt  ml-2 text-danger'></i></a>" +
                " </td>" +
                "</tr>");

            contatorDespesas++;

            total = parseFloat($("#vlr_total").val())
            total += parseFloat(valueExpense)
            $("#lb_vlr_total").html(total.toFixed(2));
            $("#vlr_total").val(total.toFixed(2));
            alert(total)

        }
    </script>
    <script src="{{ asset('js/script.js') }}"></script>
@stop
@endsection

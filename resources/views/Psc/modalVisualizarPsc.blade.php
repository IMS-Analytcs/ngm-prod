@php

$totaldespesa = 0;
$total = 0;
$idPrimeiroFor = 0;
$idSegundoFor = 0;
$totalpartnumbers = 0;


@endphp
@php
    $idEstado = 'estado';
    $idCidade =  'cidade';
@endphp
<div class="modal fade col-sm-12" id="ModalVerPSCPsc{{$item2->id}}" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <h1 class="modal-title" id="myModalLabel">PSC Cotação: {{$item2->quote_id}} | Cliente:
                    {{$item2->pre_venda}}</h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

                <form method="POST" action="{{ route('psc.cotacao') }}">
                    @csrf
                    <input type="hidden" name="quote_id" value="{{$item2->quote_id}}">
                    <div class="row tela1">
                        <div class="col-sm-4">
                            <label for="lead" class="mt-1">Deal</label>
                            <input type="number" id="lead" name="lead" class="form-control"
                                placeholder="identificação Deal" required value="{{$item2->lead}}" readonly>
                        </div>
                        <div class="col-sm-4">
                            <label for="pre_venda" class="mt-1">Pré-Venda</label>
                            <input type="text" id="pre_venda" name="pre_venda" class="form-control"
                                value="{{Auth::user()->name}}" readonly>
                        </div>
                        <div class="col-sm-4">
                            <label for="email" class="mt-1">Email</label>
                            <input type="email" id="email" name="email" class="form-control"
                                value="{{Auth::user()->email}}" readonly>
                        </div>
                        <div class="col-sm-4">
                            <label for="motivo" class="mt-1">Motivo</label>
                            <select id="motivo" name="motivo" class="form-control" required disabled readonly>
                                <option value="{{$item2->motivo}}" selected>
                                    {{$item2->motivo}}
                                </option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <label for="data_final" class="mt-1">Data de previsão para fechamento</label>
                            <input type="datetime-local" id="data_final" name="data_final" class="form-control"
                                value="{{$item2->data_final}}" disabled readonly>
                        </div>
                        <div class="col-sm-4">
                            <label for="concorrente" class="mt-1">Concorrentes</label>
                            <input type="text" id="concorrente" name="concorrente" class="form-control"
                                placeholder="Com quem estamos concorrendo" disabled readonly>
                        </div>
                        <div class="col-sm-12">
                            <label for="escopo" class="mt-1">Escopo Requerido</label>
                            <textarea class="form-control p-1" id="escopo" name="escopo" style="resize: none"
                                placeholder="Descreva o escopo da solicitação do PSC" disabled readonly></textarea>
                        </div>
                        <div class="col-sm-12">
                            <label for="justificativa" class="mt-1">Justificativa</label>
                            <textarea class="form-control p-1" id="justificativa" name="justificativa"
                                style="resize: none" placeholder="Descreva a jusitificativa da solicitação deste PSC"
                                disabled readonly></textarea>
                        </div>
                    </div>
                    <div class="tela2">

                        <div class="col-sm-12 form-group">
                            <label >PartNumber</label>
                            <select class="form-control js-data-part-number"  id="part_number_id"
                                    name="part_number_id"></select>
                            <p class="text-right"> <a href="#" style="color: gray" data-toggle="modal" id="ver_mais" name="ver_mais"
                                                      data-target="#">Ver lista
                                    completa</a>
                            </p>
                        </div>
                        <h3>PartNumbers</h3>
                        <table class="table table-responsive text-center">
                            <thead>

                            <tr>
                                <th scope="col">PartNumber</th>
                                <th scope="col">Descrição</th>
                                <th scope="col">Horas Analista</th>
                                <th scope="col">Horas IPM</th>
                                <th scope="col">Quantidade</th>
                                <th scope="col">Subtotal Analista</th>
                                <th scope="col">Subtotal IPM</th>
                                <th scope="col">Valor Unitário</th>
                                <th scope="col">SubTotal PN</th>
                                <th scope="col" colspan="2">Ação</th>
                            </tr>
                            </th>

                            <tbody id="append-partnumbers{{$partnumber->quote_id}}">


                            @foreach($partnumbers as $item)

                            @if($item->quote_id == $idpsc)
                            @php
                            $idPrimeiroFor = rand();
                            @endphp
                            <input class="form-control" name="idpsc" type="hidden" value="{{$item->idPSC}}" />
                            <tr id="linha_{{$idPrimeiroFor}}">
                                <td><span id="nomePartner_{{$idPrimeiroFor}}">{{$item->nameParNumber}}</span>
                                    <input class="form-control" name="nameParNumber[]" type="hidden"
                                        id="nomePartner_input_{{$idPrimeiroFor}}" value="{{$item->nameParNumber}}" />
                                    <input class="form-control" name="part_number_id[]" type="hidden"
                                        value="{{$item->part_number_id}}" />
                                </td>
                                <td><span id="descricao_{{$idPrimeiroFor}}">{{$item->descricao}}<span>
                                            <input class="form-control" name="descricao[]" type="hidden"
                                                id="descricao_input_{{$idPrimeiroFor}}" value="{{$item->descricao}}" />
                                </td>
                                <td><span id="horaAnalista_{{$idPrimeiroFor}}">{{$item->hora_analista}}</span>
                                    <input class="form-control" name="hora_analista[]" type="hidden"
                                        id="horaAnalista_input_{{$idPrimeiroFor}}" value="{{$item->hora_analista}}" />
                                </td>
                                <td><span id="horaIpm_{{$idPrimeiroFor}}">{{$item->hora_ipm}}</span>
                                    <input class="form-control" name="hora_ipm" type="hidden"
                                        id="horaIpm_input_{{$idPrimeiroFor}}" value="{{$item->hora_ipm}}" />
                                </td>
                                <td><span
                                        id="QtdQuotePartnumber_{{$idPrimeiroFor}}">{{$item->QtdQuotePartnumber}}</span>
                                    <input class="form-control" name="QtdQuotePartnumber[]" type="hidden"
                                        id="QtdQuotePartnumber_input_{{$idPrimeiroFor}}"
                                        value="{{$item->QtdQuotePartnumber}}" />
                                </td>

                                <td>
                                    R$
                                    @php
                                    $quantidade = $item->QtdQuotePartnumber;
                                    $subJunior = ($item->hora_analista / 100) * $item->analistaJunior;
                                    $subPleno = ($item->hora_analista / 100) * $item->analistaPleno;
                                    $subSenior = ($item->hora_analista / 100) * $item->analistaSenior;
                                    $subMaster = ($item->hora_analista / 100) * $item->analistaMaster;
                                    @endphp
                                    @foreach($cost as $c)

                                    @php
                                    if($c->level == 'J' && $c->type == "ANL")
                                    {
                                    $subtotal = (float) $c->cost_hour * $subJunior;
                                    }else if($c->level == 'P' && $c->type == "ANL"){
                                    $subtotal2 = (float) $c->cost_hour * $subPleno;
                                    }else if($c->level == 'S' && $c->type == "ANL"){
                                    $subtotal3 = (float) $c->cost_hour * $subSenior;
                                    }else if($c->level == 'M' && $c->type == "ANL"){
                                    $subtotal4 = (float) $c->cost_hour * $subMaster;
                                    }
                                    @endphp
                                    @endforeach
                                    <span id="subTotalAnalista_{{$idPrimeiroFor}}">
                                        @php
                                        echo $subAnalista = $subtotal + $subtotal2 + $subtotal3 + $subtotal4;
                                        @endphp
                                    </span>
                                    <input class="form-control" type="hidden"
                                        id="subTotalAnalista_input_{{$idPrimeiroFor}}" value="{{$subAnalista}}" />
                                </td>

                                <td>R$
                                    @php
                                    $subJunior = ($item->hora_ipm / 100) * $item->ipmJunior;
                                    $subPleno = ($item->hora_ipm / 100) * $item->ipmPleno;
                                    $subSenior = ($item->hora_ipm / 100) * $item->ipmSenior;
                                    $subMaster = ($item->hora_ipm / 100) * $item->ipmMaster;
                                    @endphp
                                    @foreach($cost as $c)
                                    @php
                                    if($c->level == 'J' && $c->type == "IPM")
                                    {
                                    $subtotal = (float) $c->cost_hour * $subJunior;
                                    }else if($c->level == 'P' && $c->type == "IPM"){
                                    $subtotal2 = (float) $c->cost_hour * $subPleno;
                                    }else if($c->level == 'S' && $c->type == "IPM"){
                                    $subtotal3 = (float) $c->cost_hour * $subSenior;
                                    }else if($c->level == 'M' && $c->type == "IPM"){
                                    $subtotal4 = (float) $c->cost_hour * $subMaster;
                                    }
                                    @endphp
                                    @endforeach
                                    <span id="subTotalIPM_{{$idPrimeiroFor}}">
                                        @php
                                        echo $subIPM = $subtotal + $subtotal2 + $subtotal3 + $subtotal4;
                                        @endphp
                                    </span>
                                    <input class="form-control" type="hidden" id="subTotalIPM_input_{{$idPrimeiroFor}}"
                                        value="{{$subIPM}}" />
                                </td>
                                <td><span id="valorUnitario_{{$idPrimeiroFor}}">R$ {{$item->unity_value}}</span>
                                    <input class="form-control" name="valorUnitarioPartnumber[]" type="hidden"
                                        id="valorUnitario_input_{{$idPrimeiroFor}}" value="{{$item->unity_value}}" />
                                </td>
                                <td> R$
                                    <span class="subtotalPNparaSomar" id="subTotalPN_{{$idPrimeiroFor}}">
                                        @php
                                        $subTotalPN = ($subIPM + $subAnalista) * $quantidade;
                                        echo number_format($subTotalPN,2,",",".");
                                        $total = ($subIPM + $subAnalista) * $quantidade + $total;
                                        @endphp
                                    </span>
                                    <input class="form-control" type="hidden" id="subTotalPN_input_{{$idPrimeiroFor}}"
                                        value="{{$subTotalPN}}" />
                                </td>
                                <td>
                                    <a href="#" title="Editar" class="editar" data-id="{{$idPrimeiroFor}}"
                                        id="editar_{{$idPrimeiroFor}}">
                                        <i class="fas fas fa-edit"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="#" class="remover" data-id="{{$idPrimeiroFor}}" title="Deletar">
                                        <i class="fas fa-trash-alt  ml-2 text-danger"></i>
                                    </a>
                                </td>
                            </tr>


                            @endif
                            @endforeach
                        </tbody>
                    </table>
                    <h5>SubTotal Serviços Especializados:
                        <strong>R$
                            <span id="subTotalServicosEspecializados">
                                @php

                                echo number_format($total,2,",",".");

                                @endphp

                                </span>
                            </strong>
                        </h5>
                        <h3>Despesas</h3>
                        <table class="table text-center">
                            <thead>
                                <tr>
                                    <th scope="col">PartNumber</th>
                                    <th scope="col">Despesa</th>
                                    <th scope="col">Recurso</th>
                                    <th scope="col">Quantidade</th>
                                    <th scope="col">Valor Unitário</th>
                                    <th scope="col">Subtotal despesa</th>
                                    <th scope="col" colspan="2">Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tbody id="append-expenses">
                            {{-- CARREGA COM AJAX --}}
                            </tbody>

                            @foreach($partnumber as $item)

                            @if($item->quote_id == $idpsc)

                            @php
                            $idSegundoFor = rand();

                            @endphp
                            <tr id="linha_{{$idSegundoFor}}">
                                <td>
                                    <input class="form-control" name="expenseID[]" type="hidden"
                                        value="{{$item->expense_id}}" />
                                    {{$item->nameParNumber}}
                                </td>
                                <td>{{$item->state}}</td>
                                <td>
                                    <input class="form-control" name="typeExpense[]" type="hidden"
                                        value="{{$item->typeExpense}}" />

                                    {{$item->typeExpense}}
                                </td>
                                <td>
                                    <span
                                        id="QtdQuotePartnumber_{{$idSegundoFor}}">{{$item->QtdExpensesPartNumber}}</span>
                                    <input class="form-control" name="QtdExpensesPartNumber[]" type="hidden"
                                        id="QtdQuotePartnumber_input_{{$idSegundoFor}}"
                                        value="{{$item->QtdExpensesPartNumber}}" />
                                </td>
                                <td>
                                    <span id="valorUnitario_{{$idSegundoFor}}">R$ {{$item->value}}</span>
                                    <input class="form-control" name="valorUnitarioExpenses[]" type="hidden"
                                        id="valorUnitario_input_{{$idSegundoFor}}" value="{{$item->value}}" />
                                </td>
                                <td>R$
                                    <span id="subTotalPN_{{$idSegundoFor}}">
                                        {{$item->QtdExpensesPartNumber * $item->value}}
                                    </span>

                                </td>
                                <td>
                                    <a href="#" title="Editar" class="editar" data-id="{{$idSegundoFor}}">
                                        <i class="fas fas fa-edit"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="#" class="remover" data-id="{{$idSegundoFor}}" title="Deletar">
                                        <i class="fas fa-trash-alt  ml-2 text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            @php
                            $totaldespesa;

                            $totaldespesa = ($item->QtdExpensesPartNumber * $item->value) + $totaldespesa;
                            @endphp
                            @endif
                            @endforeach


                        </tbody>
                    </table>
                    <h5> SubTotal Despesas:
                        <strong>
                            R$
                            @php

                            echo number_format($totaldespesa,2,",",".")

                            @endphp
                        </strong>
                    </h5>
                    <h3>Resposta do PSC</h3>
                    <textarea class="form-control p-1 mb-1" id="justificativa" name="justificativa"
                        style="resize: none"></textarea>
                    <h4 class="font-weight-bold text-center mt-1">
                        Valor da cotação com PSC:
                        <span class="text-danger">
                            @php

                            echo number_format($totaldespesa + $totalpartnumbers,2,",",".")
                            @endphp

                        </span>
                    </h4>
                </div>
                <div class="row justify-content-center mt-4 psc-footer">
                    <div class="col-sm-4 text-center teste parte1">
                        <a href="#" class="btn btn-danger font-weight-bold pl-5 pr-5 botao">
                            AVANÇAR
                        </a>
                    </div>
                    <div class="col-sm-4 text-center botaorecusar">
                        <form method="POST" action="{{ route('psc.editstatus', $item->id) }}">
                            @csrf
                            <input type="text" hidden name="status" value="RECUSADO">
                            <button type="submit" class="btn btn-danger font-weight-bold pl-5 pr-5">
                                RECUSAR
                            </button>
                        </form>
                    </div>
                    <div class="col-sm-4 text-center enviar mt-2">
                        <form method="POST" action="{{ route('psc.editstatus', $item->id) }}">
                            @csrf
                            <input type="text" hidden name="status" value="APROVADO">
                            <button type="submit" class="btn btn-success font-weight-bold pl-5 pr-5">
                                APROVAR
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- </form> -->
        </div>
    </div>

</div>
@include('Quotes.modalpartNumbersListFull')
@section('js')
    <script src="{{ asset('js/script.js') }}"></script>
    <script>

        $('.remover').click(function() {

            console.log($(this).attr('data-id'));
            $('#linha_' + $(this).attr('data-id')).remove()
        })

        $('.editar').click(function() {

            id = $(this).attr('data-id')


            if($("#QtdQuotePartnumber_input_"+id).attr('type') == 'hidden') {



                $("#QtdQuotePartnumber_" + id).hide()
                $("#QtdQuotePartnumber_input_" + id).attr('type', 'number');

                $("#valorUnitario_" + id).hide()
                $("#valorUnitario_input_" + id).attr('type', 'number');



            }else{



                QtdQuotePartnumber = $("#QtdQuotePartnumber_input_" + id).val()
                $("#QtdQuotePartnumber_" + id).show().html(QtdQuotePartnumber)


                valorUnitario = $("#valorUnitario_input_" + id).val()

                $("#valorUnitario_" + id).show().html(valorUnitario)

                total = parseInt(QtdQuotePartnumber)  * parseFloat(valorUnitario)
                console.log(total)

                $("#subTotalPN_input_" + id).val(total)

                $("#subTotalPN_" + id).html(total)

                subtotalPNparaSomar = $('.subtotalPNparaSomar').html()
                console.log(subtotalPNparaSomar)
                $('#subTotalServicosEspecializados').html(subtotalPNparaSomar)

                $('.form-control').attr('type', 'hidden')
            }
        })
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

                $total = parseInt($("#vlr_total").val()) + parseInt(data.valor);
                $("#vlr_total").val($total);
                $("#lb_vlr_total").html($total);

                $("#append-partnumbers{{$item2->quote_id}}").append(
                    "<tr id='tr" + contador + "'>" +
                    "<td> <input type='hidden' value='" + data.id +
                    "'  id='partNumbers[]' name='partNumbers[]' /> " + data.nameParNumber + "</td>" +
                   //"<td>" + data.sow + "</td>" +
                    "<td>" + data.hora_analista + ":00</td>" +
                    "<td>" + data.hora_ipm + ":00</td>" +
                    "<td><input type='hidden' name='qtde_partner[]' id='qtde_partner_" + contador +
                    "' value='" + contador + "' /> " +
                    "<span id='quantidadePartner_" + contador + "'>" + 1 + "</span>" + "</td>" +
                    "<td></td>" +
                    "<td></td>" +
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

        function getExpenses(id) {

            $params = '?estado=' + '{{$item2->state}}' + '&cidade=' + '{{$item2->city}}' ;

            console.log(url + "/expenses/partnumber/" + id + $params)


            $.ajax({
                type: "GET",
                url: url + "/expenses/partnumber/" + id + $params,
                dataType: "json",
                encode: true,
            }).done(function(data) {

                console.log("despesas >> " + data.length);
                for (var i = 0; i < data.length; i++) {

                    var total = parseInt(data[i]['value']) * data[i]['quantity']
                    var valor = data[i]['value'] ? data[i]['value'] : "Despesa não informada";
                    var quantidade = data[i]['quantity'] ? data[i]['quantity'] : 0;

                    $total = parseInt($("#vlr_total").val()) + parseInt(total);
                    $("#vlr_total").val($total);
                    $("#lb_vlr_total").html($total);


                    $("#append-expenses").append(
                        "<tr id='tr_" + contatorDespesas + "'>" +
                        "<td>" + data[i]['nameParNumber'] + "</td>" +
                        "<td><input type='hidden' value='" + data[i]['expense_id'] +
                        "' name='idExpense[]' id='idExpense[]' />" + data[i]['category'] + "</td>" +
                        "<td>" + data[i]['type'] + "</td>" +
                        "<td><input type='hidden' name='qtde_expense[]' id='qtde_expense_" + contatorDespesas +
                        "' value='" +
                        quantidade + "' /> " + "<span id='qtdSubTotal" + contatorDespesas + "' >" + quantidade +
                        "</span>" + "</td>" +
                        "<td id='vlr_expense[]' name='vlr_expense[]' >R$ " + "<span id='vlr_expense_" +
                        contatorDespesas + "'>" + valor + "</span>" + "</td>" +
                        "<td>R$ " + "<span id='total_" + contatorDespesas + "'>" + total + "</span>" + "</td>" +
                        "<td>" +
                        "<a href='#' id='editExpenses_" + contatorDespesas +
                        "' name='editExpenses' onclick='editarDespesaEx(" + contatorDespesas +
                        ")' title='Editar'>" +
                        "<i class='far fa-edit'></i>" +
                        "</a>" +
                        " <a href='#' title='Deletar' onclick='deletarDespesa(" + contatorDespesas + "," +
                        total +
                        ")'><i class='fas fa-trash-alt  ml-2 text-danger'></i></a>" +
                        " </td>" +
                        "</tr>"
                    );
                    arrExpenses[contatorDespesas] = data[i]['expense_id'];
                    $("#arrExpenses").val(arrExpenses);
                    // alert(data[i]['expense_id'])

                    contatorDespesas++;
                }

            });

        }

    </script>
@endsection


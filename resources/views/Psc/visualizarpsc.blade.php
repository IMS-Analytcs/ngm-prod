@extends('adminlte::page')

@section('title', 'PSC')

@section('content_header')
    <h1>PSC da Cotação com deal <b>{{ $quote->lead }}</b>: | Cliente:
        <b>{{ $psc->pre_venda }}</b>
    </h1>
@endsection

@section('content')
    @php

    $totaldespesa = 0;
    $total = 0;
    $idPrimeiroFor = 0;
    $idSegundoFor = 0;
    $totalpartnumbers = 0;

    @endphp
    <div class="container">
        <div class="row ">
            <div class="col-sm-4">
                <label for="lead" class="mt-1">Deal</label>
                <input type="number" id="lead" name="lead" class="form-control" placeholder="identificação Deal" required
                    value="{{ $psc->lead }}" readonly>
            </div>
            <div class="col-sm-4">
                <label for="pre_venda" class="mt-1">Pré-Venda</label>
                <input type="text" id="pre_venda" name="pre_venda" class="form-control"
                    value="{{ isset(Auth::user()->name) ? isset(Auth::user()->name) : 'develop' }}" readonly>
            </div>
            <div class="col-sm-4">
                <label for="email" class="mt-1">Email</label>
                <input type="email" id="email" name="email" class="form-control"
                    value="{{ isset(Auth::user()->email) ? Auth::user()->email : 'develop@develop.com' }}" readonly>
            </div>
            <div class="col-sm-4">
                <label for="motivo" class="mt-1">Motivo</label>
                <select id="motivo" name="motivo" class="form-control" required disabled readonly>
                    <option value="{{ $psc->motivo }}" selected>
                        {{ $psc->motivo }}
                    </option>
                </select>
            </div>
            <div class="col-sm-4">
                <label for="data_final" class="mt-1">Data de previsão para fechamento</label>
                <input type="datetime-local" id="data_final" name="data_final" class="form-control"
                    value="{{ $psc->data_final }}" disabled readonly>
            </div>
            <div class="col-sm-4">
                <label for="concorrente" class="mt-1">Concorrentes</label>
                <input type="text" id="concorrente" name="concorrente" class="form-control"
                    placeholder="Com quem estamos concorrendo" value="{{ $psc->concorrente }}" disabled readonly>
            </div>
            <div class="col-sm-6">
                <label for="motivo" class="mt-1">Estado</label>
                <select id="state" name="state" class="form-control" required disabled readonly>
                    <option value="{{ $partnumbers[0]->state }}" selected>
                        {{ $partnumbers[0]->state }}
                    </option>
                </select>
            </div>
            <div class="col-sm-6">
                <label for="motivo" class="mt-1">Cidade</label>
                <select id="city" name="city" class="form-control" required disabled readonly>
                    <option value="{{ $partnumbers[0]->city }}" selected>
                        {{ $partnumbers[0]->city }}
                    </option>
                </select>
            </div>


            <div class="col-sm-12">
                <label for="escopo" class="mt-1">Escopo Requerido</label>
                <textarea class="form-control p-1" id="escopo" name="escopo" style="resize: none"
                    placeholder="Descreva o escopo da solicitação do PSC" disabled readonly>{{ $psc->escopo }}</textarea>
            </div>
            <div class="col-sm-12">
                <label for="justificativa" class="mt-1">Justificativa</label>
                <textarea class="form-control p-1" id="justificativa" name="justificativa" style="resize: none"
                    placeholder="Descreva a jusitificativa da solicitação deste PSC" disabled
                    readonly>{{ $psc->justificativa }}</textarea>
            </div>
        </div>
        <form method="POST" action="{{ route('psc.cotacao') }}">
            @csrf
            <input type="hidden" name="quote_id" value="{{ $psc->quote_id }}">
            <input type="hidden" name="psc_id" id="psc_id" value="{{ $psc->id }}">
            {{-- @php
                $quote = App\Models\Quote::find($quote_id);
            @endphp --}}
            <input type="hidden" name="id_origin" value="{{ $quote->id_origin }}">
            <div class="tela2">

                <div class="col-sm-12 form-group">
                    <label>PartNumber</label>
                    <select class="form-control js-data-part-number" id="part_number_id" name="part_number_id"></select>
                    <p class="text-right"><a href="#" style="color: gray" data-toggle="modal" id="ver_mais" name="ver_mais"
                            data-target="#">Ver lista
                            completa</a>
                    </p>
                </div>
                <h3>PartNumbers</h3>
                <table class="table table-responsive text-center" id="list_partnumbers" name="list_partnumbers">
                    <thead>

                        <tr>
                            <th scope="col">PartNumber</th>
                            {{-- <th scope="col">Descrição</th> --}}
                            <th scope="col">Horas Analista</th>
                            <th scope="col">Horas IPM</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col">Subtotal Analista</th>
                            <th scope="col">Subtotal IPM</th>
                            <th scope="col">Valor Unitário</th>
                            <th scope="col">SubTotal PN</th>
                            @if ($psc->status_psc_id != '5' && $psc->status_psc_id != '6')
                                <th scope="col" colspan="2">Ação</th>
                            @endif
                        </tr>
                        </th>

                    <tbody id="append-partnumbers">


                        @foreach ($partnumbers as $item)

                            @if (1)
                                @php
                                    $idPrimeiroFor = rand();
                                @endphp
                                <input class="form-control" name="idpsc" type="hidden" value="{{ $item->quote_id }}" />
                                <tr id="linha_{{ $idPrimeiroFor }}">
                                    <td><span id="nomePartner_{{ $idPrimeiroFor }}">{{ $item->nameParNumber }}</span>
                                        <input class="form-control" name="nameParNumber[]" type="hidden"
                                            id="nomePartner_input_{{ $idPrimeiroFor }}"
                                            value="{{ $item->nameParNumber }}" />

                                        <input class="form-control" name="part_number_id[]" type="hidden"
                                            value="{{ $item->id }}" />
                                    </td>
                                    {{-- <td><span id="descricao_{{$idPrimeiroFor}}">{{$item->descricao}}<span>
                                            <input class="form-control" name="descricao[]" type="hidden"
                                                   id="descricao_input_{{$idPrimeiroFor}}"
                                                   value="{{$item->descricao}}"/>
                            </td> --}}
                                    <td><span id="horaAnalista_{{ $idPrimeiroFor }}">{{ $item->hora_analista }}</span>
                                        <input class="form-control" name="hora_analista[]" type="hidden"
                                            id="horaAnalista_input_{{ $idPrimeiroFor }}"
                                            value="{{ $item->hora_analista }}" />
                                    </td>
                                    <td><span id="horaIpm_{{ $idPrimeiroFor }}">{{ $item->hora_ipm }}</span>
                                        <input class="form-control" name="hora_ipm" type="hidden"
                                            id="horaIpm_input_{{ $idPrimeiroFor }}" value="{{ $item->hora_ipm }}" />
                                    </td>
                                    <td><span
                                            id="QtdQuotePartnumber_{{ $idPrimeiroFor }}">{{ $item->quantity }}</span>
                                        <input class="form-control" name="QtdQuotePartnumber[]" type="hidden"
                                            id="QtdQuotePartnumber_input_{{ $idPrimeiroFor }}"
                                            value="{{ $item->quantity }}" />
                                    </td>

                                    <td>
                                        R$
                                        @php
                                            $quantidade = $item->quantity;
                                            $subJunior = ($item->hora_analista / 100) * $item->analistaJunior;
                                            $subPleno = ($item->hora_analista / 100) * $item->analistaPleno;
                                            $subSenior = ($item->hora_analista / 100) * $item->analistaSenior;
                                            $subMaster = ($item->hora_analista / 100) * $item->analistaMaster;
                                        @endphp
                                        @foreach ($cost as $c)

                                            @php
                                                if ($c->level == 'J' && $c->type == 'ANL') {
                                                    $subtotal = (float) $c->cost_hour * $subJunior;
                                                } elseif ($c->level == 'P' && $c->type == 'ANL') {
                                                    $subtotal2 = (float) $c->cost_hour * $subPleno;
                                                } elseif ($c->level == 'S' && $c->type == 'ANL') {
                                                    $subtotal3 = (float) $c->cost_hour * $subSenior;
                                                } elseif ($c->level == 'M' && $c->type == 'ANL') {
                                                    $subtotal4 = (float) $c->cost_hour * $subMaster;
                                                }
                                            @endphp
                                        @endforeach
                                        <span id="subTotalAnalista_{{ $idPrimeiroFor }}">
                                            @php
                                                echo $subAnalista = $subtotal + $subtotal2 + $subtotal3 + $subtotal4;
                                            @endphp
                                        </span>
                                        <input class="form-control" type="hidden"
                                            id="subTotalAnalista_input_{{ $idPrimeiroFor }}"
                                            value="{{ $subAnalista }}" />
                                    </td>

                                    <td>R$
                                        @php
                                            $subJunior = ($item->hora_ipm / 100) * $item->ipmJunior;
                                            $subPleno = ($item->hora_ipm / 100) * $item->ipmPleno;
                                            $subSenior = ($item->hora_ipm / 100) * $item->ipmSenior;
                                            $subMaster = ($item->hora_ipm / 100) * $item->ipmMaster;
                                        @endphp
                                        @foreach ($cost as $c)
                                            @php
                                                if ($c->level == 'J' && $c->type == 'IPM') {
                                                    $subtotal = (float) $c->cost_hour * $subJunior;
                                                } elseif ($c->level == 'P' && $c->type == 'IPM') {
                                                    $subtotal2 = (float) $c->cost_hour * $subPleno;
                                                } elseif ($c->level == 'S' && $c->type == 'IPM') {
                                                    $subtotal3 = (float) $c->cost_hour * $subSenior;
                                                } elseif ($c->level == 'M' && $c->type == 'IPM') {
                                                    $subtotal4 = (float) $c->cost_hour * $subMaster;
                                                }
                                            @endphp
                                        @endforeach
                                        <span id="subTotalIPM_{{ $idPrimeiroFor }}">
                                            @php
                                                echo $subIPM = $subtotal + $subtotal2 + $subtotal3 + $subtotal4;
                                            @endphp
                                        </span>
                                        <input class="form-control" type="hidden"
                                            id="subTotalIPM_input_{{ $idPrimeiroFor }}" value="{{ $subIPM }}" />
                                    </td>
                                    <td><span id="valorUnitario_{{ $idPrimeiroFor }}">R$
                                            {{ $item->unity_value }}</span>
                                        <input class="form-control" name="valorUnitarioPartnumber[]" type="hidden"
                                            id="valorUnitario_input_{{ $idPrimeiroFor }}"
                                            value="{{ $item->unity_value }}" />
                                    </td>
                                    <td> R$
                                        <span class="subtotalPNparaSomar" id="subTotalPN_{{ $idPrimeiroFor }}">
                                            @php
                                                $subTotalPN = ($subIPM + $subAnalista) * $quantidade;
                                                echo number_format($subTotalPN, 2, ',', '.');
                                                $total = ($subIPM + $subAnalista) * $quantidade + $total;
                                            @endphp
                                        </span>
                                        <input class="form-control" type="hidden"
                                            id="subTotalPN_input_{{ $idPrimeiroFor }}" value="{{ $subTotalPN }}" />
                                    </td>
                                    @if ($psc->status_psc_id != '5' && $psc->status_psc_id != '6')
                                        <td>
                                            <a href="#" title="Editar" class="editar" data-id="{{ $idPrimeiroFor }}"
                                                id="editar_{{ $idPrimeiroFor }}">
                                                <i class="fas fas fa-edit"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="#" class="remover" data-id="{{ $idPrimeiroFor }}" title="Deletar">
                                                <i class="fas fa-trash-alt  ml-2 text-danger"></i>
                                            </a>
                                        </td>
                                    @endif
                                </tr>


                            @endif
                        @endforeach
                    </tbody>
                </table>
                <h5>SubTotal Serviços Especializados:
                    <strong>
                        <span id="subTotalServicosEspecializados">
                            @php
                                
                                echo number_format($total, 2, ',', '.');
                                
                            @endphp

                        </span>
                    </strong>
                </h5>
                <h3>Despesas</h3>
                <div class="col-sm-12 form-group">
                    <select class="form-control js-data-part-despesas"></select>
                </div>
                <table class="table text-center" id="list_expenses" name="list_expenses">
                    <thead>
                        <tr>
                            <th scope="col">PartNumber</th>
                            <th scope="col">Despesa</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Recurso</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col">Valor Unitário</th>
                            <th scope="col">Subtotal despesa</th>
                            @if ($psc->status_psc_id != '5' && $psc->status_psc_id != '6')
                                <th scope="col" colspan="2">Ação</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody id="append-expenses">
                        {{-- CARREGA COM AJAX --}}


                        @foreach ($listExpenses as $expenses)
                            @foreach ($expenses as $expense)
                                @php
                                    $idSegundoFor = rand();
                                    $partnumber_despesa = [];
                                @endphp

                                <tr id="linha_{{ $idSegundoFor }}">
                                    <td>
                                        <input class="form-control" name="expenseID[]" type="hidden"
                                            value="{{ $expense['idExpense'] }}" />
                                        {{ $expense['nameParNumber'] }}
                                    </td>
                                    <td>{{ $expense['nameExpenses'] }}
                                        <input class="form-control" name="CategoryExpense[]" type="hidden"
                                            id="CategoryExpense_input_{{ $idSegundoFor }}"
                                            value="{{ floatval($expense['idExpense']) }}" />
                                    </td>
                                    <td>{{ $expense['state'] }}</td>
                                    <td>
                                        <input class="form-control" name="typeExpense[]" type="hidden"
                                            value="{{ isset($expense['type']) ? $expense['type'] : null }}" />
                                        {{ $expense['type'] }}
                                    </td>
                                    <td>
                                        <span id="qtdSubTotal{{ $idSegundoFor }}">{{ $expense['quantity'] }}</span>
                                        <input class="form-control" name="QtdExpensesPartNumber[]" type="hidden"
                                            id="qtde_expense_{{ $idSegundoFor }}"
                                            value="{{ floatval($expense['quantity']) }}" />
                                    </td>
                                    <td>
                                        <span id="vlr_expense_{{ $idSegundoFor }}">R$
                                            {{ $expense['unity_value'] }}</span>
                                        <input class="form-control" name="valorUnitarioExpenses[]" type="hidden"
                                            id="valor_expense_{{ $idSegundoFor }}"
                                            value="{{ floatval($expense['unity_value']) }}" />
                                    </td>
                                    <td>R$
                                        <span class="subtotalExparaSomar" id="total_{{ $idSegundoFor }}">
                                            @php
                                                echo number_format(floatval($expense['subtotal']), 2, ',', '.');
                                            @endphp
                                        </span>
                                    </td>
                                    @if ($psc->status_psc_id != '5' && $psc->status_psc_id != '6')
                                        <td>

                                            {{-- <a href="#" id="editPartnerNumber_{{ $idSegundoFor }}"
                                                name="editPartnerNumber"
                                                onclick="event.preventDefault(); editarPartner({{ $idSegundoFor }})"
                                                title="Editar">
                                                <i class='far fa-edit'></i>
                                            </a> --}}


                                            <a href='#this' id='editExpenses_{{ $idSegundoFor }}' name='editExpenses'
                                                onclick='editarDespesaEx({{ $idSegundoFor }})' title='Editar'>


                                                <i class="fas fas fa-edit"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="#" class="removerDespesa" data-id="{{ $idSegundoFor }}"
                                                title="Deletar">
                                                <i class="fas fa-trash-alt  ml-2 text-danger"></i>
                                            </a>
                                        </td>
                                    @endif
                                </tr>
                                @php
                                    $totaldespesa;
                                    $totaldespesa = floatval($expense['subtotal']) + $totaldespesa;
                                @endphp
                            @endforeach
                        @endforeach

                    </tbody>





                </table>

                <div class="col-sm-12 form-group text-right">
                    <a href='#' data-toggle="modal" data-target="#ModalDespesa" onclick='getLocalExpenses()'
                        class="btn btn-danger font-weight-bold pl-5 pr-5">Adicionar Despesa</a>
                </div>

                <h5> SubTotal Despesas:
                    <strong>
                        <span id="subTotalExpenseEspecializados">
                            R$
                            @php
                                echo number_format($totaldespesa, 2, ',', '.');
                                
                            @endphp
                        </span>
                    </strong>
                </h5>
                <h3>Resposta do PSC</h3>
                <textarea class="form-control p-1 mb-1" id="response" name="response" style="resize: none"
                    required></textarea>
                <h4 class="font-weight-bold text-center mt-1">
                    Valor da cotação com PSC:
                    <span class="valor_total_cotacao" class="text-danger">
                        @php
                            $total = number_format($totaldespesa + $totalpartnumbers, 2, ',', '.');
                            echo $total;
                        @endphp
                    </span>
                    <input type="hidden" id="total" name="total" value="{{ $total }}">
                </h4>
            </div>
            <div class="row justify-content-center mt-4 psc-footer">

                <div class=" text-center enviar mt-2">
                    <div class="form-group">
                        <label for="status_psc">Status PSC</label>
                        <select class="form-control" name="status_psc" id="status_psc">
                            @foreach ($status_psc as $sp)
                                <option value="{{ $sp->id }}">{{ $sp->description }}</option>
                            @endforeach
                        </select>
                    </div>


                    <button type="submit" class="btn btn-success font-weight-bold pl-5 pr-5">
                        PROCESSAR PSC
                    </button>

                </div>
            </div>
        </form>
    </div>
    @include('Quotes.modalExpenses')
    @include('Quotes.modalpartNumbersListFull')
@endsection
@section('js')
    <script src="{{ asset('js/script.js') }}"></script>
    <script>
        $(document).ready(function() {
            subtotalPNparaSomar()
            //  subtotalExparaSomar()
        });
        $('.remover').click(function() {


            console.log($(this).attr('data-id'));
            var rowId = 'linha_' + $(this).attr('data-id');
            var partnumberValue;

            partnumberSubtotal = parseFloat($('#subTotalServicosEspecializados').html().replace('R$&nbsp;', '')
                .replace('.', '').replace(',', '.'));


            valorTotalCotacao = parseFloat($('.valor_total_cotacao').html().replace('R$&nbsp;', '')
                .replace('.', '').replace(',', '.'));


            var r = confirm("Certeza que deseja apagar essa Partnumber?");
            if (r == true) {
                $('#list_partnumbers tr').each(function() {

                    var rowTableID = $(this).attr('id')

                    if (rowId == rowTableID) {
                        // partnumberValue = parseFloat($(this).find("td:eq(7)").children("span").text().match(
                        //     /[\d|,|\.]+/)[0].replace(".",
                        //     "").replace(",", "."));

                        partnumberValue = parseFloat($(this).find("td:eq(7)").children("span").text()
                            .replace('R$&nbsp;', '')
                            .replace('.', '').replace(',', '.'));



                        valorTotalCotacao = parseFloat(valorTotalCotacao) - parseFloat(partnumberValue);
                        partnumberSubtotal = parseFloat(partnumberSubtotal) - parseFloat(partnumberValue);

                        total = valorTotalCotacao.toLocaleString('pt-br', {
                            minimumFractionDigits: 2
                        });

                        partnumberSubtotal = partnumberSubtotal.toLocaleString('pt-br', {
                            minimumFractionDigits: 2
                        });




                        $(".valor_total_cotacao").html("R$&nbsp;" + total);
                        $("#total").val(total);
                        $("#subTotalServicosEspecializados").html("R$ " + partnumberSubtotal ?
                            partnumberSubtotal : 0);
                        $(this).closest('tr').remove()
                    }
                });

            }

            valueExpense = $('#' + rowId).find("td:eq(5)");
            console.log(valueExpense);

            $('#linha_' + $(this).attr('data-id')).remove()
        })



        function removerDespesasCustom(rowId) {

            var rowId = 'linha_' + rowId;
            var despesasSubtotal = parseFloat($('#subTotalExpenseEspecializados').html().match(/[\d|,|\.]+/)[0].replace(",",
                "."));

            var valorTotalCotacao = parseFloat($('.valor_total_cotacao').html().replace('R$&nbsp;', '')
                .replace('.', '').replace(',', '.'));


            var r = confirm("Certeza que deseja apagar essa desepesas?");
            if (r == true) {
                /* eslint-disable no-eval */
                $('#list_expenses tr').each(function() {

                    var rowTableID = $(this).attr('id')

                    if (rowId == rowTableID) {


                        expenseValue = parseFloat($(this).find("td:eq(6)").children("span").text().match(
                            /[\d|,|\.]+/)[0].replace(",", "."));

                        valorTotalCotacao = valorTotalCotacao - expenseValue;
                        despesasSubtotal = despesasSubtotal - expenseValue;

                        var total = valorTotalCotacao.toLocaleString('pt-br', {
                            minimumFractionDigits: 2
                        });

                        $(".valor_total_cotacao").html(total);
                        $("#total").val(valorTotalCotacao);
                        $("#subTotalExpenseEspecializados").html(despesasSubtotal.toFixed(2));
                        $(this).closest('tr').remove()
                    }
                });

            }
        }


        $('.removerDespesa').click(function() {

            var rowId = 'linha_' + $(this).attr('data-id');
            var despesasSubtotal = parseFloat($('#subTotalExpenseEspecializados').html().match(/[\d|,|\.]+/)[0]
                .replace(",",
                    "."));
            //var valorTotalCotacao = parseFloat($('.valor_total_cotacao').html().match(/[\d|,|\.]+/)[0].replace(",",
            //"."));
            var valorTotalCotacao = parseFloat($('.valor_total_cotacao').html().replace('R$&nbsp;', '')
                .replace('.', '').replace(',', '.'));


            var r = confirm("Certeza que deseja apagar essa desepesas?");
            if (r == true) {
                /* eslint-disable no-eval */
                $('#list_expenses tr').each(function() {

                    var rowTableID = $(this).attr('id')

                    if (rowId == rowTableID) {

                        expenseValue = parseFloat($(this).find("td:eq(6)").children("span").text().match(
                            /[\d|,|\.]+/)[0].replace(",", "."));

                        valorTotalCotacao = valorTotalCotacao - expenseValue;
                        despesasSubtotal = despesasSubtotal - expenseValue;
                        // total = parseFloat(valorTotalCotacao.match(/[\d|,|\.]+/)[0].replace(".", "").replace(",", "."));

                        var total = valorTotalCotacao.toLocaleString('pt-br', {
                            minimumFractionDigits: 2
                        });


                        $(".valor_total_cotacao").html(total);
                        $("#total").val(valorTotalCotacao);
                        $("#subTotalExpenseEspecializados").html(despesasSubtotal.toFixed(2));
                        $(this).closest('tr').remove()
                    }
                });

            }
        });


        function subtotalPNparaSomar() {
            var total1 = 0;
            $(".subtotalPNparaSomar").each(function() {
                // pega apenas o valor e ignora o "R$", remove o ponto e substitui vírgula por ponto
                var p = parseFloat($(this).text().match(/[\d|,|\.]+/)[0].replace(".", "").replace(",", "."));

                total1 += p;
            });
            // coloca o valor total na div "total"
            $('#subTotalServicosEspecializados').html(formataMoeda(total1))
            valor_total_cotacao()
        }

        function subtotalExparaSomar() {
            var total2 = 0;
            $(".subtotalExparaSomar").each(function() {
                // pega apenas o valor e ignora o "R$", remove o ponto e substitui vírgula por ponto
                // var p2 = parseFloat($(this).text().match(/[\d|,|\.]+/));
                // var p2 = parseFloat($(this).text().match(/[\d|,|\.]+/)[0].replace(".", "").replace(",", "."));


                // var p2 = parseFloat($(this).text());

                var p2 = $(this).text();
                p2 = p2.toLocaleString('pt-br', {
                    minimumFractionDigits: 2
                });
                p2 = parseFloat(p2);

                if (p2) {
                    total2 += p2;
                }

            });
            // coloca o valor total na div "total"
            total2 = total2.toLocaleString('pt-br', {
                minimumFractionDigits: 2
            });

            $('#subTotalExpenseEspecializados').html("R$ " +
                total2)
            valor_total_cotacao()
        }

        function valor_total_cotacao() {
            // coloca o valor total na div "total"
            //expense_sub_total = $('#subTotalExpenseEspecializados').text().replace('R$', '');
            //expense_sub_total = parseFloat(expense_sub_total.toLocaleString('pt-br', {
            //   minimumFractionDigits: 2
            //}));


            expense_sub_total = $('#subTotalExpenseEspecializados').text().match(/[\d|,|\.]+/)[0].replace(".", "").replace(
                ",", ".");


            //servicos_sub_total = $('#subTotalServicosEspecializados').text().replace('R$', '');
            //servicos_sub_total = parseFloat(servicos_sub_total.toLocaleString('pt-br', {
            //    minimumFractionDigits: 2

            servicos_sub_total = $('#subTotalServicosEspecializados').html().match(/[\d|,|\.]+/)[0].replace(".", "")
                .replace(",", ".");




            var valor_total_c = parseFloat(expense_sub_total) + parseFloat(servicos_sub_total)


            $('.valor_total_cotacao').html(formataMoeda(valor_total_c))
            $("#total").val(valor_total_c.toFixed(2));
        }


        function editarCustomExpesense(dataId) {

            id = dataId;

            if ($("#QtdQuotePartnumber_input_" + id).attr('type') == 'hidden') {
                $("#QtdQuotePartnumber_" + id).hide()
                $("#QtdQuotePartnumber_input_" + id).attr('type', 'number');
                $("#valorUnitario_" + id).hide()
                $("#valorUnitario_input_" + id).attr('type', 'number');
            } else {

                QtdQuotePartnumber = $("#QtdQuotePartnumber_input_" + id).val()
                $("#QtdQuotePartnumber_" + id).show().html(QtdQuotePartnumber)

                valorUnitario = $("#valorUnitario_input_" + id).val()

                $("#valorUnitario_" + id).show().html(parseFloat(valorUnitario))

                total = parseInt(QtdQuotePartnumber) * parseFloat(valorUnitario)

                $("#subTotalPN_input_" + id).val(total)
                var total = total.toLocaleString('pt-br', {
                    minimumFractionDigits: 2
                });

                $("#subTotalPN_" + id).html(total)

                subtotalExparaSomar()
                $('.form-control').attr('type', 'hidden')
            }
        }

        $('.editar').click(function(evt) {


            evt.preventDefault();
            id = $(this).attr('data-id')


            if ($("#QtdQuotePartnumber_input_" + id).attr('type') == 'hidden') {
                $("#QtdQuotePartnumber_" + id).hide()
                $("#QtdQuotePartnumber_input_" + id).attr('type', 'number');
                $("#valorUnitario_" + id).hide()
                $("#valorUnitario_input_" + id).attr('type', 'number');
            } else {



                var partnumberSubtotal = $("#subTotalServicosEspecializados").html();
                partnumberSubtotal = partnumberSubtotal.match(/[\d|,|\.]+/)[0]
                partnumberSubtotal = partnumberSubtotal.replace(".", "")
                partnumberSubtotal = partnumberSubtotal.replace(",", ".")

                var subtotalCurrent = parseFloat($("#subTotalPN_input_" + id).val());

                QtdQuotePartnumber = $("#QtdQuotePartnumber_input_" + id).val()
                $("#QtdQuotePartnumber_" + id).show().html(QtdQuotePartnumber)

                valorUnitario = $("#valorUnitario_input_" + id).val()

                $("#valorUnitario_" + id).show().html(parseFloat(valorUnitario))

                newTotal = partnumberSubtotal - subtotalCurrent
                subtotal = parseInt(QtdQuotePartnumber) * parseFloat(valorUnitario);
                newTotal += subtotal;

                $("#subTotalPN_input_" + id).val(subtotal)

                newTotal = newTotal.toLocaleString('pt-br', {
                    minimumFractionDigits: 2
                });

                subtotal = subtotal.toLocaleString('pt-br', {
                    minimumFractionDigits: 2
                });


                $("#subTotalPN_" + id).html(subtotal)

                $("#subTotalServicosEspecializados").html(newTotal);




                subtotalExparaSomar()
                $('.form-control').attr('type', 'hidden')
            }
        })

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#ver_mais').attr('data-target', '#myModal')
        $('#ver_mais').removeAttr('style')
        //
        var arrPartNumbers = [];
        var arrExpenses = [];
        var contador = 0;
        var contatorDespesas = 0;
        var idQuote;
        var url = "{{ URL('/') }}"

        $('.js-data-part-despesas').select2({

            placeholder: 'Pesquise pelo Nome',
            minimumInputLength: 2,
            ajax: {
                url: url + "/listExpensesInQuote",
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
                                text: obj.nameExpenses
                            };
                        })
                    };

                },

                cache: true
            }

        }); //fim do select

        $('.js-data-part-despesas').on('select2:select', function(e) {

            selectPartDespesa(e.params.data.id)
        });

        function selectPartDespesa(id) {

            getExpenses(id);


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

        function selectPart(id) {

            arrPartNumbers[contador] = id;

            $.ajax({
                type: "GET",
                url: url + "/seachPartNumberInQuote/" + id,
                dataType: "json",
                encode: true,
            }).done(function(data) {

                // console.log("retorno seaach: " + data);
                // console.log(Object.values(data));

                $total = parseInt($("#vlr_total").val()) + parseInt(data.valor);


                var totalPartnumber = $("#subTotalServicosEspecializados").html();
                totalPartnumber = totalPartnumber.match(/[\d|,|\.]+/)[0]
                totalPartnumber = totalPartnumber.replace(".", "")
                totalPartnumber = totalPartnumber.replace(",", ".")

                var totalCotacao = $(".valor_total_cotacao").html();
                totalCotacao = totalCotacao.match(/[\d|,|\.]+/)[0]
                totalCotacao = totalCotacao.replace(".", "")
                totalCotacao = totalCotacao.replace(",", ".")

                $("#total").val(totalPartnumber)

                $("#vlr_total").val($total);
                $("#lb_vlr_total").html($total);

                $("#append-partnumbers").append(
                    "<tr id='tr" + contador + "'>" +
                    "<td> <input type='hidden' value='" + data.id +
                    "'  id='partNumbers[]' name='part_number_id[]' /> " + data.nameParNumber + "</td>" +
                    //"<td>" + data.sow + "</td>" +
                    "<td>" + data.hora_analista + ":00</td>" +
                    "<td>" + data.hora_ipm + ":00</td>" +
                    "<td><input type='hidden' name='QtdQuotePartnumber[]' id='qtde_partner_" + contador +
                    "' value='" + contador + "' /> " +
                    "<span id='quantidadePartner_" + contador + "'>" + 1 + "</span>" + "</td>" +
                    "<td></td>" +
                    "<td></td>" +
                    "<td><input type='hidden' name='valorUnitarioPartnumber[]' id='valor_unitario_" +
                    contador +
                    "' value='" + data.valor + "' /> " +
                    "R$" + "<span id='valorUnitario_" + contador + "'>" + data.valor + "</span>" + "</td>" +
                    "<td>" + "<span class='subtotalPNparaSomar' id='totalPartner_" + contador + "'>" +
                    formataMoeda(data.valor) + "</span>" + "</td>" +
                    "<td>" +
                    "<a href='#' id='editPartnerNumber_" + contador +
                    "' name='editPartnerNumber' onclick='event.preventDefault();editarPartner(" + contador +
                    ")' title='Editar'>" +
                    "<i class='far fa-edit'></i>" +
                    "</a></td>" +
                    "<td> <a href='#' title='Deletar' onclick='deletarPN(" + contador + "," + data.id +
                    "," +
                    data
                    .valor +
                    ")'><i class='fas fa-trash-alt  ml-2 text-danger'></i></a>" +
                    " </td>" +
                    "</tr>"
                ); //fim do append

                getExpenses(data.id);
                subtotalPNparaSomar()
            });

            contador++;

            $("#myModal").modal('hide');


        }

        function getExpenses(id) {

            $params = '?estado=' + '{{ $quote->state }}' + '&cidade=' + '{{ $quote->city }}';

            console.log(url + "/expenses/partnumber/" + id + $params)


            $.ajax({
                type: "GET",
                url: url + "/expenses/partnumber/" + id + $params,
                dataType: "json",
                encode: true,
            }).done(function(data) {

                console.log("despesas >> " + data.length);
                for (var i = 0; i < data.length; i++) {



                    if (data[i]['value']) {
                        var total = parseInt(data[i]['value']) * data[i]['quantity']
                        var valor = data[i]['value'] ? data[i]['value'] : "Despesa não informada";
                        var quantidade = data[i]['quantity'] ? data[i]['quantity'] : 0;

                        $total = parseInt($("#vlr_total").val()) + parseInt(total);
                        $("#vlr_total").val($total);
                        $("#lb_vlr_total").html($total);
                    } else {
                        var total = 'Não informado';
                        var valor = 'Não informado';
                        var quantidade = 'Não informado';
                    }


                    $("#append-expenses").append(
                        "<tr id='tr_" + contatorDespesas + "'>" +
                        "<td>" + data[i]['nameParNumber'] + "</td>" +
                        "<td>" +
                        "<input type='hidden' value='" + data[i]['expense_id'] +
                        "' name='expenseID[]' id='idExpense[]' />" +
                        data[i]['category'] +
                        "</td>" +
                        "<td></td>" +
                        "<td>" +
                        "<input type='hidden' value='" + data[i]['type'] +
                        "' name='typeExpense[]' id='idExpense[]' />" +
                        data[i]['type'] +
                        "</td>" +
                        "<td>" +
                        "<input type='hidden' name='QtdExpensesPartNumber[]' id='qtde_expense_" +
                        contatorDespesas +
                        "' value='" +
                        quantidade + "' /> " +
                        "<span id='qtdSubTotal" + contatorDespesas + "' >" + quantidade +
                        "</span>" +
                        "</td>" +
                        "<td>" +
                        "R$ " + "<span id='vlr_expense_" +
                        contatorDespesas + "'>" + valor + "</span>" + "</td>" +
                        "<input type='hidden' name='valorUnitarioExpenses[]' id='valor_expense_" +
                        contatorDespesas +
                        "' value='" +
                        valor + "' /> " +
                        "<td>R$ " + "<span class='subtotalExparaSomar' id='total_" + contatorDespesas +
                        "'>" +
                        total + "</span>" + "</td>" +
                        "<td>" +
                        "<a href='#' id='editExpenses_" + contatorDespesas +
                        "' name='editExpenses' onclick='event.preventDefault();editarDespesaEx(" +
                        contatorDespesas +
                        ")' title='Editar'>" +
                        "<i class='far fa-edit'></i>" +
                        "</a></td>" +
                        "<td><a href='#' title='Deletar' onclick='deletarDespesa(" + contatorDespesas +
                        ")'><i class='fas fa-trash-alt  ml-2 text-danger'></i></a>" +
                        " </td>" +
                        "</tr>"
                    );
                    subtotalExparaSomar()
                    arrExpenses[contatorDespesas] = data[i]['expense_id'];
                    $("#arrExpenses").val(arrExpenses);

                    contatorDespesas++;
                }

            });

        }

        //deleta despesa
        function deletarDespesa(id) {

            var r = confirm("Certeza que deseja apagar essa Despesas?");
            if (r == true) {

                var subTotalItemExpense = parseFloat($("#total_" + id).html());

                if (subTotalItemExpense) {
                    var valorTotalCotacao = parseFloat($('.valor_total_cotacao').html().replace('R$&nbsp;', '')
                        .replace('.', '').replace(',', '.').toLocaleString('pt-br', {
                            minimumFractionDigits: 2
                        }));
                    var subTotalExpense = parseFloat($('#subTotalExpenseEspecializados').html().replace('R$ ', '')
                        .replace('.', '').replace(',', '.'));

                    var newTotal = valorTotalCotacao - subTotalItemExpense;
                    newTotal = newTotal.toLocaleString('pt-br', {
                        minimumFractionDigits: 2
                    });

                    var newSubTotal = subTotalExpense - subTotalItemExpense;
                    newSubTotal = newSubTotal.toLocaleString('pt-br', {
                        minimumFractionDigits: 2
                    });


                    $('#subTotalExpenseEspecializados').html(newSubTotal)
                    $('.valor_total_cotacao').html(newTotal)
                }

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

        function deletarPN(cont, id, valor) {
            console.log(cont, id, valor)

            var partnumberSubtotal = parseFloat($('#subTotalServicosEspecializados').html().match(/[\d|,|\.]+/)[0]
                .replace(".",
                    "").replace(",", "."));
            var valorTotalCotacao = parseFloat($('.valor_total_cotacao').html().match(/[\d|,|\.]+/)[0].replace(".",
                "").replace(",", "."));

            var valor = parseFloat($("#totalPartner_" + cont).html().match(/[\d|,|\.]+/)[0].replace(".",
                "").replace(",", "."));

            var r = confirm("Certeza que deseja apagar esse PartNumber?");
            if (r == true) {
                total = valorTotalCotacao - parseFloat(valor);
                partnumberSubtotal = partnumberSubtotal - parseFloat(valor);

                totalInpt = total.toLocaleString('pt-br', {
                    minimumFractionDigits: 2
                });

                partnumberSubtotal = partnumberSubtotal.toLocaleString('pt-br', {
                    minimumFractionDigits: 2
                });


                $("#subTotalServicosEspecializados").html("R$ " + partnumberSubtotal);
                $(".valor_total_cotacao").html("R$ " + totalInpt);
                $("#total").val(totalInpt);
                //Pesquisa e remove um elemento específico por valor
                arrPartNumbers.splice(arrPartNumbers.indexOf(id), 1);
                $("#tr" + cont).remove();
            }
        }

        function formataMoeda(v) {
            return v.toLocaleString('pt-BR', {
                style: 'currency',
                currency: 'BRL'
            });
        }

        function editarPartner(cont) {

            if ($("#qtde_partner_" + cont).attr('type') == 'hidden') {
                stotal = $("#vlr_total").val() - $("#totalPartner_" + cont).html();
                $("#qtde_partner_" + cont).attr('type', 'number');
                $("#valor_unitario_" + cont).attr('type', 'number');
                $("#editPartnerNumber_" + cont).html('<i class="fas fa-check text-green"></i>');
                qtdAnterior = $("#qtde_partner_" + cont).val()
                qtdAntes = $("#qtde_partner_" + cont).val();
            } else {
                $("#qtde_partner_" + cont).attr('type', 'hidden');
                $("#valor_unitario_" + cont).attr('type', 'hidden');
                $("#editPartnerNumber_" + cont).html('<i class="far fa-edit"></i>');
                $("#quantidadePartner_" + cont).html($("#qtde_partner_" + cont).val());
                $("#valorUnitario_" + cont).html($("#valor_unitario_" + cont).val());

                vUnitario = $("#valorUnitario_" + cont).html()
                var vUnitario = vUnitario.toLocaleString('pt-br', {
                    minimumFractionDigits: 2
                });
                vUnitario = vUnitario * $("#qtde_partner_" + cont).val()
                $("#totalPartner_" + cont).html(formataMoeda(vUnitario))
                console.log($("#valorUnitario_" + cont).html() * $("#quantidadePartner_" + cont).val())

                $("#quantidadePartner_" + cont).html($("#qtde_partner_" + cont).val())

                qtdDepois = $("#qtde_partner_" + cont).val();
                if (qtdAntes < qtdDepois) {

                    total = parseInt(stotal) + parseInt($("#totalPartner_" + cont).html());

                } else {
                    total = parseInt($("#vlr_total").val()) - parseInt($("#totalPartner_" + cont).html() * (
                        qtdAnterior - $(
                            "#qtde_partner_" + cont).val()));


                }

                $("#vlr_total").val(total);
                console.log(total)
                $("#lb_vlr_total").html(total);
                subtotalPNparaSomar()
            }

        }


        function editarDespesaEx(cont) {


            if ($("#qtde_expense_" + cont).attr('type') == 'hidden') {
                stotal = $("#vlr_total").val() - $("#total_" + cont).html();
                $("#qtde_expense_" + cont).attr('type', 'number');
                $("#valor_expense_" + cont).attr('type', 'number');
                $("#editExpenses_" + cont).html('<i class="fas fa-check text-green"></i>');
                qtdAnterior = $("#qtde_expense_" + cont).val()
                qtdAntes = $("#qtde_expense_" + cont).val();
            } else {

                $("#qtde_expense_" + cont).attr('type', 'hidden');
                $("#valor_expense_" + cont).attr('type', 'hidden');
                $("#vlr_expense_" + cont).html($("#valor_expense_" + cont).val())

                $("#editExpenses_" + cont).html('<i class="far fa-edit"></i>');
                $("#qtdSubTotal" + cont).html($("#qtde_expense_" + cont).val());

                var subTotal = $("#vlr_expense_" + cont).html() * $("#qtde_expense_" + cont).val();
                $("#total_" + cont).html(subTotal.toFixed(2));
                $("#lb_qtde" + cont).html($("#qtde_expense_" + cont).val())

                qtdDepois = $("#qtde_expense_" + cont).val();

                if (qtdAntes < qtdDepois) {

                    total = parseInt(stotal) + parseInt($("#total_" + cont).html());
                } else {
                    total = parseInt($("#vlr_total").val()) - parseInt($("#total_" + cont).html() * (qtdAnterior - $(
                        "#qtde_expense_" + cont).val()));
                }

                $("#vlr_total").val(total.toFixed(2));
                console.log(total)
                $("#lb_vlr_total").html(total.toFixed(2));
                subtotalPNparaSomar()
                subtotalExparaSomar()
            }

        }

        var customExpense = null;

        function getLocalExpenses() {
            //Limpa modal de desepesas antes de carregar novamente
            $("#listExpenses").empty();

            var state = $("#state").val();
            var city = $("#city").val();
            var formData = {
                state: $("#state").val(),
                city: $("#city").val()
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
                        "<a href='#' title='Adicionar na cotação' onclick='addCutsomExpense(" +
                        data[
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
            var valueExpense = 0;

            var despesasSubtotalCustom = parseFloat($('#subTotalExpenseEspecializados').html().match(/[\d|,|\.]+/)[0]
                .replace(",", "."));


            customExpense.forEach(function(custom, i) {
                if (custom.id == idData) {
                    nameExpense = custom.nameExpenses;
                    idExpense = custom.id;
                    valueExpense = custom.value;
                }
            })

            randonKey = Math.floor((Math.random() * 100) + 100)
            $("#append-expenses").append(
                "<tr  id='linha_" + randonKey + "' >" +
                "<td> Despesa Customizada</td>" +
                "<td><input type='hidden' value='" + idExpense +
                "' name='idExpense[]' id='exp_" + randonKey + "' />" + nameExpense + "</td>" +
                "<td> customizado " +
                "<input type='hidden' value='0' name='idPartnumber[]' id='pn_" + randonKey + "' />" +
                "</td>" +
                "<td></td>" +
                "<td><span id='QtdQuotePartnumber_" + randonKey + "'>1</span>" +
                "<input class='form-control' name='QtdExpensesPartNumber[]' type='hidden' id='QtdQuotePartnumber_input_" +
                randonKey + "' value='1'>" +
                "</td>" +
                "<td> <span id='valorUnitario_" + randonKey + "'>R$ " + valueExpense + "</span> " +
                "<input class='form-control' name='valorUnitarioExpenses[]' type='hidden' id='valorUnitario_input_" +
                randonKey + "' value='" + valueExpense + "'></td>" +
                "<td>R$ <span class='subtotalExparaSomar' id='subTotalPN_" + randonKey + "'>" + valueExpense +
                "</span>" +
                "</td>" +
                "<td> <a href='#this.id' id=" + randonKey +
                " title='Editar' class='editar' onclick='editarCustomExpesense(" + randonKey +
                ")' data-id=" +
                randonKey +
                "  id='editar_" + randonKey + "' ><i class='fas fas fa-edit'></i></a></td>" +
                "<td>" +
                "<a href='#' onclick='removerDespesasCustom(" + randonKey + ")' class='removerDespesa' data-id='" +
                randonKey + "' title='Deletar'>" +
                "<i class='fas fa-trash-alt  ml-2 text-danger'></i></a>" +
                " </td>" +
                "</tr>");

            contatorDespesas++;

            despesasSubtotalCustom = parseFloat(despesasSubtotalCustom) + parseFloat(valueExpense)
            total = parseFloat($("#total").val())
            total += parseFloat(valueExpense)

            total = total.toLocaleString('pt-br', {
                minimumFractionDigits: 2
            });

            $("#subTotalExpenseEspecializados").html(despesasSubtotalCustom.toFixed(2));
            $(".valor_total_cotacao").html('R$&nbsp;' + total);
            $("#total").val(total.toFixed(2));


        }
    </script>
@endsection

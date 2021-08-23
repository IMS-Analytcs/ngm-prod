<!DOCTYPE HTML>
<html lang=”pt-br”>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <!-- CSS only -->
    <link type="text/css" href="{{ env('BOOTSTRAP_DOMPDF') }}" rel="stylesheet" />

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <span class="font-weight-bold">DEAL: </span>{{$quote->lead}}
            </div>
            <div class="col-4">
                <span class="font-weight-bold">CLIENTE: </span> {{$quote->client_name}}
            </div>
            <div class="col-4">
                <span class="font-weight-bold">ACCOUNT MANAGER: </span> {{$quote->account_manager}}
            </div>
        </div>
        <div class="row">
            <span>Local da Instalação: {{$quote->city}}/{{$quote->state}}</span>
        </div>
        <div class="row">
            <h3 class="text-center">PartNumbers</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">PartNumbers</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Hora Analista</th>
                        <th scope="col">Quantidade</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Subtotal</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($part_number_quote as $p)
                    <tr>
                        <td>{{$p->nameParNumber}}</td>
                        <td>{{$p->sow}}</td>
                        <td>{{$p->hora_analista}}</td>
                        <td>{{$p->quantity}}</td>
                        <td>{{$p->unity_value}}</td>
                        <td>{{$p->quantity * $p->unity_value}}</td>

                    </tr>
                    @endforeach


                </tbody>
            </table>
            <span>Total de PartNumbers: {{$partnumber_subtotal}}</span>
            <h3 class="text-center">Despesas</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">PartNumbers</th>
                        <th scope="col">Despesa</th>
                        <th scope="col">Recurso</th>
                        <th scope="col">Quantidade</th>
                        <th scope="col">Valor Unitário</th>
                        <th scope="col">Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($expenses as $e)
                    <tr>
                        <td>{{$e->nameParNumber}}</td>
                        <td>{{$e->nameExpenses}}</td>
                        <td>{{$e->type}} </td>
                        <td>{{$e->quote_quantity}}</td>
                        <td>{{$e->unity_value}}</td>
                        <td>
                            @php
                            $valor = str_replace(".", "", $e->unity_value);
                            $valor2 = str_replace(",", ".", $valor);
                            $valor2 * str_replace(',', '.', $e->quote_quantity);
                            @endphp
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <div class="row">
            <br>
            <b>Total de Despesas: </b>R$ {{$expenses_subtotal}}
            <br>
            <b>Total da Cotação:</b> R$ {{$expenses_subtotal + $partnumber_subtotal}}
        </div>
    </div>

</body>

</html>
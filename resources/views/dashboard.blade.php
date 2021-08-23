@extends('adminlte::page')

@section('title', 'Dashboard')
<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;600;800&display=swap" rel="stylesheet">
@section('content_header')
<h1 class="title-dashboard">Dashboard</h1>


@endsection

@section('content')
<div class="row justify-content-between">
    <div class="card border-info mb-3 col-sm-4 cardstyle" style="max-width: 258px; max-height: 134px">
        <div class="card-body">
            <p class="text-center text-card">Cotações abertas</p>
            <p class="text-center content-card">{{$cotacao_abertas}}</p>
        </div>
    </div>
    <div class="card border-info mb-3 col-sm-4 cardstyle" style="max-width: 258px; max-height: 134px">
        <div class="card-body">
            <p class="text-center text-card">PSC Abertos</p>
            <p class="text-center content-card">{{$psc_abertas}}</p>
        </div>
    </div>
    <div class="card border-info mb-3 col-sm-4 cardstyle" style="max-width: 258px; max-height: 134px">
        <div class="card-body">
            <p class="text-center text-card">% Cotações ganhas</p>
            <p class="text-center content-card">{{$porcentagem_cotacao_ganha}}%</p>
        </div>
    </div>
    <div class="card border-info mb-3 col-sm-4 cardstyle" style="max-width: 258px; max-height: 134px">
        <div class="card-body">
            <p class="text-center text-card">PartNumbers</p>
            <p class="text-center content-card">{{$part_number_total}}</p>
        </div>
    </div>
    <div class="card border-info col-sm-12">
        <div class="card-body">
            <div class="row">
                <div class="col-10" id="curve_chart"></div>
                <div class="col-2">
                    <div class="chart-all">
                        <p class="text-center chart-text">Cotações abertas</p>
                        <p class="text-center chart-content">{{$cotacao_abertas}}</p>
                    </div>
                    <div class="chart-all">
                        <p class="text-center chart-text">Cotações Ganhas</p>
                        <p class="text-center chart-content">{{$cotacao_ganhas}}</p>
                    </div>
                    <div class="chart-all">
                        <p class="text-center chart-text">
                            Ciclo de vida médio de uma cotação
                        </p>
                        <p class="text-center chart-content">5</p>
                    </div>
                    <div class="chart-all">
                        <p class="text-center chart-text">
                            Média de itens por cotação
                        </p>
                        <p class="text-center chart-content">9</p>
                    </div>
                    <div class="chart-all">
                        <p class="text-center chart-text">
                            Satisfação do cliente
                        </p>
                        <p class="text-center chart-content">94%</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="row justify-content-between">
    <div class="card border-info col-sm-6" style="max-width: 530px;">
        <div class="card-body">
            <div class="row justify-content-between mb-5">
                <div class="col-sm-9">
                    <span class="card-footer-title">Últimas cotações cadastradas</span>
                </div>
                <div class="col-sm-3 text-right">
                    <a href="/quotes" class="col-sm-10 card-footer-link">Ver Todos</a>
                </div>
            </div>
            <table class="table table-responsive-xl table-borderless">
                <tbody>
                    @foreach ($ultimas_cotacoes as $item)
                    <tr class="table-footer">
                        <td>{{$item->client_name}}</td>
                        <td>R$ {{$item->final_value}}</td>
                        <td>
                            {{ \Carbon\Carbon::parse($item->created_at)->format('H:i')}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="card border-info col-sm-6" style="max-width: 530px;">
        <div class="card-body">
            <div class="row justify-content-between mb-5">
                <div class="col-sm-9">
                    <span class="card-footer-title">Status Cotações</span>
                </div>
                <div class="col-sm-3 text-right">
                    <a href="/quotes" class="col-sm-10 card-footer-link">Ver Todos</a>
                </div>
            </div>
            <table class="table table-borderless">
                <tbody>
                    @foreach ($ultimas_cotacoes as $item)
                    <tr class="table-footer row justify-content-between">
                        <td>{{$item->client_name}}<br>
                            <span>
                                {{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y')}}
                                <!-- Comparar se é data é hoje -->
                                @if(
                                \Carbon\Carbon::parse($item->created_at)->format('d-m-Y') ===
                                \Carbon\Carbon::parse()->format('d-m-Y')
                                )
                                (hoje)
                                @else
                                @endif
                            </span>
                        </td>
                        <td>
                            @if ($item->status != 'Aprovado')
                            <a href="/quotes">
                                <button class="btn btn btn-warning">PENDENTE</button>
                            </a>
                            @else
                            <a href="/quotes">
                                <button class="btn btn btn-success">WON</button>
                            </a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
@section('js')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
function initialize() {
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);
}
initialize();



function drawChart() {
    var data = google.visualization.arrayToDataTable([
        ['Year', 'Today', 'Yesterday'],
        [0, 0, 0],
        [1, 60, 5],
        [2, 41, 20],
        [3, 74, 40],
        [4, 87, 60],
        [5, 24, 65],
        [6, 89, 70],
        [7, 78, 80],
        [8, 10, 85],
        [9, 47, 90],
        [10, 15, 95],
        [11, 15, 100],
        [12, 15, 120],
        [13, 15, 90],
        [14, 15, 84],
        [15, 15, 88],
        [16, 15, 89],
        [17, 15, 70],
        [18, 15, 120],
        [19, 15, 95],
        [21, 15, 118],
        [22, 15, 10],
    ]);

    var options = {
        title: "Estatísticas de cotações",
        titleTextStyle: {
            color: '#252733',
            fontSize: 19,
            position: 'start',
            fontName: 'Mulish'
        },
        curveType: 'function',
        legend: {
            position: 'top',
            alignment: 'end',
            fontSize: 20,
        },
        legendTextStyle: {
            fontSize: 15,
            color: '#252733',
            fontName: 'Mulish',
            bold: true,
        },
        colors: ['#3751FF', '#0111FF'],

    };

    var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));


    chart.draw(data, options);
}
</script>
@stop
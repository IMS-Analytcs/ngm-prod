@extends('adminlte::page')

@section('title', 'Pedidos')

@section('content_header')
<h1 class="font-weight-bold">Cotações encerradas</h1>
@endsection

@section('content')

<div class="card">

    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table text-center table-striped">
                <thead>
                    <tr>
                        <th>
                            <h5 class="font-weight-bold">Deal</h5>
                        </th>
                        <th>
                            <h5 class="font-weight-bold">Cliente</h5>
                        </th>
                        <th>
                            <h5 class="font-weight-bold">AM</h5>
                        </th>
                        <th>
                            <h5 class="font-weight-bold">Tipo</h5>
                        </th>
                        <th>
                            <h5 class="font-weight-bold">Localidade</h5>
                        </th>
                        <th>
                            <h5 class="font-weight-bold">Status</h5>
                        </th>
                        <th>
                            <h5 class="font-weight-bold">Valor da cotação</h5>
                        </th>
                        <th>
                            <h5 class="font-weight-bold">Valor final</h5>
                        </th>
                        <th>
                            <h5 class="font-weight-bold">Ações</h5>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ListQuotes as $quote)
                    <tr>
                        <td>{{ $quote['id'] }}</td>
                        <td>{{ $quote['client_name'] }}</td>
                        <td>{{ $quote['account_manager'] }}</td>
                        <td>IMS</td>
                        <td>{{ $quote['state'] }}/{{ $quote['city'] }}</td>
                        <td>
                            @if($quote['status_order'] == 'Ganho')
                            <button name="modal" id="myModal" data-toggle="modal" data-target=""
                                class="btn btn-success text-bold rounded-pill">{{ $quote['status_order'] }}
                            </button>
                            @endif
                            @if($quote['status_order'] == 'Revisão')
                            <button name="modal" id="myModal" data-toggle="modal" data-target="#myModal{{$quote['id']}}"
                                class="btn btn-secondary text-bold rounded-pill">{{ $quote['status_order'] }}
                            </button>
                            @endif
                            @if($quote['status_order'] == 'Cancelado')
                            <button name="modal" id="myModal" data-toggle="modal" data-target="#myModal{{$quote['id']}}"
                                class="btn btn-danger text-bold rounded-pill">{{ $quote['status_order'] }}
                            </button>
                            @endif
                        </td>
                        <td>R$ {{ number_format($quote['value_quote'], 2, ',', '.') }}</td>
                        @if(!$quote['final_value'])
                        <td>-</td>
                        @else
                        <td>R$ {{ $quote['final_value']}}</td>
                        @endif
                        <td>
                            <a href="/orderquoteview/{{ $quote['id'] }}">
                                <i class="far fa-eye"></i>
                            </a>
                        </td>
                    </tr>
                    @include('Orders.modalOrder')
                    @endforeach
                <tbody>
            </table>

            @section('js')
            <script src="{{ asset('js/script.js') }}"></script>
            @stop
            @endsection
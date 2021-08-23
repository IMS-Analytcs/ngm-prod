@extends('adminlte::page')

@section('title', 'Cotações')

@section('content_header')
<h1 class="font-weight-bold">Cotações</h1>
@endsection

@section('content')
    <a href="{{ route('newquote') }}" class="btn btn-danger col-12 font-weight-bold mb-4">
        <h4 class="mt-2 font-weight-bold">
            <i class="fas fa-file-invoice-dollar" style='font-size:28px'></i>
            Nova Cotação
        </h4>
    </a>

    <div class="card">
        <h2 class="card-header">Lista de Cotações</h2>
        <div class="card-body">
            <div class="table-responsive">
                <table id="lisquotes" class="table text-center table-striped">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Cliente</th>
                            <th>Deal</th>
                            <th>Local de instalação</th>
                            <th>Gerente da conta</th>
                            <th>Status</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ( $quotes as $quote)
                            <tr>
                                <td>{{ $quote->id }} </td>
                                <td>{{ $quote->client_name }}</td>
                                <td>{{ $quote->lead }}</td>
                                <td>{{ $quote->state }} / {{ $quote->city }} </td>
                                <td>{{ $quote->account_manager }}</td>
                                <td>
                                    @if ($quote->status === 'Em andamento')
                                        <button name="modal" id="myModal" data-toggle="modal" data-target="#myModal"
                                            class="btn btn-warning text-bold rounded-pill">{{ $quote->status }}
                                        </button>
                                    @endif
                                    @if ($quote->status === 'rascunho')
                                        <button name="modal" id="myModal" data-toggle="modal" data-target="#myModal"
                                            onclick="getQuoteInfo({{ $quote->id }})"
                                            class="btn btn-secondary  text-bold rounded-pill" style="background-color: #e04073">{{ $quote->status }}
                                        </button>
                                    @endif
                                    @if ($quote->status === 'aguardando')
                                        <button name="modal" id="myModal" data-toggle="modal" data-target="#myModal"
                                            onclick="getQuoteInfo({{ $quote->id }})"
                                            class="btn btn-secondary  text-bold rounded-pill">{{ $quote->status }}
                                        </button>
                                    @endif
                                    @if ($quote->status === 'Aprovado')
                                        <button name="modal" id="myModal" data-toggle="modal" data-target="#myModal"
                                            class="btn btn-success text-bold rounded-pill">{{ $quote->status }}
                                        </button>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('editquote', ['id' => $quote->id]) }}">
                                        <i class="far fa-edit fa-1x"></i>
                                    </a>
                                    &nbsp;

                                    @if ($quote->id_origin > 0)
                                        <a href="{{ route('quotes.historic', $quote->id_origin) }}">
                                            <i class="fas fa-history fa-1x"></i>
                                        </a>
                                    @else
                                        <a href="{{ route('quotes.historic', $quote->id) }}">
                                            <i class="fas fa-history fa-1x"></i>
                                        </a>

                                    @endif
                                    &nbsp;

                                    <a href="{{ route('quotes.pdf', ['id' => $quote->id]) }}"><i
                                            class="far fa-file-alt fa-1x"></i></a>
                                    &nbsp;

                                    <a href="{{ route('editpsc', ['id' => $quote->id]) }}" title="PSC"><img
                                            src="{{ url('img/perc-quote.svg') }}" width="17%" alt=""></a>
                                </td>
                            </tr>

                        @empty
                            Não há registros para exibir
                        @endforelse
                        @include('Quotes.modalQuoteStatus')
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>

@section('js')
<script>
function reload() {
    document.location.reload(true);
}

$(document).ready(function() {
    $('#lisquotes').DataTable( {
        "order": [[ 0, "desc" ]],
        "columnDefs": [
            {
                "targets": [ 0 ],
                "visible": false,
                "searchable": false
            },
        ]
    } );
} );

function getQuoteInfo(idQuote) {
    url = "{{ URL('/') }}"
    $.ajax({
        type: "GET",
        url: url + "/ajax/info/quote/" + idQuote,
        dataType: "json",
        encode: true,
    }).done(function(data) {

        console.log(data);
        //  var value = data.initial_value.toLocaleString("pt-BR", {
        //      style: "currency",
        //      currency: "BRL"
        //  });

        var value = data.initial_value;


        urlUpdate = url + '/editquotestatus/' + data.id;
        $("#formStatus").attr('action', urlUpdate)
        $("#deal_value").html(data.lead)
        $("#client_value").html(data.client_name)
        $("#quote_value").html(value)
        $("#date_value").html(data.date)
        $('#status option[value=' + data.status + ']').attr('selected', 'selected');


    });
}
</script>
<script src="{{ asset('js/script.js') }}"></script>
@stop
@endsection
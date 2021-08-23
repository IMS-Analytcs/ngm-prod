@extends('adminlte::page')

@section('title', 'PSC')

@section('content_header')
@endsection

@section('content')
<div class="card">
    <h2 class="card-header">Histórico da Cotação</h2>
    <div class="card-body">
        <table id="grid-psc" class="table text-center">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Data Alteração</th>
                    <th scope="col">Versão</th>
                    <th scope="col">Deal</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Account Manager</th>
                    <th scope="col">Localidade</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($result as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>
                        {{
                                \Carbon\Carbon::parse($item->updated_at)->format('d/m/Y H:i')
                            }}
                    </td>
                    <td>{{$item->version}}</td>
                    <td>{{$item->lead}}</td>
                    <td>{{$item->client_name}}</td>
                    <td>{{$item->account_manager}}</td>
                    <td>{{$item->state}}/{{$item->city}}</td>
                    @if(!$item->final_value)
                    <td>R$ {{number_format($item->initial_value,2,",",".")}}</td>
                    @else
                    <td>R$ {{number_format($item->final_value,2,",",".")}}</td>
                    @endif
                    <td>
                        {{-- <a href="{{ route('quotes.historic.edit', $item->id) }}"> --}}
                        <a href="{{ URL('quotes/historic/edit', $item->id) }}">
                            <i class="far fa-eye fa-2x"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
@section('js')
<script>
$(document).ready(function() {
    $('#grid-psc').DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.24/i18n/Portuguese-Brasil.json"
        }
    });
});
</script>
@stop
@endsection
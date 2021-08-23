@extends('adminlte::page')

@section('title', 'PSC')

@section('content_header')
@endsection

@section('content')
<div class="card">
    <h2 class="card-header">Histórico Part Number</h2>
    <div class="card-body">
        <table id="grid-psc" class="table text-center">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Data Alteração</th>
                    <th scope="col">Versão</th>
                    <th scope="col">Horas IPM</th>
                    <th scope="col">Horas Analista</th>
                    <th scope="col">Horas Part Number</th>
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
                    <td>{{$item->hora_ipm}}</td>
                    <td>{{$item->hora_analista}}</td>
                    <td>{{$item->hora_analista + $item->hora_ipm}}</td>
                    <td>R$ {{number_format($item->valor,2,",",".")}}</td>
                    <td>
                        <a href="{{ route('partNumbers.historic.edit', $item->id) }}">
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
@extends('adminlte::page')

@section('title', 'PSC')

@section('content_header')
    <h1>PSC</h1>
@endsection

@section('content')
    <div class="card">
        <h2 class="card-header">Itens</h2>
        <div class="card-body">
            <table id="grid-psc" class="table">
                <thead>
                <tr>
                    <th scope="col">Lead</th>
                    <th scope="col">Motivo</th>
                    <th scope="col">Pré-Venda</th>
                    <th scope="col">Email</th>
                    <th scope="col">Concorrentes</th>
                    <th scope="col">Status</th>
                    <th scope="col">Visualizar</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($psc as $item2)
                    @php
                        $data = strtotime($item2->created_at);
                        $data_atual = strtotime(date("Y-m-d"));
                        $data_igual = strtotime('+1 days',$data_atual);
                    @endphp
                    @if ($data === $data_igual)
                        <tr class="table-warning">
                    @elseif($data < $data_atual)
                        <tr class="table-danger">
                    @else
                        <tr>
                            @endif
                            <td>{{$item2->lead}}</td>
                            <td>{{$item2->motivo}}</td>
                            <td>{{$item2->pre_venda}}</td>
                            <td>{{$item2->email}}</td>
                            <td>{{$item2->concorrente}}</td>
                            <td>
                                @if ($item2->status == 'Aguardando')
                                    <a href="#" class="btn btn-secondary font-weight-bold"
                                       style="min-width: 120px">{{$item2->status}}</a>
                                @endif

                                @if ($item2->status == 'Aprovado')

                                    <a href="#" class="btn btn-success font-weight-bold"
                                       style="min-width: 120px">{{$item2->status}}</a>
                                @endif
                                @if ($item2->status == 'RECUSADO')
                                    <a href="#" class="btn btn-danger font-weight-bold"
                                       style="min-width: 120px">{{$item2->status}}</a>
                                @endif
                            </td>
                            <td>
                                <a href="{{route('psc.visualizarpsc', $item2->quote_id)}}"><i
                                        class="far fa-eye fa-2x text-primary"></i></a>

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



    <script>
        $('#grid-psc').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.24/i18n/Portuguese-Brasil.json"
            }
        });

        function reload() {
            document.location.reload(true);
        }

        $('.tela1').show();
        $('.tela2').hide();
        $('.enviar').hide();
        $('.botaorecusar').hide();
        $(document).on('click', '.parte1', function () {
            $('.tela1').hide();
            $('.tela2').show();
            $('.enviar').show();
            $('.botaorecusar').show();
            $('.botao').text("VOLTAR");
            $('.botao').removeClass("btn-danger");
            $('.botao').addClass("btn-secondary");
            $('.teste').removeClass('parte1');
            $('.teste').addClass('parte2');
        });
        $(document).on('click', '.parte2', function () {
            $('.tela1').show();
            $('.tela2').hide();
            $('.enviar').hide();
            $('.botaorecusar').hide();
            $('.botao').text("AVANÇAR");
            $('.botao').removeClass("btn-secondary");
            $('.botao').addClass("btn-danger");
            $('.teste').removeClass('parte2');
            $('.teste').addClass('parte1');
        });

    </script>

@endsection



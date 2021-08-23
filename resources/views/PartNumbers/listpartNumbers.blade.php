@extends('adminlte::page')

@section('title', 'PartNumbers')

@section('content_header')
<h1 class="font-weight-bold">PartNumbers</h1>
@endsection

@section('content')
<style>
.btn-desabilitado {
    cursor: none;
    color: gray
}

.btn-desabilitado:hover {
    cursor: none;
    color: gray
}
</style>

<a href="{{ URL('/formPartNumber') }}" class="btn btn-danger col-12 font-weight-bold mb-4">
    <div class="row justify-content-center align-items-center">
        <i class="fas fa-sitemap fa-2x mr-3"></i>
        <h4 class="mt-2 font-weight-bold">Cadastrar Novo PartNumber</h4>
    </div>
</a>
<div class="card">
    <h2 class="card-header">Itens no catálogo</h2>
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table text-center table-striped">
                <thead>
                    <tr>
                        <th>
                            <h5 class="font-weight-bold">PartNumbers</h5>
                        </th>
                        <th>
                            <h5 class="font-weight-bold">Descrição</h5>
                        </th>
                        <th>
                            <h5 class="font-weight-bold">Tipo</h5>
                        </th>
                        <th>
                            <h5 class="font-weight-bold">Valor</h5>
                        </th>
                        <th>
                            <h5 class="font-weight-bold">Ativar/Desativar</h5>
                        </th>
                        <th>
                            <h5 class="font-weight-bold">Açoes</h5>
                        </th>


                    </tr>
                </thead>
                <tbody>
                    @foreach ($allPartNumbers as $PartNumbers)
                    <tr>
                        <td>{{ $PartNumbers->nameParNumber }}</td>
                        <td>
                            @if ($PartNumbers->descricao)
                            {{  $PartNumbers->descricao }}
                            @else
                            <p class="font-weight-bold">-</p>
                            @endif
                        </td>
                        <td>{{ $PartNumbers->typePartNumber }}</td>
                        <td>{{ number_format($PartNumbers->valor,2,",",".")  }}</td>
                        <td>
                            @if ($PartNumbers->status === 0)
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input"
                                    id="customSwitch{{ $PartNumbers->id }}" data-toggle="modal"
                                    data-target="#myModal{{ $PartNumbers->id }}">
                                <label class="custom-control-label" for="customSwitch{{ $PartNumbers->id }}"></label>
                            </div>
                            @else
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input"
                                    id="customSwitch{{ $PartNumbers->id }}" checked data-toggle="modal"
                                    data-target="#myModal{{ $PartNumbers->id }}">
                                <label class="custom-control-label" for="customSwitch{{ $PartNumbers->id }}"></label>
                            </div>
                            @endif
                        </td>
                        <td>
                            <a href="{{ URL('formPartNumber/' . $PartNumbers->id) }}">
                                <i class="far fa-edit fa-1x"></i>
                            </a>
                            &nbsp;
                            @if($PartNumbers->id_origin > 0)
                            <a href="{{ route('partNumbers.historic', $PartNumbers->id_origin) }}">
                                <i class="fas fa-history fa-1x"></i>
                            </a>
                            &nbsp;
                            @else
                            <a href="{{ route('partNumbers.historic', $PartNumbers->id) }}">
                                <i class="fas fa-history fa-1x"></i>
                            </a>
                            &nbsp;
                            @endif
                            @php
                            //verifica se tem arquivo
                            $idmodal = '';
                            $classenable = '';
                            if(!$PartNumbers->sow == ''){
                            $idmodal = $PartNumbers->id;
                            }else{
                            $classenable = 'btn-desabilitado';
                            }
                            @endphp
                            <a href="#" id="customSwitch{{$idmodal}}" class="{{$classenable}}" checked
                                data-toggle="modal" data-target="#myModalDownload{{$idmodal}}">
                                <i class="fas fa-file-alt fa-1x"></i>
                            </a>
                        </td>
                    </tr>
                    @include('PartNumbers.modalDownloadPartNumbers')
                    @include('PartNumbers.modalEditStatusPartNumbers')
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>

@section('js')
<script src="{{ asset('js/script.js') }}"></script>


<script>
//envia o token pro content
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
var url = '{{URL('
')}}';

//
var arrPartNumbers = [];
var contador = 0;

$('.js-data-part-number').select2({
    placeholder: 'Pesquise pelo Nome',
    minimumInputLength: 2,
    ajax: {
        url: url + '/listPartNumbersQuotes',
        delay: 250,
        type: 'GET',
        data: function(params) {
            return {
                search: params.term,
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


//Dispara quando seleciona no combo qualquer PartNumber
$('.js-data-part-number').on('select2:select', function(e) {
    // alert('Faça algo Walterson!');
    var data = e.params.data;
    // console.log(data.id+" cont: "+contador);

    //seta id do partnumber no array
    arrPartNumbers[contador] = data.id;

    $.ajax({
        type: "GET",
        url: url + "/seachPartNumberInQuote/" + data.id,
        dataType: "json",
        encode: true,
    }).done(function(data) {
        console.log("retorno seaach: " + data.nameParNumber);
        $("#append-partnumbers").append(
            "<tr id='tr" + contador + "'>" +
            "<td>" + data.nameParNumber + "</td>" +
            "<td>" + data.sow + "</td>" +
            "<td>" + data.typePartNumber + "</td>" +
            "<td>R$ 2.500,00</td>" +
            "<td>" + data.horasQuantidade + "</td>" +
            "<td>" +
            "<a href='#' title='Editar'>" +
            "<i class='far fa-edit'></i>" +
            "</a>" +
            " <a href='#' title='Deletar' onclick='deletarPN(" + contador + "," + data.id +
            ")'><i class='fas fa-trash-alt  ml-2 text-danger'></i></a>" +
            " </td>" +
            "</tr>"
        ); //fim do append
    });

    contador++;

});
</script>
@stop
@endsection
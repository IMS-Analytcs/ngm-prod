@extends('adminlte::page')

@section('title', 'Fabricantes')

@section('content_header')
<h1 class="font-weight-bold">Fabricantes</h1>
@endsection

@section('content')
@include('Fabricante.AddFabricante')
<!-- Listagem de fabricantes -->
<div class="card">
    <h2 class="card-header">Itens</h2>
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table text-center table-striped">
                <thead>
                    <tr>
                        <th>
                            <h5 class="font-weight-bold">Nome do Fabricante</h5>
                        </th>
                        <th>
                            <h5 class="font-weight-bold">Nível de parceria</h5>
                        </th>
                        <th>
                            <h5 class="font-weight-bold">Fim do contrato</h5>
                        </th>
                        <th>
                            <h5 class="font-weight-bold">Ativar/Desativar</h5>
                        </th>
                        <th>
                            <h5 class="font-weight-bold">Editar</h5>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($allfabricantes as $fabricante)
                    <tr class="data-row">
                        <td class="namefabricante">{{ $fabricante->name }}</td>
                        <td>{{ $fabricante->partnership_level }}</td>
                        <td class="category">{{ $fabricante->contract_end }}</td>
                        <td>
                            @if ($fabricante->active === 0)
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input"
                                    id="customSwitch{{ $fabricante->id }}" data-toggle="modal"
                                    data-target="#myModal{{ $fabricante->id }}">
                                <label class="custom-control-label" for="customSwitch{{ $fabricante->id }}"></label>
                            </div>
                            @else
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input"
                                    id="customSwitch{{ $fabricante->id }}" checked data-toggle="modal"
                                    data-target="#myModal{{ $fabricante->id }}">
                                <label class="custom-control-label" for="customSwitch{{ $fabricante->id }}"></label>
                            </div>
                            @endif
                        </td>
                        <td>
                            <p>
                                <button type="button" class="btn ml-lg-3 mr-lg-4" data-toggle="modal"
                                    data-target="#myModaledit{{ $fabricante->id }}"><img src="../img/editar.svg" alt=""
                                        width="24"></button>
                            </p>
                        </td>
                    </tr>
                    @include('Fabricante.EditStatusFabricante')
                    @include('Fabricante.EditFabricante')
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
@section('js')
<script>
String.prototype.reverse = function() {
    return this.split('').reverse().join('');
};

function mascaraMoeda(campo, evento) {
    var tecla = (!evento) ? window.event.keyCode : evento.which;
    var valor = campo.value.replace(/[^\d]+/gi, '').reverse();
    var resultado = "";
    var mascara = "##.###.###,##".reverse();
    for (var x = 0, y = 0; x < mascara.length && y < valor.length;) {
        if (mascara.charAt(x) != '#') {
            resultado += mascara.charAt(x);
            x++;
        } else {
            resultado += valor.charAt(y);
            y++;
            x++;
        }
    }
    campo.value = resultado.reverse();
}

function reload() {
    document.location.reload(true);
}
$('#myModal').on('shown.bs.modal', function() {
    $('#myInput').focus()
})

var url = {
    {
        URL('')
    }
};

function geTipoFabricante() {
    $.ajax({
        type: 'GET',
        url: url + '/tipo-fabricante',
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        async: true
    }).done(function(objresponse) {
        //console.log(response[0].name);
        $.each(objresponse, function(key, value) {
            // console.log(objresponse[key].name);
            let id = objresponse[key].id;
            let nome = objresponse[key].name;
            $('#typemanufacturer_id').append('<option value="' + id + '">' + nome + '</option>');
        });

    });
}
geTipoFabricante();

//datepicker
</script>
{{-- @section('plugins.Moment', true)
@section('plugins.DatePicker', true) --}}
<script src="{{ asset('js/script.js') }}"></script>
@stop
@endsection
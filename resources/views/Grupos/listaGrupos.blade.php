@extends('adminlte::page')

@section('title', 'Grupos')

@section('content_header')
<h1 class="font-weight-bold">Grupos</h1>
@endsection

@section('content')
@include('Grupos.addGrupos')
<!-- Listagem de fabricantes -->
<div class="card">
    <h2 class="card-header">Itens</h2>
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table text-center table-striped">
                <thead>
                    <tr>
                        <th>
                            <h5 class="font-weight-bold">Nome do Grupo</h5>
                        </th>
                        <th>
                            <h5 class="font-weight-bold">Descrição</h5>
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
                    @foreach($allgrupos as $grupo)
                    <tr class="data-row">
                        <td class="namefabricante">{{ $grupo->name}}</td>
                        <td>{{ $grupo->description}}</td>
                        <td>
                            @if($grupo->active === 0 )
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch{{$grupo->id}}" data-toggle="modal"
                                data-target="#myModal{{$grupo->id}}">
                                <label class="custom-control-label" for="customSwitch{{$grupo->id}}"></label>
                            </div>
                            @else
                            <div class="custom-control custom-switch" >
                                <input type="checkbox" class="custom-control-input" id="customSwitch{{$grupo->id}}"
                                    checked data-toggle="modal"
                                data-target="#myModal{{$grupo->id}}">
                                <label class="custom-control-label" for="customSwitch{{$grupo->id}}"></label>
                            </div>
                            @endif
                        </td>
                        <td>
                            <p>
                                <button type="button" class="btn ml-lg-3 mr-lg-4" data-toggle="modal"
                                    data-target="#myModaledit{{$grupo->id}}"><img src="../img/editar.svg" alt=""
                                        width="24"></button>
                            </p>
                        </td>
                    </tr>
                    @include('Grupos.EditStatusGrupos')
                    @include('Grupos.EditGrupos')
        @endforeach
        </tbody>
        </table>
    </div>
</div>
</div>
</div>
@section('js')
<script>
String.prototype.reverse = function(){
  return this.split('').reverse().join('');
};
function mascaraMoeda(campo,evento){
  var tecla = (!evento) ? window.event.keyCode : evento.which;
  var valor  =  campo.value.replace(/[^\d]+/gi,'').reverse();
  var resultado  = "";
  var mascara = "##.###.###,##".reverse();
  for (var x=0, y=0; x<mascara.length && y<valor.length;) {
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
$(document).ready(function() {
    $('#example').DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.24/i18n/Portuguese-Brasil.json"
        }
    });
});
$('#myModal').on('shown.bs.modal', function() {
    $('#myInput').focus()
})
function geFabricante() {
    var url = "{{URL('')}}";
    $.ajax({
        type: 'GET',
        url: url+'/lista-fabricantes',
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        async: true
    }).done(function(objresponse) {
        //console.log(response[0].name);
        $.each(objresponse, function( key, value ) {
        // console.log(objresponse[key].name);
         let id = objresponse[key].id;
         let nome = objresponse[key].name;
         $('#typemanufacturer').append('<option value="'+id+'">'+nome+'</option>');
        });
    });
}
geFabricante();
//datepicker
</script>
/**@section('plugins.Moment', true)
@section('plugins.DatePicker', true)*/
@stop
@endsection

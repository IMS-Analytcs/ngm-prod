@extends('adminlte::page')

@section('title', 'Despesas')

@section('content_header')
<h1 class="font-weight-bold">Despesas</h1>
@endsection

@section('content')

<button type="button" class="add-modal btn btn-danger col-12 font-weight-bold mb-4">
    <div class="row justify-content-center align-items-center">
        <i class="fas fa-hand-holding-usd fa-2x mr-3"></i>
        <h4 class="mt-2 font-weight-bold">Cadastrar Nova Despesa</h4>
    </div>
</button>


@if(count($allExpenses)> 0)
<div class="card">
    <h2 class="card-header">Itens no catálogo</h2>
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table text-center table-striped">
                <thead>
                    <tr>
                        <th scope="col">Despesa</th>
                        <th scope="col">Localidade</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Ativar/Desativar</th>
                        <th scope="col">Editar</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($allExpenses as $Expenses)
                    <tr class="data-row item{{$Expenses->id}}">
                        <td class="nameExpenses">{{ $Expenses->nameExpenses}}</td>
                        <td>{{ $Expenses->city}} / {{ $Expenses->state}}</td>
                        <td class="category">{{ $Expenses->category->category}}</td>
                        <td class="value">R$ {{$Expenses->value}}</td>
                        <td>

                            @if($Expenses->status === 0 )
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch{{$Expenses->id}}"
                                    data-toggle="modal" data-target="#myModal{{$Expenses->id}}">
                                <label class="custom-control-label" for="customSwitch{{$Expenses->id}}"></label>
                            </div>
                            @else
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch{{$Expenses->id}}"
                                    checked data-toggle="modal" data-target="#myModal{{$Expenses->id}}">
                                <label class="custom-control-label" for="customSwitch{{$Expenses->id}}"></label>
                            </div>
                            @endif

                        </td>
                        <td>
                            @php
                            $nomeCategoria = \App\Models\expensesCategory::where('id',$Expenses->category_id)->first();

                            @endphp
                            <p>
                                <button type="button" class="edit-modal btn ml-lg-3 mr-lg-4" data-id="{{$Expenses->id}}"
                                    data-nameexpenses="{{$Expenses->nameExpenses}}"
                                    data-category="{{$nomeCategoria->category}}" data-value="{{$Expenses->value}}"
                                    data-nacional_expense="{{$Expenses->nacional_expense}}"
                                    data-state="{{$Expenses->state}}" data-city="{{$Expenses->city}}">
                                    <img src="../img/editar.svg" alt="" width="24">
                                </button>
                            </p>
                        </td>
                    </tr>
                    @include('Expenses.modalEditStatusExpenses')
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
@else
<h2 class="text-center">Não tem despesas cadastradas!</h2>
@endif
@include('Expenses.modalExpenses')
@section('js')
<script src="{{ asset('js/script.js') }}"></script>

<script>
//envia o token pro content
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


$("#nacional_expense").click(function(event) {

    if ($('#nacional_expense').is(":checked")) {
        $("#estado").hide();
        $("#cidade").hide();
        $("#campo_estado").hide();
        $("#campo_cidade").hide();
    } else {

        $("#estado").show();
        $("#cidade").show();
        $("#campo_estado").show();
        $("#campo_cidade").show();

    }


});


var url = "{{URL('')}}";

//salva no banco
$('#add-despesa').submit(function(dados) {

    //  console.log(dados);

    var formData = {
        _method: 'POST',
        _token: $('meta[name="csrf-token"]').attr('content'),
        nameExpenses: $("#nameExpenses").val(),
        category: $("#categoryexpenses").val(),
        value: $("#valueexpenses").val(),
        state: $("#estado").val(),
        city: $("#cidade").val()
    };

    $.ajax({
        type: "POST",
        url: url + "/expenses",
        data: formData,
        dataType: "json",
        encode: true,
    }).done(function(data) {

        console.log(data);
        // if (data == 'success') {
        //     $('.msg-success-cotacao').show();
        // } else {
        //     $('.msg-erro-cotacao').show();
        // }
    });

    dados.preventDefault();
});
</script>
@stop
@endsection
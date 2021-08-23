@extends('adminlte::page')

@section('title', 'PSC')

@section('content_header')
    {{-- <h1>QUOTES</h1> --}}
    <style>
        .msg-success-cotacao {
            display: none;
        }

    </style>
@endsection

@section('content')

@include('Psc.modalNovoPedidoPsc')
@include('Quotes.modalpartNumbersListFull')
@if(session('warning'))
                        <div class="alert alert-danger alert-dismissible fade show text-center col-sm-12" role="alert">
                                <h4 class="font-weight-bold">{{session('warning')}}</h4>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
@endif
@if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show text-center col-sm-12" role="alert">
                                <h4 class="font-weight-bold">{{session('success')}}</h4>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
@endif

<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#perfil" role="tab" aria-controls="profile" aria-selected="true"><i class="fas fa-sitemap text-danger mr-2" style='font-size:28px'></i>%PSC</a>
    </li>
  </ul>
  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="perfil" role="tabpanel" aria-labelledby="profile-tab">
        <div class="card">
            <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label>Historicos pedidos PSC</label>
                            <table class="table table-striped text-center">
                                <thead>
                                    <tr>
                                        <th scope="col">Lead</th>
                                        <th scope="col">Motivo</th>
                                        <th scope="col">Pré-Venda</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Data de previsão</th>
                                        <th scope="col">Concorrentes</th>
                                        <th scope="col">Escopo</th>
                                        <th scope="col">Justificativa</th>
                                        <th scope="col" colspan="2">Ação</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 @foreach ($allpsc as $item)
                                    @if($editpsc->id === $item->quote_id)
                                    <tr>
                                        <td>{{$item->lead}}</td>
                                        <td>{{$item->motivo}}</td>
                                        <td>{{$item->pre_venda}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>
                                        {{ \Carbon\Carbon::parse($item->data_final)->format('d/m/Y')}}
                                        </td>
                                        <td>{{$item->concorrente}}</td>
                                        <td>{{$item->escopo}}</td>
                                        <td>{{$item->justificativa}}</td>
                                        <td><a title="Editar"><i class="far fa-edit fa-2x text-primary"
                                        id="customSwitch{{ $item->id }}" checked data-toggle="modal"
                                        data-target="#ModalEditPedidoPsc{{ $item->id }}"></i></a>
                                        </td>
                                        <td>
                                         <a href="{{route('psc.destroy', $item->id)}}" title='Deletar'>
                                         <i class='fas fa-trash-alt fa-2x ml-2 text-danger'></i>
                                        </a>
                                        </td>
                                    </tr>
                                    @include('Psc.modalEditPedidoPsc')
                                     @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="row justify-content-center mt-4 psc-footer">
                        <div class="col-sm-12 text-center">
                            <a href="#"  data-toggle="modal" data-target="#ModalNovoPedidoPsc" class="btn btn-outline-danger font-weight-bold pl-5 pr-5">NOVO PEDIDO PSC</a>
                        </div>
                    </div>
            </div>
        </div>
    </div>{{--fim da tab--}}
  </div>
  @section('js')
  <script src="{{ asset('js/script.js') }}"></script>

  @section('plugins.Select2', true)

  <script>
      //envia o token pro content
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

      //
      var arrPartNumbers = [];
      var contador = 0;
      var contatorDespesas = 0;
      var idQuote;
      var url = "{{ URL('/') }}"

      $('.js-data-part-number').select2({
          placeholder: 'Pesquise pelo Nome',
          minimumInputLength: 2,
          ajax: {
              url: url+'/listPartNumbersQuotes',
              delay: 250,
              type: 'POST',
              data: function(params) {
                  return {
                      nameParNumber: params.term,
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
              console.log("retorno pesquisa: " + data);
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

              getExpenses(data.id);
          });

          contador++;
      });

      //salva no banco
      $('#addquoteform').submit(function(dados) {

          //   console.log(dados);
         // console.log("Tamanho do array: " + arrPartNumbers.length);

          var formData = {
              partnumbers: arrPartNumbers,
              install_place: $("#editestado").val(),
              city: $("#city").val(),
              client_name: $("#client_name").val(),
              lead: $("#lead").val(),
              status: 'Aguardando',
              account_manager: $("#account_manager").val()
          };

          $.ajax({
              type: "POST",
              url: url + "/addquote",
              data: formData,
              dataType: "json",
              encode: true,
          }).done(function(data) {

              console.log(data);
              if (data == 'success') {
                  $('.msg-success-cotacao').show();
              } else {
                  $('.msg-erro-cotacao').show();
              }
          }).fail(function(data){
              alert('algo deu muito errado');
          });

          dados.preventDefault();
      });

      $('#editquoteform').submit(function(dados) {

          //   console.log(dados);
          console.log("Tamanho do array: " + arrPartNumbers.length);

          var formData = {
              _method: 'PUT',
              partnumbers: arrPartNumbers,
              install_place: $("#editestado").val(),
              city: $("#editcidade").val(),
              client_name: $("#client_name").val(),
              lead: $("#lead").val(),
              account_manager: $("#account_manager").val()
          };

          $.ajax({
              type: 'POST',
              url: url + "/updatequote/" + idQuote,
              data: formData,
              dataType: "json",
              encode: true,
          }).done(function(data) {

              console.log(data);
              if (data == 'success') {
                  $('.msg-success-cotacao').show();
                  document.location.reload(true);
              } else {
                  $('.msg-erro-cotacao').show();
              }
          });

          dados.preventDefault();
      });

      //deleta o partNumber da lista
      function deletarPN(cont, id) {

          var r = confirm("Certeza que deseja apagar esse PartNumber?");
          if (r == true) {
              // alert("Apagado!");

              //Pesquisa e remove um elemento específico por valor
              arrPartNumbers.splice(arrPartNumbers.indexOf(id), 1);

              $("#tr" + cont).remove();
          }
      }



      function getExpenses(id) {

        $("#append-expenses").html('');

          $estado = $("#estado").val();
          $cidade = $("#cidade").val();
          $params = '?estado=' + $estado + '&cidade=' + $cidade;

          console.log("http://127.0.0.1:8000/expenses/partnumber/" + id + $params)


          $.ajax({
              type: "GET",
              url: "http://127.0.0.1:8000/expenses/partnumber/" + id + $params,
              // url: "http://127.0.0.1:8000/expenses/partnumber/" + id,
              dataType: "json",
              encode: true,
          }).done(function(data) {

              console.log(data);
              for (var i = 0; i < data.length; i++) {

                  var total = parseInt(data[i]['value']) * data[i]['quantity']
                  var valor = data[i]['value'] ? data[i]['value'] : "Despesa não informada";
                  var quantidade = data[i]['quantity'] ? data[i]['quantity'] : "Despesa não informada";

                  $total = parseInt($("#vlr_total").val()) + parseInt(total);
                  $("#vlr_total").val($total);
                  $("#lb_vlr_total").html($total);



                  $("#append-expenses").append(
                      "<tr id='tr_" + contatorDespesas + "'>" +
                      "<td>" + data[i]['nameParNumber'] + "</td>" +
                      "<td>" + data[i]['category'] + "</td>" +
                      "<td>" + quantidade + "</td>" +
                      "<td id='vlr_expense[]' name='vlr_expense[]' >" + valor + "</td>" +
                      "<td>R$ " + total + "</td>" +
                      "<td>" +
                      "<a href='#' title='Editar'>" +
                      "<i class='far fa-edit'></i>" +
                      "</a>" +
                      " <a href='#' title='Deletar' onclick='deletarDespesa(" + contatorDespesas +
                      ")'><i class='fas fa-trash-alt  ml-2 text-danger'></i></a>" +
                      " </td>" +
                      "</tr>"
                  );

                  contatorDespesas++;
              }

          });

      }

      //deleta despesa
      function deletarDespesa(id) {

          alert($('#vlr_expense['+id+']').val());

          var r = confirm("Certeza que deseja apagar essa Despesas?");
          if (r == true) {
              // alert("Apagado!");

              //Pesquisa e remove um elemento específico por valor

              $("#tr_" + id).remove();
          }
      }

  </script>




  @if (!empty($quote))
      <script>
          function listEditPartNumber(id) {

              //id do quote
              idQuote = id;
              arrPartNumbers[contador] = id;

              $.ajax({
                  type: "GET",
                  url: "http://127.0.0.1:8000/editListPartNumberInQuotes/" + id,
                  dataType: "json",
                  encode: true,
              }).done(function(data) {
                  console.log(data);
                  jQuery.each(data, function(index, item) {

                      arrPartNumbers[index] = item.id;

                      //     console.log(item.id);
                      $("#append-partnumbers").append(
                          "<tr id='tr" + index + "'>" +
                          "<td>" + item.nameParNumber + "</td>" +
                          "<td>" + item.sow + "</td>" +
                          "<td>" + item.typePartNumber + "</td>" +
                          "<td>R$ " + item.valor + "</td>" +
                          "<td>" + item.horasQuantidade + "</td>" +
                          "<td>" +
                          "<a href='#' title='Editar'>" +
                          "<i class='far fa-edit'></i>" +
                          "</a>" +
                          " <a href='#' title='Deletar' onclick='deletarPN(" + index + "," + item
                          .id +
                          ")'><i class='fas fa-trash-alt  ml-2 text-danger'></i></a>" +
                          " </td>" +
                          "</tr>"
                      ); //fim do append
                      getExpenses(item.id);
                  }); //jQuery.each


              });

              contador++;
          }



          //deleta o partNumber da lista
          function deletarPN(cont, id) {

              var r = confirm("Certeza que deseja apagar esse PartNumber?");
              if (r == true) {
                  // alert("Apagado!");

                  //Pesquisa e remove um elemento específico por valor
                  arrPartNumbers.splice(arrPartNumbers.indexOf(id), 1);
                  $("#tr" + cont).remove();
              }
          }




          function selectPart(id) {

              //alert('aqui');
              arrPartNumbers[contador] = id;

              $.ajax({
                  type: "GET",
                  url: "http://127.0.0.1:8000/seachPartNumberInQuote/" + id,
                  dataType: "json",
                  encode: true,
                }).done(function(data) {

                    console.log("retorno seaach: " + data);
                  console.log(Object.values(data));
                  $("#append-partnumbers").append(
                      "<tr id='tr" + contador + "'>" +
                        "<td>" + data.nameParNumber + "</td>" +
                        "<td>" + data.sow + "</td>" +
                        "<td>" + data.typePartNumber + "</td>" +
                        "<td>R$" + data.valor + "</td>" +
                        "<td>1</td>" +
                        "<td>" +
                            "<a href='#' title='Editar'>" +
                                "<i class='far fa-edit'></i>" +
                                "</a>" +
                                " <a href='#' title='Deletar' onclick='deletarPN(" + contador + "," + data.id +
                                ")'><i class='fas fa-trash-alt  ml-2 text-danger'></i></a>" +
                                " </td>" +
                                "</tr>"
                                ); //fim do append

                                getExpenses(data.id);
                            });


                            $("#myModal").modal('hide');

                            contador++;
           }

          listEditPartNumber('{{$quote->id}}');


      </script>
  @endif

  <script>

          //EDIÇÃO
 function montaEditUF() {

    $.ajax({
        type: 'POST',
        url: 'http://api.londrinaweb.com.br/PUC/Estados/BR/0/10000',
        contentType: "application/json; charset=utf-8",
        dataType: "jsonp",
        async: true
    }).done(function (response) {
        estados = '';

        estados += "<option disabled>Selecione o estado</option>";
        $.each(response, function (e, estado) {
            selecionado = '';
             uf = "{{ $editpsc->install_place }}";
           console.log('uf estado '+uf);
           if(uf==estado.UF)
                selecionado = 'selected';

            estados += '<option '+selecionado+' value="' + estado.UF + '">' + estado.UF + '</option>';
        });

        $('#editestado').html(estados);

        montaEditCidade(uf);

       // montaEditCidade($('#editestado').val(), "BR");
        $('#editestado').change(function () {
            montaEditCidade($(this).val());
        });


        // $("select#editestados option:selected").each(function() {
        //   alert('faz algo');
        // });
    });

}

montaEditUF();


function montaEditCidade(estado) {
    $.ajax({
        type: 'POST',
        url: 'http://api.londrinaweb.com.br/PUC/Cidades/' + estado + '/BR/0/10000',
        contentType: "application/json; charset=utf-8",
        dataType: "jsonp",
        async: true
    }).done(function (response) {
        cidades = '';

        cidades += '<option disabled>Selecione a cidade</option>'
        $.each(response, function (c, cidade) {
            selecionado = '';
            city = "{{ $editpsc->city }}";
            if(city==cidade)
                selecionado = 'selected';

            cidades += '<option '+selecionado+' value="' + cidade + '">' + cidade + '</option>';

        });
        $('#editcidade').html(cidades);
    });
}


//EDIÇÃO

      $("#editcidade").on("change", function() {

          $('#lead').prop('disabled', false)
          $('#client_name').prop('disabled', false)
          $('#account_manager').prop('disabled', false)
          $('#part_number_id').prop('disabled', false)
          $('#ver_mais').attr('data-target', '#myModal')
          $('#ver_mais').removeAttr('style')

      })

  </script>

  @stop()
  @endsection

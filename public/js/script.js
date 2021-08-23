function reload() {
    document.location.reload(true);
}
String.prototype.reverse = function () {
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
$(document).ready(function () {
    $('#example').DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.24/i18n/Portuguese-Brasil.json",
            "emptyTable": 'oo',
        }
    });
});
$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').focus()
})

function montaCidade(estado) {
    $.ajax({
        type: 'POST',
        url: 'http://api.londrinaweb.com.br/PUC/Cidades/' + estado + '/BR/0/10000',
        contentType: "application/json; charset=utf-8",
        dataType: "jsonp",
        async: true
    }).done(function (response) {
        cidades = '';

        cidades += '<option selected disabled>Selecione a cidade</option>'
        $.each(response, function (c, cidade) {

            cidades += '<option value="' + cidade + '">' + cidade + '</option>';

        });
        $('#cidade').html(cidades);
    });
}

function montaUF() {

    $.ajax({
        type: 'POST',
        url: 'http://api.londrinaweb.com.br/PUC/Estados/BR/0/10000',
        contentType: "application/json; charset=utf-8",
        dataType: "jsonp",
        async: true
    }).done(function (response) {
        estados = '';
        estados += "<option selected disabled>Selecione o estado</option>";
        $.each(response, function (e, estado) {
            estados += '<option value="' + estado.UF + '">' + estado.UF + '</option>';
        });

        $('#estado').html(estados);
        montaCidade($('#estado').val(), "BR");
        $('#estado').on('change', function () {
            montaCidade($(this).val(), "BR");
        });
    });

}



function montaPais() {
    $.ajax({
        type: 'POST',
        url: 'http://api.londrinaweb.com.br/PUC/Paisesv2/0/1000',
        contentType: "application/json; charset=utf-8",
        dataType: "jsonp",
        async: true
    }).done(function (response) {
        montaUF($().val());
        $().change(function () {
            $('#estado').remove();
            $('#cidade').remove();
            $('#campo_estado').append('<select id="estado"></select>');
            $('#campo_cidade').append('<select id="cidade"></select>');
            montaUF('BR');
        })
    });
}
montaPais();

var typesubmit = "add";
var idExpense = 0;

$(document).on('click', '.edit-modal', function () {
    $('#myModal').modal('show');
    typesubmit = "edit";

    $('.modal-title').text('Atualizar Despesa');
    $('.form').prop('id', 'edit-form');
    $('.text-btn').text("Editar Despesa");
    $('#fid').val($(this).data('id'));
    $('#nameExpenses').val($(this).data('nameexpenses'));
    $('#nacional_expense').val($(this).data('nacional_expense'));

    if ($(this).data('nacional_expense')) {
        $("#estado").hide();
        $("#cidade").hide();
        $("#campo_estado").hide();
        $("#campo_cidade").hide();
        $('#nacional_expense').attr('checked', true);
    } else {
        $("#estado").show();
        $("#cidade").show();
        $("#campo_estado").show();
        $("#campo_cidade").show();
        $('#nacional_expense').attr('checked', false);
    }
    // $('#categoryexpenses').val($(this).data('category'));
    $("#categoryexpenses option:contains('" + $(this).data('category') + "')").attr('selected', true);
    $('#valueexpenses').val($(this).data('value'));
    $('.stateexpenses').val($(this).data('state'));
    $('.cityexpenses').val($(this).data('city'));

    idExpense = $(this).data('id');
});
$(document).on('click', '.add-modal', function () {

    typesubmit = "add";

    $('.form').prop('id', 'add-form');
    $('.text-btn').text("Cadastrar Despesa");
    $('.modal-title').text('Nova Despesa');
    $('#fid').val($(this).data('id'));
    $('#nameexpenses').val("");
    $('#categoryexpenses').val("");
    $('#valueexpenses').val("");
    $('.stateexpenses').val("");
    $('.cityexpenses').val("");
    $('.actionBtn').removeClass('btn-danger');
    $('#myModal').modal('show');
});


$('form#add-form').submit(function (dados) {

    if (typesubmit == 'add') {

        console.log("pra adicionar");
        //  console.log(dados);
        var checado = 0;

        if ($('#nacional_expense').is(":checked")) {
            checado = 1;
        }

        var formData = {
            _method: 'POST',
            nameExpenses: $("#nameExpenses").val(),
            category: $("#categoryexpenses").val(),
            value: $("#valueexpenses").val(),
            nacional_expense: checado,
            state: $("#estado").val(),
            city: $("#cidade").val()
        };

        $.ajax({
            type: "POST",
            url: url + "/expenses",
            data: formData,
            dataType: "json",
            encode: true,
        }).done(function (data) {

            console.log(data);
            if (data.success) {

                $('.msg-despesa').show();
                $('.msg-despesa').removeClass('btn-danger');
                $('.msg-despesa').addClass('btn-success');
                $('.msg-despesa').html(data.msg);
                document.location.reload(true);
                //  console.log("Mensagem: "+data.msg);
            } else {
                $('.msg-despesa').show();
                $('.msg-despesa').removeClass('btn-success');
                $('.msg-despesa').addClass('btn-danger');
                $('.msg-despesa').html(data.msg);
            }
        }).fail(function (response) {

            //console.log(response.responseJSON.errors);
            let boxalert = '';
            let erros = response.responseJSON.errors;
            for (let fields in erros) {
                boxalert += "<p>" + erros[fields] + "</p>";
            }
            // console.log(response);
            $('.msg-despesa').show();
            $('.msg-despesa').removeClass('btn-success');
            $('.msg-despesa').addClass('btn-danger');
            $('.msg-despesa').html(boxalert);
        });

        dados.preventDefault();
    } else {

        // console.log("Di: "+idExpense);

        var checado = 0;

        if ($('#nacional_expense').is(":checked")) {
            checado = 1;
        }

        var formData = {
            _method: 'PUT',
            nameExpenses: $("#nameExpenses").val(),
            category: $("#categoryexpenses").val(),
            value: $("#valueexpenses").val(),
            nacional_expense: checado,
            state: $("#estado").val(),
            city: $("#cidade").val()
        };

        $.ajax({
            url: url + "/expenses/" + idExpense,
            type: 'post',
            data: formData,
            dataType: 'json',
            success: function (response) {
                if (response.success === true) {
                    window.location.href = "expenses";

                } else if (response.success === false) {

                    $('.msg-despesa').show();
                    $('.msg-despesa').removeClass('btn-success');
                    $('.msg-despesa').addClass('btn-danger');
                    $('.msg-despesa').html(response.msg);
                    console.log("Error");
                }
            }

        });

    }

    //  id =$('.edit-modal').data('id');

    dados.preventDefault();

});


// $('#edit-form').submit(function (dados) {
//       //  id =$('.edit-modal').data('id');
//         console.log("pra editar");
//         dados.preventDefault();
//         // $.ajax({
//         //     url: "expenses/" + id,
//         //     type: 'post',
//         //     data: $(this).serialize(),
//         //     dataType: 'json',
//         //     success: function (response) {
//         //         if (response.success === true) {
//         //             window.location.href = "expenses";
//         //         } else if (response.success === false) {
//         //             console.log("Error");
//         //         }
//         //     }

//         // });
//     });

// $('#buttonSelect').hide();
// $('#nameparnumberSelect').hide();
// $('#descriptionSelect').hide();
// $('#sowSelect').hide();
// $('#servicoSelect').hide();
// $('#unidadeSelect').hide();
// $('#modalidadeSelect').hide();
// $('#horasQuantidadeSelect').hide();
// $('#bu1Select').hide();
// $('#bu2Select').hide();
// $('#servicoISESelect').hide();
// $('#horaSelect').hide();
// $('#horaSelectIpm').hide();
// $('#ipmSelect').hide();
// $('#analistaJuniorSelect').hide();
// $('#analistaPlenoSelect').hide();
// $('#analistaSeniorSelect').hide();
// $('#analistaMasterSelect').hide();
// $('#ipmJuniorSelect').hide();
// $('#ipmPlenoSelect').hide();
// $('#ipmSeniorSelect').hide();
// $('#ipmMasterSelect').hide();
// $('#inptExpenses').hide();
// $('#tblExpenses').hide();


// $('#fabricanteSelect').hide();
// $('#grupoSelect').hide();
// $('#familiaSelect').hide();
// $('#tipoSelect').hide();
// $('#DocumentTypeSelect').addClass('col-sm-12');
// $('#DocumentType').change(function (e) {
//     let opcaoSelecionada = this.querySelector('option:checked');
//     if (opcaoSelecionada.dataset.tipo === 'IMS') {
//         $('.modal-title').text('Novo PartNumber - IMS');
//         $('#DocumentTypeSelect').removeClass('col-sm-12');
//         $('#DocumentTypeSelect').addClass('col-sm-6');
//         $('#nameparnumberSelect').show();
//         $('#sowSelect').show();
//         $('#servicoSelect').show();
//         $('#unidadeSelect').show();
//         $('#modalidadeSelect').show();
//         $('#horasQuantidadeSelect').show();
//         $('#bu1Select').show();
//         $('#bu2Select').show();
//         $('#buttonSelect').show();

//         //ISE
//         $('#descriptionSelect').hide();
//         $('#servicoISESelect').hide();
//         $('#horaSelect').hide();
//         $('#horaSelectIpm').hide();
//         $('#ipmSelect').hide();
//         $('#analistaJuniorSelect').hide();
//         $('#analistaPlenoSelect').hide();
//         $('#analistaSeniorSelect').hide();
//         $('#analistaMasterSelect').hide();
//         $('#ipmJuniorSelect').hide();
//         $('#ipmPlenoSelect').hide();
//         $('#ipmSeniorSelect').hide();
//         $('#ipmMasterSelect').hide()
//         $('#fabricanteSelect').hide();
//         $('#grupoSelect').hide();
//         $('#familiaSelect').hide();
//         $('#tipoSelect').hide();
//         $('#inptExpenses').hide();
//         $('#tblExpenses').hide();

//     } else if (opcaoSelecionada.dataset.tipo === 'ISE') {
//         $('.modal-title').text('Novo PartNumbers - ISE');
//         $('#DocumentTypeSelect').removeClass('col-sm-12');
//         $('#DocumentTypeSelect').addClass('col-sm-6');
//         $('#nameparnumberSelect').show();
//         $('#sowSelect').show();
//         $('#descriptionSelect').show();
//         $('#servicoISESelect').show();
//         $('#horaSelect').show();
//         $('#horaSelectIpm').show();
//         $('#ipmSelect').show();
//         $('#analistaJuniorSelect').show();
//         $('#analistaPlenoSelect').show();
//         $('#analistaSeniorSelect').show();
//         $('#analistaMasterSelect').show();
//         $('#ipmJuniorSelect').show();
//         $('#ipmPlenoSelect').show();
//         $('#ipmSeniorSelect').show();
//         $('#ipmMasterSelect').show()
//         $('#fabricanteSelect').show();
//         $('#grupoSelect').show();
//         $('#familiaSelect').show();
//         $('#tipoSelect').show();
//         $('#bu1Select').show();
//         $('#bu2Select').show();
//         $('#buttonSelect').show();
//         $('#inptExpenses').show();
//         $('#tblExpenses').show();

//         //IMS
//         $('#servicoSelect').hide();
//         $('#unidadeSelect').hide();
//         $('#modalidadeSelect').hide();
//         $('#horasQuantidadeSelect').hide();
//     }
//     else {
//         $('.modal-title').text('Novo PartNumber');
//         $('#DocumentTypeSelect').removeClass('col-sm-6');
//         $('#DocumentTypeSelect').addClass('col-sm-12');
//         $('#nameparnumberSelect').hide();
//         $('#descriptionSelect').hide();
//         $('#sowSelect').hide();
//         $('#servicoSelect').hide();
//         $('#unidadeSelect').hide();
//         $('#buttonSelect').hide();
//         $('#modalidadeSelect').hide();
//         $('#horasQuantidadeSelect').hide();
//         $('#bu1Select').hide();
//         $('#bu2Select').hide();
//         $('#servicoISESelect').hide();
//         $('#ipmSelect').hide();
//         $('#horaSelect').hide();
//         $('#horaSelectIpm').hide();
//         $('#analistaJuniorSelect').hide();
//         $('#analistaPlenoSelect').hide();
//         $('#analistaSeniorSelect').hide();
//         $('#analistaMasterSelect').hide();
//         $('#ipmJuniorSelect').hide();
//         $('#ipmPlenoSelect').hide();
//         $('#ipmSeniorSelect').hide();
//         $('#ipmMasterSelect').hide()
//         $('#fabricanteSelect').hide();
//         $('#inptExpenses').hide();
//         $('#tblExpenses').hide();
//         $('#grupoSelect').hide();
//         $('#familiaSelect').hide();
//         $('#tipoSelect').hide();
//     }
// });

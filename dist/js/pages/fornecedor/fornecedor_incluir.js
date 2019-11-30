$(function () {
    'use strict';

    var tipoDocumento = $("#divTipoDocumento");
    var nomeRazaoSocial = $("#divNomeRazaoSocial");
    var nomeFantasia = $("#divNomeFantasia");
    var inscricaoEstadual = $("#divInscricaoEstadual");

    tipoDocumento.hide();
    nomeRazaoSocial.hide();
    nomeFantasia.hide();
    inscricaoEstadual.hide();


    $(document).on('click', 'input[type=radio]', function () {
        var id = $(this).prop('id');
        mostrarInput(id);
    });

    function mostrarInput(id) {
        switch (id) {
            case 'pf':
                $('#divTipoDocumento label').text('CPF');
                $('#divTipoDocumento label').prop('for', 'cpf');
                $('#divTipoDocumento input').prop('name', 'cpf')
                                            .prop('id', 'cpf')
                                            .mask('000.000.000-00');
                tipoDocumento.show();
                $('#divNomeRazaoSocial label').text('Nome')
                                              .prop('for','nome');
                $('#divNomeRazaoSocial input').prop('name', 'nome')
                                              .prop('id', 'nome');
                nomeRazaoSocial.show();
                nomeFantasia.hide();
                inscricaoEstadual.hide();
            
                break;
            case 'pj':
                $('#divTipoDocumento label').text('CNPJ');
                $('#divTipoDocumento input').prop('name', 'cnpj');
                $('#divTipoDocumento input').prop('id', 'cnpj');
                tipoDocumento.show();
                $('#divNomeRazaoSocial label').text('Razao Social');
                $('#divNomeRazaoSocial label').prop('for','razaoSocial');
                $('#divNomeRazaoSocial input').prop('name', 'razaoSocial');
                $('#divNomeRazaoSocial input').prop('id', 'razaoSocial');
                nomeRazaoSocial.show();
                $('#divNomeFantasia label').text('Nome Fantasia');
                $('#divNomeFantasia label').prop('for','nomeFantasia');
                $('#divNomeFantasia input').prop('name', 'nomeFantasia');
                $('#divNomeFantasia input').prop('id', 'nomeFantasia');
                nomeFantasia.show();
                $('#divInscricaoEstadual label').text('Insc. Estadual');
                $('#divInscricaoEstadual label').prop('for','inscricaoEstadual');
                $('#divInscricaoEstadual input').prop('name', 'inscricaoEstadual');
                $('#divInscricaoEstadual input').prop('id', 'inscricaoEstadual');
                inscricaoEstadual.show();
                break;
            default:
                break;
        }
    }

});

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>My PHP | Home</title>
    <?php require_once "dist/css/css.php";?>
    <link rel="stylesheet" href="dist/css/inputLoading.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- INICIO Navbar -->
        <?php 
        
        require_once "layout/navbar.php";?>
        <!-- FIM navbar -->

        <!-- INICIO Main Sidebar Container -->
        <?php require_once "layout/mainSideBar.php";?>
        <!-- FIM Main Sidebar Container -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Cadastrar fornecedor</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Cadastrar</li>
                                <li class="breadcrumb-item active">Fornecedor</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Dados do Fornecedor</h5>
                                </div>
                                <form role="form" name="formCadastrarFornecedor" action="processa_cadastro.php"
                                    method="POST">
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Estabelecimento</label>
                                                    <div class="form-check">
                                                        <input id="pf" class="form-check-input" type="radio"
                                                            name="tipoPessoa">
                                                        <label for="pf" class="form-check-label">Pessoa Física</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input id="pj" class="form-check-input" type="radio"
                                                            name="tipoPessoa">
                                                        <label for="pj" class="form-check-label">Pessoa Jurídica</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2" id="divTipoDocumento">
                                                <div class="form-group">
                                                    <label></label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-3" id="divNomeRazaoSocial">
                                                <div class="form-group">
                                                    <label></label>
                                                    <input type="text" class="form-control" name="nome">
                                                </div>
                                            </div>
                                            <div class="col-md-3" id="divNomeFantasia">
                                                <div class="form-group">
                                                    <label></label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-2" id="divInscricaoEstadual">
                                                <div class="form-group">
                                                    <label></label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>CEP</label>
                                                    <input name="cep" type="text" class="form-control cep" id="cep">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Logradouro</label>
                                                    <input name="logradouro" type="text" class="form-control loading" id="logradouro">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Número</label>
                                                    <input name="numero" type="text" class="form-control" id="numero"
                                                        data-mask="S00.0">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Bairro</label>
                                                    <input name="bairro" type="text" class="form-control loading" id="bairro">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Cidade</label>
                                                    <input name="cidade" type="text" class="form-control" id="cidade">
                                                </div>
                                            </div>

                                        </div>


                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                                        <button type="reset" class="btn btn-link">Limpar formulário</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <?php require_once "layout/controlSideBar.php";?>
        <!-- /.control-sidebar -->

        <!-- #region Footer -->
        <?php require_once "layout/footer.php";?>
        <!-- #endregion Footer -->
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <?php require_once "dist/js/javascript.php";?>
    <script src="dist/js/pages/fornecedor/fornecedor_incluir.js"></script>
    <script src="dist/js/viacep.js"></script>
    <script src="dist/js/meuInputMask.js"></script>
</body>

</html>
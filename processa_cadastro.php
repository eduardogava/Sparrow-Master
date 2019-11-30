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
    <?php require_once("dist/css/css.php"); ?>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- INICIO Navbar -->
        <?php require_once("layout/navbar.php"); ?>
        <!-- FIM navbar -->

        <!-- INICIO Main Sidebar Container -->
        <?php require_once("layout/mainSideBar.php"); ?>
        <!-- FIM Main Sidebar Container -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Starter Page</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Starter Page</li>
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
                        <?php
                            var_dump($_POST);

                            foreach ($_POST as $dado) {
                                echo "<br>$dado";
                            }

                            // if(isset($_POST["nome"])){
                            //     $nome = $_POST["nome"];
                            // }
                            // if(isset($_POST["razaoSocial"])){
                            //     $razaoSocial = $_POST["razaoSocial"];
                            // }
                            // if(isset($_POST["nomeFantasia"])){
                            //     $nomeFantasia = $_POST["nomeFantasia"];
                            // }
                            // if(isset($_POST["inscricaoEstadual"])){
                            //     $inscricaoEstadual = $_POST["inscricaoEstadual"];
                            // }
                            // if(isset($_POST["cpf"])){
                            //     $cpf = $_POST["cpf"];
                            // }
                                
                            // if(isset($_POST["cnpj"])){
                            //     $cnpj = $_POST["cnpj"];
                            // }
                            // if(isset($_POST["cep"])){
                            //     $cep = $_POST["cep"];
                            // }
                            // if(isset($_POST["logradouro"])){
                            //     $logradouro = $_POST["logradouro"];
                            // }
                            
                        
                        
                        ?>

                        <div class="col-md-3"></div>
                        <div class="col-md-3"></div>
                        <div class="col-md-3"></div>
                        <div class="col-md-3"></div>
                    </div>
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <?php require_once("layout/controlSideBar.php"); ?>
        <!-- /.control-sidebar -->

        <!-- #region Footer -->
        <?php require_once("layout/footer.php"); ?>
        <!-- #endregion Footer -->
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <?php require_once("dist/js/javascript.php");?>
</body>

</html>
<!DOCTYPE html>
<!-- FALTA COMENTAR NA PAGINA INTEIRA-->
<?php
session_start();
?>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Perfil - TecEstagio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="estilo/estilo.css">
    <link rel="shortcut icon" href="img/favicon.ico">
</head>

<body style="background-color: #e6e6e6">

    <!-- M e n u - e - L o g o -->

    <nav class="navbar fixed-top navbar-expand-md navbar-light shadow p-3 mb-5 bg-white">

        <!-- E m a i l - d a - P e s s o a -->

        <ul style="margin: 0; padding: 0; list-style-type: none;">
            <li class="text-center">
                <h6 class="fixed-top text-center text-capitalize">
                    <?php
                    if (isset($_SESSION['usuario'])) {
                        echo  "Email: " . $_SESSION['usuario'];
                    } else {
                        echo "<a class='btn text-danger btn-sm' href='cadastro.php'>CADASTRE-SE</a>";
                    }
                    ?>
                </h6>
            </li>
        </ul>

        <!-- L o g o t i p o -->

        <div class="container">
            <a class="navbar-brand text-primary" href="index.php">
                <img src="img/logo.png" width="180px" height="40px" class="">
                <b></b>
            </a>

            <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar4">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- M e n u - E s c r i t o -->

            <div class="collapse navbar-collapse" id="navbar4">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="servicos.php">Serviços</a>
                    </li>
                    <li class="nav-item pl-1"> <a class="nav-link" href="sobre.php">Sobre</a> </li>

                    <!--Mudar Botão Cadastro -->

                    <?php
                    if (!isset($_SESSION['usuario'])) {
                        echo '<li class="nav-item"> <a class="nav-link" href="cadastro.php">Cadastro</a> </li></ul>';
                    } else {
                        echo '<li class="nav-item"> <a class="nav-link text-warning" href="#">Perfil</a> </li></ul>';
                    }
                    ?>

                    <!--Mudar Botão Login / Logout-->

                    <?php
                    if (!isset($_SESSION['usuario'])) {
                        echo '<a class="btn navbar-btn ml-md-2 btn-success font-weight-bold" href="login.php"><i class="fa fa-sign-in px-0 mr-1" aria-hidden="true"></i>Login</a>';
                    } else {
                        echo '<a class="btn navbar-btn ml-md-2 btn-danger font-weight-bold" href="../controller/logoul.php"><i class="fa fa-sign-out px-0 mr-1" aria-hidden="true"></i>Sair</a>';
                    }
                    ?>
            </div>
        </div>
    </nav>

        <!-- Título -->

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="display-2 text-center mt-5 pt-5">Perfil</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- Informações do Cliente -->

    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-sm-12 card bg-light shadow-lg p-3 mb-5 rounded">

                <img src="img/Gabriel.jpg" alt="foto de perfil" width="100%" class="border border-info rounded mt-3">
                <div class="card-body">

                    <div class="text-right">

                        <a href="#">Editar</a>
                    </div>

                    <h1>Gabriel Dias</h1>

                    <hr>

                    <h6 class="lead"><strong>Data de Nascimento: </strong></h6>
                    <p class="">26/08/2019</p>
                    <h6 class="lead"><strong>Curso: </strong></h6>
                    <p>Informatica para Internet</p>
                    <hr>
                    <h6 class="lead"><strong>Email: </strong></h6>
                    <p>gabriel.dias126@etec.sp.gov.br</p>
                    <h6 class="lead"><strong>RM: </strong></h6>
                    <p>22585</p>
                    <hr>
                    <h6 class="lead"><strong>Cidade: </strong></h6>
                    <p>Mogi Mirim</p>
                    <h6 class="lead"><strong>Telefone: </strong></h6>
                    <p>(19) 9 8169-5448</p>
                    <hr>
                    <div class="text-right">
                        <a href="#">Alterar Senha</a>
                    </div>
                    <h6 class="lead"><strong>Senha: </strong></h6>
                    <p type="password">********</p>

                </div>
            </div>

            <!-- Currículo do cliente -->

            <div class="col-xl-9 col-lg-8 col-sm-12 card bg-light shadow-lg p-3 mb-5 rounded">
                <img class="border border-info mt-3 rounded" src="img/currículo.jpg" alt="foto do currículo cadastrado ao site">

                <div class="text-right mt-4">
                    <a href="#" type="file">Anexar novo Currículo</a><br>
                    
                </div>

            </div>
        </div>
    </div>

    <!-- R o d a p é - C o m p l e t o -->

    <div style="margin-top: 50px;"></div>

    <div class="py-3 text-left shadow p-3 mb-5 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-6 p-3">
                    <h5>
                        <b>Serviços</b>
                    </h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="index.php" class="text-danger">Inicio</a>
                        </li>
                        <li>
                            <a href="cadastro.php" class="text-danger">Cadastro</a>
                        </li>
                        <li>
                            <a href="login.php" class="text-danger">Login</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-6 p-3">
                    <h5>
                        <b>Sobre Nós</b>
                    </h5>
                    <ul class="list-unstyled">
                        <li class="">
                            <a href="sobre.php" class="text-danger">Sobre</a>
                        </li>
                        <li>
                            <a href="servicos.php" class="text-danger">Serviços</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 p-3">
                    <h5>
                        <b>Sobre</b>
                    </h5>
                    <p class="mb-0"> Somos uma empresa voltada para divulgação de vagas de ESTAGIO para alunos da ETEC -
                        Pedro Ferreira Alves</p>
                </div>

                <!-- R e d e s - S o c i a i s -->

                <div class="col-lg-3 col-md-6 p-3">

                    <h5>
                        <b>Siga-nos</b>
                    </h5>

                    <div class="row">
                        <div class="col-md-12 d-flex align-items-center justify-content-between my-2">
                            <a href="#">
                                <i class="d-block fa fa-facebook text-muted fa-lg mr-2"></i>
                            </a>

                            <a href="#">
                                <i class="d-block fa fa-instagram text-muted fa-lg mx-2"></i>
                            </a>

                            <a href="#">
                                <i class="d-block fa fa-twitter text-muted fa-lg ml-2"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <!-- F i n a l -->

            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="mb-2">WebSoft © 2019. Todos os Direitos Reservados</p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>
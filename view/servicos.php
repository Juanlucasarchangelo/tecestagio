<!DOCTYPE html>

<?php
require_once("../model/class.dao.php");
require_once("../controller/ControllerFunc.php");
session_start();
?>
<html lang="pt-br">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <title>Serviços - TecEstagio</title>
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
          <li class="nav-item"> <a class="nav-link" href="index.php">Início</a> </li>
          <li class="nav-item">
            <a class="nav-link" href="servicos.php">Serviços</a>
          </li>
          <li class="nav-item pl-1"> <a class="nav-link" href="sobre.php">Sobre</a> </li>
          <!--Mudar Botão Cadastro -->

          <?php
          if (!isset($_SESSION['usuario'])) {
            echo '<li class="nav-item"> <a class="nav-link" href="cadastro.php">Cadastro</a> </li></ul>';
          } else {
            echo '<li class="nav-item"> <a class="nav-link text-warning" href="perfil.php">Perfil</a> </li></ul>';
          }
          ?>

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

  <!-- B u s c a d o r - e - E s c o l h a - d a - Á r e a -->

  <div class="" style="margin-top: 140px;">
    <div class="container">
      <div class="text-center mb-5">
      <h1 class="display-3">Vagas de Estágio</h1>
      </div>
      <div class="row">
        <div class="col-md-12">

          <!-- B u s c a d o r -->

          <form class="form-inline" action="">
            <div class="input-group mx-auto py-3 w-50">
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Search">
              <div class="input-group-append"><button class="btn btn-danger" type="button"><i class="fa fa-search"></i></button></div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- L o c a l - d a s - V a g a s -->

  <div class="py-4 text-center">
    <div class="container">
      <div class="row">
        <?php
        require_once("../controller/ControllerFunc.php");
        $objControllerFunc = new ControllerFunc();
        $objControllerFunc->getTodosFunc();
        ?>
      </div>
    </div>
  </div>
  <!-- A d i c i o n a r - V a g a s -->

  <?php
  if (isset($_SESSION['usuario'])) {
    if ($_SESSION['usuario'] == "admin@etec.com") {
      echo
        "<div class='py-4 text-center'>
      <div class='container'>
        <div class='row'>
          <div class='col-lg-12 p-3'>
            <div class='card border-info'>
              <div class='card-body p-4'>
                <img class='img-fluid d-block mb-3 mx-auto rounded-circle' src='img/adicionar.png' width='150'>
                <h2>Adicionar Vaga<br></h2>
                <a href='cadastrovaga.php' class='btn my-2 btn-success text-dark'>Adicionar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>";
    } else {
      echo "<div></div>";
    }
  }
  ?>

  <!-- C a d a s t r o - e - B o t ã o -->

  <?php
  if (isset($_SESSION['usuario'])) {
    echo  "<div></div>";
  } else {
    echo '<div class="py-4">
    <div class="container">
      <div class="row">
        <div class="ml-auto col-lg-7 text-center text-lg-left">

          <h1>Cadastre seu E-mail</h1>
          <p class="mb-0">Para mais informações cadastre seu email e fique por dentro de tudo!</p>

        </div>

        <div class="col-lg-4 d-flex justify-content-center align-items-center p-3">
          <form class="form-inline mb-0" id="formEmail" method="POST">

            <div class="input-group"> <input type="email" class="form-control" placeholder="Seu E-Mail" id="email" required>
              <div class="input-group-append">
                <button class="btn btn-danger font-weight-bold" type="submit">Inscrever-se</button>
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>';
  }
  ?>

  <!-- R o d a p é - C o m p l e t o -->

  <div class="py-3 text-left shadow p-3 mb-5 bg-white" style="margin-top: 80px;">

    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-6 p-3">

          <h5>
            <b>Home</b>
          </h5>

          <ul class="list-unstyled">
            <li>
              <a href="index.php" class="text-danger">Início</a>
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
            <b>Vagas</b>
          </h5>

          <ul class="list-unstyled">
            <li>
              <a href="servicos.php" class="text-danger">Serviços</a>
            </li>
          </ul>

        </div>

        <div class="col-lg-3 col-md-6 p-3">

          <h5>
            <b>Sobre</b>
          </h5>

          <p class="mb-2">A Websoft surgiu da ideia de 5 alunos do curso de Técnico em Informática para Internet com o intuito de criar uma empresa de desenvolvimento web <a href="sobre.php"><i>Ler mais...</i></a></p>

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

          <p class="mt-2">WebSoft © 2019. Todos os Direitos Reservados</p>

        </div>
      </div>

    </div>
  </div>

  <!-- M O D A L -->
  <div class="modal fade" id="siteModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Cadastre-se</h5>
          <button type="button" class="close" data-dismiss="modal">
            <span>×</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit ab ipsum suscipit asperiores harum veniam
            sunt doloremque, hic obcaecati deserunt porro, nisi eligendi temporibus neque quae delectus reiciendis est
            repudiandae?</p>
          <div class="container-fluid">
            <div class="row">
              <div class="col-6">
                <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h5>
              </div>
              <div class="col-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal"> Fechar </button>
        </div>
      </div>
    </div>
  </div>

  <!-- C a n d i d a t a r - s e -->
  <div class="modal fade" id="siteCad" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Candidatar-se</h5>
          <button type="button" class="close" data-dismiss="modal">
            <span>×</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="cadastro" name="cadastro" method="POST">
            <div class="form-group col-md-12">
              <input type="text" class="form-control" placeholder="Nome Completo" id="nomeS" name="nomeS" required="">
            </div>
            <div class="container-fluid">
              <div class="row">
                <div class="form-group col-md-6">
                  <input type="email" class="form-control" placeholder="E-mail" id="email" name="email" required="">
                </div>
                <div class="form-group col-md-6">
                  <input type="password" class="form-control" placeholder="Senha" id="senha" name="senha" required="">
                </div>
              </div>
            </div>
            <div class="container-fluid">
              <div class="row">
                <div class="col-6">
                  <!--<div class="form-group">
                        <label style="background-color: #dc3545; border-radius: 5px; color: #fff; cursor: pointer; margin: 10px; padding: 6px 20px;" for='selecao-arquivo'>Anexar Currículo</label>
                        <input id='selecao-arquivo' type='file' required style="display: none;">
                    </div>-->
                  <div class="form-group">
                    <label>Anexar Currículo: </label>
                    <input id="selecao-arquivo" type="file" required="">
                  </div>
                </div>
              </div>
              <div class="col-12">
                <label>Mensagem: </label>
                <textarea maxlength="500" id="coment" rows="5" cols="100" style="-webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; width: 100%;">
                </textarea>
              </div>
            </div>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6">
                  <button type="reset" class="btn btn-danger ml-2 mt-3">Limpar</button>
                  <button type="submit" class="btn btn-primary ml-2 mt-3">Enviar</button>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal"> Fechar </button>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <!-- M A S C A R A - E M - J A V A S C R I P T -->

  <script type="text/javascript">
    $(document).ready(function() {
      $("#formEmail").validate({
        rules: {
          email: {
            email: true
          }
        }
      })
    })
  </script>
</body>

</html>
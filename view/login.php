<!DOCTYPE html>
<?php
session_start();
?>
<html lang="pt-br">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <title>Entrar - TecEstagios</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="estilo/estilo.css">
  <link rel="shortcut icon" href="img/favicon.ico">
</head>

<body style="background-color: #e6e6e6">

  <!-- M e n u - e - L o g o -->

  <nav class="navbar fixed-top navbar-expand-md navbar-light shadow p-3 mb-5 bg-white ">

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
            <a class="nav-link" href="index.php">Início</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="servicos.php">Serviços</a>
          </li>

          <li class="nav-item pl-1">
            <a class="nav-link" href="sobre.php">Sobre</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="cadastro.php">Cadastro</a>
          </li>

        </ul>

        <!-- B o t ã o - L o g i n -->

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

  <!-- E s p a ç o -->

  <div class="" style="margin-top: 50px;">

    <!-- M e n s a g e m -->

    <div class="py-2 text-center">
      
    </div>

    <!-- L o g i n - e - I m a g e m -->

    <div class="py-5 text-center my-3" style="background-image: url('img/login.jpg') ;background-size:cover; background-position: center">
      <div class="container">
        <div class="row">
          <div class="mx-auto col-md-6 col-10 bg-white p-5">

            <h1 class="mb-4">Login</h1>

            <!-- M e n s a g e m - d e - E r r o -->

            <?php
            if (isset($_SESSION['nao_autenticado'])) :
              ?>

              <div class="notification text-danger">
                <p>ERRO: Usuário ou senha inválidos.</p>
              </div>

            <?php
            endif;
            unset($_SESSION['nao_autenticado']);
            ?>

            <!-- F o r m - E n t r a r -->

            <form id="formLogin" action="../controller/login_action.php" name="formLogin" method="POST">

              <div class="form-group">
                <input type="email" class="form-control" placeholder="Email" id="email" name="email" required>
              </div>

              <div class="form-group mb-3">
                <input type="password" class="form-control" placeholder="Senha" id="senha" name="senha" required>
                <small class="form-text text-muted text-right">
                  <a href="recuperar-senha.php" class="text-danger">Esqueceu a Senha?</a>
                </small>
              </div>

              <button type="submit" class="btn btn-success font-weight-bold">Entrar</button>
            </form>

          </div>
        </div>
      </div>
    </div>

    <!-- M e n s a g e m - e - E m p r e s a s -->

    <div class="text-center py-4">
      <div class="container">
        <div class="row">
          <div class="mx-auto col-md-8">

            <h1>Empresas Parceiras:</h1>

            <p class="mb-4">Algumas vagas são disponiveis por empresas que fazem parceria com a ETEC - Pedro Ferreira
              Alves.
              <br>
              Abaixo alguma das empresas parceiras</p>

            <div class="row text-muted">
              <div class="col-md-2 col-4 p-2">
                <i class="d-block fa fa-angellist fa-3x"></i>
              </div>
              <div class="col-md-2 col-4 p-2">
                <i class="d-block fa fa-cc-visa fa-3x text-danger"></i>
              </div>
              <div class="col-md-2 col-4 p-2">
                <i class="d-block fa fa-empire fa-3x"></i>
              </div>
              <div class="col-md-2 col-4 p-2">
                <i class="d-block fa fa-paypal fa-3x text-danger"></i>
              </div>
              <div class="col-md-2 col-4 p-2">
                <i class="d-block fa fa-rebel fa-3x"></i>
              </div>
              <div class="col-md-2 col-4 p-2">
                <i class="d-block fa fa-first-order fa-3x text-danger"></i>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <!-- C a d a s t r o - e - B o t ã o -->

    <div class="py-4">
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
    </div>

    <!-- R o d a p é - C o m p l e t o -->

    <div class="py-3 text-left shadow p-3 mb-5 bg-white" style="margin-top: 50px;">
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

            <p class="mb-0 mt-2">WebSoft © 2019. Todos os Direitos Reservados</p>

          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>
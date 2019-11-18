<!DOCTYPE html>
<!-- FALTA COMENTAR NA PAGINA INTEIRA-->
<?php
session_start();
?>
<html lang="pt-br">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <title>Home - TecEstagio</title>
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

        <!--Mudar Botão Cadastro / Perfil -->

        <?php
        if (!isset($_SESSION['usuario'])) {
          echo '<li class="nav-item"> <a class="nav-link" href="cadastro.php">Cadastro</a> </li></ul>';
        } else {
          echo '<li class="nav-item"> <a class="nav-link text-warning" href="perfil.php">Perfil</a> </li></ul>';
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

  <!-- E s p a ç o -->

  <div style="margin-top: 120px;">

    <!-- M e n s a g e m -->
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="display-2 text-center p-4">Seja Bem Vindo!</h1>
        </div>
      </div>
    </div>
  </div>

  <!-- I m a g e n s, M e n s a g e m - e - B o t ã o -->

  <div class="py-3">
    <div class="container">

      <!-- C a r r o s s e l - d e - I m a g e n s -->

      <div class="row">
        <div class="col-md-12">
          <div class="carousel slide" data-ride="carousel" id="carousel">
            <div class="carousel-inner">

              <!-- P r i m e i r a - I m a g e m -->

              <div class="carousel-item active"> <img class="d-block img-fluid w-100" height="750px" src="img/img1.png">
                <div class="carousel-caption">
                  <h5 class="m-0"></h5>
                  <p></p>
                </div>
              </div>

              <!-- S e g u n d a - I m a g e m -->

              <div class="carousel-item"> <img class="d-block img-fluid w-100" height="750px" src="img/img2.png">
                <div class="carousel-caption">
                  <h5 class="m-0"></h5>
                  <p></p>
                </div>
              </div>

              <!-- T e r c e i r a - I m a g e m -->

              <div class="carousel-item"> <img class="d-block img-fluid w-100" height="750px" src="img/img3.jpg">
                <div class="carousel-caption">
                  <h5 class="m-0">ETEC - Pedro Ferreira Alves</h5>
                  <p></p>
                </div>
              </div>
            </div> <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carousel" role="button" data-slide="next"> <span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span> </a>
          </div>
        </div>
      </div>

      <!-- M e n s a g e m -->

      <div class="row">
        <div class="col-md-12">
          <h2 class="text-center mt-4">Conheça o nosso site de Vagas de Estágio. Venha fazer parte dessa comunidade e se tornar um "TECestágiario".</h2>
        </div>
      </div>

      <!-- B o t ã o - d e - C a d a s t r o -->

      <div class="row">
        <div class="col-md-12 text-center my-2"><a class="btn btn-danger btn-lg font-weight-bold" href="cadastro.php">CADASTRE-SE</a>
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
          <p class="mb-4">Algumas vagas são disponiveis por empresas que fazem parceria com a ETEC - Pedro Ferreira Alves.<br>Abaixo alguma das empresas parceiras.</p>
          <div class="row text-muted">
            <div class="col-md-2 col-4 p-2"> <i class="d-block fa fa-angellist fa-3x"></i> </div>
            <div class="col-md-2 col-4 p-2"> <i class="d-block fa fa-cc-visa fa-3x text-danger"></i> </div>
            <div class="col-md-2 col-4 p-2"> <i class="d-block fa fa-empire fa-3x"></i> </div>
            <div class="col-md-2 col-4 p-2"> <i class="d-block fa fa-paypal fa-3x text-danger"></i> </div>
            <div class="col-md-2 col-4 p-2"> <i class="d-block fa fa-rebel fa-3x"></i> </div>
            <div class="col-md-2 col-4 p-2"> <i class="d-block fa fa-first-order fa-3x text-danger"></i> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="text-center py-1">
    <div class="container">
      <div class="row text-muted">
        <div class="col-md-2 col-4 p-2"> <i class="d-block fa fa-angellist fa-3x text-danger"></i> </div>
        <div class="col-md-2 col-4 p-2"> <i class="d-block fa fa-amazon fa-3x"></i> </div>
        <div class="col-md-2 col-4 p-2"> <i class="d-block fa fa-paypal fa-3x text-danger"></i> </div>
        <div class="col-md-2 col-4 p-2"> <i class="d-block fa fa-empire fa-3x"></i> </div>
        <div class="col-md-2 col-4 p-2"> <i class="d-block fa fa-rebel fa-3x text-danger"></i> </div>
        <div class="col-md-2 col-4 p-2"> <i class="d-block fa fa-first-order fa-3x"></i> </div>
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

  <div style="margin-top: 50px;"></div>

  <div class="py-3 text-left shadow p-3 mb-5 bg-white">
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
          <p class="mb-0">A Websoft surgiu da ideia de 5 alunos do curso de Técnico em Informática para Internet com o intuito de criar uma empresa de desenvolvimento web <a href="sobre.php"><i>Ler mais...</i></a></p>
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
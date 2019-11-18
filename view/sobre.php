<!DOCTYPE html>
<?php
session_start();
?>
<html lang="pt-br">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <title>Sobre - TecEstagio</title>
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
            <a class="nav-link" href="index.php">Início</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="servicos.php">Serviços</a>
          </li>

          <li class="nav-item pl-1">
            <a class="nav-link" href="sobre.php">Sobre</a>
          </li>

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

  <!-- H i s t o r i a - d o - S i t e -->

  <div class="" style="margin-top: 100px;">
    <div class="container-fluid">
      <div class="row">
        <div class="px-md-5 p-3 d-flex flex-column justify-content-center text-center col-lg-6">

          <h1>Criamos este site:</h1>

          <p class="lead mt-4">Os estágios na Etec Pedro Ferreira Alves têm baixa visualização por não conter uma plataforma específica para divulgar os estágios. Segundo uma pesquisa feita pelo grupo no dia 30 de julho de 2019, 42% dos alunos desconhecem o programa de estágio que a Etec oferece para os alunos. Por meio do site será possível em um único local ofertar as vagas de estágio e também informações sobre os cursos e parceiros da escola.</p>

        </div>

        <div class="p-2 col-lg-6"> <img class="img-fluid d-block" src="img/foto1.png" width="930px"> </div>

      </div>
    </div>
  </div>

  <!-- E x e m p l o - d o - S i t e -->

  <div class="py-5 text-center">
    <div class="container">
      <div class="row">
        <div class="mx-auto col-lg-10">

          <h1>Passo a Passo do site</h1>
          <p class="mb-3 mx-auto w-75 lead">Aprenda a usar o site rapido.</p>

          <div class="row">
            <div class="col-md-3 mt-4 px-4 col-6">

              <i class="d-block fa fa-stop-circle fa-4x mb-3 text-muted"></i>

              <h5>
                <b>Primeiro</b>
              </h5>

              <p class="mb-3">Cadastre-se em nosso site. Alguns requisitos: Estudar em uma instituição Etec.</p>

            </div>
            <div class="col-md-3 mt-4 px-4 col-6">
              <i class="d-block fa fa-stop-circle-o fa-4x mb-3 text-danger"></i>

              <h5>
                <b>Segundo</b>
              </h5>

              <p class="mb-3">Procurar uma Vaga em nossa aba de <a href="servicos.php"><strong>Serviços</strong></a></a> que mais te identifica.</p>

            </div>
            <div class="col-md-3 mt-4 px-4 col-6">
              <i class="d-block fa fa-circle-o fa-4x mb-3 text-muted"></i>

              <h5>
                <b>Terceiro</b>
              </h5>

              <p class="mb-3">Ter acesso as informações como: vaga, requisitos, área e outras informações disponíveis.</p>

            </div>
            <div class="col-md-3 mt-4 px-4 col-6">
              <i class="d-block fa fa-circle fa-4x mb-3 text-danger"></i>

              <h5>
                <b>Quarto</b>
              </h5>

              <p class="mb-3">Cadastrar-se nas vagas que se mais adequa em seu perfil profissional.</p>

            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <!-- Foto da equipe, texto, imagem-->

  <div class="py-5" style="background-image: url('img/sobre.jpg'); background-position: center top;  background-size: cover; background-repeat: repeat; background-attachment: fixed;">
    <div class="container">

      <!-- T e x t o -->

      <div class="row">
        <div class="mx-auto col-md-4 text-center text-uppercase ">

          <h1 style="color: #00FFFF; text-shadow: 0 0 0.2em #00ffff, 0 0 0.2em #00ffff,
          0 0 0.2em #00ffff;">Nossa Equipe</h1>

          <h5 style="color: #00FFFF; text-shadow: 0 0 0.2em #00ffff, 0 0 0.2em #00ffff,
          0 0 0.2em #00ffff;">Criadores da Tec Estagios</h5>

        </div>
      </div>

      <!-- P e r f i l -->

      <div class="row">

        <div class="col-6 p-3 col-lg-3">
          <div class="card">
            <img class="card-img-top" src="img/Gabriel.jpg" alt="Card image cap">
            <div class="card-body">

              <h5 class="card-title">
                <b>Gabriel Dias</b>
              </h5>

              <p class="card-text">CEO &amp; Founder</p>

            </div>
          </div>
        </div>

        <div class="col-6 p-3 col-lg-3">
          <div class="card">
            <img class="card-img-top" src="img/Leonardo.jpg" alt="Card image cap">
            <div class="card-body">

              <h5 class="card-title">
                <b>Leonardo Fernandes</b>
              </h5>

              <p class="card-text">CEO &amp; Founder</p>

            </div>
          </div>
        </div>

        <div class="col-6 p-3 col-lg-3">
          <div class="card">
            <img class="card-img-top" src="img/Ewerton.jpg" alt="Card image cap">
            <div class="card-body">

              <h5 class="card-title">
                <b>Ewerton Martins</b>
              </h5>

              <p class="card-text">CEO &amp; Founder</p>

            </div>
          </div>
        </div>

        <div class="col-6 p-3 col-lg-3">
          <div class="card">
            <img class="card-img-top" src="img/Juan.jpg" alt="Card image cap">
            <div class="card-body">

              <h5 class="card-title">
                <b>Juan Archangelo</b>
              </h5>

              <p class="card-text">CEO &amp; Founder</p>

            </div>
          </div>
        </div>

        <div class="col-6 col-lg-3 p-3 mx-auto">
          <div class="card">
            <img class="card-img-top" src="img/Matheus.jpg" alt="Card image cap">
            <div class="card-body">

              <h5 class="card-title">
                <b>Matheus Tavares</b>
              </h5>

              <p class="card-text">CEO &amp; Founder</p>

            </div>
          </div>
        </div>

      </div>
    </div>
  </div>


  <!-- F a l e - C o n o s c o -->

  <div class="py-3 text-center">
    <div class="container">
      <div class="row">
        <div class="mx-auto p-4 col-lg-7">

          <h1 class="mb-4">Fale-Conosco</h1>

          <form id="faleconosco" name="faleconosco" method="POST" action="">
            <div class="form-row">

              <div class="form-group col-md-6">
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
              </div>

              <div class="form-group col-md-6">
                <input type="email" class="form-control" id="email" name="email" placeholder="E-Mail">
              </div>

            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="assunto" name="assunto" placeholder="Assunto">
            </div>

            <div class="form-group">
              <textarea class="form-control" id="mensagem" name="mensagem" rows="4" placeholder="Sua Mensagem"></textarea>
            </div>

            <button type="submit" class="btn btn-success font-weight-bold">Enviar</button>
          </form>

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
            <b>Serviços</b>
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

  <!-- L i n k -->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <!-- M A S C A R A - E M - J A V A S C R I P T -->

  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="js/jquery.mask.min.js"></script>
  <script type="text/javascript" src="js/jquery.validate.min.js"></script>
  <script type="text/javascript" src="js/localization/messages_pt_BR.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
        $("#faleconosco").validate({
          rules: {
            nome: {
              required: true,
              maxlength: 50,
              minlength: 4,
            },
            email: {
              email: true,
              required: true
            },
            assunto: {
              required: true
            },
            mensagem: {
              required: true
            }
          }
        })
    })
  </script>
</body>

</html>
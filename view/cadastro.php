<!DOCTYPE html>
<?php
session_start();
?>
<html lang="pt-br">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <title>Cadastro - TecEstagio</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="estilo/estilo.css">
  <link rel="shortcut icon" href="img/favicon.ico">

</head>

<body style="background-color: #e6e6e6">

  <!-- M e n u - e - L o g o -->

  <nav class="navbar fixed-top navbar-expand-md navbar-light shadow p-3 mb-5 bg-white">

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
          <li class="nav-item"> <a class="nav-link" href="cadastro.php">Cadastro</a> </li>
        </ul>
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

  <!-- Pagina Completa-->

  <div class="" style="margin-top: 75px;">
    <div class="container">

      <!-- Titulo -->
      <div class="row">
        <div class="col-md-8 p-4">
          <h1>Faça seu Cadastro</h1>
          <p>Cadastre-se para ter acesso as vagas de estágio.</p>
        </div>
      </div>

      <!-- Cadastro Completo -->

      <div class="row">

        <!-- Informações do Cadastro -->
        <div class="col-md-5 p-4">
          <h3>Precisa de Ajuda?</h3>
          <p>Responderemos o mais rápido possível.</p>
          <p class="lead mt-3"> <b>Ajuda</b></p>
          <p class="text-danger">+55 19 4002 8922</p>
          <p class="text-danger">tecestagios@websoft.com</p>
          <p class="lead mt-3"> <b>Ou</b></p>
          <p class="text-danger">Info@pfalves.com.br</p>
        </div>

        <div class="col-md-7 p-4">
          <h3 class="mb-3">Cadastre-se</h3>

          <!-- Formulario de Cadastro -->

          <form id="formCadastro" name="formCadastro" action="../controller/ControllerAluno.php" method="POST">

            <!-- Nome, Sobrenome e RM Escolar-->

            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required>
              </div>
              <div class="form-group col-md-6">
                <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Sobrenome" required>
              </div>
              <div class="form-group col-md-6"> <input type="text" class="form-control" placeholder="RM Escolar" id="rm" name="rm" required> </div>
            </div>

            <!--Email, Telefone, Cidade e Data de Nascimento-->

            <div class="form-group">
              <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="required">
            </div>

            <div class="form-row">


              <!--<div class="form-group col-md-6">
                <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade" required>
              </div>-->

              <div class="form-group col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <select class="btn btn-light dropdown-toggle" data-toggle="dropdown" id="cidade" name="cidade" required>
                  <option class="dropdown-item" value="Mogi Mirim">Selecione uma Cidade</option>
                  <option class="dropdown-item" value="Mogi Mirim">Mogi Mirim</option>
                  <option class="dropdown-item" value="Mogi Guaçu">Mogi Guaçu</option>
                  <option class="dropdown-item" value=">Estiva Gerbi">Estiva Gerbi</option>
                  <option class="dropdown-item" value="Itapira">Itapira</option>
                  <option class="dropdown-item" value="Conchal">Conchal</option>
                  <option class="dropdown-item" value="Engenheiro Coelho">Engenheiro Coelho</option>
                  <option class="dropdown-item" value="Martin Francisco">Martin Francisco</option>
                  <option class="dropdown-item" value="Artur Nogueira">Artur Nogueira</option>
                  <option class="dropdown-item" value="Araras">Araras</option>
                  <option class="dropdown-item" value="Holambra">Holambra</option>
                  <option class="dropdown-item" value="Cosmópolis">Cosmópolis</option>
                  <option class="dropdown-item" value="Jaguariúna">Jaguariúna</option>
                  <option class="dropdown-item" value="Santo Antônio de Posse">Santo Antônio de Posse</option>
                  <option class="dropdown-item" value="Amparo">Amparo</option>
                  <option class="dropdown-item" value="Pedreira">Pedreira</option>
                </select>
              </div>

              <div class="form-group col-6 col-sm-6 col-md-7 col-lg-6 col-xl-6">
                <select class="btn btn-light dropdown-toggle" data-toggle="dropdown" id="curso" name="curso" required>
                  <option class="dropdown-item" value="">Selecione um Curso</option>
                  <option class="dropdown-item" value="Informatica">Informática</option>
                  <option class="dropdown-item" value="Administração">Administração</option>
                  <option class="dropdown-item" value=">Automação">Automação</option>
                  <option class="dropdown-item" value="Contabilidade">Contabilidade</option>
                  <option class="dropdown-item" value="Enfermagem">Enfermagem</option>
                  <option class="dropdown-item" value="Logística">Logística</option>
                  <option class="dropdown-item" value="Recursos Humanos">Recursos Humanos</option>
                  <option class="dropdown-item" value="Mecânica">Mecânica</option>
                  <option class="dropdown-item" value="Mecatrônica">Mecatrônica</option>
                  <option class="dropdown-item" value="admin">Admin</option>
                </select>
              </div>

              <div class="form-group col-md-6">
                <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="Telefone" required>
              </div>

              <!--<div class="form-group col-md-6">
                <input type="text" class="form-control" id="curso" name="curso" placeholder="Curso" required="required">
              </div>-->

              <div class="form-group col-md-6">
                <input type="text" class="form-control" placeholder="Data de Nascimento" id="nasc" name="data_nasc" required>
              </div>
            </div>
            <!-- S e n h a -->

            <div class="form-group">

              <input type="password" class="form-control w-50 mt-2" id="senha" name="senha" placeholder="Senha">
              <input type="password" class="form-control mt-2 w-50" id="rep_senha" name="rep_senha" placeholder="Confirmar Senha">

            </div>

            <div class="form-group row">
              <div class="col-sm-10">
                <div class="form-check">
                  <label class="form-check-label font-weight-bold">
                    <input class="form-check-input" type="checkbox" required> Não sou um robô!
                  </label>
                </div>
              </div>
            </div>

            <!-- B o t õ e s -->

            <button type="reset" class="btn btn-danger">Limpar</button>
            <button type="submit" class="btn btn-success font-weight-bold" name="enviar" onclick="return validar()">Enviar</button>
            <input type="hidden" id="_incluir" name="_incluir" value="_incluir">

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

          <p class="mb-3">A Websoft surgiu da ideia de 5 alunos do curso de Técnico em Informática para Internet com o intuito de criar uma empresa de desenvolvimento web <a href="sobre.php"><i>Ler mais...</i></a></p>

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


  <!-- L i n k s -->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous" style=""></script>

  <!-- M A S C A R A - E M - J A V A S C R I P T -->

  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="js/jquery.mask.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      $("#cpf").mask("000.000.000-00")
      $("#cnpj").mask("00.000.000/0000-00")
      $("#sal").mask("999.999.990,00", {
        reverse: true
      })
      $("#cep").mask("00.000-000")
      $("#nasc").mask("00/00/0000")
      $("#rg").mask("999.999.999-W", {
        translation: {
          'W': {
            pattern: /[X0-9]/
          }
        },
        reverse: true
      })
      var options = {
        translation: {
          'A': {
            pattern: /[A-Z]/
          },
          'a': {
            pattern: /[a-zA-Z]/
          },
          'S': {
            pattern: /[a-zA-Z0-9]/
          },
          'L': {
            pattern: /[a-z]/
          },
        }
      }
      $("#rm").mask("00000")
      $("#codigo").mask("AA.LLL.0000", options)
      $("#telefone").mask("(00) 0000-00009")
      $("#telefone").blur(function(event) {
        if ($(this).val().length == 15) {
          $("#telefone").mask("(00) 00000-0009")
        } else {
          $("#telefone").mask("(00) 0000-00009")
        }
      })

      // M E N S A G E N S - O B R I G A T O R I A S

      $("#formCadastro").validate({
        rules: {
          nome: {
            required: true,
            maxlength: 100,
            minlength: 4,
          },
          sobrenome: {
            required: true,
            maxlength: 100,
            minlength: 3,
          },
          rm: {
            required: true,
          },
          email: {
            required: true,
            email: true,
          },
          /*telefone: {
            required: true,
          },
          cidade: {
            required: true,
          },
          nasc: {
            required: true,
          }*/
          senha: {
            required: true,
          },
          rep_senha: {
            required: true,
          }
        }
      })
    })

    function validar() {

      var senha = formCadastro.senha.value;
      var rep_senha = formCadastro.rep_senha.value;

      if (senha == "" || senha.length <= 5) {
        alert('Preencha o campo senha com mínimo 6 caracteres');
        formCadastro.senha.focus();
        return false;
      }

      if (rep_senha == "" || rep_senha.length <= 5) {
        alert('Preencha o campo confirmar senha com mínimo 6 caracteres');
        formCadastro.rep_senha.focus();
        return false;
      }

      if (senha != rep_senha) {
        alert('Senhas Diferentes');
        formCadastro.rep_senha.focus();
        return false;
      }
    }
  </script>
</body>

</html>
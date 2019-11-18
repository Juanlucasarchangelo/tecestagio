<!DOCTYPE html>
<?php session_start(); ?>
<html lang="pt-br">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <title>Cadastro de Vagas</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="estilo/estilo.css">
</head>

<body class="bg-dark">

  <!-- I m a g e m - e - F o r m u l á r i o -->

  <div class="text-center text-white py-5 my-5" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url(https://static.pingendo.com/cover-bubble-dark.svg);  background-position: center center, center center;  background-size: cover, cover;  background-repeat: repeat, repeat;">

    <!-- Á r e a - d o - F o r m u l á r i o -->

    <div class="container">
      <div class="row">
        <div class="mx-auto col-md-10 p-4">
          <h1 class="text-light">Cadastro de Vaga</h1>
          <br>
          <!-- F o r m u l a r i o -->

          <form id="formCadastro" name="formCadastro" action="../controller/ControllerFunc.php" method="POST">

            <!-- N o m e - d a - E m p r e s a -->

            <div class="form-row">
              <div class="form-group col-md-4">
                <input required type="text" class="form-control" id="nome" name="nome" placeholder="Nome da empresa">
              </div>

              <!-- C i d a d e -->

              <div class="form-group col-md-4">
                <input required type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade">
              </div>

              <!-- R e m u n e r a ç ã o -->

              <div class="fo rm-group col-md-4"> <input required type="text" class="form-control" id="remuneracao" name="remuneracao" placeholder="Remuneração"> </div>
            </div>

            <!-- Á r e a - D a - V a g a -->

            <div class="btn-group my-3">
              <select class="btn btn-primary dropdown-toggle" name="area" data-toggle="dropdown" required>
                <option class="dropdown-item" value="Indefinido">Área da Vaga</option>
                <option class="dropdown-item" value="Administração">Administração</option>
                <option class="dropdown-item" value=">Automação">Automação</option>
                <option class="dropdown-item" value="Contabilidade">Contabilidade</option>
                <option class="dropdown-item" value="Informatica">Informática</option>
                <option class="dropdown-item" value="Logística">Logística</option>
                <option class="dropdown-item" value="Recursos Humanos">Recursos Humanos</option>
                <option class="dropdown-item" value="Mecânica">Mecânica</option>
                <option class="dropdown-item" value="Mecatrônica">Mecatrônica</option>
              </select>
            </div>

            <!-- L o g o - E m p r e s a -->

            <div class="form-group">

              <div class="form-group col-1">
                <label>Logo da empresa: </label>
                <input id="selecao-arquivo" name="logo" type="file">
              </div>

            </div>

            <!-- T i t u l o - d a - V a g a -->

            <div class="form-group">
              <input required type="text" class="form-control" id="vaga" name="vaga" placeholder="Titulo da vaga">
            </div>

            <!-- D e s c r i ç ã o -->

            <div class="form-group">
              <textarea required class="form-control" id="descricao" name="descricao" rows="4" maxlength="50" placeholder="Descrição"></textarea>
            </div>

            <!-- E n v i a r - e - L i m p a r -->

            <button type="reset" class="btn btn-danger mx-3">Limpar</button>
            <button type="submit" class="btn btn-primary mx-3">Cadastrar</button>

            <input type="hidden" id="_incluir" name="_incluir" value="_incluir">

          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <!-- M A S C A R A - D O - T E L E F O N E -->

  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="js/jquery.mask.min.js"></script>
  <script type="text/javascript" src="js/jquery.validate.min.js"></script>
  <script type="text/javascript" src="js/localization/messages_pt_BR.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {

      $("#cel").mask("(00) 0000-00009")

      $("#cel").blur(function(event) {
          if ($(this).val().length == 15) {
            $("#cel").mask("(00) 00000-0009")
          } else {
            $("#cel").mask("(00) 0000-00009")
          }
        })

        /*$("#formCadastro").validate({
          rules: {
            nome: {
              required: true
            },
            email: {
              email: true,
              required: true
            },
            cel: {
              required: true
            },
            objetivo: {
              required: true
            },
            obs: {
              required: true
            }
          }
        })*/
    })
  </script>

</body>

</html>
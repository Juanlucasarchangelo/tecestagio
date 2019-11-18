<?php session_start(); ?>
<?php
  require_once("../controller/ControllerFunc.php");
  require_once("../model/class.dao.php"); 
  $dao = new Dao();
  $dao->conexao();
  $result = $dao->getFuncId($_GET['id_emp']);
  foreach($result as $row){
    $id_emp = $row['id_emp'];
    $nome = $row['nome'];
    $cidade = $row['cidade'];
    $descricao = $row['descricao'];
    $caga = $row['vaga'];
    $remuneracao = $row['remuneracao'];
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Projeto PHP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #fff;
      color: #fff;
      height: 100%;
    }

    .bg-1{
        background-color: #fff;
    }

    .bg-2{
        background-color: #fff;
    }

    .btn-submit{
        background-color: #20B2AA;
    }
    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse visible-xs">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Dashboard</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row content">
    
    <div class="col-sm-9">
      <div class="well bg-1">
        <h4>Dashboard</h4>
        <p>Some text..</p>
      </div>
      <div class="row">
        <div class="col-sm-9 ">
        
            <h1 class="text-primary">Editar Dados</h1>
          
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-sm-9">
          <div class="well bg-2">
                        
          <form class="form-horizontal" action="../controller/ControllerFunc.php" method="POST">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="id_emp">ID</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="id_emp" name="id_emp" value="<?php echo $id_emp; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="nome">Nome</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="nome" name="nome">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="cidade">Cidade</label>
                        <div class="col-sm-10"> 
                        <input type="text" class="form-control" id="cidade" name="cidade" >
                        
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="descricao">Descrição</label>
                        <div class="col-sm-10"> 
                        <input type="text" class="form-control" id="descricao" name="descricao" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="vaga">Vaga</label>
                        <div class="col-sm-10"> 
                        <input type="text" class="form-control" id="vaga" name="vaga" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="remuneracao">Remuneração: </label>
                        <div class="col-sm-10"> 
                        <input type="text" class="form-control" id="remuneracao" name="remuneracao" >
                        </div>
                    </div>
                    <div class="form-group"> 
                        <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="servico.php"><button class="btn btn-danger">Voltar</button></a>
                        </div>
                    </div>
                </form>
          </div>
        </div>
      </div>        
    </div>
  </div>
</div>

</body>
</html>

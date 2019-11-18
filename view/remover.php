<?php
require_once("../controller/ControllerFunc.php");
session_start();
?>
<?php session_start(); ?>
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
    .row.content {
      height: 550px
    }

    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #fff;
      color: #fff;
      height: 100%;
    }

    .bg-1 {
      background-color: #fff;
    }

    .bg-2 {
      background-color: #fff;
    }

    .btn-submit {
      background-color: #20B2AA;
    }

    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {
        height: auto;
      }
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
          <li><a href="#">Age</a></li>
          <li><a href="#">Gender</a></li>
          <li><a href="#">Geo</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row content">
      <div class="col-sm-3 sidenav hidden-xs">
        <h2>Logo</h2>
        <ul class="nav nav-pills nav-stacked">
          <li class="active"><a href="#section1">Item1</a></li>
          <li><a href="#section2">Item2</a></li>
          <li><a href="#section3">Item3</a></li>
          <li><a href="#section3">Item4</a></li>
        </ul><br>
      </div>
      <br>

      <div class="col-sm-9">
        <div class="well bg-1">
          <h4>Dashboard</h4>
          <p>Some text..</p>
        </div>
        <div class="row">
          <div class="col-sm-9 ">

            <h1 class="text-danger">Remover Dados</h1>

          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-sm-9">
            <div class="well bg-2">

              <form class="form-horizontal" action="../controller/ControllerFunc.php" method="POST">
                <div class="form-group">
                  <label class="control-label col-sm-2" for="id">ID:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="id" name="id">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="email">Email:</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="nome">Nome:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nome" name="nome">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="sobrenome">Sobrenome:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="sobrenome" name="sobrenome">
                    <input type="hidden" id="_editar" name="_editar" value="editar">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-danger btn-submit">Remover</button>
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
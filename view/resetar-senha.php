<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<div class=" row">
    <div class="col-md-4">
    </div>
    <div class="col-md-4 text-center">
        <form action="../controller/nova-senha.php" method="post" style="max-width:500px;margin:auto">
        <h2>Fomulário para Recupear senha</h2>
        <div class="input-group">
            <input type="hidden" name="token" value="<?php echo $_GET['token'];?>">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input id="password" type="password" class="form-control" name="password" placeholder="Senha">
        </div>
        
        <button type="submit" class="btn btn-info btn-block">Enviar</button>
        </form>

    </div>
    <div class="col-md-4">
    </div>

</div>
</body>
</html>
<?php

session_start();
include('../controller/conexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])){
    header('location: ../view/login.php');
    exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select id_aluno, nome, sobrenome from aluno where email='{$usuario}' and senha='{$senha}'";

$result =  mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);


if($row == 1){
    $_SESSION['usuario'] = $usuario;
    header('location: ../view/servicos.php');
    exit();
}else{
    $_SESSION['nao_autenticado'] = true;
    header('location: ../view/servicos.php');
    exit();
}

?>
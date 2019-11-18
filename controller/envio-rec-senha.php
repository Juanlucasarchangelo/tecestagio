<?php
/*require_once('../model/class.dao.php');
session_start();*/

$token = sha1(str_replace("@","","admin@etec.com")); 

$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8\r\n";
$headers .= "From: contato@archwebsite.com.br\r\n"; // remetente
$headers .= "Return-Path: contato@archwebsite.com.br\r\n"; // return-path
$texto = '<a href="localhost/locadora/view/resetar-senha.php?toke='.$token.'">Clique aqui para redefinir a senha.</a>';
$envio = mail($_post['rec_mail'], "Recuperação de senha", $texto, $headers);
 
if($envio)
    echo "Mensagem enviada com sucesso";
else
    echo "A mensagem não pode ser enviada";


/*$dao = new Dao();
$dao->conexao();
$dao->insertToken($token, $_POST['email']);*/

?>
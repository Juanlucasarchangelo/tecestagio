<?php
session_start();
require_once('../model/class.dao.php');

$obj = new Dao();
$obj->conexao();
$obj->loginUser($_POST['email'], $_POST['senha']);


?>
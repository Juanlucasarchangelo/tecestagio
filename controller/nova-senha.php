<?php
require_once('../model/class.dao.php');
$dao = new Dao();
$dao->conexao();
$dao->insertNewPassword($_POST['token'],$_POST['password']);
?>
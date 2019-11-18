<?php

define('HOST', 'localhost'); // sem id de bd
define('USUARIO', 'archwebc_tecestagio');
define('SENHA', '');
define('DB', 'archwebc_tecestagio');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die('Não foi possivel conectar!');

?>
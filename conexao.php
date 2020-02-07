<?php

$_SERVIDOR = 'localhost';
$_USUARIO = 'phpmyadmin';
$_SENHA = 'root';
$_BASE = 'phpmyadmin';

$_CONEXAO = mysqli_connect($_SERVIDOR, $_USUARIO, $_SENHA, $_BASE);

if(!$_CONEXAO){
	exit('Erro ao conectar ao banco de dados!');
}

?>
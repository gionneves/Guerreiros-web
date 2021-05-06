<?php

$dsn = 'mysql:host=localhost;dbname=dbguerra;charset=utf8';
$usuario = 'root';
$senha = '6ybAmX2bCg688fUu';

try {
	$pdo = new PDO($dsn, $usuario, $senha);
} catch (PDOException $erro) {
	echo "Erro CONECTION: " . $erro->getMessage();
	exit;
}

<?php

session_start();

$dsn = 'mysql:host=localhost;dbname=dbguerra;charset=utf8';
$usuario = 'root';
$senha = '';
	
global $pdo;

try {
	$pdo = new PDO($dsn, $usuario, $senha);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $erro) {
	echo "Erro CONECTION: " . $erro->getMessage();
	exit;
}
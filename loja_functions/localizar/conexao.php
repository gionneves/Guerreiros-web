<?php/**
 * Faz a conexão com o banco de dados
 * 
 * PHP version 7
 * 
 * @category Conexão
 * @package  Conexão
 * @author   Giovanni Neves Sadauscas <gionneves@gmail.com>
 * @license  Guerreiros games
 * @link     http//localhost/
 */

$dsn = 'mysql:host=localhost;dbname=dbguerra;charset=utf8';
$usuario = 'root';
$senha = '6ybAmX2bCg688fUu';
	
global $pdo;

try {
    $pdo = new PDO($dsn, $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $erro) {
	echo "Erro CONECTION: " . $erro->getMessage();
	exit;
}

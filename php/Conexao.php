<?php
/**
 * Classe é feita para começar a sessão do usuário e fazer a conexão
 * com o PDO para o banco de dados MySQL
 *
 * PHP version 7
 *
 * @category Conexão
 * @package  Default
 * @author   Giovanni Neves Sadauscas <gionneves@gmail.com>
 * @license  Guerreiros games
 * @link     http//localhost/
 */

session_start();
setcookie("cookieSession", 1, time()+3600);

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
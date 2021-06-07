<?php
/**
 * Dar update no Login do cliente
 * 
 * PHP version 7
 * 
 * @category Criador_Login
 * @package  Criador_Login
 * @author   Giovanni Neves Sadauscas <gionneves@gmail.com>
 * @license  Guerreiros games
 * @link     http//localhost/
 */

require "conexao.php";

if (!empty($_POST["id_login"]) && !empty($_POST["novo_login"])) {

    
    $id_login = $_POST["id_login"];
    $novo_login = $_POST["novo_login"];
    
    $sql = "UPDATE painel SET Login = '$novo_login' WHERE painel.ID = '$id_login'";
    $stmt = $pdo->prepare($sql);
    
    if ($stmt->execute()) {
        setcookie("alterado_cl", "sucesso", time()+15);
        echo "<script>history.back();</script>";
    } else {
        setcookie("alterado_cl", "falha", time()+15);
        echo "<script>history.back();</script>";
    }
} else {
    setcookie("alterado_cl", "falha", time()+15);
    echo "<script>history.back();</script>";
}

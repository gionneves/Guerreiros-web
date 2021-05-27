<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar senha</title>
</head>


<?php

require "conexao.php";

if (!empty($_POST["id_login"]) && !empty($_POST["nova_senha"])) {

    
    $id_login = $_POST["id_login"];
    $nova_senha = $_POST["nova_senha"];
    
    $sql = "UPDATE painel SET Senha = '$nova_senha' WHERE painel.ID = '$id_login'";
    $stmt = $pdo->prepare($sql);
    
    if ($stmt->execute()) {
        setcookie("alterado", "sucesso", time()+15);
    } else {
        setcookie("alterado", "falha", time()+15);
    }   
     header("location:cl.php");
} else {
    setcookie("alterado", "falha", time()+15);
    header("location:cl.php");
}
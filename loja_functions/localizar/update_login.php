<?php

require "conexao.php";

if (!empty($_POST["id_login"]) && !empty($_POST["novo_login"])) {

    
    $id_login = $_POST["id_login"];
    $novo_login = $_POST["novo_login"];
    
    $sql = "UPDATE painel SET Login = '$novo_login' WHERE painel.ID = '$id_login'";
    $stmt = $pdo->prepare($sql);
    
    if ($stmt->execute()) {
        setcookie("alterado", "sucesso", time()+15);
        echo "<script>history.back();</script>";
    } else {
        setcookie("alterado", "falha", time()+15);
        echo "<script>history.back();</script>";
    }
} else {
    setcookie("alterado", "falha", time()+15);
    echo "<script>history.back();</script>";
}

<?php

require "conexao.php";

if (!empty($_POST["id_login"]) && !empty($_POST["nova_senha"])) {

    
    $id_login = $_POST["id_login"];
    $nova_senha = $_POST["nova_senha"];
    
    $sql = "UPDATE painel SET Senha = '$nova_senha' WHERE painel.ID = '$id_login'";
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

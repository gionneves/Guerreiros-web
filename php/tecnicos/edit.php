<?php
    require '../Conexao.php';
    /* include ('../Estados_OS.php'); */

    if (!empty($_POST['tecnico']) && !empty($_POST['servico']) && !empty($_POST['estado'])) {
        
        $os = $_POST['os'];
        $tecnico = $_POST['tecnico'];
        $servico = $_POST['servico'];
        $estado = $_POST['estado'];

/*     $sql = "UPDATE painel SET Login = '$novo_login' WHERE painel.ID = '$id_login'"; */

        $sql = "UPDATE ordem_servicos SET tecnico = '$tecnico', servico = '$servico', estado = '$estado' WHERE ordem_servicos.ID = '$os';";
        $stmt = $pdo->prepare($sql);

        if ($stmt->execute()) {
            header("Location: /Disponivel_OS.php");
        } else {
            
        }

    } else {
        echo '<script>alert("Erro! Algo deu errado!")</script>';
    }
?>
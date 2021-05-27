<?php
    require '../Conexao.php';

    if (!empty($_POST['os']) && !empty($_POST['tecnico']) && !empty($_POST['servico']) && !empty($_POST['estado'])) {
        
        $os = $_POST['os'];
        $tecnico = $_POST['tecnico'];
        $servico = $_POST['servico'];
        $estado = $_POST['estado'];

        $sql = "UPDATE ordem_servicos SET tecnico = '$tecnico', servico_realizado = '$servico', estado = '$estado' WHERE ordem_servicos.id = '$os'";
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
?>
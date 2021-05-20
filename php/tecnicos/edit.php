<?php
    require '../Conexao.php';

    if (!empty($_POST['tecnico']) && !empty($_POST['servico']) && !empty($_POST['estado'])) {

        $os = $_POST['os'];
        $tecnico = $_POST['tecnico'];
        $servico = $_POST['servico'];
        $estado = $_POST['estado'];

        $sql = '';

    } else {
        echo '<script>alert("Erro! Algo deu errado!")</script>';
    }
?>
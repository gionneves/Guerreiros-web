<?php
    require '../Conexao.php';
    include ('../Estados_OS.php');

    if (!empty($_POST['tecnico']) && !empty($_POST['servico']) && !empty($_POST['estado'])) {
        
        $e_os = new Estados_OS();

        $os = $_POST['os'];
        $tecnico = $_POST['tecnico'];
        $servico = $_POST['servico'];
        $estado = $e_os->encode_estado($_POST['estado']);

/*     $sql = "UPDATE painel SET Login = '$novo_login' WHERE painel.ID = '$id_login'"; */

            $sql = 'UPDATE ordem_servicos SET tecnico = '. $_SESSION .', servico = $servico ';

    } else {
        echo '<script>alert("Erro! Algo deu errado!")</script>';
    }
?>
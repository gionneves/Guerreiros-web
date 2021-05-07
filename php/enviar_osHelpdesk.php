<?php

require 'conexao.php';
//require "conexaolog.php";

/*
$se_user = $_SESSION['cliente_id'];
$se_nome = $_SESSION['cliente_nome'];
$sql_cliente = 'INSERT INTO logs_cliente (id_cliente, nome_cliente, atividade, resenha) VALUES (?, ?, ?, ?);';
*/

$cliente = $_SESSION['cliente_id'];
$tipo_servico = $_POST['tipo_help'];
$servico = $_POST['servico'];
$data_servico = $_POST['data_servico'];
$hora_servico = $_POST['hora_servico'];

$sql = 'INSERT INTO os_helpdesk (cliente, tipo_servico, servico, data_servico, hora_servico) VALUES (:CLIENTE, :TIPO_SERVICO, :SERVICO, :DATA_SERVICO, :HORA_SERVICO);';
$stmt = $pdo->prepare($sql);

$stmt->bindParam(':CLIENTE', $cliente);
$stmt->bindParam(':TIPO_SERVICO', $tipo_servico);
$stmt->bindParam(':SERVICO', $servico);
$stmt->bindParam(':DATA_SERVICO', $data_servico);
$stmt->bindParam(':HORA_SERVICO', $hora_servico);

if ($stmt->execute()) {
    //$stmt = $pdo2->prepare($sql_cliente)->execute([$se_user, $se_nome, "Criação de O.S.", "Cliente solicitou um helpdesk"]);
    header("Location: /dashboard/View_os.php");
} else {
    echo "ERRO: e:01: Fail to connect!";
}

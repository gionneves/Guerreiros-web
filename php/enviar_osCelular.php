<?php

require 'conexao.php';
//require "conexaolog.php";

/*
$se_user = $_SESSION['cliente_id'];
$se_nome = $_SESSION['cliente_nome'];
$sql_cliente = 'INSERT INTO logs_cliente (id_cliente, nome_cliente, atividade, resenha) VALUES (?, ?, ?, ?);';
*/

$cliente = $_SESSION['cliente_id'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$checks = implode(", ", $_POST['check']);
$emei = $_POST['emei'];
$cliente_adicional = $_POST['Adicional'];
$hora_retirada = $_POST['hora'];

if (date('D', strtotime("+3 day")) == 'Sun') {
    $data = date('d/m/Y', strtotime("+4 day"));
} else {
    $data = date('d/m/Y', strtotime("+3 day"));
}

$sql = 'INSERT INTO os_phone (cliente, marca, modelo, EMEI, defeitos, cliente_adicional, data_retirada, hora_retirada) VALUES (:CLIENTE, :MARCA, :MODELO, :EMEI, :DEFEITOS, :CLIENTE_ADICIONAL, :DATA_RETIRADA, :HORA_RETIRADA)';
$stmt = $pdo->prepare($sql);

$stmt->bindParam(':CLIENTE', $cliente);
$stmt->bindParam(':MARCA', $marca);
$stmt->bindParam(':MODELO', $modelo);
$stmt->bindParam(':EMEI', $emei);
$stmt->bindParam(':DEFEITOS', $checks);
$stmt->bindParam(':CLIENTE_ADICIONAL', $cliente_adicional);
$stmt->bindParam(':DATA_RETIRADA', $data);
$stmt->bindParam(':HORA_RETIRADA', $hora_retirada);

if ($stmt->execute()) {
    //$stmt = $pdo2->prepare($sql_cliente)->execute([$se_user, $se_nome, "Criação de O.S.", "Cliente criou O.S. de um " + $marca]);
    header("Location: /dashboard/View_os.php");
} else {
    echo "ERRO: e:01: Fail to connect!";
}

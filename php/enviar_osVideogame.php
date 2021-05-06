<?php

require 'conexao.php';
require "conexaolog.php";

$se_user = $_SESSION['cliente_id'];
$se_nome = $_SESSION['cliente_nome'];
$sql_cliente = 'INSERT INTO logs_cliente (id_cliente, nome_cliente, atividade, resenha) VALUES (?, ?, ?, ?);';


$cliente = $_SESSION['cliente_id'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$serial = $_POST['serial'];
$acessorio = $_POST['acessorio'];
$defeito_cliente = $_POST['defeito_cliente'];
$cliente_adicional = $_POST['adicional_cliente'];
$hora_retirada = $_POST['hora'];

if (date('D', strtotime("+3 day")) == 'Sun') {
    $data = date('d/m/Y', strtotime("+4 day"));
} else {
    $data = date('d/m/Y', strtotime("+3 day"));
}

$sql = 'INSERT INTO os_videogame (cliente, marca, modelo, serial, acessorios, defeitos_cliente, adicional_cliente, data_retirada, hora_retirada )
VALUES (:CLIENTE, :MARCA, :MODELO, :SERIAL, :ACESSORIO, :DEFEITOCLI, :ADICIONALCLI, :DATARETIRADA, :HORA);';

$stmt = $pdo->prepare($sql);

$stmt->bindParam(':CLIENTE', $cliente);
$stmt->bindParam(':MARCA', $marca);
$stmt->bindParam(':MODELO', $modelo);
$stmt->bindParam(':SERIAL', $serial);
$stmt->bindParam(':ACESSORIO', $acessorio);
$stmt->bindParam(':DEFEITOCLI', $defeito_cliente);
$stmt->bindParam(':ADICIONALCLI', $cliente_adicional);
$stmt->bindParam(':DATARETIRADA', $data);
$stmt->bindParam(':HORA', $hora_retirada);

if ($stmt->execute()) {
    $stmt = $pdo2->prepare($sql_cliente)->execute([$se_user, $se_nome, "Criação de O.S.", "Cliente criou O.S. de um videogame " + $marca]);
    header("Location: /Guerreiros/myos.php");
} else {
    echo "ERRO: e:01: Fail to connect!";
}

<?php

require 'conexao.php';
//require "conexaolog.php";

/*
$se_user = $_SESSION['cliente_id'];
$se_nome = $_SESSION['cliente_nome'];
$sql_cliente = 'INSERT INTO logs_cliente (id_cliente, nome_cliente, atividade, resenha) VALUES (?, ?, ?, ?);';
*/

$cliente = $_SESSION['cliente_id'];
$marca = $_POST['marcaVideogame'];
$modelo = $_POST['modeloVideogame'];
$serial = $_POST['serial'];
$acessorio = $_POST['acessorioVideogame'];
$defeito_cliente = $_POST['defeito_clienteVideogame'];
$cliente_adicional = $_POST['adicional_clienteVideogame'];
$hora_retirada = $_POST['hora']; 

if (date('D', strtotime("+3 day")) == 'Sun') {
    $data = date('d/m/Y', strtotime("+4 day"));
} else {
    $data = date('d/m/Y', strtotime("+3 day"));
}

$sql = 'INSERT INTO ordem_servicos (tipo_os, cliente, marca, modelo, serial, acessorios, defeitos_cliente, adicional_cliente, data_servico, hora_servico )
VALUES ("Videogame", :CLIENTE, :MARCA, :MODELO, :SERIAL, :ACESSORIO, :DEFEITOCLI, :ADICIONALCLI, :DATARETIRADA, :HORA);';

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
    header("Location: /dashboard/View_os.php");
} else {
    echo "ERRO: e:01: Fail to connect!";
}
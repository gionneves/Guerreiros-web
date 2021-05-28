<?php
/**
 * Faz a adição de O.S. de celular no banco de dados
 *
 * PHP version 7
 *
 * @category Criação_OS
 * @package  O.S.
 * @author   Giovanni Neves Sadauscas <gionneves@gmail.com>
 * @license  Guerreiros games
 * @link     http//localhost/
 */

require 'conexao.php';

$cliente = $_SESSION['cliente_id'];
$marca = $_POST['marcaCelular'];
$modelo = $_POST['modeloCelular'];
$checks = implode(", ", $_POST['check']);
$emei = $_POST['emei'];
$cliente_adicional = $_POST['Adicional'];
$hora_retirada = $_POST['hora'];

if (date('D', strtotime("+3 day")) == 'Sun') {
    $data = date('d/m/Y', strtotime("+4 day"));
} else {
    $data = date('d/m/Y', strtotime("+3 day"));
}

$sql = 'INSERT INTO ordem_servicos (tipo_os, cliente, marca, modelo, emei, defeitos, cliente_adicional, data_servico, hora_servico) VALUES ("Celular", :CLIENTE, :MARCA, :MODELO, :EMEI, :DEFEITOS, :CLIENTE_ADICIONAL, :DATA_RETIRADA, :HORA_RETIRADA)';
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
    header("Location: /dashboard/View_os.php");
} else {
    echo "ERRO: e:01: Fail to connect!";
}
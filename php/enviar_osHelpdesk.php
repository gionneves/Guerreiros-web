<?php
/**
 * Faz a adição de O.S. de helpdesk no banco de dados
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
    header("Location: /dashboard/View_os.php");
} else {
    echo "ERRO: e:01: Fail to connect!";
}
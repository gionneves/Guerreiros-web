<?php

require "../php/Conexao.php";

$cliente = $_SESSION['cliente_id'];
$servico = $_POST['radioGroup'];
$tipo_servico = $_POST['tipo_help'];
$servico = $_POST['servico'];
$hora_servico = $_POST['hora_servico'];
$adicional = $_POST['adicional']; 

if (date('D', strtotime("+3 day")) == 'Sun') {
    $data = date('d/m/Y', strtotime("+4 day"));
} else {
    $data = date('d/m/Y', strtotime("+3 day"));
}

$stmt = $pdo->prepare("INSERT INTO ordem_servicos (cliente, servico, data_servico, hora_servico, tipo_servico, adicional) VALUES (:cliente, :servico, :data_servico, :hora_servido, :tipo_servico, :adicional)");
$stmt->bindParam(":cliente", $cliente);
$stmt->bindParam(":servico", $servico);
$stmt->bindParam(":tipo_servico", $tipo_servico);
$stmt->bindParam(":data_servico", $data);
$stmt->bindParam(":hora_servico", $hora_servico);
$stmt->bindParam(":adicional", $adicional);




if ($stmt->execute()) {

} else {

}
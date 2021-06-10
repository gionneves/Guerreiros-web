<?php
/**
 * Criar serviços para o banco de dados Guerreiros
 * 
 * PHP version 7
 * 
 * @category Serviços
 * @package  Serviços
 * @author   Giovanni Neves Sadauscas <gionneves@gmail.com>
 * @license  Guerreiros games
 * @link     http//localhost/
 */

//require '../Conexao.php';

$categoria = $_POST['categoria'];
$servico = $_POST['servico'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$custo = $_POST['custo'];
$valor = $_POST['valor'];
$tempo = $_POST['dias'];
$garantia = $_POST['garantia'];

if ($garantia == 'Sim') {
    $gdias = $_POST['dgias'];
} else {
    $gdias = 0;
}

if ($custo > 0 && $lucro > 0) {
    $lucro = $valor - $custo;
}

/*
$sql = "INSERT INTO servicos (categoria, servico, marca, modelo, custo, valor, lucro, tempo, garantia, garantia_dias) VALUES (:CATEGORIA, :SERVICO, :MARCA, :MODELO, :CUSTO, :VALOR, :LUCRO, :TEMPO, :GARANTIA, :GARANTIADIA);";
$stmt = $pdo->prepare($sql);

$stmt->bindParam(':CATEGORIA', $categoria);
$stmt->bindParam(':SERVICO', $servico);
$stmt->bindParam(':MARCA', $marca);
$stmt->bindParam(':MODELO', $modelo);
$stmt->bindParam(':CUSTO', $custo);
$stmt->bindParam(':VALOR', $valor);
$stmt->bindParam(':LUCRO', $lucro);
$stmt->bindParam(':TEMPO', $tempo);
$stmt->bindParam(':GARANTIA', $garantia);
$stmt->bindParam(':GARANTIADIA', $gdias);

echo 'pre-exec ';

if ($stmt->execute()) {
    setcookie("sussesso_servico", "sucesso", time()+15);
    header("Location: /views/CreateServico.php");
} else {
    setcookie("sussesso_servico", "falha", time()+15);
    header("Location: /views/CreateServico.php");
}

echo 'pos-exec'; */

include "../conexaoi.php";

$sql = "INSERT INTO servicos (categoria, servico, marca, modelo, custo, valor, lucro, tempo, garantia, garantia_dias) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";

$stmt = $conn->prepare($sql);
$stmt->bind_param($categoria, $servico, $marca, $modelo, $custo, $valor, $lucro, $tempo, $garantia, $gdias);

if ($stmt->execute()) {
    setcookie("sussesso_servico", "sucesso", time()+15);
    header("Location: /views/CreateServico.php");
    echo 'pos-exec';
} else {
    setcookie("sussesso_servico", "falha", time()+15);
    header("Location: /views/CreateServico.php");
    echo 'pos-exec';
}


?>

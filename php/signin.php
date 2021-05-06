<?php

include "conexao.php";

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$nascimento = $_POST['nascimento'];
$cep = $_POST['cep'];
$endereco = $_POST['endereco'];
$numero = $_POST['endereco_numero'];
$bairro = $_POST['bairro'];
$municipio = $_POST['cidade'];
$estado = $_POST['uf'];
$complemento = $_POST['complemento'];
$teleResidencia = $_POST['telefone_fixo'];
$teleCelular = $_POST['telefone_celular'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql_verifica = "SELECT * FROM usuarios WHERE cpf = :CPF";
$stmt = $pdo->prepare($sql_verifica);
$stmt->bindParam(':CPF', $cpf);
$stmt->execute();

if ($stmt->rowCount() > 0) {

    $retornoApp = array("CADASTRO" => "CPF_ERRO");
} else {

    $sql_insert = "INSERT INTO usuarios (nome, cpf, rg, nascimento, cep, endereco, numero, bairro, municipio, estado, complemento, teleResidencia, teleCelular, email, senha) VALUES (:NOME, :CPF, :RG, :NASCIMENTO, :CEP, :ENDERECO, :NUMERO, :BAIRRO, :MUNICIPIO, :ESTADO, :COMPLEMENTO, :TELERESIDENCIA, :TELECELULAR, :EMAIL, :SENHA);";
    $stmt = $pdo->prepare($sql_insert);

    $stmt->bindParam(':NOME', $nome);
    $stmt->bindParam(':CPF', $cpf);
    $stmt->bindParam(':RG', $rg);
    $stmt->bindParam(':NASCIMENTO', $nascimento);
    $stmt->bindParam(':CEP', $cep);
    $stmt->bindParam(':ENDERECO', $endereco);
    $stmt->bindParam(':NUMERO', $numero);
    $stmt->bindParam(':BAIRRO', $bairro);
    $stmt->bindParam(':MUNICIPIO', $municipio);
    $stmt->bindParam(':ESTADO', $estado);
    $stmt->bindParam(':COMPLEMENTO', $complemento);
    $stmt->bindParam(':TELERESIDENCIA', $teleResidencia);
    $stmt->bindParam(':TELECELULAR', $teleCelular);
    $stmt->bindParam(':EMAIL', $email);
    $stmt->bindParam(':SENHA', $senha);

    if ($stmt->execute()) {
        $retornoApp = array("CADASTRO" => "SUCESSO");
        header("Location: /Guerreiros/index.html");
    } else {
        $retornoApp = array("CADASTRO" => "ERRO");
    }
}
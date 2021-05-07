<?php

include "Conexao.php";
//require "conexaolog.php";

/*
$se_user = $_SESSION['cliente_id'];
$se_nome = $_SESSION['cliente_nome'];
$sql_cliente = 'INSERT INTO logs_cliente (id_cliente, nome_cliente, atividade, resenha) VALUES (?, ?, ?, ?);';
*/

/* Pega informações do HTML e atribui em váriaveis */

$loja = $_SESSION['cliente_nome'];
$vendedor = $_POST['nome_vendedor'];
$nome = $_POST['nome_cliente'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$nascimento = $_POST['nascimento'];
$teleResidencia = $_POST['telefone_fixo'];
$teleCelular = $_POST['telefone_celular'];
$cep = $_POST['cep'];
$endereco = $_POST['endereco'];
$numero = $_POST['endereco_numero'];
$bairro = $_POST['bairro'];
$municipio = $_POST['cidade'];
$estado = $_POST['uf'];
$complemento = $_POST['complemento'];
$referencia = $_POST['referencia'];
$plano_mb = $_POST['internet'];
$tipo_plano = $_POST['tipo_plano'];
$dia_vencimento = $_POST['dia_vencimento'];

/* Identifica se o CPF já está cadastrado no banco de dados */
$sql_verifica = "SELECT * FROM os_zaaz WHERE cpf_cliente = :CPF";
$stmt = $pdo->prepare($sql_verifica);
$stmt->bindParam(':CPF', $cpf);
$stmt->execute();

/**
 * Caso já esteja cadastado, retorna um erro avisando que já está cadastado!
 */
if ($stmt->rowCount() > 0) {
    echo 'ERRO, cliente ja cadastrado';
    
} else {

    $sql_insert = "INSERT INTO os_zaaz (loja, nome_vendedor, nome_cliente, email_cliente, cpf_cliente, rg_cliente, nascimento_cliente, fixo_cliente, celular_cliente, cep_cliente, endereco_cliente, numero_cliente, municipio_cliente, bairro_cliente, estado_cliente, complemento_cliente, referencia_cliente, plano_cliente, tipo_plano, dia_vencimento)
     VALUES (:LOJA, :VENDEDOR, :NOME, :EMAIL, :CPF, :RG, :NASCIMENTO, :TELERESIDENCIA, :TELECELULAR, :CEP, :ENDERECO, :NUMERO, :MUNICIPIO, :BAIRRO, :ESTADO, :COMPLEMENTO, :REFERENCIA, :PLANOMB, :TIPOPLANO, :DIAVENCIMENTO);";
    $stmt = $pdo->prepare($sql_insert);

    $stmt->bindParam(':LOJA', $loja);
    $stmt->bindParam(':VENDEDOR', $vendedor);
    $stmt->bindParam(':NOME', $nome);
    $stmt->bindParam(':EMAIL', $email);
    $stmt->bindParam(':CPF', $cpf);
    $stmt->bindParam(':RG', $rg);
    $stmt->bindParam(':NASCIMENTO', $nascimento);
    $stmt->bindParam(':TELERESIDENCIA', $teleResidencia);
    $stmt->bindParam(':TELECELULAR', $teleCelular);
    $stmt->bindParam(':CEP', $cep);
    $stmt->bindParam(':ENDERECO', $endereco);
    $stmt->bindParam(':NUMERO', $numero);
    $stmt->bindParam(':BAIRRO', $bairro);
    $stmt->bindParam(':MUNICIPIO', $municipio);
    $stmt->bindParam(':ESTADO', $estado);
    $stmt->bindParam(':COMPLEMENTO', $complemento);
    $stmt->bindParam(':REFERENCIA', $referencia);
    $stmt->bindParam(':PLANOMB', $plano_mb);
    $stmt->bindParam(':TIPOPLANO', $tipo_plano);
    $stmt->bindParam(':DIAVENCIMENTO', $dia_vencimento);

    if ($stmt->execute()) {
        //$stmt = $pdo2->prepare($sql_cliente)->execute([$se_user, $se_nome, "Cadastro Zaaz", "Funcionario [" + $vendedor + "] criou um cadastro na zaaz "]);
        header("Location: /loja_dashboard.html");
    } else {
        $retornoApp = array("CADASTRO" => "ERRO");
    }
}

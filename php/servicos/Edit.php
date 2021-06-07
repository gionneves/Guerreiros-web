<?php
/**
 * Mostrar todos os serviços cadastrados
 * 
 * PHP version 7
 * 
 * @category Serviços
 * @package  Serviços
 * @author   Giovanni Neves Sadauscas <gionneves@gmail.com>
 * @license  Guerreiros games
 * @link     http//localhost/
 */

$categoria = $_POST["categoria"];
$servico = $_POST["servico"];
$custo = $_POST["custo"];
$valor = $_POST["valor"];
$lucro = $_POST["lucro"];
$tempo = $_POST["tempo"];

if ($custo > 0 && $lucro > 0) {
    $lucro = $valor - $custo;
}


$sql = "INSERT INTO servicos (tipo_servico, categoria, servico, custo, valor, lucro, 
tempo) VALUES ($tipo, $categoria, $servico, $custo, $valor, $lucro, $tempo);";
$stmt = $pdo->prepare($sql);

if ($stmt->execute()) {
    setcookie("sussesso_servico", true, time()+15);
    header("Location: /views/CreateServico.php");
} else {
    setcookie("sussesso_servico", false, time()+15);
    header("Location: /views/CreateServico.php");
}

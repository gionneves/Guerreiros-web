<?php

$tipo = $_POST["tipo_servico"];
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

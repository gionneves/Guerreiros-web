<?php

require "../php/Conexao.php";

$cliente = $_SESSION['cliente_id'];
$servico = $_POST['radioGroup'];

if (date('D', strtotime("+3 day")) == 'Sun') {
    $data = date('d/m/Y', strtotime("+4 day"));
} else {
    $data = date('d/m/Y', strtotime("+3 day"));
}
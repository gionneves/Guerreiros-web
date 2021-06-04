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

$categoria = $_POST['categoria'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$servico = $_POST['servico'];
$custo = $_POST['custo'];
$valor = $_POST['valor'];
$lucro = $_POST['lucro'];
$tempo = $_POST['dias'];
$garantia = $_POST['garantia'];

if ($garantia == 'Sim') {
    $gdias = $_POST['dgias'];
}

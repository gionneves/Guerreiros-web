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


/**
 * Serve para subitrair dois valores, assim retornando o lucro dos parametro passado
 * sendo o primeiro o custo e o segundo o valor. Nisso já e subtraido e retornando
 * o resultado do lucro
 * 
 * @param $a O Custo do produto, o quanto foi pago para ser possivel fazer o serviço
 * @param $b O Valor do produto, o quanto sera cobrado pelo serviço
 * 
 * @return Integer O retorno da função, mostra o custo menos o valor, 
 * revelando o lucro total
 */
function Calc_lucro(int $a, int $b) 
{
    return $b - $a;
}

require '../Conexao.php';

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

if ($custo > 0 && $valor > 0) {
    $lucro = Calc_lucro($custo, $valor);

}


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

echo 'pos-exec'; ?>

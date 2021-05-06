<!DOCTYPE html>

<?php

include "../php/conexao.php";

$login = $_POST["login_db"];
$senha = $_POST["senha_db"];

$sql_verifica = "SELECT * FROM painel WHERE Login = :LOGIN";
$stmt2 = $pdo->prepare($sql_verifica);
$stmt2->bindParam(':LOGIN', $login);
$stmt2->execute();

if ($stmt2->rowCount() > 0) {
    //$retornoApp = array("PAINEL" => "Ja existente");
    echo '<h1 class="CenterDivOff" >Já existente</h1>';
} else {
    $sql = "INSERT INTO painel (Login, Senha) VALUES (:LOGIN, :SENHA);";
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':LOGIN', $login);
    $stmt->bindParam(':SENHA', $senha);

    if ($stmt->execute()) {
        echo '<div class="CenterDivOff">';
        echo "<h1>Cadastrado com sucesso!</h1>";
        echo '</div>';
        //$retornoApp = array("PAINEL" => "SUCESSO");
    } else {
        echo '<div class="CenterDivOff">';
        echo "<h3>Erro com o cadastro!</h3>";
        echo '</div>';

        //$retornoApp = array("PAINEL" => "ERROR");
    }
}



//echo json_encode($retornoApp);
?>


<html lang="pt-br">

<head class="BackBody">
    <meta http_equiv="refresh" content="1; url = " />
    <link rel="stylesheet" href="css/style.css" />
    <link href="css/animation.css" rel="stylesheet" type="text/css" />

    <button onclick="goBack()">Voltar</button>

<script>
function goBack() {
  window.history.back();
}
</script>

</head>

<body>

</body>

</html>

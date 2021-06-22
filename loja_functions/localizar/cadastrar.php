<?php
/**
 * Cadastra usuarios no banco de dados Guerreiros
 * 
 * PHP version 7
 * 
 * @category Cadastrar
 * @package  Loja_Functions
 * @author   Giovanni Neves Sadauscas <gionneves@gmail.com>
 * @license  Guerreiros games
 * @link     http//localhost/
 */

 require "conexao.php";

$login = $_POST["login_db"];
$senha = $_POST["senha_db"];

$sql_verifica = "SELECT * FROM painel WHERE Login = :LOGIN";
$stmt2 = $pdo->prepare($sql_verifica);
$stmt2->bindParam(':LOGIN', $login);
$stmt2->execute(); 
?>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/css/bootstrap.css" />
        <link rel="stylesheet" href="/css/guerreiros.css" />
    </head>
    <body class="bg-light grade">
        <div class="container mc-5">
            <?php 
            if ($stmt2->rowCount() > 0) {
                echo '<div class="text-center">';
                echo '<h1>Ja existente</h1>';
                echo '</div>';
            } else {
                $sql = "INSERT INTO painel (Login, Senha) VALUES (:LOGIN, :SENHA);";
                $stmt = $pdo->prepare($sql);

                $stmt->bindParam(':LOGIN', $login);
                $stmt->bindParam(':SENHA', $senha);

                if ($stmt->execute()) {
                    echo '<div class="text-center">';
                    echo "<h1>Cadastrado com sucesso!</h1>";
                    echo '</div>';
                } else {
                    echo '<div class="text-center">';
                    echo "<h3>Erro com o cadastro!</h3>";
                    echo '</div>';
                }
            }
            ?>
            <div class="text-center">
                <button class="btn btn-primary btn-lg" onclick="goBack()">Voltar</button>
            </div>
        </div>

        <script>
        function goBack() {
            window.history.back();
        }
        </script>
    </body>
</html>

<?php

// O "if" primeiramente só inicia caso tiver os dois campos preenchidos.
if (isset($_POST["email"]) && !empty($_POST["email"]) && isset($_POST["password"]) && !empty($_POST["password"])) {

    // Importa o "Conexao.php" e também o "Usuario.php" para o arquivo.
    include "Conexao.php";
    include "Usuario.php";

    // Instancia a classe Usuario.
    $u = new Usuario();

    // Adiciona o email e senha do usuário a variaveis junto com "addslashes".
    $email = addslashes($_POST["email"]);
    $pass = addslashes($_POST["password"]);

    /**
     * Aqui é passado o parametro da classe usuário na função de login e se for
     * verdadeiro ele vai para a outra verificação que se é algum login da loja,
     * pois será enviado para um dashboard diferente do usuário final.
     */
    if ($u->verificaLogin($email, $pass) == true) {

        /**
         * Aqui é o verificador da loja, e como foi falado no comentário do
         * "Usuario.php" aqui a gente verifica o estado dentro do banco de dados e
         * onde está cadastrado para ter acesso ao dashboard da loja.
         *
         * Aqui para ter acesso ao Dashboard da loja é necessario que no banco de
         * dados na parte de estado esteja escrito "GG", caso estiver, de automático
         * já é cadastrado como login de loja.
         */
        if ($_SESSION['cliente_estado'] == 'GG') {
            header("Location: /dashboard/loja_dashboard.html"); // Leva para o Dashboard da loja.
        } elseif ($_SESSION['cliente_estado'] == 'TT') {
            header("Location: tecnicos/index.html");
        } else {
            header("Location: /dashboard/dashboard.php"); // Leva para o Dashboard do usuário.
        }
    } else {
        header("Location: /index.html"); // Caso falso ele retorna para tela inícial.
    }
} else {
    header("Location: /index.html"); // Caso os campos estiverem vázios retorna para tela inicial.
}

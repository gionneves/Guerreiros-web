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

    require '../Conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/bootstrap.css" />
    <title>Serviços Guerreiros-Multi</title>
</head>

<body>
    <header class="m-3">
        <div class="container bg-transparence-light p-2 mc-3 rounded shadow">
            <nav class="nav nav-pills nav-fill" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <a class="nav-link active" aria-current="page" href="#">Todos serviços</a>
                <a class="nav-link" href="CreateServico.php">Criar serviço</a>
                <?php if (isset($_SESSION['vcc']) && $_SESSION['vcc'] == 'gerenteTec') { ?>
                <a class="nav-link" href="ViewServices.php">Visualizar serviços</a>
                <?php }?>
            </nav>
        </div>
    </header>

    <div class="text-center">
        <h3>Todos serviços</h3>
        <h6 class="text-black-50">Todos os serviços já cadastrados!</h6>
    </div>

    <div id="todos_servicos"></div>

    <script src="/js/bootstrap.js"></script>
    <script>
    function loadXMLDoc() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("todos_servicos").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "TodosServicos.php", true);
        xhttp.send();
    }

    setInterval(function() {
        loadXMLDoc();
    }, 2000);

    window.onload = loadXMLDoc;
    </script>
</body>

</html>

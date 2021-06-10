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

if (isset($_SESSION['vcc']) && $_SESSION['vcc'] == 'gerenteTec') {
    include "Template/HeaderGen.html";
} else {
    include "Template/Header.html";
} ?>

    <div class="text-center">
        <h3>Todos serviços</h3>
        <h6 class="text-black-50">Todos os serviços já cadastrados!</h6>
    </div>

    <div id="todos_servicos"></div>

    
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


<?php require "Template/Footer.html" ?>

<?php
/**
 * Mostra todas os O.S. disponivel para o tecnico que está na sessão.
 * Nisso cada tecnico vendo somente as O.S. que eles tem e quais eles podem
 * cadastrar como se fosse eles
 *
 * PHP version 7
 *
 * @category Tecnicos
 * @package  Tecnicos
 * @author   Giovanni Neves Sadauscas <gionneves@gmail.com>
 * @license  Guerreiros games
 * @link     http//localhost/
 */

 require "Template/Header.html";

?>

    <div id="todas_os"></div>

    <!-- ----------- Modal -------------- -->
    <div
      class="modal fade"
      id="staticBackdrop"
      data-bs-backdrop="static"
      data-bs-keyboard="false"
      tabindex="-1"
      aria-labelledby="staticBackdropLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Guerreiros-Multi</h5>
            <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
          </div>
          <div class="modal-body">
            <div class="text-center">
              <p>
                <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                Carregando...
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>
      function loadXMLDoc() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("todas_os").innerHTML = this.responseText;
          }
        };
        xhttp.open("GET", "Todas_OS.php", true);
        xhttp.send();
      }

      setInterval(function () {
        loadXMLDoc();
      }, 500);

      window.onload = loadXMLDoc;
    </script>

<?php require "Template/Footer.html"; ?>
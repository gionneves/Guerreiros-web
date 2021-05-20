<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="/css/bootstrap.css" />
    <link rel="stylesheet" href="/css/guerreiros.css" />
    <script src="/js/bootstrap.js"></script>
    <script src="/js/jquery-3.6.0.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tecnicos Guerreiros</title>
</head>

<body>
    <header class="m-3">
        <div class="container bg-transparence-light p-2 mc-3 rounded shadow">
            <nav class="nav nav-pills nav-fill" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <a class="nav-link active" aria-current="page" href="#">Todas O.S.</a>
                <a class="nav-link" href="Disponivel_OS.php">O.S. disponíveis</a>
            </nav>
        </div>
    </header>

    <div id="todas_os"></div>

    <!-- ----------- Modal -------------- -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">
                        Guerreiros-Multi
                    </h5>
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
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("todas_os").innerHTML =
                    this.responseText;
            }
        };
        xhttp.open("GET", "Todas_OS.php", true);
        xhttp.send();
    }

    setInterval(function() {
        loadXMLDoc();
    }, 500);

    window.onload = loadXMLDoc;
    </script>
</body>

</html>
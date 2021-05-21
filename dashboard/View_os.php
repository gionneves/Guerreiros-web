<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Sistema de logout após 15 minustos de inatividade -->
    <meta http-equiv="refresh" content="900;url=/index.html" />
    <!-- Importação do estilo Bootstrap 5 e código customizado Guerreiros -->
    <link rel="stylesheet" href="/css/bootstrap.css" />
    <link rel="stylesheet" href="/css/guerreiros.css" />
    <title>Minhas O.S.</title>
</head>

<body class="bg-light grade">
    <!-- Modal que cria a tela de carregamento -->
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

    <br />
    <!-- Navegação entre Dashboard e "Minhas O.S." -->
    <nav>
        <ul class="nav nav-tabs nav-fill bg-white rounded">
            <li class="nav-item" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <a class="nav-link" aria-current="page" href="Dashboard.php">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active disabled" aria-current="page" href="#">Minhas O.S.</a>
            </li>
        </ul>
    </nav>
    <!-- Final da NAV -->
    <br />
    <!-- Celular OS View -->
    <div class="container bg-white rounded border border-dark">
        <div class="text-center">
            <h2>Celular</h2>
        </div>
        <div class="os_cel">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">O.S.</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Estado</th>
                    </tr>
                </thead> <!-- FROM ordem_servicos WHERE tipo_os = "Celular" -->
                <tbody>
                    <?php
                    include ('../php/Estados_OS.php');
                    require "../php/Conexao.php";
                    $e_os = new Estados_OS();
                    $sql = "SELECT id, marca, modelo, estado FROM ordem_servicos WHERE tipo_os = 'Celular' AND cliente = '".$_SESSION['cliente_id']."'";
                    foreach ($pdo->query($sql) as $os_cel) { 
                        echo '<tr>';
                        echo '<th scope="row">'.$os_cel['id'].'</th>';
                        echo '<th>'.$os_cel['marca'].'</th>';
                        echo '<th>'.$os_cel['modelo'].'</th>';
                        echo '<th>'.$e_os->decode_estado($os_cel['estado']).'</th>';
                        echo '</tr>';
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Videogame OS View -->
    <br />
    <div class="container bg-white rounded border border-dark">
        <div class="text-center">
            <h2>Videogame</h2>
        </div>
        <div class="os_videogame">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">O.S.</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
              $sql = "SELECT id, marca, modelo, estado FROM ordem_servicos WHERE tipo_os = 'Videogame' AND cliente = '".$_SESSION['cliente_id']."'";
              foreach ($pdo->query($sql) as $os_videogame) { 
                echo '<tr>';
                echo '<th scope="row">'.$os_videogame['id'].'</th>';
                echo '<th>'.$os_videogame['marca'].'</th>';
                echo '<th>'.$os_videogame['modelo'].'</th>';
                echo '<th>'.$e_os->decode_estado($os_videogame['estado']).'</th>';
                echo '</tr>';
              } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Tablet OS View -->
    <br />
    <div class="container bg-white rounded border border-dark">
        <div class="text-center">
            <h2>Tablet</h2>
        </div>
        <div class="os_tablet">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">O.S.</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
              $sql = "SELECT id, marca, modelo, estado FROM ordem_servicos WHERE tipo_os = 'Tablet' AND cliente = '".$_SESSION['cliente_id']."'";
              foreach ($pdo->query($sql) as $os_tablet) { 
                echo '<tr>';
                echo '<th scope="row">'.$os_tablet['id'].'</th>';
                echo '<th>'.$os_tablet['marca'].'</th>';
                echo '<th>'.$os_tablet['modelo'].'</th>';
                echo '<th>'.$e_os->decode_estado($os_tablet['estado']).'</th>';
                echo '</tr>';
              } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- HelpDesk OS View -->
    <br />
    <div class="container bg-white rounded border border-dark">
        <div class="text-center">
            <h2>Ar condicionado</h2>
        </div>
        <div class="os_helpdesk">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">O.S.</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
              $sql = "SELECT id, marca, modelo, estado FROM ordem_servicos WHERE tipo_os = 'Ar condicionado' AND cliente = '".$_SESSION['cliente_id']."'";
              foreach ($pdo->query($sql) as $os_helpdesk) { 
                echo '<tr>';
                echo '<th scope="row">'.$os_helpdesk['id'].'</th>';
                echo '<th>'.$os_helpdesk['marca'].'</th>';
                echo '<th>'.$os_helpdesk['modelo'].'</th>';
                echo '<th>'.$e_os->decode_estado($os_helpdesk['estado']).'</th>';
                echo '</tr>';
              } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>

<!-- "select id from CUSTOMER where username = '".$_SESSION['username']."'" -->
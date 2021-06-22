<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Todos os usuários</title>
    <link rel="stylesheet" href="/css/bootstrap.css" />
    <link rel="stylesheet" href="/css/guerreiros.css" />
    <script src="/js/bootstrap.js"></script>
    <script src="/js/jquery-3.6.0.min.js"></script>
</head>

<body>

    <div class="container ratio-16x9">
        <a href="https://www.guerreirosgames.com.br">
            <img src="/images/vetor_pequeno.png" class="rounded mx-auto d-block" width="35%" height="35%" />
        </a>
    </div>


    <div class="container border border-2 rounded mc-3">

        <div>
            <div class="rowlista">
                <table class="table table-striped table-hover table-border">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Login</th>
                            <th scope="col">Senha</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tbody>
                        <?php
                        require "conexao.php";
                        $sql = "SELECT * FROM painel ORDER BY ID DESC";
                        foreach ($pdo->query($sql) as $rowlista) {
                            echo '<tr>';
                            echo '<th scope="row">'.$rowlista['ID'].'</th>';
                            echo '<td>' . $rowlista['Login'] . '</td>';
                            echo '<td>' . $rowlista['Senha'] . '</td>';
                            echo '</tr>';
                        }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
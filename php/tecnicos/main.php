<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/bootstrap.css" />
    <link rel="stylesheet" href="/css/guerreiros.css" />
    <script src="/js/bootstrap.js"></script>
    <script src="/js/jquery-3.6.0.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tecnicos Guerreiros</title>
</head>

<body>
    <div class="os_celular">
        <div class="container">
            <table class="table table-striped table-hover table-border">
                <thead>
                    <th scope="col">O.S.</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">EMEI</th>
                    <th scope="col">Defeitos</th>
                    <th scope="col">Tecnico</th>
                    <th scope="col">Serviço</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Ações</th>
                </thead>
                <tbody>
                    <?php
                        require "../Conexao.php";
                        $sql = "SELECT * FROM os_phone";
                        foreach ($pdo->query($sql) as $os_celular) { 
                            echo '<tr>';
                            echo '<th scope="row">'.$os_celular['id'].'</th>';
                            echo '<th>'.$os_celular['marca'].'</th>';
                            echo '<th>'.$os_celular['modelo'].'</th>';
                            echo '<th>'.$os_celular['EMEI'].'</th>';
                            echo '<th>'.$os_celular['defeitos'].'</th>';
                            echo '<th>'.$os_celular['tecnico'].'</th>';
                            echo '<th>'.$os_celular['servico_realizado'].'</th>';
                            echo '<th>'.$os_celular['estado'].'</th>';
                            echo '<th><a href="edit.php?edit='.$os_celular['id'].'" class="btn btn-success">Editar</a></th>';
                            echo '</tr>';
                        } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
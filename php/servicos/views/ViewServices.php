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

    require '../../Conexao.php';
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <title>Serviços Guerreiros-Multi</title>
</head>

<body>
    <header class="m-3">
        <div class="container bg-transparence-light p-2 mc-3 rounded shadow">
            <nav class="nav nav-pills nav-fill" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <a class="nav-link" href="index.php">Todos serviços</a>
                <a class="nav-link" href="CreateServico.php">Criar serviço</a>
                <?php if (isset($_SESSION['vcc']) && $_SESSION['vcc'] == 'gerenteTec') { ?>
                <a class="nav-link active" href="ViewServices.php">Visualizar serviços</a>
                <?php } ?>
            </nav>
        </div>
    </header>

    <div class="todos_servicos">
        <div class="container">
            <table class="table table-striped table-hover table-border">
                <thead>
                    <th scope="col">ID</th>
                    <th scope="col">Serviço</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Tempo estimado</th>
                    <th scope="col">Ação</th>
                </thead>
                <tbody>
                    <?php 
                    $sql = "SELECT id, servico, categoria, marca, modelo, valor, tempo FROM servicos;";
                    foreach ($pdo->query($sql) as $todoser) {
                        echo "<tr>";
                        echo '<th scope="row">'.$todoser['id'].'</th>';
                        echo '<th>'.$todoser['servico'].'</th>';
                        echo '<th>'.$todoser['categoria'].'</th>';
                        echo '<th>'.$todoser['marca'].'</th>';
                        echo '<th>'.$todoser['modelo'].'</th>';
                        echo '<th>R$'.$todoser['valor'].'</th>';
                        echo '<th>'.$todoser['tempo'].' Dias</th>';
                        echo '<th><button class="btn btn-warning m-2 editbtn">Editar</button><button class="btn btn-danger m-2 delbtn">Deletar</button></th>';
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- ----------- Modal -------------- -->
    <div class="modal fade shadow" id="editmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
                    </div>
                    <form action="Edit.php" method="post">
                        <div class="modal-body">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Serviço</span>
                                <input class="form-control" type="text" name="servico" id="servico">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Categoria</span>
                                <input class="form-control" type="text" name="categoria" id="categoria">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Marca</span>
                                <input class="form-control" type="text" name="marca" id="marca">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Modelo</span>
                                <input class="form-control" type="text" name="modelo" id="modelo">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Valor R$</span>
                                <input class="form-control" type="text" name="valor" id="valor">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Tempo</span>
                                <input class="form-control" type="text" name="tempo" id="tempo">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary btn-sm align-bottom"
                                data-bs-dismiss="modal">Descartar</button>
                            <button type="button" class="btn btn-warning shadow">Avançar O.S.</button>
                            <input type="submit" class="btn btn-success" value="Salvar mudanças" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- FIM MODAL -->

    <!-- ----------- Modal CARREGANDO -------------- -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">
                        Guerreiros-Multi
                    </h5>
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
    <!-- FIM MODAL CARREGANDO -->

    <!-- ----------- Modal CARREGANDO -------------- -->
    <div class="modal fade" id="delmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">
                        Deletar
                    </h5>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <h4>Tem certeza que deseja deletar?</h4>
                        <hr>
                        <button class="btn btn-outline-secondary btn-sm m-2" data-bs-dismiss="modal">Cancelar</button>
                        <button class="btn btn-danger m-2">Deletar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FIM MODAL CARREGANDO -->

    <script src="/js/bootstrap.js"></script>
    <script src="/js/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function() {
        $('.editbtn').on('click', function() {
            $('#editmodal').modal('show')

            $tr = $(this).closest('tr')

            var data = $tr.children('th').map(function() {
                return $(this).text()
            }).get()

            console.log(data)

            $('#os_update_id').val(data[0])
            $('#os_servico').val(data[6])
            $('#os_estado').val(data[7])
        })
        $('.delbtn').click(function() {
            $("#delmodal").modal('show');
        })
    })
    </script>
</body>

</html>

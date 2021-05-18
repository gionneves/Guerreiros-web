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
                            echo '<th> <button class="btn btn-success editbtn">Editar</button></th>';
                            echo '</tr>';
                        } ?>
                </tbody>
            </table>
        </div>
    </div>


    <!-- ----------- Modal -------------- -->
    <div class="modal fade" id="editmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
                        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                    </div>
                    <form action="edit.php" method="post">
                        <div class="modal-body">

                            <div class="form-group mb-2">
                                <label for="OrdemServico">O.S.</label>
                                <input type="text" class="form-control" name="os" id="os_update_id" disabled>
                            </div>

                            <div class="form-group mb-2">
                                <label for="tecnico">Tecnico</label>
                                <input type="text" class="form-control" name="tecnico" id="os_tecnico">
                            </div>

                            <div class="form-group mb-2">
                                <label for="servico">Serviço realizado</label>
                                <input type="text" class="form-control" name="servico" id="os_servico">
                            </div>

                            <div class="form-group mb-2">
                                <label for="estado">Estado</label>
                                <input type="text" class="form-control" name="estado" id="os_estado">
                            </div>


                        </div>
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary"
                            data-bs-dismiss="modal">Descartar</button>
                        <button type="button" class="btn btn-success">Salvar mudanças</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- FIM MODAL -->

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
                $('#os_tecnico').val(data[5])
                $('#os_servico').val(data[6])
                $('#os_estado').val(data[7])
            })
        })
        </script>
</body>

</html>
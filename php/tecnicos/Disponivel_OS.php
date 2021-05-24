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
    <header class="m-3">
        <div class="container bg-transparence-light p-2 mc-3 rounded shadow">
            <nav class="nav nav-pills nav-fill" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <a class="nav-link" href="index.php">Todas O.S.</a>
                <a class="nav-link active" aria-current="page" href="#">O.S. disponíveis</a>
            </nav>
        </div>
    </header>

    <div class="os_celular">
        <div class="container">
            <div class="text-center">
                <h3>Celulares</h3>
            </div>
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
                        include ('../Conexao.php');
                        include ('../Estados_OS.php');
                        $e_os = new Estados_OS();
                        $sql = "SELECT id, marca, modelo, EMEI, defeitos, tecnico, servico_realizado, estado FROM ordem_servicos WHERE tipo_os = 'Celular' AND estado > 1 AND estado < 9";
                        foreach ($pdo->query($sql) as $os_celular) { 
                            echo '<tr>';
                            echo '<th scope="row">'.$os_celular['id'].'</th>';
                            echo '<th>'.$os_celular['marca'].'</th>';
                            echo '<th>'.$os_celular['modelo'].'</th>';
                            echo '<th>'.$os_celular['EMEI'].'</th>';
                            echo '<th>'.$os_celular['defeitos'].'</th>';
                            echo '<th>'.$os_celular['tecnico'].'</th>';
                            echo '<th>'.$os_celular['servico_realizado'].'</th>';
                            echo '<th>'.$e_os->decode_estado($os_celular['estado']).'</th>';
                            echo '<th> <button class="btn btn-success editbtn">Editar</button></th>';
                        echo '</tr>';
                        } ?>
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
                        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                    </div>
                    <form action="edit.php" method="post">
                        <div class="modal-body">

                            <div class="form-group mb-2">
                                <label for="OrdemServico">O.S.</label>
                                <input type="text" class="form-control" name="os" id="os_update_id" disabled require>
                            </div>

                            <div class="form-group mb-2">
                                <label for="tecnico">Tecnico</label>
                                <input type="text" class="form-control" name="tecnico" id="os_tecnico" require>
                            </div>

                            <div class="form-group mb-2">
                                <label for="servico">Serviço realizado</label>
                                <input type="text" class="form-control" name="servico" id="os_servico" require>
                            </div>

                            <div class="form-group mb-2">
                                <label for="estado">Estado</label>
                                <div class="input-group">
                                    <button class="btn btn-warning shadow">Avançar O.S.</button>
                                    <div class="optionsTec">

                                        <select name="estado" class="form-select" id="estado">
                                            <?php
                                        for ($i = 2; $i < 9; ++$i){
                                            echo '<option value="'.$i.'">'.$e_os->decode_estado($i).'</option>';
                                        } 
                                        ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary"
                                data-bs-dismiss="modal">Descartar</button>
                            <button type="submit" class="btn btn-success">Salvar mudanças</button>
                        </div>
                    </form>
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
        <!-- FIM MODAL CARREGANDO -->

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


        /* ############################################################################# */



        /* function loadXMLDoc() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("os_celular_table").innerHTML =
                        this.responseText;
                }
            };
            xhttp.open("GET", "os_celular.php", true);
            xhttp.send();
        }

        setInterval(function() {
            loadXMLDoc();
        }, 500);

        window.onload = loadXMLDoc; */
        </script>
</body>

</html>
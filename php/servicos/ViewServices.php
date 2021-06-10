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

<div class="todos_servicos">
    <div class="container">
        <table class="table table-striped table-hover table-border">
            <thead>
                <th scope="col">ID</th>
                <th scope="col">Serviço</th>
                <th scope="col">Categoria</th>
                <th scope="col">Valor</th>
                <th scope="col">Tempo estimado</th>
                <th scope="col">Garantia</th>
                <th scope="col">Dias de garantia</th>
                <th scope="col">Modelo</th>
            </thead>
            <tbody>
                <?php 
                $sql = "SELECT id, categoria, modelo, servico, valor, tempo, garantia, garantia_dias FROM servicos;";
                foreach ($pdo->query($sql) as $todoser) {
                    echo "<tr>";
                    echo '<th scope="row">'.$todoser['id'].'</th>';
                    echo '<th>'.$todoser['servico'].'</th>';
                    echo '<th>'.$todoser['categoria'].'</th>';
                    echo '<th>R$'.$todoser['valor'].'</th>';
                    echo '<th>'.$todoser['tempo'].' Dias</th>';
                    echo '<th>'.$todoser['garantia'].' </th>';
                    echo '<th>'.$todoser['garantia_dias'].' Dias</th>';
                    echo '<th>'.$todoser['modelo'].'</th>';
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
                                <span class="input-group-text">Custo R$</span>
                                <input class="num form-control" type="text" name="custo" id="custo">

                                <span class="input-group-text">Valor R$</span>
                                <input class="num form-control" type="text" name="valor" id="valor">

                                <span class="input-group-text">Lucro R$</span>
                                <input class="form-control" type="text" name="lucro" id="lucro">
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

    
<?php require "Template/ModalLoading.html"; ?>
    
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
            $('#servico').val(data[1])
            $('#categoria').val(data[2])
            $('#marca').val(data[3])
            $('#modelo').val(data[4])
            $('#custo').val(data[5])
            $('#valor').val(data[6])
            $('#lucro').val(data[7])
            $('#categoria').val(data[8])

        })

        $(".num").keyup(function() {
            let x = $("#valor").val();
            let y = $("#custo").val();
            var z = x - y;
            if (z < 0) {
                $("#lucro").val(x - y);
                $("#lucro").removeClass("text-success text-warning").addClass("text-danger");
            } else if (z > 0) {
                $("#lucro").val(x - y);
                $("#lucro").removeClass("text-danger text-warning").addClass("text-success");
            } else {
                $("#lucro").val(x - y);
                $("#lucro").removeClass("text-danger text-success").addClass("text-warning");
            }
        });

        $('.delbtn').click(function() {
            $("#delmodal").modal('show');
        })
    })
    </script>
<?php require "Template/Footer.html" ?>

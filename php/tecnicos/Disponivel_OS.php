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
<!-- Alerta Confirmação -->
<div class="container">
    <?php if ($_COOKIE['alterado'] == "sucesso") { ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Sucesso!</strong> O.S. alterado com sucesso!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php } elseif ($_COOKIE['alterado'] == "falha") { ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Oops...</strong> Algo errado aconteceu! Verifique a O.S.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php }?>
</div>


<div class="container">
    <?php
    require '../Conexao.php';
    require '../Estados_OS.php';
    $e_os = new Estados_OS();
    $tec = $_SESSION['cliente_nome'];
    $sql = "SELECT id, marca, modelo, EMEI, defeitos, tecnico, servico_realizado, estado FROM ordem_servicos WHERE estado > 1 AND estado < 9 AND tecnico = '$tec'";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    if ($stmt->rowCount() > 0) { ?>
    <div class="minhas_os">
        <div class="container">
            <div class="text-center">
                <h3>Minhas O.S.</h3>
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
                    foreach ($pdo->query($sql) as $minhas_os) {
                            echo '<tr>';
                            echo '<th scope="row">'.$minhas_os['id'].'</th>';
                            echo '<th>'.$minhas_os['marca'].'</th>';
                            echo '<th>'.$minhas_os['modelo'].'</th>';
                            echo '<th>'.$minhas_os['EMEI'].'</th>';
                            echo '<th>'.$minhas_os['defeitos'].'</th>';
                            echo '<th>'.$minhas_os['tecnico'].'</th>';
                            echo '<th>'.$minhas_os['servico_realizado'].'</th>';
                            echo '<th>'.$e_os->decode_estado($minhas_os['estado']).'</th>';
                            echo '<th> <button class="btn btn-warning editbtn">Editar</button></th>';
                            echo '</tr>';
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</div> <?php 
    } else { ?>
<div class="text-center">
    <h4 class="text-black-50">Você não possuiu nenhuma O.S.</h4>
</div> <?php 
    } ?>

<div class="container">
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
                        $e_os = new Estados_OS();
                        $sql = "SELECT id, marca, modelo, EMEI, defeitos, tecnico, servico_realizado, estado FROM ordem_servicos WHERE tipo_os = 'Celular' AND estado > 1 AND estado < 9 AND tecnico = ''";
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
                        echo '<th> <button class="btn btn-warning editbtn">Editar</button></th>';
                        echo '</tr>';
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="container">
    <div class="os_tablet">
        <div class="container">
            <div class="text-center">
                <h3>Tablet</h3>
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
                        $sql = "SELECT id, marca, modelo, EMEI, defeitos, tecnico, servico_realizado, estado FROM ordem_servicos WHERE tipo_os = 'Tablet' AND estado > 1 AND estado < 9 AND tecnico = ''";
                    foreach ($pdo->query($sql) as $os_tablet) {
                        echo '<tr>';
                        echo '<th scope="row">'.$os_tablet['id'].'</th>';
                        echo '<th>'.$os_tablet['marca'].'</th>';
                        echo '<th>'.$os_tablet['modelo'].'</th>';
                        echo '<th>'.$os_tablet['EMEI'].'</th>';
                        echo '<th>'.$os_tablet['defeitos'].'</th>';
                        echo '<th>'.$os_tablet['tecnico'].'</th>';
                        echo '<th>'.$os_tablet['servico_realizado'].'</th>';
                        echo '<th>'.$e_os->decode_estado($os_tablet['estado']).'</th>';
                        echo '<th> <button class="btn btn-warning editbtn">Editar</button></th>';
                        echo '</tr>';
                    } ?>
                </tbody>
            </table>
        </div>
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
                <div class="modal-body">
                    <form action="edit.php" method="post">

                        <div class="form-group mb-2">
                            <label for="OrdemServico">O.S.</label>
                            <input type="text" class="form-control" name="os" id="os_update_id" require>
                        </div>

                        <div class="form-group mb-2">
                            <label for="tecnico">Tecnico</label>
                            <?php
                            echo '<input type="text" class="form-control" value="'.$_SESSION["cliente_nome"].'" name="tecnico" id="os_tecnico" require>'
                            ?>
                        </div>

                        <div class="form-group mb-2">
                            <label for="Marca">Marca</label>
                            <input type="text" class="form-control" name="marca" id="os_marca" disabled>
                        </div>

                        <div class="form-group mb-2">
                            <label for="Modelo">Modelo</label>
                            <input type="text" class="form-control" name="modelo" id="os_modelo" disabled>
                        </div>

                        <div class="form-group mb-2">
                            <label for="servico">Serviço realizado</label>
                            <div class="servicoTec">
                                <select name="servico" class="form-select" id="os_servico" require>
                                    <?php
                                    $sql = "SELECT servico FROM servicos WHERE modelo = ". $_COOKIE['modelo'] . ";";
                                    foreach ($pdo->query($sql) as $servicoTec) {
                                        echo '<option value="">'.$servicoTec["servico"].'</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group mb-2">
                            <label for="estado">Estado</label>
                            <div class="optionsTec">
                                <select name="estado" class="form-select" id="estado" require>
                                    <?php
                                    for ($i = 2; $i < 9; ++$i) {
                                        echo '<option value="'.$i.'">'.$e_os->decode_estado($i).'</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary"
                            data-bs-dismiss="modal">Descartar</button>
                        <button type="button" class="btn btn-warning shadow">Avançar O.S.</button>
                        <input type="submit" class="btn btn-success" value="Salvar mudanças" />
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- FIM MODAL -->

    <?php require "Template/ModalLoading.html"; ?>

    <script>
        function createCookie(name, value, days) {
        var expires;
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + days);
            expires = "; expires=" + date.toGMTString();
        } else {
            expires = "";
        }
        document.cookie = escape(name) + "=" + escape(value) + expires + "; path=/";
        }

        $(document).ready(function () {
        $(".editbtn").on("click", function () {
            $("#editmodal").modal("show");

            $tr = $(this).closest("tr");

            var data = $tr
                .children("th")
                .map(function () {
                    return $(this).text(); 
                })
                .get(); 

            console.log(data); 

            $("#os_update_id").val(data[0]);
            $("#os_marca").val(data[1]);
            $("#os_modelo").val(data[2]);
            //createCookie("modelo", $("#os_modelo").val(data[2]), "5");
            $("#os_servico").val(data[6]);
            $("#os_estado").val(data[7]);
        });
        });

    </script>

    <?php require "Template/Footer.html"; ?>

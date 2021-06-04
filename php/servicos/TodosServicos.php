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
?>

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
                require '../Conexao.php';
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

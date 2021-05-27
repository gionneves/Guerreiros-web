<div class="os_celular">
    <div class="container">
        <table class="table table-striped table-hover table-border">
            <thead>
                <th scope="col">O.S.</th>
                <th scope="col">Tipo O.S.</th>
                <th scope="col">Marca</th>
                <th scope="col">Modelo</th>
                <th scope="col">EMEI</th>
                <th scope="col">Defeitos</th>
                <th scope="col">Tecnico</th>
                <th scope="col">Serviço</th>
                <th scope="col">Estado</th>
            </thead>
            <tbody>
                <?php
                /**
                 * PHP version = 7.4
                 *
                 * @author: Giovanni Neves Sadauscas
                 *
                 * @version: 1.0
                 */
                
                require '../Conexao.php';
                require '../Estados_OS.php';
                $e_os = new Estados_OS();
                $sql = 'SELECT id, tipo_os, marca, modelo, emei, defeitos, tecnico, servico_realizado, estado FROM ordem_servicos';
                foreach ($pdo->query($sql) as $os_celular) {
                    echo '<tr>';
                    echo '<th scope="row">'.$os_celular['id'].'</th>';
                    echo '<th>'.$os_celular['tipo_os'].'</th>';
                    echo '<th>'.$os_celular['marca'].'</th>';
                    echo '<th>'.$os_celular['modelo'].'</th>';
                    echo '<th>'.$os_celular['emei'].'</th>';
                    echo '<th>'.$os_celular['defeitos'].'</th>';
                    echo '<th>'.$os_celular['tecnico'].'</th>';
                    echo '<th>'.$os_celular['servico_realizado'].'</th>';
                    echo '<th>'.$e_os->decode_estado($os_celular['estado']).'</th>';
                    echo '</tr>';
                } ?>
            </tbody>
        </table>
    </div>
</div>
<!-- CELULARES -->
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
            </thead>
            <tbody>
                <?php
            include ('../Conexao.php');
            include ('../Estados_OS.php');
            $e_os = new Estados_OS();
            $sql = 'SELECT id, marca, modelo, emei, defeitos, tecnico, servico_realizado, estado FROM ordem_servicos WHERE tipo_os = "Celular"';
            foreach ($pdo->query($sql) as $os_celular) { 
                echo '<tr>';
                echo '<th scope="row">'.$os_celular['id'].'</th>';
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

<!-- TABLET -->
<div class="os_tablet">
    <div class="container">
        <div class="text-center">
            <h3>Tablets</h3>
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
            </thead>
            <tbody>
                <?php
            $sql = 'SELECT id, marca, modelo, emei, defeitos, tecnico, servico_realizado, estado FROM ordem_servicos WHERE tipo_os = "Tablet"';
            foreach ($pdo->query($sql) as $os_tablet) { 
                echo '<tr>';
                echo '<th scope="row">'.$os_tablet['id'].'</th>';
                echo '<th>'.$os_tablet['marca'].'</th>';
                echo '<th>'.$os_tablet['modelo'].'</th>';
                echo '<th>'.$os_tablet['emei'].'</th>';
                echo '<th>'.$os_tablet['defeitos'].'</th>';
                echo '<th>'.$os_tablet['tecnico'].'</th>';
                echo '<th>'.$os_tablet['servico_realizado'].'</th>';
                echo '<th>'.$e_os->decode_estado($os_tablet['estado']).'</th>';
            echo '</tr>';
        } ?>
            </tbody>
        </table>
    </div>
</div>
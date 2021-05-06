<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>GSA - Visualizar database</title>
    <link rel="stylesheet" href="/css/bootstrap.css" />
    <link rel="stylesheet" href="/css/guerreiros.css" />
    <script src="/js/bootstrap.js"></script>
    <script src="/js/jquery-3.6.0.min.js"></script>
</head>

<body>
    <div class="container-fluid mc-4">
        <div class="row2">
            <table class="table table-striped table-hover table-border">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Loja</th>
                        <th>Vendedor</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>CPF</th>
                        <th>RG</th>
                        <th>data nascimento</th>
                        <th>Telefone fixo</th>
                        <th>Celular</th>
                        <th>CEP</th>
                        <th>Endereço</th>
                        <th>Número</th>
                        <th>Município</th>
                        <th>Bairro</th>
                        <th>Complemento</th>
                        <th>Referencia</th>
                        <th>Plano</th>
                        <th>Tipo do plano</th>
                        <th>Dia vencimento</th>
                        <th>Data de assinatura</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "conexao.php";
                    $sql = "SELECT * FROM os_zaaz";
                    foreach ($pdo->query($sql) as $row2) {
                        echo '<tr>';
                        echo '<td>'. $row2['id'] . '</td>';
                        echo '<td>'. $row2['loja'] . '</td>';
                        echo '<td>'. $row2['nome_vendedor'] . '</td>';
                        echo '<td>'. $row2['nome_cliente'] . '</td>';
                        echo '<td>'. $row2['email_cliente'] . '</td>';
                        echo '<td>'. $row2['cpf_cliente'] . '</td>';
                        echo '<td>'. $row2['rg_cliente'] . '</td>';
                        echo '<td>'. $row2['nascimento_cliente'] . '</td>';
                        echo '<td>'. $row2['fixo_cliente'] . '</td>';
                        echo '<td>'. $row2['celular_cliente'] . '</td>';
                        echo '<td>'. $row2['cep_cliente'] . '</td>';
                        echo '<td>'. $row2['endereco_cliente'] . '</td>';
						echo '<td>'. $row2['numero_cliente'] . '</td>';
						echo '<td>'. $row2['municipio_cliente'] . '</td>';
                        echo '<td>'. $row2['bairro_cliente'] . '</td>';
                        echo '<td>'. $row2['complemento_cliente'] . '</td>';
                        echo '<td>'. $row2['referencia_cliente'] . '</td>';
                        echo '<td>'. $row2['plano_cliente'] . '</td>';
                        echo '<td>'. $row2['tipo_plano'] . '</td>';
                        echo '<td>'. $row2['dia_vencimento'] . '</td>';
                        echo '<td>'. $row2['dataHora_cadastrado'] . '</td>';
                        echo '</tr>';
                    }
                ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="container-fluid mc-4">
        <div class="row">
            <table class="table table-striped table-hover table-border">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Loja</th>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>RG</th>
                        <th>data nascimento</th>
                        <th>Telefone fixo</th>
                        <th>Celular</th>
                        <th>Endereço</th>
                        <th>Complemento</th>
                        <th>Bairro</th>
                        <th>Referencia</th>
                        <th>CEP</th>
                        <th>E-mail</th>
                        <th>Plano</th>
                        <th>Tipo do plano</th>
                        <th>Dia vencimento</th>
                        <th>Data de assinatura</th>
                        <th>Vendedor</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "conexao.php";
                    $sql = "SELECT * FROM zaazos";
                    foreach ($pdo->query($sql) as $row) {
                        echo '<tr>';
                        echo '<td>'. $row['id'] . '</td>';
                        echo '<td>'. $row['loja'] . '</td>';
                        echo '<td>'. $row['nome'] . '</td>';
                        echo '<td>'. $row['cpf'] . '</td>';
                        echo '<td>'. $row['rg'] . '</td>';
                        echo '<td>'. $row['nascimento'] . '</td>';
                        echo '<td>'. $row['fixo'] . '</td>';
                        echo '<td>'. $row['cel'] . '</td>';
                        echo '<td>'. $row['endereco'] . '</td>';
                        echo '<td>'. $row['complemento'] . '</td>';
                        echo '<td>'. $row['bairro'] . '</td>';
                        echo '<td>'. $row['referencia'] . '</td>';
                        echo '<td>'. $row['cep'] . '</td>';
                        echo '<td>'. $row['email'] . '</td>';
                        echo '<td>'. $row['plano'] . '</td>';
                        echo '<td>'. $row['tipoPlano'] . '</td>';
                        echo '<td>'. $row['dataVencimento'] . '</td>';
                        echo '<td>'. $row['dataAssinatura'] . '</td>';
                        echo '<td>'. $row['vendedor'] . '</td>';
                        echo '</tr>';
                    }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
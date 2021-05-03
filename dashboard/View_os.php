<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Sistema de logout após 15 minustos de inatividade -->
    <meta http-equiv="refresh" content="900;url=/index.html" />
    <!-- Importação do estilo Bootstrap 5 e código customizado Guerreiros -->
    <link rel="stylesheet" href="/css/bootstrap.css" />
    <link rel="stylesheet" href="/css/guerreiros.css" />
    <title>Minhas O.S.</title>
  </head>

  <body class="bg-light grade">
    <br />
    <!-- Navegação entre Dashboard e "Minhas O.S." -->
    <nav>
      <ul class="nav nav-tabs nav-fill bg-white rounded">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="Dashboard.php"
            >Dashboard</a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link active disabled" aria-current="page" href="#"
            >Minhas O.S.</a
          >
        </li>
      </ul>
    </nav>
    <!-- Final da NAV -->
    <br />
    <!-- Celular OS View -->
    <div class="container bg-white rounded border border-dark">
      <div class="text-center">
        <h2>Celular</h2>
      </div>
      <div class="os_cel">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">O.S.</th>
              <th scope="col">Marca</th>
              <th scope="col">Modelo</th>
              <th scope="col">Estado</th>
            </tr>
          </thead>
          <tbody>
            <?php
              require "../php/Conexao.php";
              $sql = "SELECT * FROM os_phone WHERE cliente = '".$_SESSION['cliente_id']."'";
              foreach ($pdo->query($sql) as $os_cel) { 
                echo '<tr>';
                echo '<th scope="row">'.$os_cel['id'].'</th>';
                echo '<th>'.$os_cel['marca'].'</th>';
                echo '<th>'.$os_cel['modelo'].'</th>';
                echo '</tr>';
              } ?>
          </tbody>
        </table>
      </div>
    </div>
    <!-- Videogame OS View -->
    <br />
    <div class="container bg-white rounded border border-dark">
      <div class="text-center">
        <h2>Videogame</h2>
      </div>
      <div class="os_videogame">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">O.S.</th>
            <th scope="col">Marca</th>
            <th scope="col">Modelo</th>
            <th scope="col">Estado</th>
          </tr>
        </thead>
        <tbody>
        <?php
              $sql = "SELECT * FROM os_videogame WHERE cliente = '".$_SESSION['cliente_id']."'";
              foreach ($pdo->query($sql) as $os_videogame) { 
                echo '<tr>';
                echo '<th scope="row">'.$os_videogame['id'].'</th>';
                echo '<th>'.$os_videogame['marca'].'</th>';
                echo '<th>'.$os_videogame['modelo'].'</th>';
                echo '</tr>';
              } ?>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
      </div>
    </div>
    <!-- Tablet OS View -->
    <br />
    <div class="container bg-white rounded border border-dark">
      <div class="text-center">
        <h2>Tablet</h2>
      </div>
      <div class="os_tablet">
      <table class="tablet">
        <thead>
          <tr>
            <th scope="col">O.S.</th>
            <th scope="col">Marca</th>
            <th scope="col">Modelo</th>
            <th scope="col">Estado</th>
          </tr>
        </thead>
        <tbody>
        <?php
              $sql = "SELECT * FROM os_tablet WHERE cliente = '".$_SESSION['cliente_id']."'";
              foreach ($pdo->query($sql) as $os_tablet) { 
                echo '<tr>';
                echo '<th scope="row">'.$os_tablet['id'].'</th>';
                echo '<th>'.$os_tablet['marca'].'</th>';
                echo '<th>'.$os_tablet['modelo'].'</th>';
                echo '</tr>';
              } ?>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
      </div>
    </div>
  </body>
</html>

<!-- "select id from CUSTOMER where username = '".$_SESSION['username']."'" -->
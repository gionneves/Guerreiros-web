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
    <title>Dashboard</title>
  </head>
  <body class="bg-light grade">
    <br />
    <!-- Navegação entre Dashboard e "Minhas O.S." -->
    <nav>
      <ul class="nav nav-tabs nav-fill bg-white">
        <li class="nav-item">
          <a class="nav-link active disabled" aria-current="page" href="#"
            >Dashboard</a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="View_os.php"
            >Minhas O.S.</a
          >
        </li>
      </ul>
    </nav>
    <!-- Final da NAV -->
    <br/>
    <div class="container-fluid mc-2">
      <div class="text-end">
        <?php
        require_once '../php/Conexao.php';
        echo "<p class=''>".$_SESSION['cliente_nome']."</p>";
        ?>
    </div>
  </div>
    <br/>
    <div class="container">
      <div class="container text-center bg-transparence rounded">
        <!-- Inicio lista de O.S. -->
        <div class="row">
          <!-- O.S. de celular -->
          <div class="col-sm m-2">
            <img
              src="/images/os_celular.png"
              alt="O.S. Celular"
              width="175em"
              height="105em"
            />
            <h3 class="h3 text-white">Celular</h3>
          </div>
          <!-- O.S. de Videogame -->
          <div class="col-sm m-2">
            <img
              src="/images/os_videogame.png"
              alt="O.S. Videogame"
              width="175em"
              height="105em"
            />
            <h3 class="h3 text-white">Videogame</h3>
          </div>
          <!-- O.S. de Tablet -->
          <div class="col-sm m-2">
            <img
              src="/images/os_tablet.png"
              alt="O.S. Tablet"
              width="175em"
              height="105em"
            />
            <h3 class="h3 text-white">Tablet</h3>
          </div>
          <!-- O.S. de Ar condicionado -->
          <div class="col-sm m-2">
            <img
              src="/images/os_arCondicionado.png"
              alt="O.S. Ar condicionado"
              width="175em"
              height="105em"
            />
            <h3 class="h3 text-white">Ar condicionado</h3>
          </div>
          <div class="col-sm m-2">
            <img
              src="/images/os_helpdesk.png"
              alt="O.S. Helpdesk"
              width="175em"
              height="105em"
            />
            <h3 class="h3 text-white">Help-desk</h3>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <!-- Importação dos script do jQuery e Bootstrap 5 -->
      <script src="/js/jquery-3.6.0.min.js"></script>
      <script src="/js/bootstrap.js"></script>
    </footer>
  </body>
</html>

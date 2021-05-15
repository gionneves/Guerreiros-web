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

 <!-- Modal que cria a tela de carregamento -->
 <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Guerreiros-Multi</h5>
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
          <a class="nav-link" aria-current="page" href="View_os.php" data-bs-toggle="modal"
            data-bs-target="#staticBackdrop"
            >Minhas O.S.</a>
        </li>
      </ul>
    </nav>
    <!-- Final da NAV -->
    <br />
    <div class="container-fluid mc-2">
      <div class="text-end">
        <!-- Código PHP para pode puxar o nome do cliente e mostra na tela -->
        <?php 
          require_once '../php/Conexao.php';
          echo "<p>".$_SESSION['cliente_nome']."</p>";
        ?>
      </div>
    </div>
    <br />
    <div class="container">
      <div class="container text-center bg-transparence rounded">
        <!-- Inicio lista de O.S. -->
        <div class="row">
          <!-- O.S. de celular -->
          <div class="col-sm m-2">
            <a href="/views/celular.html" data-bs-toggle="modal"
            data-bs-target="#staticBackdrop">
              <img
                src="/images/os_celular.png"
                alt="O.S. Celular"
                width="175em"
                height="105em"
              />
            </a>
            <h3 class="h3 text-white">Celular</h3>
          </div>
          <!-- O.S>. de Videogame -->
          <div class="col-sm m-2" data-bs-toggle="modal"
            data-bs-target="#staticBackdrop">
            <a href="/views/videogame.html">
              <img
                src="/images/os_videogame.png"
                alt="O.S. Videogame"
                width="175em"
                height="105em"
              />
            </a>
            <h3 class="h3 text-white">Videogame</h3>
          </div>
          <!-- O.S. de Tablet -->
          <div class="col-sm m-2" data-bs-toggle="modal"
            data-bs-target="#staticBackdrop">
            <a href="/views/tablet.html">
              <img
                src="/images/os_tablet.png"
                alt="O.S. Tablet"
                width="175em"
                height="105em"
              />
            </a>
            <h3 class="h3 text-white">Tablet</h3>
          </div>
          <!-- O.S. de Ar condicionado -->
          <div class="col-sm m-2" data-bs-toggle="modal"
            data-bs-target="#staticBackdrop">
         <a href="/views/arcondicionado.html">
           <img
           src="/images/os_arCondicionado.png"
           alt="O.S. Ar condicionado"
           width="175em"
           height="105em"
           />
          </a> 
            <h3 class="h3 text-white">Ar condicionado</h3>
          </div>
          <!-- O.S. de Helpdesk -->
          <div class="col-sm m-2" data-bs-toggle="modal"
            data-bs-target="#staticBackdrop">
            <a href="/views/helpdesk.html">
              <img
              src="/images/os_helpdesk.png"
              alt="O.S. Helpdesk"
              width="175em"
              height="105em"
              />
              </a>
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

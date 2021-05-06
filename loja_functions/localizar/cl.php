<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <title>Cadastrar Login</title>
    <link rel="stylesheet" href="/css/bootstrap.css" />
    <link rel="stylesheet" href="/css/guerreiros.css" />
    <script src="/js/bootstrap.js"></script>
    <script src="/js/jquery-3.6.0.min.js"></script>

</head>

<body>

  <div class="container ratio-16x9">
    <a href="https://www.guerreirosgames.com.br">
      <img src="/images/vetor_pequeno.png" class="rounded mx-auto d-block" width="35%" height="35%"/>
    </a>
  </div>
  <div class="container border border-2 rounded mc-3">
    <div class="container mc-3">
        <form autocomplete="off" action="cadastrar.php" method="POST">
          <div class="input-group mc-2">
            <label class="form-label p-2">Login:</label>
            <input class="form-control rounded m-1" type="text" name="login_db" required>
          </div>
          <div class="input-group mc-2">
            <label class="form-label p-2">Senha:</label>
            <input class="form-control rounded m-1" type="text" name="senha_db" required>
          </div>
          <input class="btn btn-danger m-1" type="submit" value="Cadastrar">
        </form>
    </div>
  </div>
</body>

</html>

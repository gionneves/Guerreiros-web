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

<body class="bg-light grade">
    <!-- Imagem logo guerreiros -->
    <div class="container ratio-16x9">
        <a href="https://www.guerreirosgames.com.br">
            <img src="/images/vetor_pequeno.png" class="rounded mx-auto d-block" width="35%" height="35%" />
        </a>
    </div>

    <div class="container">
        <?php if ($_COOKIE['alterado'] == "sucesso") { ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>SUCESSO!</strong> Usuário foi alterado com sucesso.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php } else if ($_COOKIE['alterado'] == "falha") { ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Oops...</strong> algo saiu errado, tente novamente mais tarde.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php } else {} ?>
    </div>

    <!-- Container central de cadastro -->
    <div class="container border border-2 rounded mc-3 bg-transparence text-light">
        <div class="text-center m-3">
            <h3>Cadastrar login</h3>
        </div>
        <div class="container mb-3">
            <form autocomplete="off" action="cadastrar.php" method="POST" class="m-3">
                <div class="input-group mb-4">
                    <label class="input-group-text">Login</label>
                    <input class="form-control" type="text" name="login_db" required />
                </div>
                <div class="input-group mb-4">
                    <label class="input-group-text">Senha</label>
                    <input class="form-control" type="text" name="senha_db" required />
                </div>
                <div class="container text-center">
                    <input class="btn btn-success w-25" type="submit" value="Cadastrar" />
                </div>
            </form>
        </div>
    </div>
    <br />

    <!-- Container central de alteração de Login -->
    <div class="container border border-2 rounded mc-3 bg-transparence text-light">
        <div class="text-center m-3">
            <h3>Alterar login</h3>
            <p class="text-white-50">Altera a informações do ID colocado</p>
        </div>
        <div class="container">
            <form action="update_login.php" method="post" class="m-3" autocomplete="off">
                <div class="input-group mb-4">
                    <label class="input-group-text">ID Login</label>
                    <input class="form-control" type="text" name="id_login" placeholder="Coloque o ID do login"
                        required />

                    <label class="input-group-text">Novo login</label>
                    <input class="form-control w-50" type="text" name="novo_login" placeholder="guerreiros2021"
                        required />
                </div>
                <div class="container text-center">
                    <input class="btn btn-warning w-25" type="submit" value="Mudar o login" />
                </div>
            </form>
        </div>
    </div>
    <br />
    <!-- Container central de alteração de senha -->
    <div class="container border border-2 rounded mc-3 bg-transparence text-light">
        <div class="text-center m-3">
            <h3>Alterar senha</h3>
            <p class="text-white-50">Altera a informações do ID colocado</p>
        </div>
        <div class="container">
            <form action="update_pass.php" method="post" class="m-3" autocomplete="off">
                <div class="input-group mb-4">
                    <label class="input-group-text">ID Login</label>
                    <input class="form-control" type="text" name="id_login" placeholder="Coloque o ID do login"
                        required />

                    <label class="input-group-text">Nova senha</label>
                    <input class="form-control w-50" type="text" name="nova_senha" placeholder="1234567890" required />
                </div>
                <div class="container text-center">
                    <input class="btn btn-warning w-25" type="submit" value="Mudar a senha" />
                </div>
            </form>
        </div>
    </div>

</body>

</html>
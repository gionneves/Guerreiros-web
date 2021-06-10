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

require '../Conexao.php';

if (isset($_SESSION['vcc']) && $_SESSION['vcc'] == 'gerenteTec') {
    include "Template/HeaderGen.html";
} else {
    include "Template/Header.html";
}

if (isset($_SESSION["cliente_estado"]) && $_SESSION["cliente_estado"] == "TT") { ?>

    <div class="container bg-transparence-light p-2 rounded">
        <div class="text-center">
            <h3>Criação de serviços</h3>
            <h6 class="text-black-50">Cria serviços para serem colocados nas ordens de serviços</h6>
        </div>

        <?php if (isset($_COOKIE['sucesso_servico'])) {
            if ($_COOKIE['sucesso_servico'] == "sucesso") { ?>

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Sucesso!</strong> Serviço criado com sucesso!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

            <?php } else { ?>

        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Oops...</strong> Algo errado aconteceu! Verifique o serviço.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

            <?php }
        } ?>
        <form action="Create.php" id="formID" method="post" autocomplete="off">
            <div class="input-group mb-3">
                <span class="input-group-text" for="tipo_servico">Categoria</span>
                <input class="form-control" type="text" list="servicos_datalist" name="categoria" id="categoria"
                    required />
            </div>
            <div id="render"></div>
            <div class="input-group mb-3">
                <span class="input-group-text" for="tipo_servico">Servico</span>
                <input class="form-control" type="text" name="servico" id="servico" required />
            </div>
            <div class="text-black-50"><small>O "Custo" e o "Lucro" são opcionais!</small></div>
            <div class="input-group mb-3">
                <span class="input-group-text">Custo R$</span>
                <input type="number" class="num form-control" id="custo" name="custo" value="0" />
                <span class="input-group-text">Valor R$</span>
                <input type="number" class="num form-control" id="valor" name="valor" value="0" required />
                <span class="input-group-text">Lucro R$</span>
                <input type="number" class="form-control text-warning" id="lucro" name="lucro" value="0" />
            </div>
            <div class="input-group mb-3 w-50">
                <span class="input-group-text">Coloque a %</span>
                <input class="form-control" type="number" max="200" id="porcent" value="30" />
                <button class="btn btn-primary rounded" id="calcPor" type="button">
                    <i class="fa fa-calculator" aria-hidden="true"></i> Calcular
                </button>
                <i class="m-2 fa fa-info fa-align-center" title="Calculadora de porcentagem, para definir o 'Valor'"
                    aria-hidden="true"></i>
            </div>
            <div class="input-group mb-3 w-50">
                <span class="input-group-text">Tempo estimado</span>
                <input type="number" name="dias" id="dias" class="form-control" max="365" />
                <div class="text-black-50 align-bottom">
                    <p class="m-2"><small>Em dias</small></p>
                </div>
                <div class="mt-3 input-group">
                    <span class="input-group-text">Garantia</span>
                    <div class="form-check">
                        <label class="form-check-label m-2 me-4">
                            <input type="radio" class="form-check-input" name="garantia" id="gnao" value="Não"
                                checked />
                            Não
                        </label>
                        <label class="form-check-label m-2">
                            <input type="radio" class="form-check-input" name="garantia" id="gsim" value="Sim" />
                            Sim
                        </label>
                    </div>
                    <input type="number" placeholder="Dias de garantia" name="gdias" id="gdias"
                        class="form-control w-25" disabled />
                </div>
            </div>
            <div class="text-end m-3">
                <button class="btn btn-outline-secondary btn-sm align-bottom" type="button" id="limpa">Limpar</button>
                <button type="submit" class="btn btn-primary btn-lg">Criar servico</button>
            </div>
        </form>
    </div>

    <datalist id="servicos_datalist">
        <option value="Celular"></option>
        <option value="Tablet"></option>
        <option value="Videogames"></option>
        <option value=""></option>
    </datalist>


    <!-- ----------- Modal CARREGANDO -------------- -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">
                        Guerreiros-Multi
                    </h5>
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

     <script src="JS/CreateServico.js"></script>
<?php } else { 
    echo '<div class="text-center"> <h1>Oops...</h1> <h5>Você não tem acesso</h5>  </div></div>'; 
}
    require "Template/Footer.html"; ?>


<?php
/*  Estados_OS, classe destinada para codificação e decodificação do estado das O.S. que está cadastrado no banco de dados */
class Estados_OS {
    /* @param $var serve para receber o estado que vem do banco de dados e traduzir para poder ler */
    public function decode_estado($var) {
        switch($var) {
            case 0:
                return 'Orçamento';
                break;
            case 1:
                return 'Trânsito assistencia';
                break;
            case 2:
                return 'Recebido assistência';
                break;
            case 3:
                return 'Orçamento técnico';
                break;
            case 4:
                return 'Sem conserto';
                break;
            case 5:
                return 'Sem defeito';
                break;
            case 6:
                return 'Orçamento reprovado';
                break;
            case 7:
                return 'Orçamento aprovado';
                break;
            case 8: 
                return 'Em conserto';
                break;
            case 9:
                return 'Consertado';
                break;
            case 10:
                return 'Trânsito loja';
                break;
            case 11:
                return 'Aguardando retirada';
                break;
            case 12:
                return 'Entregue';
                break;
            case 13:
                return 'Devolvido';
                break;
            case 14:
                return 'Deposito';
                break;
            default:
                echo 'Erro, estado dessa OS não é reconhecido!';
        }
    }
/*  @param $var serve para codificar o valor retornado pela função anterior (decode_estado)
    para retornaro ao banco de dados */
    public function encode_estado($var) {
        switch($var) {
            case 'Orçamento':
                return 0;
                break;
            case 'Trânsito assistencia':
                return 1;
                break;
            case 'Recebido assistência':
                return 2;
                break;
            case 'Orçamento técnico':
                return 3;
                break;
            case 'Sem conserto':
                return 4;
                break;
            case 'Sem defeito':
                return 5;
                break;
            case 'Orçamento reprovado':
                return 6;
                break;
            case 'Orçamento aprovado':
                return 7;
                break;
            case 'Em conserto': 
                return 8;
                break;
            case 'Consertado':
                return 9;
                break;
            case 'Trânsito loja':
                return 10;
                break;
            case 'Aguardando retirada':
                return 11;
                break;
            case 'Entregue':
                return 12;
                break;
            case 'Devolvido':
                return 13;
                break;
            case 'Deposito':
                return 14;
                break;
            default:
                echo 'Erro, estado dessa OS não é reconhecido!';
        }
    }
}



/* [09:43, 20/05/2021] Feh: Orçamento *
[09:43, 20/05/2021] Feh: Trânsito assistencia *
[09:43, 20/05/2021] Feh: Recebido assistência *
[09:44, 20/05/2021] Feh: Orçamento técnico *
(Sem conserto)*
(Sem defeito)*
[09:44, 20/05/2021] Feh: Orçamento aprovado
[09:44, 20/05/2021] Feh: Orçamento reprovado */
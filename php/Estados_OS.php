<?php

class Estados_OS {
    function decode_estado($var) {
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
                return 'Orçamento técnico (Sem conserto)';
                break;
            case 5:
                return 'Orçamento técnico (Sem defeito)';
                break;
            case 6:
                return 'Orçamento reprovado';
                break;
            case 7:
                return 'Orçamento aprovado';
                break;
            default:
                echo 'Erro, estado de OS não reconhecido!';
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
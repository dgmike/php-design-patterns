<?php

class TributoIof {
    public function notificacao($funcionario, $acao) {
        echo "aplicando IOF\n";
        if ($acao == 'mudaSalario')
            $funcionario->salarioLiquido -= 10;
    }
}

class DescontoEmFolha {
    public function notificacao($funcionario, $acao)
    {
        echo "Descontos em folha...";
        if ($acao == 'mudaSalario') {
            $funcionario->salarioLiquido -= $funcionario->salarioBruto * .2;
        }
    }
}

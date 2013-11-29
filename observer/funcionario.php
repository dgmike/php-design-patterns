<?php

class Funcionario
{
    public $salarioBruto;
    public $salarioLiquido;
    public $observadores = array();

    public function adicionaObservador($observador) {
        $this->observadores[] = $observador;
    }

    public function notificarObservadores($acao) {
        foreach ($this->observadores as $observador) {
            $observador->notificacao($this, $acao);
        }
    }

    public function mudaSalario($novoSalarioBruto) {
        $this->salarioBruto = $this->salarioLiquido = $novoSalarioBruto;
        $this->notificarObservadores('mudaSalario');
    }
}

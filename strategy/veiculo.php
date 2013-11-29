<?php

class Veiculo
{
    public $posicao = 0;
    public $veiculo;

    public function defineVeiculo($veiculo)
    {
        $this->veiculo = $veiculo;
    }

    public function locomover($metros)
    {
        $posicaoInicial = $this->posicao;
        $this->posicao += $this->veiculo->locomover($metros, $posicaoInicial);
    }
}

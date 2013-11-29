<?php

abstract class Veiculo
{
    public $posicao = 0;

    abstract function ligarMotor();
    abstract function desligarMotor();

    public function locomover($metros)
    {
        $this->ligarMotor();
        $this->posicao += $metros;
        $this->desligarMotor();
    }
}

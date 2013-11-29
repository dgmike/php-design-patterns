<?php

class Veiculo
{
    public $posicao = 0;

    public function locomover($metros)
    {
        $this->ligarMotor();
        $this->posicao += $metros;
        $this->desligarMotor();
    }
}

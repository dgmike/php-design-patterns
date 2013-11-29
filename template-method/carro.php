<?php

require 'veiculo.php';

class Carro extends Veiculo
{
    public function ligarMotor()
    {
        echo 'Brum... brum brum brum brum...';
    }

    public function desligarMotor()
    {
        echo 'sh-plof';
    }
}

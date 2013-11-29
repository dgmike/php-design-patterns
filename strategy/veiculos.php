<?php
require 'veiculo.php';
class Carro
{
    public function locomover($metros, $posicaoInicial)
    {
        echo "Ligando o motor...";
        $posicaoFinal = $metros + $posicaoInicial;
        echo "Desligando o motor";
    }
}
class Bicicleta
{
    public function locomover($metros, $posicaoInicial)
    {
        echo "Vamos! ";
        for ($i = $posicaoInicial; $i < $metros; $i += 50) {
            echo ".";
        }
        echo "Chegamos! \o/";
        return $posicaoInicial + $metros;
    }
}

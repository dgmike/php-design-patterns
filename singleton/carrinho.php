<?php

class Carrinho
{
    private static $instancia;

    private function __clone() {}

    private function __construct()
    {
        echo "Criando o carrinho...\n";
    }

    public function getInstance()
    {
        if (!self::$instancia)
            self::$instancia = new self;
        return self::$instancia;
    }
}

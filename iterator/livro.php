<?php

class Livro
{
    public $autor;
    public $titulo;

    public function __construct($titulo, $autor)
    {
        $this->titulo = $titulo;
        $this->autor  = $autor;
    }
}

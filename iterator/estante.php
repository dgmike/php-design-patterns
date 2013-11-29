<?php
require 'livro.php';

class Estante {
    protected $livros;

    public function adicionaLivro(Livro $livro) {
        $this->livros[] = $livro;
    }

    public function prepara() {
        reset($this->livros);
    }

    public function proximo() {
        return next($this->livros);
    }

    public function atual() {
        return current($this->livros);
    }
}

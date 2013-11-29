<?php
require 'livro.php';
class Estante2 implements Iterator {
    protected $livros;
    public function adicionaLivro(Livro $livro) {
        $this->livros[] = $livro;
    }
    public function current() { 
        if ($livro = current($this->livros)) {
            return $livro->titulo;
        }
    }
    public function key() { return key($this->livros); }
    public function next() { return next($this->livros); }
    public function rewind() { return reset($this->livros); }
    public function valid() { return (bool) $this->current(); }
}

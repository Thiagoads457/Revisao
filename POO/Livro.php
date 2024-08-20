<?php

class Livro {
    private $titulo;
    private $autor;
    private $ano;

    public function __construct($titulo, $autor, $ano){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->ano = $ano;
    }
}

$obj = new Livro();


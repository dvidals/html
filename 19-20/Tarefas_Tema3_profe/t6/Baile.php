<?php
class Baile {
    private $nome;
    private $idadeMinima;
    public function __construct($nom,$idadeMin=8) {
        $this->nome=$nom;
        $this->idadeMinima=$idadeMin;
    }
    public function getIdadeMinima() {
        return $this->idadeMinima;
    }
    public function getNome() {
        return $this->nome;
    }
}



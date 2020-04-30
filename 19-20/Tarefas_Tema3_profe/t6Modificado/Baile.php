<?php

class Baile {
    private string $nome;
    private int $idadeMinima=8;

    public function __construct(string $nom, int $idadeMin=8) {
        $this->nome=$nom;
        $this->idadeMinima=$idadeMin;
    }
 
    public function __get($atributo) {  
      if (property_exists(__CLASS__, $atributo)) {  
        return $this->$atributo;  
      }  
      return NULL;  
    }

    public function __toString() : string {
        return $this->nome.' (idade min: '. $this->idadeMinima . ' anos)';
    }
}



<?php

abstract class Persoa {
    protected string $nome;
    protected string $apelidos;
    protected int $mobil;

    public function __construct(string $nom, string $ape, int $mobil) { 
        $this->nome=$nom;
        $this->apelidos=$ape;
        $this->mobil=$mobil;
    }

    //public function verInformacion() {
    public function __toString() {
        return $this->nome.' '.$this->apelidos.' ('.$this->mobil.')';
    }

    public function __get($atributo) {  
        if (property_exists(__CLASS__, $atributo)) {  
            return $this->$atributo;  
        }  
        return NULL;  
    }

}
?>



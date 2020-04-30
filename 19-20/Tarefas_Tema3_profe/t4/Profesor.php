<?php
require_once 'Persoa.php';
require_once 'Baile.php';
final class Profesor extends Persoa {
    private $nif;
    private $bailes=array();
    public function __construct($nom, $ape, $mobil,$nif)
    {     
        parent::__construct($nom, $ape, $mobil);
        $this->nif=$nif;
    }
     //o importe da hora podería non indicarse
    public function calcularSoldo($horas,$importeHora=16) {
        return $horas*$importeHora;
    }
    public function engadirBaile($nomeBaile,$idademin=8) {
        if (!empty($this->bailes)) {
            foreach($this->bailes as $baile)  
            {
                if ($baile->getNome()==$nomeBaile) { return; }
            }
        } 
        $this->bailes[]=new Baile($nomeBaile,$idademin);
    }
    public function eliminarBaile($nomeBaile)
    {
        foreach($this->bailes as $baile)  
        {
            if ($baile->getNome()==$nomeBaile) {
                $key = array_search($baile,$this->bailes,TRUE);
                unset($this->bailes[$key]);
            }
        }
    }
    public function getBailes() {
        $cad='<br />';
        foreach($this->bailes as $baile)
        {
            $cad=$cad. $baile->getNome().' (idade min:'.$baile->getIdadeMinima().
                  ' anos)<br />';
        }
        return $cad;
    }
}



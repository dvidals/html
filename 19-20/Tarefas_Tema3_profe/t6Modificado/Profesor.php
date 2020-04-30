<?php

spl_autoload_register(function ($nombre_clase) {
    include_once $nombre_clase . '.php';
});


class BaileNoCapacitadoException extends Exception{};

final class Profesor extends Persoa {

    private string $nif;
    private int $idade;
    private array $arrayBailes; // Bailes que puede impartir
    
    private array $horasPorBaileMensuales; // Horas de clase que imparte

    public function __construct(string $nom, string $ape, int $mobil, string $nif, int $idade,
            array $bailes = array(), array $horasPorBaileMensuales = array()){     
        parent::__construct($nom, $ape, $mobil);
        $this->idade=$idade;
        $this->nif=$nif;
        $this->arrayBailes=$bailes;
        $this->horasPorBaileMensuales=$horasPorBaileMensuales;
    }

    public function __get($atributo) {  
        if (property_exists(__CLASS__, $atributo)) {  
            return $this->$atributo;  
        }  
        return NULL;  
    }

    public function addClase(Baile $baile, int $horas){
        if (!in_array($baile,$this->arrayBailes,FALSE)) throw new BaileNoCapacitadoException();
        else {
            $this->horasPorBaileMensuales[$baile->nome]=$horas;
        }
    }
    
    public function calcularSoldo(int $importeHora=16) {
        $horas=0;
        foreach ($this->horasPorBaileMensuales as $horasPorBaile) {
            $horas+=$horasPorBaile;
        }
        return $horas*$importeHora;
    }

    public function addBailes(Baile ...$bailes) {
        foreach ($bailes as $baile) {
            if (!empty($this->arrayBailes)) {
                foreach($this->arrayBailes as $key => $elem) {
                    if ($elem===$baile) return;
                    elseif ($elem->nome===$baile->nome) {
                        // Si ya hay un baile con el mismo nombre no idéntico, lo sustituye
                        $this->arrayBailes[$key]=$baile;
                        return;
                    } 
                } 
            }
            $this->arrayBailes[]=$baile;
        }
    }

    public function removeBaile(Baile $baile) {
        foreach($this->arrayBailes as $key => $elem) {
            if ($elem==$baile) { // igualdad, no identidad
                unset($this->arrayBailes[$key]);
            }
        }
    }

    public function removeBaileByName(string $baileName) {
        foreach($this->arrayBailes as $key => $elem) {
            if ($elem->nome===$baileName) {
                unset($this->arrayBailes[$key]);
            }
        }
    }

    public function printBailes() : string {
        $cad='';
        foreach($this->arrayBailes as $baile) {
            $cad .= $baile.'<br />';
        }
        return $cad;
    }

    public function __toString() : string {
        return 'Profesor: ' . $this->nif . ', ' . parent::__toString() .
            '.' . $this->idade . ' años. Salario: ' . $this->calcularSoldo() . 
            '<br />' . $this->printBailes();
    }
     
    public function comparar(Profesor $value) {
        return $this->idade <=> $value->idade;
    }

}



<?php

spl_autoload_register(function ($nombre_clase) {
    include_once $nombre_clase . '.php';
});

final class Alumno extends Persoa {
    private int $numClases;

    public function setNumClases($num) : void{
        $this->numClases=$num;
    }

    public function aPagar() : int {
        if (isset($this->numClases)) {
              if ($this->numClases===1) { return 20; }
              elseif ($this->numClases===2) { return 32; }
              else {return 40;}
        }
        else throw new Exception('Debe indicar previamente o número de clases');
    }

    public function __toString() : string {
        return 'Alumno: ' . parent::__toString() . '. Cuota: ' . $this->aPagar();
    }

}



<?php 


class Coche {
    public static $contador=0;

    public static $numRuedas = 4;


    public $id=0;
    public $puertas = 5;
    public $marca;
    public $modelo;


    function __construct($marca,$modelo,$puertas){
        $this->marca=$marca;
        $this->modelo=$modelo;
        $this->puertas=$puertas;
        $this->id=++self::$contador;
    }
    
    public function printCoche() { 
        echo "coche" . $this->id . ":<br/>";
        echo 'modelo: ' . $this->modelo . '<br/>';
        echo 'puertas: ' . $this->puertas . '<br/>';
        echo 'contador: ' . $this::$contador . '<br/>';
        echo '<br/>';
    }

}

$coche1 = new Coche("ford","focus",3);

$coche1->printCoche();

$coche1->puertas++;
Coche::$numRuedas=6;


$coche1->printCoche();

$coche2 = new Coche("Citroen","zx",5);

$coche2->printCoche();
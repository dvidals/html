<?php

class Coche {


    public static $contador=0; //común a todos es de la clase.(explicar diferencia con id);
    

    public static $numRuedas=4; //si se varía, varían todos los objetos instanciados (explicar);
    public $id=0; // es de cada objeto.
    public $puertas=5;
    public $marca;
    public $modelo;

//this se refiere al objeto que estoy en cada momento
    function __construct($marca,$modelo,$puertas){
        $this->marca=$marca;
        $this->modelo=$modelo;
        $this->puertas=$puertas;
        self::$contador++; // es igual a ++self::$contador;
        $this->id=self::$contador; //self es lo mismo que this, pero de manera estática, lleva :: en vez de flecha (para propiedades de la clase y no de los objetos)

        //las dos últimas líneas se pueden sustituir por: $this->id=++self::$contador;  primero hay que autoincrementar y luego asignar para que no exista coche
        // con ide cero.

    }


    public function printCoche(){
        echo "coche".$this->id.":</br>";
       echo 'modelo: '.$this->modelo.'<br/>';
       echo 'puertas: '.$this->puertas.'<br/>';
       echo 'ruedas: '.self::$numRuedas.'<br/>';
       echo 'contador: '.$this::$contador .'<br/>';
       echo '</br>';

    }
}





$focus2= new Coche("ford","focus","3"); 

$coche1=new Coche ("ford", "focus", 3);
echo 'coche1:<br/>';
echo 'modelo: '.$coche1->modelo.'<br/>';
echo 'puertas: '.$coche1->puertas.'<br/>';
echo 'contador: '.$coche1::$contador .'<br/><br/>';
$coche1->puertas++;
Coche::$numRuedas=6;

echo 'coche1:<br/>';
echo 'modelo: '.$coche1->modelo.'<br/>';
echo 'puertas: '.$coche1->puertas.'<br/>';
echo 'contador: '.$coche1::$contador .'<br/><br/>';



$coche2=new Coche ("Citroen", "zx",5);
echo 'coche2:<br/>';
echo 'modelo: '.$coche2->modelo.'<br/>';
echo 'puertas: '.$coche2->puertas.'<br/>';
echo 'contador: '.$coche2::$contador .'<br/><br/>';

$coche1=new Coche("ford","focus",3);
$coche1->printCoche();
$coche1->puertas++;
Coche::$numRuedas=6;

$coche2=new Coche ("Citroen", "zx",5);
$coche2->printCoche();
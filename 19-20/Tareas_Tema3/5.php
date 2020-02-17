<?php
/*Tarefa 5. Definición e uso de métodos e clases abstractas. 
a)Tarefa 5_aDefine   unha   clase   abstracta   de   nome   Calculo   que   teña   como   atributos   $operando1 $operando2   e   $resultado   
e   que   defina   os   métodos   setOperando1,   setOperando2,getResultado   e   un   método   abstracto   calcular. 
A continuación   define   tres   subclases   desta clase que teñen como obxectivo realizar as operacións de suma, resta e multiplicación.
- Antes de realizar a operación debes comprobar que os operandos teñen algún valor.
- As clases e subclases que crees deben estar nunha carpeta de nome clases.
 No script onde comprobes o funcionamento destes cálculos debes facer que se carguen automaticamentetodas as clases que se atopen nesa carpeta.
 b)Tarefa 5_bModifica a tarefa 5_a para que reciba os valores dos operandos cando se define o obxecto.*/

 abstract class Calculo{
     protected $operando1;
     protected $operando2;
     protected $resultado;

     public function setOperando1($o1){
         $this->operando1=$o1;

     }

     public function setOperando2($o2){
         $this->operando2=$o2;

     }

     public function getResultado(){
         
        return $this->resultado;
     }

     abstract public function calcular();
     
 }

 class Suma extends Calculo {

    

    function calcular(){
      return $this->resultado =  $this->operando1 +  $this->operando2;

    }
 }

 class Multiplicacion extends Calculo{

    function calcular(){

        return $this->resultado =  $this->operando1 * $this->operando2;

    }

 }

 class Resta extends Calculo{
    
    function calcular(){
        return $this->resultado =  $this->operando1 - $this->operando2;


    }
     
}


$primero= new Resta(5,4);
echo Resta::calcular();


/* if (property_exists($this, $atributo)) {
      	//if ($atributo == 'email') return null;
        return $this->$atributo; */
        

        ///htpps:
        /*
        error_reporting (E_ERROR | E_WARNING | E_PARSE);
        spl_autolad_register(function($nombre_clase){
            include_once $nombre_clase.'.php';
        });

        $obj= new MiClase1();
        $obj2= new MiClase2();

        */

        /*

        */
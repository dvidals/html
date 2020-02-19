<?php
abstract class Calculo{
     protected $operando1;
     protected $operando2;
     protected $resultado;

  
     public function setOperando1($o1){
       
         //self::$operando1=$o1; //probado de 3 formas distintas (self, this y sin nada como en la funci�n de abajo)
         $this->operando1=$o1;

     }

     public function setOperando2($o2){
        // parent::$operando2=$o2; error porque no tiene padre
        //$operando2=$o2;
         $this->operando2=$o2;

     }

     public function getResultado(){
         
        return $resultado;
        //return $this->resultado;
     }

     abstract public function calcular($operando1,$operando2);
     
 }

<?php
class Multiplicacion extends Calculo{
    function __construct($operando1=NULL,$operando2=NULL) {
        $this->operando1=$operando1;
        $this->operando2=$operando2;
    }

    function calcular($operando1=NULL,$operando2=NULL){
        if ($this->operando1!=NULL and $this->operando2 <>NULL)
        return $this->resultado =  $this->operando1 * $this->operando2;
        else echo "Los dos operandos tienen que tener valores";
    }

 }
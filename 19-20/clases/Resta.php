<?php
class Resta extends Calculo{
     
     /*
     function __construct($operando1=0,$operando2=0) {
        $this->operando1=Calculo::__get($operando1) ;
        $this->operando2=Calculo::__get($operando2);
     }
    */

    function __construct($operando1=NULL,$operando2=NULL) {
       $this->operando1=$operando1;
       $this->operando2=$operando2;
   }
    function calcular($operando1=null,$operando2=null){
        //if (property_exists($this, $operando1)and property_exists($this, $operando2))
        
        //if ($this->__get($operando1)!=NULL and $this->__get(operando2) <>NULL)
        
        if ($this->operando1!=NULL and $this->operando2<>NULL)
          return $this->resultado= $this-> operando1 - $this->operando2;
        
        else echo "Los dos operandos tienen que tener valores";


    }
    
    /*
    function set_operando1($dato)
  {
   parent::setOperando1($dato);
  }
 */
    
}
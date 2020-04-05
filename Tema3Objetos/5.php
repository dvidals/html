
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

  static  public function __get($property){
         return $property;
     }
     public function setOperando1($o1){
       
         //self::$operando1=$o1; //probado de 3 formas distintas (self, this y sin nada como en la función de abajo)
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

 class Suma extends Calculo {

    

    function calcular($operando1,$operando2){
      if ($this->operando1!=NULL and $this->operando2 <>NULL)
      return $this->resultado =  $this->operando1 +  $this->operando2;
      else echo "Los dos operandos tienen que tener valores";
    }
 }

 class Multiplicacion extends Calculo{

    function calcular($operando1,$operando2){
        if ($this->operando1!=NULL and $this->operando2 <>NULL)
        return $this->resultado =  $this->operando1 * $this->operando2;
        else echo "Los dos operandos tienen que tener valores";
    }

 }

 class Resta extends Calculo{
     
     
     function __construct($operando1=0,$operando2=0) {
        //$this->operando1=Calculo::__get($operando1) ;
        //$this->operando2=Calculo::__get($operando2);
        // $this->operando1= $this->setOperando1($operando1);
         //$this->operando2= $this->setOperando2($operando2);
         $this->operando1=$operando1;
         $this->operando2=$operando2;
     }
    
    function calcular($operando1,$operando2){
        //if (property_exists($this, $operando1)and property_exists($this, $operando2))
        
        //if ($this->__get($operando1)!=NULL and $this->__get(operando2) <>NULL)
        
        if ($this->operando1!=NULL and $this->operando2 <>NULL)
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


//$primero= new Resta(8,4);
$primero=new Resta();
$primero->setOperando1(5);//No funciona ¿Cómo se puede cambiar el valor de una propiedad heredada?
//$primero->parent::setOperando1(5);No se puede usar
//$primero->Calculo::setOperando1(5);Tampoco se puede usar
//var_dump(Calculo);
$primero->setOperando2(4);

echo $primero->__get($operando1);//No funciona
echo Calculo::__get($operando1);//No funciona

//Calculo::setOperando2(4);
var_dump($primero);
/*
var_dump($operando1);
var_dump($operando2);
var_dump(Calculo::__get($operando1));
$primero->$operando2=Calculo::setOperando2(4);
var_dump($operando2);
echo "<br><br><br><br>";
echo Calculo::__get($operando1);
echo $primero->operando1."<br/>";
*/


echo $primero->calcular($operando1,$operando2);
var_dump($primero);

$segundo=new Resta(10,4);
var_dump($segundo);
echo $segundo->calcular($operando1,$operando2);
var_dump($segundo);



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

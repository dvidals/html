<?php

/*
1.3.6Tarefa 6. Definición de clases capturando excepcións
Modifica a tarefa 4 segundo as seguintes indicacións:
    Crea unha interface Comparar cun método de nome comparar cun parámetro.
    Dos profesores queremos coñecer tamén a súa idade para poder comparalos en funciónda súa idade.
     –Cando se visualiza un profesor tamén queremos ver información da idade.
     –O método comparar comprobará que o obxecto recibido é de tipo Profesor, en caso contrario lanzará unha excepción indicándoo.
     Fai un exemplo onde se compare dous profesores en función da súa idade utilizando o método comparar.

*/

interface Comparar {
    public function comparar($parametro);
        
    
}

class BaileException extends Exception{};
class ProfesorException extends Exception{};
class AlumnoException extends Exception{};
class CompararException extends Exception{};
class Persoa{
    protected $nome;
    protected $apelidos;
    protected $telefono;
    protected $academia;
    
    function __get($atributo){
      return $this->$atributo;
    }

    public function __construct($nome,$apelidos,$telefono){
        $this->nome = $nome;
        $this->apelidos = $apelidos;
        $this->telefono=$telefono;
      }

    
    public function verInformación(){
        echo "$this->nome  $this->apelidos ($this->telefono)";
    }
}
final class Alumno extends Persoa{
    
    

    protected $numClases=NULL;
    protected $cuota=NULL;
    protected $academia;
    
    
    function __get($atributo){
      return $this->$atributo;
    }

    public function __construct($nome, $apelidos, $telefono, $numClases/*,$cuota,$academia=NULL*/){
        parent::__construct($nome, $apelidos,$telefono); 
        $this->numClases=$numClases;
        //$this->cuota=$cuota;
        //$this->academia=$academia;
      }

    //setNumClases e aPagar

    
    public function setNumClases( $numClases) {
		$this->numClases=$numClases;
    }


    function aPagar(){
        if($this->numClases>=3)$this->cuota=40;
        elseif($this->numClases==2)$this->cuota=32;
        elseif($this->numClases==1)$this->cuota=20;
        else echo 'Debe indicar previamente o número de clases';
    }

    public function __toString()
    {
        return $this->nome;
      
    }

}


final class Profesor extends Persoa implements Comparar{
    protected $NIF;
    static $numHoras=0;
    static $importeHora=16;
    protected $bailes;
    protected $soldo;
    //nuevo:
    protected $idade;
    protected $academia;
    function __get($atributo){
      return $this->$atributo;
    }
    
    public function __construct($nome, $apelidos, $telefono,$NIF,$bailes=NULL/*,$soldo=0,$academia=NULL*/,$idade=NULL){
        parent::__construct($nome, $apelidos,$telefono);
        $this->NIF = $NIF;
        $this->bailes=$bailes;
        $this->idade=$idade;
       //$this->soldo=$soldo;
        //$this->academia=$academia;
      }
      
   
      function calculaSoldo($numHoras){
          self::$numHoras=$numHoras;
        return  $soldo=$numHoras * self::$importeHora;
          
      }
      
      function engadirBaile(Baile $baile){
        if (in_array($baile,$this->bailes)) throw new BaileException;
        else $this->bailes[] = $baile;

      }

      function eliminarBaile(Baile $baile){

        foreach ($this->bailes as $clave => $valor) {
          if($valor==$baile) unset($this->bailes[$clave]);
          
      }
         
      }

      function devolverBailes(){

        foreach ($this->bailes as  $baile) {
          echo $baile->nomeBaile." (idade mínima:" .$baile->idadeMínima.")<br/>";
          
      }

      }

      function comparar($profesor){
          if($profesor instanceof Profesor){        
              if($this->idade>$profesor->idade) echo "$this->nome es más viejo que $profesor->nome <br/>";
              elseif($this->idade==$profesor->idade)echo "$this->nome tiene la misma edad que $profesor->nome <br/>";
                else echo "$this->nome es más joven que $profesor->nome <br/>";
          }
    
          else throw new CompararException;


      }

      public function __toString()
    {
        return  "$this->nome ($this->idade).<br/>";
    }
    
    function __set($atributo, $valor) {
      if (property_exists(__CLASS__, $atributo)) {
        
        $this->$atributo = $valor;

      }
       else echo "El atributo no pertenece a la clase ". __CLASS__;
    }


    
}
    
 class Baile {
     
     protected $nomeBaile;
     protected $idadeMínima;
     
     function __get($atributo){
      return $this->$atributo;
    }
    
    
      public function __construct($nomeBaile, $idadeMínima=8){
        $this->nomeBaile=$nomeBaile;
        $this->idadeMínima = $idadeMínima;
      }
     
       public function verInformación(){
        echo "$this->nomeBaile ($this->idadeMínima)";

    }

    public function __toString()
    {
        return $this->nomeBaile;
        return ($this->idadeMínima);
    }
      
     
 }

 /*
 A clase  Academia:   almacenará   o   seu   nome   nunha   constante   e   debe   permitir   engadir Profesores e Alumnos.Para probalo debes facer o seguinte:
    –Engade á academia  un profesor que imparte 4 bailes  (entre eles  AFRO, e un deles duplicado) e 2 alumnos.
    –Mostra información do profesores (incluíndo o soldo e os bailes que imparte) e dos alumnos incluíndo a cota que deberá pagar.
    –O profesor deixa de dar clase de AFRO. Actualiza a información da academia e volvea mostrar a información do profesor.
Impide a herdanza das clases Alumno e Profesor.
*/

class Academia{
  protected  $profesores= array();
  protected  $alumnos = array();
  const NOME="DANZA KUDURO";
  function mostrarConstante() {
    echo  self::NOME . "\n";
  }

  function engadirProfesores(Profesor $profesor){
    if (in_array($profesor,$this->profesores)) throw new ProfesorException;
    else $this->profesores[] = $profesor;

  }


  

  function engadirAlumnos(Alumno $alumno){
    if (in_array($alumno,$this->alumnos)) throw new AlumnoException;
    else $this->alumnos[] = $alumno;
  }

  public function __toString()
    {
      
        return implode("<br/>", $this->profesores). implode("<br/>", $this->alumnos)."<br/>";
    }

}




$p1=new Persoa("David", "Vidal de Sa", 654785777);

$p3=new Alumno("David", "Vidal", 654785777,Null);
$alum2= new Alumno("Juan", "García", 654785999,4);
$p1->verInformación();echo"<br/>";
//$p2->verInformación();echo"<br/>";
$p3->verInformación();echo"<br/>";
var_dump($p3);
$p3->setNumClases(1);echo"<br/>";
var_dump($p3);
echo $p3->numClases;echo"<br/>";
$p3->aPagar();echo"<br/>";
echo $p3->cuota;echo"<br/>";
//echo $p2->NIF;echo"<br/>";

//echo $p2->calculaSoldo(5);echo"<br/>";
echo Profesor::$importeHora;
$b1=new Baile("HIP HOP");
$b2= new Baile("AFRO");
$b3= new Baile ("SAMBA");
var_dump($b1);
$a=new Academia();
echo"--------------------------<br/>";echo"<br/>";

$p2=new Profesor("Alejandro", "Vidal", 902902902,"36128619N",array($b1,$b3));
var_dump($p2);echo"<br/>";

try {

  $p2->engadirBaile($b2);
var_dump($p2);echo"<br/>";

} catch (BaileException $e){
	
	echo "Ese baile $b2->nomeBaile ya lo imparte el profesor $p2->nome <br/>";
}

try{
$p2->engadirBaile($b1);
var_dump($p2);echo"<br/>";
	
} catch (BaileException $e){
	
	echo "Ese baile $b1->nomeBaile ya lo imparte el profesor $p2->nome <br/>";
}
$p2->eliminarBaile($b2);
var_dump($p2);echo"<br/>";
$p2->devolverBailes();echo"<br/>";
$a->mostrarConstante();echo"<br/>";

echo Academia::NOME;
var_dump($a);

$a->engadirProfesores($p2);
$a->engadirAlumnos($p3);
$a->engadirAlumnos($alum2);
var_dump($a);
$p4=new Profesor("Pablo", "Vidal", 902902903,"36128618S",array($b1,$b3,$b2,$b3));
var_dump($p4);
$a->engadirProfesores($p4);
var_dump($a);

//$a->__toString();



try{
  $p2-> idade =39;
  $profe2=new Profesor("Pedro", "Apostol", 902902902,"36128888J",array($b2,$b3));
$profe2->idade=39;
$profe2->comparar($p2);
$profe2->comparar($p3);//$p3 es un alumno no un profesor
echo $profe2;
echo $p2;
$p4-> idade=42;

}catch (CompararException $e){
  echo "El objeto no pertenece a la clase Profesor </br>";
}

echo $a;
echo $profe2;
/*
$pedro = new Persona("Pedro", Null);
print_r($pedro);
$pablo = new Persona("Pablo", array($pedro));
$gabriel = new Persona("Gabriel", array($pedro));
$pedro->amigos = array($pablo,$gabriel);
var_dump($pedro);
//print("<pre>".print_r($pedro,true)."</pre>");
$pablo->nombre ="pablito";
var_dump($pedro);
*/
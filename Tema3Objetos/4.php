<?php
/*
1.3.4 Tarefa 4. Implementación da herdanza en PHP
a)Tarefa 4_a
Queremos xestionar unha academia de baile. Para elo, temos que gardar información tanto dos alumnos como dos profesores que imparten clases na academia. 
De ambos queremos saber o seu nome, apelidos, móbil. Dos profesores ademais queremos almacenar o NIF para o cal chamarán ao método construtor de Persoa 
ademais de almacenar o NIF.
Temos que declarar as seguintes clases:
A clase  Persoa  debe ter un método verInformación que devolve para a información coseguinte formato: Uxia Loureiro Agra (699444999) 
A clase Alumno ten dous métodos: setNumClases e aPagar, e debe empregar o métodoconstrutor de Persoa.
  –O método aPagar devolverá o importe e pagan en función do número de actividades nas que se inscriben:
     Por unha actividade: 20 euros
     Por dúas actividades:32 euros
     Por tres ou máis: 40 euros.
     No caso de que non estea establecido  o número de clases  ás que asiste para ese alumno devolverá 'Debe indicar previamente o número de clases'.
A clase Profesor ten un método calcularSoldo que calcula o que cobran os profesoresdependendo   do   número   de   clases   que   imparten   ao   mes.  
     Recibe   como   parámetros   o número de horas e o importe de cada hora, que está establecido en 16 euros pero podería variar.
A clase  Baile con dous atributos:  nome e  idadeMínima. A idade mínima será de 8 anos salvo que se indique o contrario.O profesor terá 3 métodos para engadir
    os Bailes que imparte, eliminar un baile cando deixe de impartilo e para devolver os bailes que imparte da forma: HIP HOP (idade min: 8 anos) 
    Antes de engadir un baile debe comprobar se xa está dado de alta para ese profesor.
A clase  Academia:   almacenará   o   seu   nome   nunha   constante   e   debe   permitir   engadir Profesores e Alumnos.Para probalo debes facer o seguinte:
    –Engade á academia  un profesor que imparte 4 bailes  (entre eles  AFRO, e un deles duplicado) e 2 alumnos.
    –Mostra información do profesores (incluíndo o soldo e os bailes que imparte) e dos alumnos incluíndo a cota que deberá pagar.
    –O profesor deixa de dar clase de AFRO. Actualiza a información da academia e volvea mostrar a información do profesor.
Impide a herdanza das clases Alumno e Profesor.
*/
class BaileException extends Exception{};
class ProfesorException extends Exception{};
class AlumnoException extends Exception{};
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

}


final class Profesor extends Persoa {
    protected $NIF;
    static $numHoras=0;
    static $importeHora=16;
    protected $bailes;
    protected $soldo;
    
    protected $academia;
    
    

    function __get($atributo){
      return $this->$atributo;
    }
    
    public function __construct($nome, $apelidos, $telefono,$NIF,$bailes=NULL/*,$soldo=0,$academia=NULL*/){
        parent::__construct($nome, $apelidos,$telefono);
        $this->NIF = $NIF;
        $this->bailes=$bailes;
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
      
        return implode("<br/>", $this->profesores). implode("<br/>", $this->alumnos);
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

$a->__toString();
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
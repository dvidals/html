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
     Recibe   como   parámetros   onúmero de horas e o importe de cada hora, que está establecido en 16 euros pero podería variar.
A clase  Baile con dous atributos:  nome e  idadeMínima. A idade mínima será de 8 anos salvo que se indique o contrario.O profesor terá 3 métodos para engadir
    os Bailes que imparte, eliminar un baile cando deixe de impartilo e para devolver os bailes que imparte da forma: HIP HOP (idade min: 8 anos) 
    Antes de engadir un baile debe comprobar se xa está dado de alta para ese profesor.
A clase  Academia:   almacenará   o   seu   nome   nunha   constante   e   debe   permitir   engadirProfesores e Alumnos.Para probalo debes facer o seguinte:
    –Engade á academia  un profesor que imparte 4 bailes  (entre eles  AFRO, e un deles duplicado) e 2 alumnos.
    –Mostra información do profesores (incluíndo o soldo e os bailes que imparte) e dosalumnos incluíndo a cota que deberá pagar.
    –O profesor deixa de dar clase de AFRO. Actualiza a información da academia e volvea mostrar a información do profesor.
Impide a herdanza das clases Alumno e Profesor.
*/

class Persoa{
    protected $nome;
    protected $apelidos;
    protected $telefono;
    
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
    
    
    function __get($atributo){
      return $this->$atributo;
    }

    public function __construct($nome, $apelidos, $telefono, $numClases,$cuota){
        parent::__construct($nome, $apelidos,$telefono); 
        $this->numClases=$numClases;
        $this->cuota=$cuota;
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
    

    function __get($atributo){
      return $this->$atributo;
    }
    
    public function __construct($nome, $apelidos, $telefono,$NIF,$baile=NULL){
        parent::__construct($nome, $apelidos,$telefono);
        $this->NIF = $NIF;
        $this->baile=$baile;
      }
      
   
      function calculaSoldo($numHoras){
          self::$numHoras=$numHoras;
        return  $numHoras * self::$importeHora;
          
      }
      
      function engadirBaile(Baile $baile){
        $this->baile[] = $baile;

      }

      function eliminarBaile($baile){
        unset($baile);

      }

      function devolverBailes(){

      }

      public function __toString()
    {
        return $this->foo;
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
        echo "$this->nombeBaile ($this->idadeMínima)";

    }

    
      
     
 }

$p1=new Persoa("David", "Vidal de Sa", 654785777);

$p3=new Alumno("David", "Vidal", 654785777,Null,Null);
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
$p2=new Profesor("Alejandro", "Vidal", 902902902,"36128619N",array($b1,$b3));
var_dump($p2);echo"<br/>";

$p2->engadirBaile($b2);
var_dump($p2);echo"<br/>";
$p2->engadirBaile($b1);
var_dump($p2);echo"<br/>";

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
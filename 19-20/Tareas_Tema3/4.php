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
A clase  Baile con dous atributos:  nome e  idadeMínima. A idade mínima será de 8 anossalvo que se indique o contrario.O profesor terá 3 métodos para engadir
    os Bailes que imparte, eliminar un baile candodeixe de impartilo e para devolver os bailes que imparte da forma: HIP HOP (idade min: 8 anos) 
    Antes de engadir un baile debe comprobar se xa está dado de alta para ese profesor.
A clase  Academia:   almacenará   o   seu   nome   nunha   constante   e   debe   permitir   engadirProfesores e Alumnos.Para probalo debes facer o seguinte:
    –Engade á academia  un profesor que imparte 4 bailes  (entre eles  AFRO, e un delesduplicado) e 2 alumnos.
    –Mostra información do profesores (incluíndo o soldo e os bailes que imparte) e dosalumnos incluíndo a cota que deberá pagar.
    –O profesor deixa de dar clase de AFRO. Actualiza a información da academia e volvea mostrar a información do profesor.
Impide a herdanza das clases Alumno e Profesor.
*/

class Persoa{
    protected $nome;
    protected $apelidos;
    protected $telefono;

    public function __construct($nome,$apelidos,$telefono){
        $this->nome = $nome;
        $this->apelidos = $apelidos;
        $this->telefono=$telefono;
      }

    
    public function verInformación(){
        echo "$this->nome  $this->apelidos ($this->telefono)";
    }
}
class Alumno extends Persoa{

    static $numClases;
    protected $cuota;

    public function __construct($nome, $apelidos, $telefono){
        parent::__construct($nome, $apelidos,$telefono); 
      }

    //setNumClases e aPagar

    
    function setNumClases(int $numClases) {
        if (property_exists(__CLASS__, $numClases)) {
		self::$numClases=$numClases;
        } else echo "Debe indicar previamente o número de clases";
    }


    function aPagar($numClases){
        if($numClases==1)$this->cuota=40;
        elseif($numClases==2)$this->cuota=32;
        elseif($numClases>2)$this->cuota=20;
        else echo 'Debe indicar previamente o número de clases';



    }



    /*
 if($metodo == 'area') { 
            switch (count($parametros)) { 
                case 1: // con solo un argumento: area del circulo
                    return 3.14 * $parametros[0]; 
                case 2:  // dos argumentos: area cuadrado
                    return $parametros[0]*$parametros[1]; 
            } 
        } else if($metodo == 'metodo1') { 
            $this->metodo1();
        }
        else echo "llamada a función no definida $metodo<br/>";  

    */

}
class Profesor extends Persoa{
    protected $NIF;

    public function __construct($nome, $apelidos, $telefono,$NIF){
        parent::__construct($nome, $apelidos,$telefono);
        $this->NIF = $NIF; 
      }
  
    }

$p1=new Persoa("David", "Vidal de Sa", 654785777);
$p2=new Profesor("Alejandro", "Vidal", 902902902,"36128619N");
$p3=new Alumno("David", "Vidal", 654785777);
$p1->verInformación();echo"<br/>";
$p2->verInformación();echo"<br/>";
$p3->verInformación();echo"<br/>";
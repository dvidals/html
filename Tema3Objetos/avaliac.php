<?php

/* 
 
1.3.7. Avaliación:
Queremos   xestionar   os   salarios   dos   nosos   empregados.   Para   elo,   temos   que   gardar
información tanto dos empregados asalariados como dos empregados que contratamos por horas.
 De ambos queremos saber o seu nome, apelidos e NSS. 
 Os empregados asalariados teñen ademais o importe que cobran anualmente, tendo en conta que todos teñen 14 pagas anuais.
 Os empregados por horas teñen un importe a cobrar por hora (por defecto 25 euros) e o número de horas que traballaron este mes.
Temos que declarar as seguintes clases:
-Dos empregados teremos un método que nos devolverá o nome completo do empregado.
-Ademais o empregado terá dous métodos abstractos salarioMes e incrementarSalario. 
    +O primeiro devolverá o que cobra un empregado ao mes, o cal se calculará dependendo do tipo de empregado de que se trate. 
    +O segundo incrementará o salario (o salario anual para os empregados asalariados e o importe hora para os contratados 
    por hora) na porcentaxe que se lle teña indicado no construtor. Esta porcentaxe pasarase cando se crea o empregado no
    construtor.
-Utiliza métodos máxicos para cargar as clases e para facer os set e get dos atributos.
-Crea unha interface Comparar cun método de nome comparar cun parámetro.
    +O empregado por horas ten un método comparar que recibe outro empregado e indica no caso de que o outro empregado 
    tamén sexa por horas, a diferenza de horas entre os dous empregados
    +O   método   comparar   comprobará   que   o   obxecto   recibido   é   de   tipo   empregado   por horas, 
    en caso contrario lanzará unha excepción indicándoo.
-Fai un exemplo onde se compare dous empregados utilizando o método comparar.Para probalo debes facer o seguinte:
    +Crea un array de empregados con dous empregados como mínimo de cada tipo.
    +A   continuación   debes   mostrar   a   información   seguinte   empregando   os   métodos creados. Por exemplo:
        
        En total temos 4 empregados.
        O empregado Ana Fouz Vila é un empregado asalariado que cobra 2.308,57 euros este mes.
        O empregado Lois Gómez Vilariño é un empregado contratado por horas que cobra 700,00 euros este mes.
        O empregado Laura Martínez Vázquez é un empregado contratado por horas que cobra 765,00 euros este mes.
        O empregado Anita Pérez Vila é un empregado asalariado que cobra 2.071,43 euros este mes.
        Lois Gómez Vilariño traballou 2 horas menos que Laura Martínez Vázquez.
    */

    interface Comparar {
        public function comparar($parametro);
            
        
    }
    class CompararException extends Exception{};

   abstract class Empregado{
       //static protected $nome;
       protected $nome;
       protected $apelidos;
       protected $NSS;
       protected $empregados=array();

        abstract function salarioMes();
        abstract function incrementarSalario();
        
       function __construct($nome,$apelidos,$NSS){
           $this->nome=$nome;
           $this->apelidos=$apelidos;
           $this->NSS=$NSS;
           
           
       }
   
 
        function __toString()
        {
            return "this->$nome this->$apelidos. <br/>";
        }

        public function comparar(Empregado $empregado){
            if($empregado instanceof Empregado){   
            }  
            else throw new CompararException;   
            
        
    }
    
    function mostrarNombre(){
        return "$this->nome $this->apelidos";
    }
    
    function mostrarInformacion(){
        if (is_a($this,'Asalariados'))
              return "<br/> o empregado ".$this->mostrarNombre(). " é un empregado asalariado que cobra ".$this->salarioMes()." este mes";
        else
              return "<br/> o empregado ".$this->mostrarNombre(). " é un empregado contratado por horas que cobra ".$this->salarioMes()." este mes";
    }


    }
    
    function solucion(array $empregados){
        echo "<br/> En total temos ". count($empregados)." empregados.";
         foreach($empregados as $valor)
            {  echo $valor->mostrarInformacion();
        }
    }

    class Asalariados extends Empregado{

        protected $salario;
        protected $incremento;

        public function __construct($nome,$apelidos,$NSS,$salario=Null,$incremento=Null){
             parent::__construct($nome, $apelidos,$NSS);
             $this->salario=$salario;
            $this->incremento=$incremento;
            //parent::$nome=$nome;
            /*
            $this->nome=$nome;
            $this->apelidos=$apelidos;
            $this->NSS=$NSS;*/
          
           /* parent::$nome;
            parent:: $apelidos;
            parent:: $NSS;*/
            
           
            
        }

        function salarioMes(){
            return round($this->salario / 14,2) ;
            
        }
/*
        public function setNumClases( $numClases) {
            $this->numClases=$numClases;
        }
*/
        function incrementarSalario(){

            $this->salario=$this->salario*(1+$this->incremento/100);
        }

    
    
     function __get($atributo){
      return $this->$atributo;
    }
    
    function __set($atributo, $valor) {
      if (property_exists(__CLASS__, $atributo)) {
        
        $this->$atributo = $valor;

      }
       else echo "El atributo no pertenece a la clase ". __CLASS__;
    }
    
    
    public function comparar(Asalariados $asalariados){
            if($asalariados instanceof Asalariados){   
               
            }  
            else throw new CompararException;   
            
        
    }
    
    
    
    }
    
    
    


    class PorHoras extends Empregado{

        protected $importe;
        protected $horas;
        protected $incremento;

        public function __construct($nome,$apelidos,$NSS,$importe=25,$horas=Null,$incremento=Null){
            parent::__construct($nome, $apelidos,$NSS);
            $this->importe=$importe;
            $this->horas=$horas;
            $this->incremento=$incremento;
            
        }

        function salarioMes(){
            return $this->importe * $this->horas;
            
        }
        function incrementarSalario(){
             $this->importe=$this->importe*(1+$this->incremento/100);
        }

         function __get($atributo){
      return $this->$atributo;
    }
    
    public function __set($atributo, $valor) {
      if (property_exists(__CLASS__, $atributo)) {
        
        $this->$atributo = $valor;

      }
       else echo "El atributo no pertenece a la clase ". __CLASS__;
    }
    
    
    public function comparar(PorHoras $PorHoras){
            if($PorHoras instanceof PorHoras){   
            if ($this->horas>$PorHoras->horas)return"<br/>". $this->mostrarNombre()." traballou ".abs($this->horas-$PorHoras->horas)." horas máis que ".$PorHoras->mostrarNombre()."<br/>";
            elseif ($this->horas==$PorHoras->horas)return"<br/>". $this->mostrarNombre(). " traballou as mesmas horas que ". $PorHoras->mostrarNombre()."<br/>";
            else return"<br/>". $this->mostrarNombre(). " traballou ".abs($this->horas-$PorHoras->horas)." horas menos que ".$PorHoras->mostrarNombre()."<br/>";
            }  
            else throw new CompararException;   
            
        
    }

    //Lois Gómez Vilariño traballou 2 horas menos que Laura Martínez Vázquez.
    }
    
    
    $e1= new Asalariados("David", "Vidal de Sa", 361412033,25000);
    echo $e1->mostrarNombre();
    var_dump($e1);
    echo $e1->salarioMes();
    $e1->incremento=10;
    var_dump($e1);
    $e2= new Asalariados("Daniel", "Abad", 361412033,27000,10);
    
    try{
    $h1= new PorHoras ("Katia", "Silva González", 333333);
    var_dump($h1);
    $h1->horas=100;
    var_dump($h1);
    echo $h1->salarioMes();
    $h1->incremento=5;
    var_dump($h1);
    $h2= new PorHoras ("Juan", "García González", 333333, 25,102,5);
    var_dump($h2);
    $h2->incrementarSalario();
    var_dump($h2);
   echo $h1->comparar($h2);
    }catch (CompararException $e){
        echo "El objeto no pertenece a la clase a comparar </br>";
    }
    
    echo $h2->mostrarNombre();
    echo $h2->mostrarInformacion();
    echo $e1->mostrarInformacion();
    $empregados1=array($e1,$e2,$h1,$h2);
    var_dump($empregados1);
    echo solucion($empregados1);
   echo $h1->comparar($h2);
   
    
    

     

<?php

    /*
     * La iteración sólo funciona con propiedades públicas, excluyendo propiedades 
     * privadas o protegidas
     */

    class Usuario {

        public $nombre = 'Juan';
        private $edad = 34;
        public $apellidos='Álvarez Sánchez';
        protected $salario = 4200.00;
        public $email='juanas@iesteis.gal';
        
     public   function __get($atributo){
        return $this->$atributo;
    }
    

    }
    
    
    

    $usuario = new Usuario(); //es cómodo un foreach para poder recorrer todas las claves de un objeto
    
    echo "$usuario->nombre<br>";
    
//$v=$usuario->$k;
    foreach ($usuario as $k => $v) {
        echo "clave: $k, valor: $v" . "<br>";
    }
    
    echo "<br/>";

     foreach ($usuario as $k=> $v) {
        echo "clave:$k, valor: ".$usuario->$k."<br>";
    }
    
    echo "<br/>";

    foreach ($usuario as $k=> $v) {
        echo "clave:$k, valor: ".$usuario->__get($k)."<br>";
    }
   
     echo "<br/>";
    
     //echo $usuario->salario;
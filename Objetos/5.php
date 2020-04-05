<?php
//https://diego.com.es/metodos-magicos-en-php
declare(strict_types = 1);

class Entidad {
    protected $meta;
    //private $a;

    function __construct($meta){
        $this->meta = $meta;
    }

    function __destruct(){
        echo "objeto eliminado" . __CLASS__ . '<br/>';
    }
}

class Tweet extends Entidad {
    public $id;
    protected $text;

    function __construct ($id, $text, $meta = null){
        $this->id = $id;
        $this->text = $text;
        parent::__construct($meta);
    }

   function __get($property){
        if(property_exists($this, $property)) {
            return $this->$property;
        }
        else echo 'llamada a propiedad inexistente ('.$property . ') de la clase ' . __CLASS__;
    }
    function __set($atributo, $valor){
          $this->$atributo = $valor;
    }

    function __destruct(){
        echo "objeto $this->id eliminado " . __CLASS__ . '<br/>';
    }
}


$tweet = new Tweet(54, "Hola que tal", array('php','programación')); 
var_dump($tweet);


//unset($tweet);
//$tweet =null;

unset($tweet->id);
var_dump($tweet);

echo '<br/>-----';


$tweet = new Tweet(55, "Hola que tal"); var_dump($tweet);


echo $tweet->text . '<br/>';

echo $tweet->noexisto . '<br/>'; // Devuelve: Esta propiedad no existe!
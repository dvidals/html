<?php

class Entidad {
    protected $meta;
    private $a;

    function __construct(array $meta = null){
        $this->meta = $meta;
    }
}

class Tweet extends Entidad {
    protected $id;
    protected $text;

    function __construct ($id, $text, array $meta = null){
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
}

$tweet = new Tweet
(54, "Hola que tal", array('php','programación'));

echo $tweet->text . '<br/>';
print_r($tweet->meta); echo '<br/>';

echo $tweet->noexisto . '<br/>'; // Devuelve: Esta propiedad no existe!
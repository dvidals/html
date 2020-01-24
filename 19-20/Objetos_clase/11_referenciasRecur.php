<?php

class Persona {
    private $nombre;
    private $email;
    private $amigos;

    function __construct($nombre, $amigos) {
        $this->nombre = $nombre;
        $this->amigos = $amigos;
    }
    
    function __set($prop, $val){
        $this->$prop = $val;
    }
    
    function __get($prop){
        return $this->$prop;
    }

}


$pedro = new Persona("Pdro", Null); echo '<br/>';
print_r($pedro);
$pablo = new Persona("Pablo", array($pedro));
$gabriel = new Persona("Gabriel", array($pedro));
$pedro->amigos = array($pablo,$gabriel);
var_dump($pedro);
//print("<pre>".print_r($pedro,true)."</pre>");
$pablo->nombre ="pablito";
var_dump($pedro);






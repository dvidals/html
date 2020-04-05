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


$pedro = new Persona("Pedro", Null);
print_r($pedro);
var_dump($pedro);
$pablo = new Persona("Pablo", array($pedro));
$gabriel = new Persona("Gabriel", array($pedro));
$pedro->amigos = array($pablo,$gabriel);
var_dump($pedro);
//print("<pre>".print_r($pedro,true)."</pre>");
$pablo->nombre ="pablito";
var_dump($pedro);


$pablo2 = new Persona("pablito", array($pedro));
$pablo3 = clone($pablo);
var_dump($pablo==$pablo2);
var_dump($pablo===$pablo2);
var_dump($pablo==$pablo3);
var_dump($pablo===$pablo3);
var_dump($pablo==$pedro->amigos[0]);
var_dump($pablo===$pedro->amigos[0]);


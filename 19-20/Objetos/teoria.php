<?php
class Usuario {

    public static $contador=0;
    //propiedades (estado)
    public $nombre;
    private $email;

    //comportamiento (verbos)

    function saludar(){
        echo "hola";
    }
}

$u1= new Usuario();
echo $u1->nombre;echo'<br/>';
echo $u1->email;
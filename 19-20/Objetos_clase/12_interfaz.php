<?php

/* Las interfaces no pueden instanciarse. Sólo se declaran métodos 
 * (no pueden declarse propiedades). Es una espece de catálogo de métodos a 
 * implementar. 
 * Hay que implementar todos los métodos declarados en la interfaz
 * Una clase puede heredar solamente de un única clase pero puede implementar
 * tantas interfaces como desee.
 * No se puede heredar de más de una clase, en herencia múltiple se utiliza en Java interfaces porque si se puede implemenentar más de una interfaz, en PHP se usan los traits
 */

interface saludo {

    function saludar($dia);
}

interface interfaz {

    function met_interfaz();

    function hola();
}

class hijo_interfaz implements interfaz, saludo {

    function met_interfaz() {
        echo "soy el hijo del interfaz...<br>";
    }

    //Comprobar el error que se produce si no se implementa el método saluda

    function hola() {
        echo "Hola. He implementado la función saluda<br>";
    }

    function saludar($dia) {
        echo "Bueno/as $dia<br>";
    }

}

$p = new hijo_interfaz();
$p->met_interfaz();
$p->saludar("tardes");
?>

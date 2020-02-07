<?php

    /*
     * La palabra reservada as se puede usar en conjunto con las palabras reservadas
     * public, protected o private para cambiar la visibilidad del método
     */

    trait Mensaje {

        private function hola() {
            return '¡Hola!';
        }

    }

    class Usuario {

        use Mensaje {
            hola as public;
        }
    }

    $usuario = new Usuario();
    echo $usuario->hola(); // ¡Hola!

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

    }

    $usuario = new Usuario(); //es cómodo un foreach para poder recorrer todas las claves de un objeto

    foreach ($usuario as $k => $v) {
        echo "clave: $k, valor: $v" . "<br>";
    }

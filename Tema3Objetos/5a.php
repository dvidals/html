<?php

 spl_autolad_register(function($nombre_clase){
            include_once $nombre_clase.'.php';
        });
        $obj= new Resta();
        $obj2= new Suma();
        $obj2= new Multiplicacion();
        
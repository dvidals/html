<?php

function CrearDNI (){
    $numero=array();
    $letra="";
    $dni="";
    for ($i=0;$i<8;$i++){
        $numero[$i]=rand(0,9);
    }
    $numero=implode("",$numero);
    
    $letra=substr("TRWAGMYFPDXBNJZSQVHLCKE", $numero % 23, 1);
    $dni=$numero.$letra;
   return $dni;
     
}

function CrearMatriz($n,$m){
    $a=array();
    for ($i=0;$i<$n;$i++){
        for($j=0;$j<$m;$j++){
            $a[$i][$j]=CrearDNI();
        }
    }
    return $a;
}
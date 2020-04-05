<?php
function CrearDNI (){
    $numero=array();
    $letra="";
    $dni="";
    for ($i=0;$i<7;$i++){
        $numero[$i]=rand(0,9);
    }
    $numero[7]=rand((intval($numero)? 0:1),9); //porque el cero no puede ser un valor de DNI
    $numero=implode("",$numero);
    
    $letra=substr("TRWAGMYFPDXBNJZSQVHLCKE", $numero % 23, 1);
    $dni=$numero.$letra;
   return $dni;
     
}

function DNIcondicion($dni){
    $dni=substr($dni,0,8);
    $dni=str_split($dni);
    
    for ($i=0;$i<8;$i++){
        $dni[$i]=max($dni);
    }
    $dni=implode("",$dni);
    $dni[8]=substr("TRWAGMYFPDXBNJZSQVHLCKE", $dni % 23, 1);
    
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

function CrearMatrizCondicion($n,$m){ //No es útil porque crearía una nueva matriz con todos los valores distintos a la inicial
    // nosotros sólo queremos que cambien los valores que terminan en vocal.
    $a=array();
    for ($i=0;$i<$n;$i++){
        for($j=0;$j<$m;$j++){
            $a[$i][$j]=CrearDNI();
            if (in_array(substr("TRWAGMYFPDXBNJZSQVHLCKE", (substr($a[$i][$j],0,-1)) % 23, 1),['A','E'])){
        $a[$i][$j]=DNIcondicion($a[$i][$j]);
        
    }
            
        }
    }
    
     return $a;
}
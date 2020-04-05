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
function CrearMatriz($n,$m){
    $a=array();
   // $n=intval($n); para que en float nos coja el primer valor, pero habría que tratarlo como error no como posibilidad correcta (los floats no se admiten)
    for ($i=0;$i<$n;$i++){
        for($j=0;$j<$m;$j++){
            $a[$i][$j]=CrearDNI();
        }
    }
    return $a;
}
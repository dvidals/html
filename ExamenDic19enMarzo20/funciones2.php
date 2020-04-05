<?php

function dni(){
    $dni="";
    
    for ($i=0;$i<7;$i++){
       $dni=$dni.rand(0,9);
    }
    
    
   $dni=$dni.rand((intval($dni)<>0)?0:1,9);
 $letra= substr("TRWAGMYFPDXBNJZSWVHLCKE", intval($dni)%23,1);
 
 $dni=$dni.$letra;

    
    return $dni;
}


function dni2(){
    $dni=array();
    
    for ($i=0;$i<7;$i++){
       $dni[$i]=rand(0,9);
    }
    
    
   $dni[7]=rand((intval($dni)<>0)?0:1,9);
 $letra= substr("TRWAGMYFPDXBNJZSWVHLCKE", intval($dni)%23,1);
 
 $dni[8]=$letra;

    
    return $dni;
}



function matriz($n,$m){
    
    $a=array();
    
    for($i=0;$i<$n;$i++){
        
        for($j=0;$j<$m;$j++){
        
            $a[$i][$j]=dni();
        }
    }
    return $a;
}

//echo dni();
//var_dump(matriz(2,2));

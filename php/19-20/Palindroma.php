<?php


function Palindroma ($cadena) {
    $cadena;
    $b=true;
   $array= str_split($cadena);
    for ($i=0;$i<strlen($cadena);$i++){
        if($array[$i]==$array[strlen($cadena)-1-$i]) ;
        else $b=false;
    }
    if($b) echo "$cadena es palíndroma";
    else   echo "$cadena no es palíndroma";
    
}

Palindroma (oneno);
?>

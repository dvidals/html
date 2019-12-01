<?php

function Reves (string $cadena){
    $cadena=trim($cadena);
    $cadena=strtolower($cadena);
    $cadena2="";
    
    $largo=strlen($cadena);
    for ($i=0;$i<$largo;$i++){
        $cadena2[$i]=$cadena[$largo-1-$i];
    }
    return $cadena2;
}
$frase="Pablo te quiero";
echo Reves($frase);
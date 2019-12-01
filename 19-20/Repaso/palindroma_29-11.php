<?php

function Palindroma($p){
    $p=trim($p);
    $p=strtolower($p);
    //$p=str_split($p);
    $largo=count($p);
    $b=true;
    $no_permitidas=array(";",".",",","?","¡","(",")","¿","!");
    $sustituir=array("á","é","í","ó","ú");
    $permitidas=array("a","e","i","o","u");
   
    
    
    /*for ($i=0;$i<count($no_permitidas);$i++){
        $clave=array_search($no_permitidas[$i],$p);
        echo $clave;
        unset($p[$clave]);
    }*/
    
    $p=str_replace($no_permitidas,"",$p);
    $p=str_replace($sustituir,$permitidas,$p);
    $largo=strlen($p);
    for ($i=0;$i<=$largo/2;$i++){
        if($p[$i]==$p[$largo-1-$i]);
        else $b= false;
        
    }
   
    return $b;
}

$p="sol?élos";


var_dump(Palindroma($p));
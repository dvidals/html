<?php

function media ($n1,$n2,$n3="aritmética"){
    
    $error="No es una media válida";
    
  
    $media=array("aritmética","geométrica","armónica");
    
    $b=array_search($n3,$media);
    
    if($b==false){
       $m="No es una media válida";
    }
    
    
    if ($n3=="aritmética") $m=round(($n1+$n2)/2,2);
    
    if ($n3=="geométrica") $m=round(sqrt($n1*$n2),2);
    
    if ($n3=="armónica") $m=round(2*($n1*$n2)/($n1+$n2),2);
    
    return $m;
    
}

var_dump(media(5,4,"paco"));
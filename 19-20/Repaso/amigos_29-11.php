<?php

function amigos ($n1,$n2){
    
    $d1=0;
    $d2=0;
    
    for ($i=1;$i<$n1;$i++){
        if($n1%$i==0)$d1=$d1+$i;
    }
    for ($i=1;$i<$n2;$i++){
        if($n2%$i==0)$d2=$d2+$i;
    }
    
    if($d1==$n2 and $d2==$n1)return true;
    else return false;
    
}

var_dump(amigos(220,284));
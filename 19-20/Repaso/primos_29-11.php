<?php

function primos(int $n){
    $a=array();
    $b=true;
    for ($i=2;$i<$n;$i++){
        for($j=2;$j<$i;$j++){
            if($i%$j<>0);
            else $b=false;
        }
        if($b) $a[]=$i;
        $b=true;
    }
    return $a;
}


var_dump(primos(100));
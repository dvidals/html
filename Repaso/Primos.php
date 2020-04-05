<?php

function PrimosHasta($n){
    $a=array();
    $b=true;
    for ($i=2;$i<$n;$i++){
        for ($j=2;$j<$i;$j++){
            if ($i%$j<>0);
            else $b=false;
               
        }
        if ($b) $a[]=$i;
        $b=true;
    }
    $c=implode(", ",$a);
    return $c;
}

echo PrimosHasta(100);

?>

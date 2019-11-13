<?php
$n=100;
function primos ($n){
    $b=true;
    $a="";
    for ($i=2;$i<=$n;$i++){
        for ($j=2;$j<$i;$j++){
            if ($i%$j<>0);
            else $b=false;

        }
        if ($b){
             $a=$a." $i";
        }
        else $b=true;
    }
    return $a;
}

echo primos($n);
?>
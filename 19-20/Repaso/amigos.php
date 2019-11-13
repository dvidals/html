<?php
$n1=220;
$n2=284;

function amigos ($n1,$n2){
    $a1=0;
    $a2=0;
    for ($i=1;$i<$n1;$i++){
        if($n1%$i==0) $a1=$a1+$i;
    }
    for ($i=1;$i<$n2;$i++){
         if($n2%$i==0) $a2=$a2+$i;
    }
  if ($a1==$n2 and $a2==$n1) return true;
  else return false;
  
}
echo (amigos ($n1,$n2)) ? "$n1 y $n2 son números amigos": "$n1 y $n2 no son números amigos";
?>
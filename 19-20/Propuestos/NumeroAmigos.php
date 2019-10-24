<?php
function amigos ($a,$b){
    $da=0;
    $db=0;
    
    for ($i=1;$i<$a;$i++){
        if ($a%$i==0) $da=$da+$i;
    }
    
     for ($i=1;$i<$b;$i++){
       if ($b%$i==0) $db=$db+$i;
     }

if ($da==$b and $db==$a) echo "$a y $b son números amigos";
else echo "$a y $b no son números amigos";
}
echo amigos (220,283);
?>

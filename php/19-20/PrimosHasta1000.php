<?php
echo "Números primos hasta el 1000<br>";
$b=true;
for ($i=2;$i<=1000;$i++){
    for ($j=2;$j<$i;$j++){
        if ($i%$j<>0);
            else $b=false;
    }
    if ($b) $cadena=$cadena."$i, ";
    $b=true;
}
 echo substr($cadena,0,-7)." y ";
 echo substr($cadena,-5,3).".";
?>

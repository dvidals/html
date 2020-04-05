<?php

function Palindroma($a){
    $a=(string)$a;
    
    for ($i=0;$i<strlen($a)/2;$i++){
       if ($a[$i]==$a[strlen($a)-1-$i]){
           
           return true;
       }
       else return false;
    }
}

var_dump(Palindroma("macaco"));
var_dump(Palindroma("solelos"));
var_dump(Palindroma(paloma));
var_dump(Palindroma(oneno));
var_dump(Palindroma(163081039));
var_dump(Palindroma(168861));

?>

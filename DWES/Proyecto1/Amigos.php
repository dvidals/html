<?php
 $n=10;
 $m=22;
function amigos ($a, $b){
    $ca=0;
    $cb=0; 
    for($i=1;$i<=$a/2;$i++){
    if($a%$i==0) $ca=$ca+$i;          
    }   
    for($j=1;$j<=$b/2;$j++){
    if($b%$j==0)$cb=$cb+$j;              
    }
    if($cb==$a and $ca==$b)echo "$a y $b son números amigos";
    else echo"$a y $b no son números amigos"; 
}
echo amigos($n,$m);
echo"</br>";
echo amigos (220,284);
echo"</br>";
echo amigos (210,220);
echo"</br>";
echo amigos(17296,18416);
echo"</br>";

?>

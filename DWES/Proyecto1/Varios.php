<?php
echo palindroma ("oneno")."</br>";
echo palindroma ("carlos")."</br>";
echo primos1mil()."</br>";
echo amigos(220,284)."</br>";
echo amigos (100,200)."</br>";
echo tablaMultiplicar();
function palindroma ($p){
    $b=true;
    $a=str_split($p);
    for ($i=0;$i<strlen($p);$i++){
        if($a[$i]==$a[strlen($p)-1-$i]);
        else $b=false;
    }
    if($b) echo "$p es palíndroma";
    else echo "$p no es palíndroma";
}
function primos1mil(){
    $b=0;
    $cadena="";
    for ($i=2; $i<=1000;$i++){
        for($j=2;$j<=$i/2;$j++){
            if($i%$j<>0);
            else $b=false;
        }
        if ($b) $cadena=$cadena."$i, ";
        else $b=true;
    }
    
    echo substr ($cadena,0,-5)."y ".substr($cadena,-5,-2).".";
}
function amigos ($a,$b){
    $ca=0;
    $cb=0;
    
    for ($i=1;$i<=$a/2;$i++){
        if($a%$i==0)$ca=$ca+$i;
    }
    //echo "$ca</br>";
    for ($j=1;$j<=$b/2;$j++){
        if($b%$j==0)$cb=$cb+$j;
    }
    //echo "$cb</br>";
    if($ca==$b){
        if ($cb==$a) echo"$a y $b son números amigos";
    }
    else echo "$a y $b no son números amigos";
    
}

function tablaMultiplicar(){
    for ($i=0;$i<=10;$i++){
        echo "<hr>";
        for($j=0;$j<=10;$j++){
            echo "$i x $j=".$i*$j."</br>"; 
        }
    }
}
?>

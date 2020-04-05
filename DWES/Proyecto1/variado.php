<?php

function tabla(){
    for ($i=0; $i<=10;$i++){
        echo "<hr>";
        for ($j=0;$j<=10;$j++){
            echo "$i x $j=".$i*$j."</br>";
            
        }
    }
    echo "<hr>";
}

function amigos ($a,$b){
    $ca=0;
    $cb=0;
    for ($i=1;$i<=$a/2;$i++){
        if($a%$i==0)$ca=$ca+$i;
    }
    for ($j=1;$j<=$b/2;$j++){
        if ($b%$j==0)$cb=$cb+$j;
    }
    if($ca==$b and $cb==$a) echo "$a y $b son números amigos";
    else echo "$a y $b no son números amigos";
     echo "<hr>";
}
function palindroma ($p){
    $b=true;
    $a=str_split($p);
    for ($i=0;$i<strlen($p);$i++){
        if($a[$i]==$a[strlen($p)-1-$i]);
        else $b=false;
    }
    if($b)echo "$p es palíndroma";
    else echo "$p no es palíndroma";
     echo "<hr>";
}
function primo1mil(){
    $b=tue;
    $cadena="";
    for ($i=2;$i<=100;$i++){
        for ($j=2;$j<$i;$j++){
            if($i%$j<>0);
            else $b=false;
        }
        if($b) $cadena=$cadena."$i, ";
        else $b=true;
    }
    
    echo substr($cadena,0,-7)." y ".substr($cadena,-5,-2).".";
}

function reves($p){
    $a=str_split($p);
    $b=str_split($p);
    /*for($i=0;$i<=strlen($p)-1-$i;$i++){
        $a[$i]=$a[strlen($p)-1-$i];
        echo $a[$i];
    }*/
   for ($i;$i<strlen($p);$i++){
        $a[$i]=$b[strlen($p)-1-$i];
        echo $a[$i];
    }
    echo "</br>";
}

echo tabla();
echo amigos (220,284)."</br>";
echo amigos (100,200)."</br>";
echo palindroma("oneno")."</br>";
echo palindroma("solelos")."</br>";
echo primo1mil()."</br>";
echo reves("pablo");
echo reves("me duele la cabeza");
echo reves ("un dia me tire al mar y me encontre un pulpo, el pulpo me llevo a una zona donde habia sirenas");
echo reves("Roma");
echo reves ("Hola me llamo Pablo");
echo reves ("mami eres la mujer mas buena del mundo");
echo reves ("me gusta el kiwi");
?>

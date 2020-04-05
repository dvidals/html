<?php
$valor=$_POST['valor'];
$f=$_POST['forma'];


function cir($valor){
    $a=$valor*$valor*pi();
    return $a;
}
function tri($valor){
    $a=(sqrt(3)/4)*($valor*$valor);
    return $a;
}
function cua($valor){
    $a=$valor*$valor;
    return $a;
}
if($f==1) echo cir($valor);
if($f==2) echo tri($valor);
if($f==3) echo cua($valor);
?>

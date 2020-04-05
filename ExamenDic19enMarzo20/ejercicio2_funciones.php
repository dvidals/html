<?php

function codigo_cuenta_correcto($cadena){


$cadena=str_split($cadena);


$pesos_entid_sucursal=array(4,8,5,10,9,7,3,6);
$pesos_num_cuenta=array(1,2,4,8,5,10,9,7,3,6);

$pa=0;
$pd=0;
$p1=array();
$p2=array();

for ($i=0;$i<8;$i++){
    $p1[$i]=$cadena[$i]*$pesos_entid_sucursal[$i];
    $pa=$pa+$p1[$i];
}

for ($i=0;$i<10;$i++){
    $p2[$i]=$cadena[10+$i]*$pesos_num_cuenta[$i];
    $pd=$pd+$p2[$i];
}

$ra=$pa%11;
$rd=$pd%11;

$Ra=11-$ra;
if($Ra==11)$b=0;
elseif ($Ra==10)$b=1;
else $b=$Ra;

$Rd=11-$rd;
if($Rd==11)$c=0;
elseif ($Rd==10)$c=1;
else $c=$Rd;
if ($b==$cadena[8] and $c==$cadena[9]) return true;
else return false;

 
 
}



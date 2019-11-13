<?php
$p="oneno";
function palindroma($p){
    $a=str_split($p);
    $b=true;
    for ($i=0;$i<count($a);$i++){
        if ($a[$i]==$a[count($a)-1-$i]);
        else $b=false;
        
    }
    return $b;

}

echo (palindroma($p)) ? "$p es palíndroma" : "$p no es palíndroma";
?>
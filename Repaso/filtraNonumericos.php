<?php

$a=array(1,3,31,34,a,b,c,93,39,33,94,21,12,18,29,49,55);
function filtrar($a){
    $a= array_filter($a,"is_numeric");
    return $a;
}

function filtrar2($a){
    foreach ($a as $c=> $v){
        if(!is_numeric($a[$c]))unset($a[$c]);
    }
    return $a;
}
print_r(filtrar($a));
echo "<br/>";
print_r(filtrar2($a));
?>

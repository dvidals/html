<?php

$a="Pablo te quiero mucho";

function DelReves($a){
$b=strtolower($a);
$c=array();
for ($i=0;$i<strlen($b);$i++){
    $c[$i]=$b[strlen($b)-1-$i];
}
$d=implode("",$c);
return $d;
}
echo DelReves($a);
?>

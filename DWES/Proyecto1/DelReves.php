
<?php
$a="pablo es el rey del mañana";

function DelReves ($a){
    $b="";
    for ($i=1;$i<=mb_strlen($a);$i++){
        $b=$b.mb_substr($a,-$i,1);
       
    }
    return $b;
}
function reves($p){
    $a=str_split($p);
    $b=str_split($p);
    
   for ($i;$i<strlen($p);$i++){
        $a[$i]=$b[strlen($p)-1-$i];
        echo $a[$i];
    }
    echo "</br>";
}
echo DelReves($a);
echo "</br>";
reves($a);
?>

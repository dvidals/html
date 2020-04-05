<?php

$pablo="oneno";
function palindroma($p){
    $a=str_split($p);
    $b=true;
    for($i=0;$i<strlen($p);$i++){
        if($a[$i]==$a[strlen($p)-1-$i]);
         else $b=false;
    }
    if($b) echo "$p es palindroma";
            else echo "$p no es palíndroma";
            
}
echo palindroma($pablo);
?>

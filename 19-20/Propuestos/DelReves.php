<?php

function reves ($p) {
    
    $a= str_split($p);
    $b=str_split($p);
    for ($i=0; $i<count($a); $i++){
        $a[$i]=$b[count ($a)-$i-1];   
    }
  $c= implode("", $a);
          echo $c;
}
echo reves ("Pablo");
?>

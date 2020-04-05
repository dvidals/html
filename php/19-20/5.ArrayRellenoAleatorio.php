<?php

/*
a) Genera un array t[8][8]. Haz que cada uno de sus elementos se rellene aleatoriamente con valores que pueden ser 0,1 y 2. 
b) Indica qué casillas están a 0 y tienen algún 1 a su alrededor (ambas condiciones simultáneamente).

 */

for ($i=0;$i<=8;$i++){
    for($j=0;$j<=8;$j++){
        $array[$i][$j]=random_int(0,2);
        if ($array[$i][$j]==0) {
            echo '$array['."$i]"."[$j]=0<br>";
        }
    }
}
echo "<pre>";
print_r($array);
echo "</pre>";

foreach($array as $v1){
    foreach ($v1 as $v2){
        echo "$v2";
    }
    echo"<br>";
}

echo "<br>";

foreach($array as $c1 => $v1){
    foreach ($v1 as $c2 => $v2){
        if($v2==0) echo "[$c1$c2]";
    }
    echo"<br>";
}
echo "<br>";
echo "<br>";
echo "<br>";
foreach($array as $c1 => $v1){
    foreach ($v1 as $c2 => $v2){
        if($v2==0){
            if($array[$c1][$c2-1]==1 or $array[$c1][$c2+1]==1){
                echo "[$c1$c2]";
            }
        }
    }
    echo "<br>";
}
       
?>

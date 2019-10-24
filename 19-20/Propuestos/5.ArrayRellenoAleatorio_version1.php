<?php

/*
a) Genera un array t[8][8]. Haz que cada uno de sus elementos se rellene aleatoriamente con valores que pueden ser 0,1 y 2. 
b) Indica qué casillas están a 0 y tienen algún 1 a su alrededor (ambas condiciones simultáneamente).

 */

error_reporting(E_ALL ^ E_NOTICE); //utilizaremos esta función para que no se muestren los Notice que nos saldrían en la última parte del ejercicio
// Nos salen Notice porque se llegan a procesar claves que serían menores que el cero o mayores que el índice máximo del array (7 en este caso).
 //Primero vamos a crear el array:
for ($i=0;$i<=7;$i++){
    for($j=0;$j<=7;$j++){
        $array[$i][$j]=random_int(0,2);
        if ($array[$i][$j]==0) {
        }
    }
}

//representamos el array en forma de matriz (me resulta más sencillo identificar los valores que cumplen la condición que buscamos):
foreach($array as $v1){
    foreach ($v1 as $v2){
        echo "$v2";
    }
    echo"<br>";
}

echo "<br>";

//obtenemos las posiciones de aquellas casillas que son cero:

foreach($array as $c1 => $v1){
    foreach ($v1 as $c2 => $v2){
        if($v2==0) echo "[$c1$c2]";
    }
    echo"<br>";
}
echo "<br>";
echo "<br>";
echo "<br>";

//obtenemos las posiciones de aquellas casillas que son cero y tienen un uno a la izquierda, a la derecha, arriba o abajo:
foreach($array as $c1 => $v1){
    foreach ($v1 as $c2 => $v2){
        if($v2==0){



            if(($array[$c1][$c2-1]==1 and $c2>0) or ($array[$c1][$c2+1]==1 and $c2<7) or ($array[$c1-1][$c2]==1 and $c1>0) or ($array[$c1+1][$c2]==1 and $c1<7)){
                echo "[$c1$c2]";
            }
        }
    }
    echo "<br>";
}
     
?>

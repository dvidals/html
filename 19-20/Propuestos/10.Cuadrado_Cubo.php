<html>
<body align="justify">
<?php
/*
Define tres arrays de 20 números enteros cada una, con nombres “numero”, “cuadrado” y “cubo”.
Carga el array “numero” con valores aleatorios entre 0 y 100.
En el array “cuadrado” se deben almacenar los cuadrados de los valores que hay en el array “numero”.
En el array “cubo” se deben almacenar los cubos de los valores que hay en “numero”.
A continuación, muestra el contenido de los tres arrays dispuesto en tres columnas.

 */

function numero($n)
{

    for ($i = 0; $i < $n; $i++) {
        $a[$i] = random_int(0, 100);
    }
    return $a;
}

$a = numero(20);
//var_dump($a);
//print_r($a);
//echo"<br><br>";



for ($j = 0; $j < count($a); $j++) {
    $b[$j] = $a[$j] * $a[$j];
}

for ($k = 0; $k < count($a); $k++) {
    $c[$k] = $a[$k] * $a[$k] * $a[$k];
}

/*
var_dump($b);
echo"<br><br>";
var_dump($c);
echo"<br><br>";
 */

for ($l = 0; $l < count($a); $l++) {
    if ($a[$l] < 10 and  $b[$l]<10) echo "0".$a[$l] . "__________" . "000" . $b[$l] . "____________" . $c[$l] . "<br>";
    if ($a[$l] < 10 and ($b[$l]>=10 and $b[$l]<100)) echo "0".$a[$l] . "__________" . "00" . $b[$l] . "____________" . $c[$l] . "<br>";  
    if ($a[$l] < 10 and ($b[$l]>=100 and $b[$l]<1000)) echo "0".$a[$l] . "__________" . "0" . $b[$l] . "____________" . $c[$l] . "<br>";
    if ($a[$l] < 10 and $b[$l]>=1000) echo "0".$a[$l] . "__________". $b[$l] . "____________" . $c[$l] . "<br>";   
    if (($a[$l] >= 10 and $a[$l]<100) and ($b[$l]>=100 and $b[$l]<1000)) echo $a[$l] . "__________" . "0" . $b[$l] . "____________" . $c[$l] . "<br>";
    if (($a[$l] >= 10 and $a[$l]<100) and $b[$l] >=1000 and $b[$l]<10000) echo $a[$l] . "__________". $b[$l] . "____________" . $c[$l] . "<br>";
    if ($a[$l]==100)echo $a[$l] . "_________". $b[$l] . "___________" . $c[$l] . "<br>";
    
    
}  


?>
</body>
</html>
<html>
<body style= text-align:center>
<?php
/*Escribe un programa que pinte por pantalla una pirámide rellena a base de asteriscos. 
La pirámide debe estar formada por 9 asteriscos en su parte más alta.
*/
$a="**********";
$i=1;
do{
    $a=substr($a,1);
    echo"<br>";
    echo "$a";
    $i++;
} while ($i<=9);
?>
</body>
</html>

<?php

/*
 *Repetir hasta que el contador alcanza 20
 */

for($contador=0;$contador<20;$contador++)$contador++;
echo "contador= ".$contador."<br>";
for($contador=1;$contador<20;$contador++){
    echo$contador.";";
}
if ($contador==20)echo$contador;
//genera una tabla HTML: 3 filas, 4 columnas:
echo"<table width=800 border=2>";
for ($f=1;$f<=3;$f++){
    echo"<tr>";
    for($c=1;$c<=4;$c++){
        echo"<td>";
        echo"Fila ".$f." Columna ".$c;
        echo"</td>";
    }
    echo"<br>";
    echo"</tr>";
   
}
echo"</table>";
echo "<br><br>";

$cuenta=0;
while ($cuenta<=4) {  // bucle de 5 iteraciones
    
   $cuenta++; 
  
 echo "Estamos en la interación $cuenta.<br>";
 if($cuenta>=2) continue;//cuando cuenta alcanza 3 salta a la siguiente

 echo "Continuamos a partir de la interación $cuenta<br>";
        
}

$str= "Hola de nuevo";
echo substr($str, 6, 3)."<br>";
echo substr($str, 6, -3)."<br>";
echo substr($str, -6, 3)."<br>";
echo substr($str, -6, -3)."<br>";

// genera una lista ordenada HTML de 6 elementos
$l=0;
echo"<ul>";
while($l<6){
    $l++;
    echo"<li>";
    echo"Elemento $l <br>";
    echo"</li>";
}
echo"</ul>";

echo"<br>";
$x=8;
if ($x<10)echo"$x es menor que 10<br>";
else echo"$x es mayor que 10<br>";
$k=15;
echo($k<10)?"$x es menor que 10<br>":"$k es mayor que 10<br>";
echo"<br>";

$hoy = 'Sábado';
switch ($hoy){
    case'Lunes':
        echo'El lunes es el primer día de la semana';
        break;
    case'Martes':
        echo 'El martes es el segundo día de la semana';
        break;
    case'Miercóles':
        echo 'El miércoles es el tercer día de la semana';
        break;
    case'Jueves':
        echo 'El jueves es el cuarto día de la semana';
        break;
    case'Viernes':
        echo 'El viernes es el quinto día de la semana';
        break;
    case'Sábado':
         echo 'El sábado es el sexto día de la semana';
         break;
    case'Domingo':
         echo 'El domingo es el último día de la semana';
         break;
     default:
        echo 'Día no reconocido';
         break;
}

echo"<br><br>";


switch ($hoy){
    case'Lunes':
    case'Martes':
    case'Miercóles':
    case'Jueves':
    case'Viernes':
            echo "El $hoy es un día laborable";
            break;
    case'Sábado':
    case'Domingo':
         echo "El $hoy es un día no laborable";
         break;
     default:
        echo 'Día no reconocido';
         break;
}

?>

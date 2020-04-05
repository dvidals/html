<!--
Definir una variable a la cual se le asigna un número decimal y tras comprobar
que esa variable es de tipo coma flotante, obtener por pantalla un mensaje
que nos indique el tipo y el valor almacenado.
Investigar y usar la función is_float.
 -->
<HTML>
 <HEAD>
   <TITLE>Ejercicio Básicos</TITLE>
 </HEAD>
 <BODY>
  
     <H2>Ejercicio 11</H2>
     <?php
$n=11.89;

echo "La variable introducida \$n=$n es una variable: <br> ";

echo(is_float($n)== 1) ?var_dump($n):  "que no es un número de tipo coma flotante";


     


?>
 </BODY>
</HTML>
<HTML>
 <HEAD>
   <TITLE>Operadores</TITLE>
 </HEAD>
 <BODY>
   <CENTER>

     <H2>Operadores de comparación y condicionales</H2>
     <?php
$a = 3;
$b = 7;
$c = 9;
echo "<BR>Los tres números a comparar son: ";
echo "<B>$a, $b </B>y<B> $c</B><BR><BR>";
// obtenemos el mayor de $a y $b
$elmayor = ($a > $b) ? $a : $b; // operador ternario. Ejercicio: hacer lo mismo con una estructura condicional
echo " y el mayor es el <B>";
// mostramos el mayor de los tres valores
echo ($elmayor < $c) ? $c : $elmayor;
echo "</B>";
?>

   </CENTER>
 </BODY>
</HTML>

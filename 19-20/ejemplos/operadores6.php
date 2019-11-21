<HTML>
 <HEAD>
   <TITLE>Operadores</TITLE>
 </HEAD>
 <BODY>
   <CENTER>
     <H2>Operadores lógicos</H2>
     <?php
$a = 3;
$b = 7;
$c = 9;
echo "<BR>Los tres números a comparar son: ";
echo "<B>$a, $b </B>y<B> $c</B><BR><BR>";
echo " y el mayor es el <B>";
echo ($a > $b) && ($a > $c) ? $a : "";
echo ($b > $a) && ($b > $c) ? $b : "";
echo ($c > $a) && ($c > $b) ? $c : "";
echo "</B>";
?>

// Ejercicio: hacer lo mismo con estructuras de seleccion

   </CENTER>
 </BODY>
</HTML>

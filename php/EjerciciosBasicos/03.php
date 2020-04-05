<!--
 *Cree un fichero PHP que permita comprobar las capacidades aritméticas de PHP.
Para ello, cree dos variables $operador1 y $operador2. 
Asígnele los valores 13 y 4, respectivamente. 
Defina una tercera variable $resultado y escriba un código que permita hacer 
las siguientes operaciones:
a. 13 – 4
b. 13 + 4
c. 13 * 4
d. 13 / 4
e. 13 % 4
 *-->
<HTML>
 <HEAD>
   <TITLE>Ejercicio Básicos</TITLE>
 </HEAD>
 <BODY>
   <CENTER>
     <H2>Ejercicio 3</H2>
     <?php
     $operador1=13;
     $operador2=4;
     $resultado;
     

echo  "a. ".$resultado=$operador1 -$operador2."<br>";
echo  "b. ".$resultado=$operador1 +$operador2."<br>";
echo  "c. ".$resultado=$operador1 *$operador2."<br>";
echo  "d. ".$resultado=$operador1 /$operador2."<br>";
echo  "e. ".$resultado=$operador1 %$operador2."<br>";
     


    ?>
   </CENTER>
 </BODY>
</HTML>
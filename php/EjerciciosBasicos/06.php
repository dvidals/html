<!--
Implemente una función que sume dos números que se le pasan como parámetro 
y muestra el resultado de llamarla por pantalla.
 -->
<HTML>
 <HEAD>
   <TITLE>Ejercicio Básicos</TITLE>
 </HEAD>
 <BODY>
   <CENTER>
     <H2>Ejercicio 6</H2>
     <?php
     
     $n1=3;
     $n2=4;
     
     function suma($a,$b) {
         
        echo $a+$b;
         
     }

echo "La suma de $n1 y $n2 es igual a: ";
suma($n1,$n2);
     


?>
   </CENTER>
 </BODY>
</HTML>
<!--
 Crea un conversor de dólares a euros, de forma que fijes la tasa de cambio
 como una constante y el nº de dólares a cambiar como una variable.
 -->
 
<HTML>
 <HEAD>
   <TITLE>Ejercicio Básicos</TITLE>
 </HEAD>
 <BODY>
   <CENTER>
     <H2>Ejercicio 13</H2>
     <?php

define ("tasa", 0.85);

 function conversor ($d){
 $euros=tasa*$d;
 echo $euros;
 }
$d=10;
echo "$d dólares son ";
echo conversor ($d);
echo " euros";
?>
   </CENTER>
 </BODY>
</HTML>

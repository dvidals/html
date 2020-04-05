<!--
 Cree un programa que tome como variable el año 2008 e indique si es bisiesto.
Nota: Un año es bisiesto si divisibles por 400 o por 4 pero no por 100
 -->
<HTML>
 <HEAD>
   <TITLE>Ejercicio Básicos</TITLE>
 </HEAD>
 <BODY>
   <CENTER>
     <H2>Ejercicio 8</H2>
     <?php
     
function bisiesto($a){
   
   if(($a%400==0 or $a%4==0) and $a%100<>0){
       
      echo $a ;
      echo " es un año bisiesto";
   }else {
          echo $a;
          echo " no es un año bisiesto";
      }
 }
    

bisiesto(2008);
     


    ?>
   </CENTER>
 </BODY>
</HTML>
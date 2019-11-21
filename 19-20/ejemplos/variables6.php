<HTML>
 <HEAD>
   <TITLE>Conversión automática de tipos</TITLE>
 </HEAD>
 <BODY>
   <CENTER>
     <H2>Conversión de tipos automática</H2>
     <?php
       $numero=19;
       $cadena1="21";
       $cadena2="23abc";
       $cadena3="2211.5";
       $suma=$numero+$cadena1;
       echo "El resultado de sumar $numero y '$cadena1' es: $suma <BR>";
       $suma=$numero+$cadena2;
       echo "El resultado de sumar $numero y '$cadena2' es: $suma <BR>";
       $suma=$numero+$cadena3;
       echo "El resultado de sumar $numero y '$cadena3' es: $suma <BR>";
       $suma=$cadena1+$cadena2;
       echo "El resultado de sumar '$cadena1' y '$cadena2' es: $suma <BR>";
       $suma=$cadena1+$cadena3;
       echo "El resultado de sumar '$cadena1' y '$cadena3' es: $suma <BR>";
     ?>
   </CENTER>
 </BODY>
</HTML>

<HTML>
 <HEAD>
   <TITLE>Funciones para Variables</TITLE>
 </HEAD>
 <BODY>
   <CENTER>
     <H2>Comprobando el tipo de las variables</H2>
     <?php
       $cadena="Hola a todos"; 
       echo 'La variable $cadena contiene <B>'.$cadena.'</B><BR><BR>';
       echo 'La variable $cadena ';
       echo (is_integer($cadena))?'es':' no es';
       echo ' de tipo entero <BR>';
       echo 'La variable $cadena ';
       echo (is_double($cadena))?'es':' no es';
       echo ' de tipo doble <BR>';
       echo 'La variable $cadena ';
       echo (is_string($cadena))?'es':' no es';
       echo ' una cadena de caracteres <BR>';
     ?>
   </CENTER>
 </BODY>
</HTML>

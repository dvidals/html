<HTML>
 <HEAD>
   <TITLE>Operadores</TITLE>
 </HEAD>
 <BODY>
   <CENTER>
     <H2>Operador de omisión de errores</H2>
     <?php
       $a = 10;
       $b = 5;
       // la división por 0 genera un error
       // pero con este operador la ejecución
       // continúa sin problemas
       @$resultado=$a/$b;
       $texto1="El resultado de $a/$b es: $resultado<BR>";
       $texto2="Se ha producido un error:<B> $php_errormsg </B>";
       // comprobamos si se ha producido un error
       // si es así mostramos el mensaje de error
       echo "<BR>";
       echo (empty($resultado))? $texto2: $texto1; 
     ?>
   </CENTER>
 </BODY>
</HTML>

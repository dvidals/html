<HTML>
 <HEAD>
   <TITLE>Funciones para Variables</TITLE>
 </HEAD>
 <BODY>
   <CENTER>
     <H2>Usando gettype() y settype() </H2>
     <?php
       $cadena="3.1416 es el valor de PI";
       echo "El valor de \$cadena  es: <B> $cadena </B><BR>";
       echo "Es de tipo ".gettype($cadena)."<BR><BR>";
       settype($cadena,"double");
       echo "Si lo paso a doble obtengo : $cadena <BR>";
       settype($cadena,"integer");
       echo "Si lo paso a entero obtengo : $cadena <BR>";
     ?>
   </CENTER>
 </BODY>
</HTML>

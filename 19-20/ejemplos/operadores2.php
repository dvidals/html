<HTML>
 <HEAD>
   <TITLE>Operadores</TITLE>
 </HEAD>
 <BODY>
   <CENTER>
     <H2>Incrementos y Decrementos</H2>
     <?php
       $a=7;
       echo "El valor inicial de \$a es: <B>$a</B><BR>";
       echo "  Al preincrementar (++\$a) devuelve: <B>".++$a."</B><BR>";
       echo "  Al postincrementar (\$a++) devuelve: <B>".$a++."</B><BR>";
       echo "El valor final de \$a es: <B>$a</B><BR><BR>";
       $b=7;
       echo "El valor inicial de \$b es: <B>$b</B><BR>";
       echo "  Al predecrementar (--\$b) devuelve: <B>".--$b."</B><BR>";
       echo "  Al postdecrementar (\$b--) devuelve: <B>".$b--."</B><BR>";
       echo "El valor final de \$b es: <B>$b</B><BR>";
     ?>
   </CENTER>
 </BODY>
</HTML>

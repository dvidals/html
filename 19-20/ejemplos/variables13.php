<HTML>
 <HEAD>
   <TITLE>Constantes</TITLE>
 </HEAD>
 <BODY>
   <CENTER>
     <H2>Trabajando con constantes</H2>
     <?php
       define("euro",166.386);
       echo "El valor de la constante 'euro' es: <B>". euro ."</B><BR>";
       echo "Luego 1€ son ".euro."ptas.<BR><BR>";
       echo "La constante 'centimo' ";
       echo (defined("centimo"))?"está".centimo:"no está";
       echo " definida<BR>";
       define("centimo",1.66);
       echo "El valor de la constante 'centimo' es: <B>". centimo ."</B><BR><BR>";
     ?>
   </CENTER>
 </BODY>
</HTML>

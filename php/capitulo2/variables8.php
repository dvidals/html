﻿<HTML>
 <HEAD>
   <TITLE>Variables de Variables</TITLE>
 </HEAD>
 <BODY>
   <CENTER>
     <H2>Variables de variables</H2>
     <?php
       $cadena="modelo";
       echo "El valor de \$cadena  es: <B> $cadena </B><BR>";
       echo 'Después de asignar a $$cadena "Cougar" ...<BR><BR>';
       $$cadena="Cougar";
       echo "El valor de \$\$cadena es: $$cadena <BR>";
       echo "El valor de \$modelo  es: $modelo <BR>";
     ?>
   </CENTER>
 </BODY>
</HTML>

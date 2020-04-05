<HTML>
 <HEAD>
   <TITLE>Variables con matrices</TITLE>
 </HEAD>
 <BODY>
   <CENTER>
     <H2>Trabajando con matrices o <I>arrays</I></H2>
     <?php
       $matriz1[0]="cougar";
       $matriz1[1]="ford";
       // la tercera posición del array esta vacía
       // por eso le asignamos una cadena sin contenido
       $matriz1[2]="";
       $matriz1[3]="2.500";
       $matriz1[4]="V6";
       $matriz1[5]=182;
       $matriz1[]=182;
       // para añadir el último elemento a una matriz
       // no es necesario poner el número de índice

       // creamos la matriz asociativa
       $matriz2['modelo']="cougar";
       $matriz2['marca']="ford";
       // para marca una posición sin contenido también
       // se puede utilizar <null>
       $matriz2['fecha']=null;
       $matriz2['cc']="2.500";
       $matriz2['motor']="V6";
       $matriz2['potencia']=182;
     ?>
     <TABLE BORDER="1" CELLPADDING="2" CELLSPACING="2">
        <TR ALIGN="center" BGCOLOR="yellow">
           <TD></TD>
           <TD>Modelo</TD>
           <TD>Marca</TD>
           <TD>Fecha</TD>
           <TD>CC</TD>
           <TD>Motor</TD>
           <TD>Potencia</TD>
        </TR>
        <TR ALIGN="center">
           <TD BGCOLOR="yellow">matriz1</TD>
            <?php
              echo "<TD> $matriz1[0] </TD>";
              echo "<TD> $matriz1[1] </TD>";
              echo "<TD> $matriz1[2] </TD>";
              echo "<TD> $matriz1[3] </TD>";
              echo "<TD> $matriz1[4] </TD>";
              echo "<TD> $matriz1[5] </TD>";
            ?>
        </TR>
        <TR ALIGN="center">
           <TD BGCOLOR="yellow">matriz2</TD>
            <?php
              echo "<TD>". $matriz2['modelo'] ."</TD>";
              echo "<TD>". $matriz2['marca'] ."</TD>";
              echo "<TD>". $matriz2['fecha'] ."</TD>";
              echo "<TD>". $matriz2['cc'] ."</TD>";
              echo "<TD>". $matriz2['motor'] ."</TD>";
              echo "<TD>". $matriz2['potencia'] ."</TD>";
            ?>
        </TR>
     </TABLE>
   </CENTER>
 </BODY>
</HTML>

<HTML>
 <HEAD>
   <TITLE>Variables Enteras</TITLE>
 </HEAD>
 <BODY>
   <CENTER>
     <H2>Formatos de los números Enteros</H2>
     <TABLE BORDER="1" CELLPADDING="2" CELLSPACING="2">
        <TR ALIGN="right">
           <TD BGCOLOR="yellow">Decimal Positivo</TD>
           <TD>
            <?php
	      $num = 502;   //número decimal
              echo $num;    //mostramos el valor de $num
            ?>
           </TD>
        </TR>
        <TR ALIGN="right">
           <TD BGCOLOR="yellow">Decimal Negativo</TD>
           <TD>
            <?php
	      $num = -502;  //número decimal negativo
              echo $num;    //mostramos el valor de $num
            ?>
           </TD>
        </TR>
        <TR ALIGN="right">
           <TD BGCOLOR="yellow">Decimal Octal (0502)</TD>
           <TD>
            <?php
	      $num = 0502;  //número octal
              echo $num;    //mostramos el valor de $num
            ?>
           </TD>
        </TR>
        <TR ALIGN="right">
           <TD BGCOLOR="yellow">Decimal Hexadecimal (0x12)</TD>
           <TD>
            <?php
	      $num = 0x12;  //número hexadecimal
              echo $num;    //mostramos el valor de $num
            ?>
           </TD>
        </TR>
     </TABLE>
   </CENTER>
 </BODY>
</HTML>

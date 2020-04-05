<HTML>
 <HEAD>
   <TITLE>Operadores</TITLE>
 </HEAD>
 <BODY>
   <CENTER>
     <H2>Operadores de Bits</H2>
     <?php
        $a=3;  // 0011 en binario
	$b=9;  // 1001 en binario
     ?>
     <TABLE BORDER="1" CELLPADDING="2" CELLSPACING="2">
        <TR ALIGN="center">
           <TD BGCOLOR="yellow">&nbsp;</TD>
           <TD BGCOLOR="yellow">2<SUP>3</SUP></TD>
           <TD BGCOLOR="yellow">2<SUP>2</SUP></TD>
           <TD BGCOLOR="yellow">2<SUP>1</SUP></TD>
           <TD BGCOLOR="yellow">2<SUP>0</SUP></TD>
           <TD BGCOLOR="yellow">valor decimal</TD>
        </TR>
        <TR ALIGN="center">
           <TD BGCOLOR="yellow">$a</TD>
              <?php
		echo "<TD>".(($a&8)>>3)."</TD>";
		echo "<TD>".(($a&4)>>2)."</TD>";
		echo "<TD>".(($a&2)>>1)."</TD>";
		echo "<TD>".($a&1)."</TD>";
		echo "<TD>$a</TD>";
              ?>
           </TD>
        </TR>
        <TR ALIGN="center">
           <TD BGCOLOR="yellow">$b</TD>
              <?php
		echo "<TD>".(($b&8)>>3)."</TD>";
		echo "<TD>".(($b&4)>>2)."</TD>";
		echo "<TD>".(($b&2)>>1)."</TD>";
		echo "<TD>".($b&1)."</TD>";
		echo "<TD>$b</TD>";
              ?>
         </TR>
        <TR ALIGN="center">
           <TD BGCOLOR="yellow">$a & $b</TD>
              <?php
                $aux=$a&$b;
		echo "<TD>".(($aux&8)>>3)."</TD>";
		echo "<TD>".(($aux&4)>>2)."</TD>";
		echo "<TD>".(($aux&2)>>1)."</TD>";
		echo "<TD>".($aux&1)."</TD>";
		echo "<TD>$aux</TD>";
              ?>
         </TR>
        <TR ALIGN="center">
           <TD BGCOLOR="yellow">$a | $b</TD>
              <?php
                $aux=$a|$b;
		echo "<TD>".(($aux&8)>>3)."</TD>";
		echo "<TD>".(($aux&4)>>2)."</TD>";
		echo "<TD>".(($aux&2)>>1)."</TD>";
		echo "<TD>".($aux&1)."</TD>";
		echo "<TD>$aux</TD>";
              ?>
         </TR>
        <TR ALIGN="center">
           <TD BGCOLOR="yellow">$a ^ $b</TD>
              <?php
                $aux=$a^$b;
		echo "<TD>".(($aux&8)>>3)."</TD>";
		echo "<TD>".(($aux&4)>>2)."</TD>";
		echo "<TD>".(($aux&2)>>1)."</TD>";
		echo "<TD>".($aux&1)."</TD>";
		echo "<TD>$aux</TD>";
              ?>
         </TR>
        <TR ALIGN="center">
           <TD BGCOLOR="yellow">~$a</TD>
              <?php
                $aux=~$a;
		echo "<TD>".(($aux&8)>>3)."</TD>";
		echo "<TD>".(($aux&4)>>2)."</TD>";
		echo "<TD>".(($aux&2)>>1)."</TD>";
		echo "<TD>".($aux&1)."</TD>";
		echo "<TD>$aux</TD>";
              ?>
         </TR>
     </TABLE>
   </CENTER>
 </BODY>
</HTML>

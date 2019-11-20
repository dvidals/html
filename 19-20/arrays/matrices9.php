<HTML>
 <HEAD>
   <TITLE>Trabajando con Matrices</TITLE>
 </HEAD>
 <BODY>
   <CENTER>
     <H2>Arrays función <I>array_slice</I></H2>
     <?php
       $matriz=array("a","b","c","d","e","f","g");
       $matriz1=array_slice($matriz,2);
		$matriz2=array_slice($matriz,2,-1);
       $matriz3=array_slice($matriz,-3,-1);
       $matriz4=array_slice($matriz,0,3);
       $matriz5=array_slice($matriz,1,-3);
 
       echo "<BR><TABLE BORDER='1'CELLPADDING='2' CELLSPACING='2'>\n";
       echo "<TR ALIGN='center'>";
       echo "<TD BGCOLOR='yellow'>\$matriz</TD><TD>".implode('-',$matriz)."</TD>\n";
       echo "<TR ALIGN='center'>";
       echo '<TD BGCOLOR="yellow">array_slice($matriz,2)</TD>';
       echo "<TD>".implode('-',$matriz1)."</TD></TR>\n";
       echo "<TR ALIGN='center'>";
       echo '<TD BGCOLOR="yellow">array_slice($matriz,2,-1)</TD>';
       echo "<TD>".implode('-',$matriz2)."</TD></TR>\n";
       echo "<TR ALIGN='center'>";
       echo '<TD BGCOLOR="yellow">array_slice($matriz,-3,-1)</TD>';
       echo "<TD>".implode('-',$matriz3)."</TD></TR>\n";
       echo "<TR ALIGN='center'>";
       echo '<TD BGCOLOR="yellow">array_slice($matriz,0,3)</TD>';
       echo "<TD>".implode('-',$matriz4)."</TD></TR>\n";
       echo "<TR ALIGN='center'>";
       echo '<TD BGCOLOR="yellow">array_slice($matriz,1,-3)</TD>';
       echo "<TD>".implode('-',$matriz5)."</TD></TR>\n";
       echo "</TABLE>\n";
     ?>
   </CENTER>
 </BODY>
</HTML>

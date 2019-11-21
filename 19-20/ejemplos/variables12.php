<HTML>
 <HEAD>
   <TITLE>Casting de tipos</TITLE>
 </HEAD>
 <BODY>
   <CENTER>
     <H2>Conversión de variables</H2>
     <?php
$cadena = "38E6";
echo "El valor de \$cadena es: <B> $cadena </B><BR><BR>";
$aux = intval($cadena);
echo "El resultado de convertirla en entero es: $aux <BR>";
$aux = intval($cadena, 8);
echo "El resultado de convertirla en entero octal: $aux <BR>";
$aux = intval($cadena, 16);
echo "El resultado de convertirla en entero hexadecimal: $aux <BR>";
$aux = doubleval($cadena);
echo "El resultado de convertirla en doble es: $aux <BR>";
$aux = strval($cadena);
echo "El resultado de convertirla en cadena es: $aux <BR>";
?>
   </CENTER>
 </BODY>
</HTML>

<!--
 Dado el siguiente texto “Sin problema.”, utilizando funciones que manipulan cadenas
de caracteres, queremos que nos aparezca por pantalla en líneas separadas la siguiente información:
1.1. El nº de caracteres
1.2. Indicar la posición de la palabra ‘problema’
1.3. Sustituir ‘problema’ por ‘problemas’
1.4. Escribir los caracteres cuyos ASCII son 65, 66 y 67
1.5. Para el texto “Sin problema”, poner en mayúsculas la n.
1.6. Escribir en mayúsculas y minúsculas todo el texto
1.7. Para el texto “ Sin problema”, eliminar los espacios en blanco delante de la primera letra
1.8. Escribir la cadena al revés
1.9. Indicar el número de veces que aparece la letra ‘o’
Investigar y usar las funciones substr_count, chr y strpos.
 -->
<HTML>
 <HEAD>
   <TITLE>Ejercicio Básicos</TITLE>
 </HEAD>
 <BODY>
   <CENTER>
     <H2>Ejercicio 12</H2>
     <?php
     
     
     

$cadena=" Sin problema";
echo "<br>1.1. El nº de caracteres: ".strlen($cadena);
$pos=strpos($cadena,"problema");
echo "<br>1.2. Indicar la posición de la palabra 'problema': ".($pos+1);
echo "<br>1.3. Sustituir ‘problema’ por ‘problemas: ". str_replace("problema","problemas",$cadena);
echo "<br>1.4. Escribir los caracteres cuyos ASCII son 65, 66 y 67: ".chr(65).", ".chr(66)."y ".chr(67);
echo"<br>1.5. Para el texto “Sin problema”, poner en mayúsculas la n: ".str_replace("n","N",$cadena);   
echo"<br>1.6. Escribir en mayúsculas y minúsculas todo el texto: ".strtoupper($cadena)." y ".strtolower($cadena);
echo"<br>1.7. Para el texto “ Sin problema”, eliminar los espacios en blanco delante de la primera letra:".trim($cadena);
echo"<br>1.8. Escribir la cadena al revés: ".strrev($cadena);
echo"<br>1.9. Indicar el número de veces que aparece la letra ‘o’: ".substr_count($cadena,"o");
?>

   </CENTER>
 </BODY>
</HTML>
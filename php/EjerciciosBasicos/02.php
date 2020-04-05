<!--Cree un fichero PHP que muestre por pantalla el mensaje
“Segundo ejercicio: visualización del contenido de variables”.
A continuación, defina dos variables $nombre y $edad y asígnele un valor correcto.
Después, cree una sentencia que muestre un mensaje que contenga dichas 
variables similar a “Mi nombre es valor_de_la_ variable_$nombre y mi edad
es valor_de_la_variable_$edad”. Inserte un comentario encima de cada variable 
explicando el significado del valor que almacenará cada variable.-->
<HTML>
 <HEAD>
   <TITLE>Ejercicio Básicos</TITLE>
 </HEAD>
 <BODY>
   <CENTER>
     <H2>Ejercicio 2</H2>
     <?php

echo  "Segundo ejercicio: visualización del contenido de variables<br>";
     $nombre= "David Vidal";
     $edad=40;
     
 echo "Mi nombre es valor de la variable:<br><br> \$nombre<sup>$nombre en mi caso porque al
     crear esa varible se le asignó ese valor </sup> <br>y mi edad
es valor de la variable: <br><br>\$edad<sup>$edad en mi caso porque al crear esa variable se le
    asignó ese valor</sup>";


?>
   </CENTER>
 </BODY>
</HTML>
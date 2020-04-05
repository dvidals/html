<!--
Cree un fichero de PHP que permita conocer toda la información de una variable
(utilice la función var_dump()), de tal forma que pueda obtener una salida por pantalla
similar a la siguiente:
Información de la variable “nombre”: string (4) “Juan”
Contenido de la variable: Juan
Después de asignarle un valor nulo: NULL
 -->
<HTML>
 <HEAD>
   <TITLE>Ejercicio Básicos</TITLE>
 </HEAD>
 <BODY>
   <CENTER>
     <H2>Ejercicio 4</H2>
     <?php
     $nombre="Juan";
     echo 'Información de la variable "nombre": ';
     echo  var_dump($nombre)."<br>";
     echo "Contenido de la variable: $nombre<br>";
     $nombre=null;
     echo "Después de asignarle un valor nulo: ";
     echo var_dump($nombre);
     


?>
   </CENTER>
 </BODY>
</HTML>
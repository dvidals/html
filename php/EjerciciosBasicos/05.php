<!--
 Cree un fichero PHP en el que se asignen los siguientes valores a una variable
$temporal: “Juan”; 3,14; false; 3; null. Muestre por pantalla 
el tipo que se le asigna a la variable utilizando la función gettype().
-->
<HTML>
 <HEAD>
   <TITLE>Ejercicio Básicos</TITLE>
 </HEAD>
 <BODY>
   <CENTER>
     <H2>Ejercicio 5</H2>
     <?php
     $temporal=["Juan", 3.14, false, 3, null];

echo  '$temporal[0]: '.gettype($temporal[0])."<br>";
echo  '$temporal[1]: '.gettype($temporal[1])."<br>";
echo  '$temporal[2]: '.gettype($temporal[2])."<br>";
echo  '$temporal[3]: '.gettype($temporal[3])."<br>";
echo  '$temporal[4]: '.gettype($temporal[4]);    


?>
   </CENTER>
 </BODY>
</HTML>
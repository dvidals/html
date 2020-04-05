
<!--Cree un fichero PHP que muestre por pantalla el mensaje
“Segundo ejercicio: visualización del contenido de variables”.
A continuación, defina dos variables $nombre y $edad y asígnele un valor correcto.
Después, cree una sentencia que muestre un mensaje que contenga dichas 
variables similar a “Mi nombre es valor_de_la_ variable_$nombre y mi edad
es valor_de_la_variable_$edad”. Inserte un comentario encima de cada variable 
explicando el significado del valor que almacenará cada variable.-->
<!--
 *Cree un fichero PHP que permita comprobar las capacidades aritméticas de PHP.
Para ello, cree dos variables $operador1 y $operador2. 
Asígnele los valores 13 y 4, respectivamente. 
Defina una tercera variable $resultado y escriba un código que permita hacer 
las siguientes operaciones:
a. 13 – 4
b. 13 + 4
c. 13 * 4
d. 13 / 4
e. 13 % 4
 *-->
<!--
Cree un fichero de PHP que permita conocer toda la información de una variable
(utilice la función var_dump()), de tal forma que pueda obtener una salida por pantalla
similar a la siguiente:
Información de la variable “nombre”: string (4) “Juan”
Contenido de la variable: Juan
Después de asignarle un valor nulo: NULL
 -->
 <!--
 Cree un fichero PHP en el que se asignen los siguientes valores a una variable
$temporal: “Juan”; 3,14; false; 3; null. Muestre por pantalla 
el tipo que se le asigna a la variable utilizando la función gettype().
-->
<!--
Implemente una función que sume dos números que se le pasan como parámetro 
y muestra el resultado de llamarla por pantalla.
 -->
 <!--
Implemente un procedimiento que imprime un mensaje que se le pasa como parámetro 
y llámelo para que se ejecute y se muestre su resultado por pantalla.
 -->
 <!--
 Cree un programa que tome como variable el año 2008 e indique si es bisiesto.
Nota: Un año es bisiesto si divisibles por 400 o por 4 pero no por 100
 -->
 <!--
Definir una variable a la cual se le asigna un número decimal y tras comprobar
que esa variable es de tipo coma flotante, obtener por pantalla un mensaje
que nos indique el tipo y el valor almacenado.
Investigar y usar la función is_float.
 -->
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
 ﻿<!--
 Crea un conversor de dólares a euros, de forma que fijes la tasa de cambio
 como una constante y el nº de dólares a cambiar como una variable.
 -->
<HTML>
 <HEAD>
   <TITLE>Ejercicio Básicos</TITLE>
 </HEAD>
 <BODY>
   <CENTER>
     <H2>Ejercicio variables</H2>
     <?php

echo "Segundo ejercicio: visualización del contenido de variables";
echo"</br>";
     //la variable $nombre almacenará mi nombre
     
$nombre="David";
    //la variable $edad almacenará mi edad 
$edad=41;
$operador1=13;
$operador2=4;
$resultado;
$temporal=["Juan", 3.14, false, 3, null];
$decimal=3/*.1416*/;
function suma($p1, $p2){
    $suma=$p1+$p2;
    return $suma;
};
function mostrar($texto){
    echo $texto;
};
function bisiesto($año){
    if($año%400==0 || $año%4==0 && $año%100<>0){
       echo "$año es bisiesto";
        
    }
    else echo "$año no es bisiesto";
};
$dolar=100;
define(tasa,0.8);
function cambio ($dolar){
    echo $dolar*tasa;
};
echo "Mi nombre es valor de la variable \$nombre: $nombre en mi caso </br> Mi edad
es valor de la variable \$edad: $edad en mi caso </br></br>";
  $resultado=$operador1-$operador2;
  echo "\$resultado=".$resultado=$operador1-$operador2."</br>";
  echo "\$resultado=".$resultado=$operador1+$operador2."</br>";
  echo "\$resultado=".$resultado=$operador1*$operador2."</br>";
  echo "\$resultado=".$resultado=$operador1/$operador2."</br>";
  echo "\$resultado=".$resultado=$operador1%$operador2."</br>";
  echo 'Información de la variable "nombre":</br>';
  echo var_dump($nombre);
   echo "Contenido de la variable: $nombre.</br>";
  $nombre=null;
  echo "Después de asignarle un valor nulo:</br>";
  echo var_dump($nombre);
  
echo  '</br>$temporal[0]: '.gettype($temporal[0])."<br>";
echo  '$temporal[1]: '.gettype($temporal[1])."<br>";
echo  '$temporal[2]: '.gettype($temporal[2])."<br>";
echo  '$temporal[3]: '.gettype($temporal[3])."<br>";
echo  '$temporal[4]: '.gettype($temporal[4])."<br>";    
echo suma(5,6)."</br>";
echo mostrar("Querido amigo")."</br>";
bisiesto(2008);
echo "</br>";
echo "La variable \$decimal=$decimal es una variable:</br>";
echo is_float($decimal)?var_dump($decimal):"que no es de tipo decimal o coma flotante </br>";
echo "$dolar dólares son ";
cambio($dolar);
echo" euros</br>";
?>
   </CENTER>
 </BODY>
</HTML>
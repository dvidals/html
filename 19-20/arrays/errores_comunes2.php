<?php

error_reporting(E_ALL); // Mostrar todos os erros
$matriz = array('froita' => 'mazá', 'vexetal' => 'cenoria');
// Correcto
print $matriz['froita']."<br>";   // mazá
print $matriz['vexetal']."<br>"; // cenoria

print $matriz[froita]."<br>";    // mazá
// Incorrecto. Non hai definida unha constante chamada froita, convirte ó string 'froita' pero saca un WARNING

// Definamos unha constante para demostrar o que pasa. Asignaremos o
// valor 'vexetal' a unha constante chamada froita.
define('froita', 'vexetal');
print "Con índice coma string ".$matriz['froita']."<br>";  // mazá
print "Con índice coma constante ".$matriz[froita]."<br>";    // cenoria

// O seguinte está ben xa que se atopa ao interior dunha
// cadea. As constantes non son procesadas ao interior de 
//cadeas, así que non se produce un erro E_NOTICE aquí
print "Ola $matriz[froita]<br>";  // Ola mazá


// Cunha excepción, os corchetes que rodean as matrices ao
// interior de cadeas permiten o uso de constantes
print "Ola {$matriz[froita]}<br>";    // Ola cenoria
print "Ola {$matriz['froita']}<br>";  // Ola mazá


// Isto non funciona, resulta nun erro do interprete:
print "Ola $matriz['froita']<br>";
print "Ola $_GET['foo']<br>";

// A concatenación é outra opción
print "Ola " . $matriz['froita']."<br>"; // Ola mazá
?>




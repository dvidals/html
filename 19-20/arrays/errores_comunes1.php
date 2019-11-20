<?php

error_reporting(E_ALL);

ini_set('display_errors', true);
ini_set('html_errors', true);

// Matriz simple:
$matriz = array(1, 2);
$calculo = count($matriz);
for ($i = 0; $i < $calculo; $i++) {
    echo "\n<br><b>Revisando $i:</b> \n<br>";
    echo "Mal: " . $matriz['$i'] . "\n<br>";
    echo "Ben: " . $matriz[$i] . "\n<br>";
}
?>



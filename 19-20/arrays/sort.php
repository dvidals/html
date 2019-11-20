<?php

/* By http://php-estudios.blogspot.com */

/* sort($array, opcional: modo de ordenación) */

/* La función sort de PHP permite ordenar los elementos de un array, existen distintos modos de ordenación:

  SORT_REGULAR - compara elementos normalmente (no cambia los tipos) - Valor por defecto
  SORT_NUMERIC - compara elementos de forma numérica
  SORT_STRING - compara elementos como cadenas
  SORT_LOCALE_STRING - compara elementos como cadenas, basándose en la configuración regional en uso. Utiliza la configuración regional, la cual puede cambiarse usando setlocale().
  SORT_NATURAL - compara elementos como cadenas usando el "orden natural" de la misma forma que natsort().
  SORT_FLAG_CASE - se puede combinar (OR a nivel de bits) con SORT_STRING o SORT_NATURAL para ordenar cadenas de forma insensible a mayúsculas/minúsculas.
 */


/* Primer ejemplo. Por defecto SORT_REGULAR */
$array = array("ordenar4", "ordenar2", "ordenar3", "ordenar1");

print "<p>array a ordenar: " . implode(", ", $array) . "</p>";

sort($array, SORT_REGULAR);

$show = "";
foreach ($array as $index => $value) {
    $show .= "<p><i>$index : $value</i></p>";
}

print "<p>El array ordenado con SORT_REGULAR por defecto: $show</p>";

/* Segundo ejemplo. SORT_NUMERIC - Orden numérico */
$array = array(300, 20, 50, 120);

print "<p>array a ordenar: " . implode(", ", $array) . "</p>";

sort($array, SORT_NUMERIC);

$show = "";
foreach ($array as $index => $value) {
    $show .= "<p><i>$index : $value</i></p>";
}

print "<p>El array ordenado con SORT_NUMERIC: $show</p>";

/* Tercer ejemplo. SORT_STRING - Orden a partir de strings */
$array = array('Zaragoza', 'Madrid', 'bilbao', 'Barcelona', 'Cuenca');
$array = array_map('ucwords', $array);  // paso ucwords como función de callback, convierte el primer caracter a mayúsculas

print "<p>array a ordenar: " . implode(", ", $array) . "</p>";

sort($array, SORT_STRING);

$show = "";
foreach ($array as $index => $value) {
    $show .= "<p><i>$index : $value</i></p>";
}

print "<p>El array ordenado con SORT_STRING: $show</p>";

/* Cuarto ejemplo. SORT_LOCALE_STRING - Permite el orden según la configuración regional,
  tildes y otros caracteres latinos son tomados en cuenta para establecer el orden */
$array = array('García', 'Álvaro', 'Rebaño', 'Cántaro', 'Estación');

print "<p>array a ordenar: " . implode(", ", $array) . "</p>";

sort($array, SORT_LOCALE_STRING);

$show = "";
foreach ($array as $index => $value) {
    $show .= "<p><i>$index : $value</i></p>";
}

print "<p>El array ordenado con SORT_LOCALE_STRING: $show</p>";
?>

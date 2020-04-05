<!--
10. Define tres arrays de 20 números enteros cada una, con nombres “numero”, “cuadrado” y “cubo”.
Carga el array “numero” con valores aleatorios entre 0 y 100. En el array “cuadrado” se deben almacenar 
los cuadrados de los valores que hay en el array “numero”. En el array “cubo” se deben almacenar los 
cubos de los valores que hay en “numero”. A continuación, muestra el contenido de los tres arrays 
dispuesto en tres columnas. -->

<?php

define('TAMANO', 20);

for ($i = 0; $i < TAMANO; $i++) {
  $numero[$i] = rand(0, 100);
}

foreach ($numero as $elem)
  $cuadrado[] = $elem * $elem;

foreach ($numero as $elem)
  $cubo[] = $elem * $elem * $elem;

//$cubo[$i] = pow($numero[$i], 3);

?>
<table>
  <tr>
    <th>Número</th>
    <th>Cuadrado</th>
    <th>Cubo</th>
  </tr>

  <?php
  for ($i = 0; $i < TAMANO; $i++) {
    echo "<tr><td>" . $numero[$i] . "</td>";
    echo "<td>" . $cuadrado[$i] . "</td>";
    echo "<td>" . $cubo[$i] . "</td></tr>";
  }

  ?>
</table>
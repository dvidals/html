<?php

for ($n=1; $n<=6; $n++){
echo "$n. Elemento $n"."<br>";
}
echo "<br>"
?>

<?php
echo "<ol>";
for ($n=1; $n<=6; $n++){
echo "<li> Elemento $n</li>";
}
echo "</ol>";
?>


<?php
for ($x=1; $x<=3; $x++){
  for ($y=1; $y<=4; $y++){
      echo "|Fila$x"."Columna$y| ";
  }
    echo "<br>";
}
echo "<br>"
?>

<?php
//genera una tabla HTML: 3 filas, 4 columnas:
echo "<table width=\"1000\" border=\"2\">";
for ($x=1; $x<=3; $x++){
    echo "<tr>";
    for ($y=1; $y<=4; $y++){
        echo "<td>";
        echo "Fila$x"."Columna$y ";
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>" 
?>
<?php
// Crear unha matriz simple.
$matriz = array(1, 2, 3, 4, 5);
print_r($matriz);
// Agora eliminar cada ítem, pero deixar a matriz mesma intacta:
foreach ($matriz as $i => $valor) {
    unset($matriz[$i]);
}
echo "<br>";
print_r($matriz);
// Agregar un ítem (note que a nova clave é 5, en lugar de 0 como
// podería esperarse).
$matriz[] = 6;
echo "<br>";
print_r($matriz);
// Re-indexar:
$matriz = array_values($matriz);
$matriz[] = 7;
echo "<br>";
print_r($matriz);
?> 

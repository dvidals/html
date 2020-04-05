<?php
function exterior($valor) {
    $aux = 2 * $valor;
    function interior() {
        $cadena = "Contenido de la variable definida en la función interior\n";
        return $cadena;
    }
    return $aux;
}
/* No podemos llamar a la función interior pues no existe. */
$numero = 2;
echo exterior($numero) . "<br>";
/* Ahora podemos llamar a la función interior() ya que el procesamiento de la
 * función exterior() la ha hecho accesible */
echo interior();
?>

<?php
$pruebas = array(
    "42",
    1337,
    0x539,
    02471,
    0b10100111001,
    1337e0,
    "no numérico",
    array(),
    9.1,
    null,
    "134e"
);

foreach($pruebas as $element) {
    if(is_numeric($element)) {
        echo var_export($element, true) . " es numérico<br>", PHP_EOL;
    } else {
        echo var_export($element, true) . " NO es numérico<br>", PHP_EOL;
    }
}
?>

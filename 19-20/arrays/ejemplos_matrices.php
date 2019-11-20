<?php

$a = array(
    'cor' => 'vermella',
    'sabor' => 'doce',
    'forma' => 'redonda',
    'nome' => 'mazá',
    4        // la clave será 0
);
// es completamente equivalente a 
$a['cor'] = 'vermello';
$a['sabor'] = 'doce';
$a['forma'] = 'redonda';
$a['nome'] = 'mazá';
$a[] = 4;

//----------------------------------------------

$b[] = 'a';
$b[] = 'b';
$b[] = 'c';
// array(0 => 'a' , 1 => 'b' , 2 => 'c'),
// o simplemente array('a', 'b', 'c')

//----------------------------------------------

// Array como mapa de propiedades
$mapa = array(
    'versión' => 4,
    'SO' => 'Linux',
    'idioma' => 'inglés',
    'etiquetas_curtas' => true
);

// claves estritamente numéricas
$matriz = array(7,8,0,156,-10);  // es lo mismo que array(0 => 7, 1 => 8, ...)

$cambios = array(
    10,         // clave = 0
    5    =>  6,
    3    =>  7,
    'a'  =>  4,
    11,         // clave = 6 (el índice entero máximo era 5)
    '8'  =>  2, // clave = 8 ('¡entero!, castea automáticamente)
    '02' => 77, // clave = '02' (string, con el 0 delante no castea)
    0    => 12  // el valor 10 será substituído por 12
);

$vacio = array(); // matriz vacía

$cores = array('vermello', 'azul', 'verde', 'amarelo');
foreach ($cores as  $cor) {
    echo "Gústalle a $cor?\n<br>";
}
?> 

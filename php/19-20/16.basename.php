<?php
/*
Extraia o nome do ficheiro dunha ruta.
Exemplo de entrada : 'www.exemplo.com/public_html/index.php' --> Exemplo de saída : 'index.php'
Pista extra --> Tamén se pode facer de xeito máis áxil coa función basename

*/

$path='www.exemplo.com/public_html/index.php';
echo basename($path);
?>
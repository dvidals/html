<?php   
    header('Content-Type: text/html; charset=utf-8');
    $pais = 'Japón';  // sin problemas con el acento
    $ciudad = 'Tokio';
    // combina en una única string
    // salida: 'La capital de Japón es Tokio'
    echo ('La capital de ' . $pais. ' es ' . $ciudad);
?>  <!-- el fichero que contiene el script tiene q estar en utf8-->


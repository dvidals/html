<?php
/* buscamos la cookie "visitas". Si no existe se crea con valor 1;
  si existe, se le suma 1.  En los dos casos se muestra un mensaje */

if (!isset($_COOKIE['visitas'])) {
    setcookie('visitas', '1', time() + 3600 * 24);
    echo "Bienvenido por primera vez";
} else {
    $visitas = (int) $_COOKIE['visitas'];
    $visitas++;
    setcookie('visitas', $visitas, time() + 3600 * 1);
    echo "Bienvenido por $visitas vez";
}

var_dump($_COOKIE);

echo "<a href='08_ap32_borrar_cookie_enlace.php'>Borrar Visitas"; 
<?php

session_start();
if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
} else {
    $_SESSION['count'] ++;
}
echo "Sesión cuya variable count vale " . $_SESSION['count'];
echo "<br><a href='9_sesiones_uso_basico2.php'>Siguiente</a>";

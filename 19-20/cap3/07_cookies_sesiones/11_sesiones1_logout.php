<?php

session_start();    // unirse a la sesión
$_SESSION = array(); //vacía la variable de sesión
session_destroy(); // eliminar la sesion
setcookie(session_name(), 123, time() - 1000); // eliminar la cookie
header("Location: 10_sesiones1_login.php");

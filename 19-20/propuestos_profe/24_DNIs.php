<!-- 24. Crear una página que compruebe la validez de DNIs. -->

<html>

<body>
    <form action="" method="post">
        <label for="dni">Escribe un DNI</label>
        <input type="text" id="dni" name="dni" placeholder="DNI">
        <input type="submit" name="submit" value="COMPROBAR">
    </form>

    <?php

    define('ERROR_LONGITUD_INVALIDA', -1);
    define('ERROR_8_NUMEROS', -2);
    define('ERROR_GUION', -3);
    define('ERROR_CONTROL', -4);

    function validate_dni($dni)
    {
        $len = strlen($dni);
        if ($len === 10) {
            if (substr($dni, -2, 1) !== '-') return ERROR_GUION;
        } else if ($len !== 9) return ERROR_LONGITUD_INVALIDA;

        $numbers = substr($dni, 0, 8);
        if (!is_numeric($numbers)) return ERROR_8_NUMEROS;
        if (substr("TRWAGMYFPDXBNJZSQVHLCKE", $numbers % 23, 1) 
            !== strtoupper(substr($dni, -1))) return ERROR_CONTROL;

        return true;
    }

    if (isset($_POST['submit'])) {
        if (!empty($_POST['dni'])) {
            if (validate_dni($_POST['dni']) === TRUE) {
                echo 'DNI válido';
            } else {
                echo 'DNI introducido inválido: ERROR ' . validate_dni($_POST['dni']);
            }
        } else {
            echo 'Introduzca su DNI';
        }
    }

    ?>

</body>

</html>
<!-- 
6. 
Realiza un programa que pida una hora por teclado y que muestre luego buenos días, buenas tardes 
o buenas noches según la hora. Se utilizarán los tramos de 6 a 11, de 12 a 19 y de 20 a 5 respectivamente. 
Sólo se tienen en cuenta las horas, los minutos no se deben introducir por teclado.

7. 
Escribe un programa en que dado un número del 1 a 7 escriba el correspondiente nombre del día de la semana.
-->

<html>

<body>
    <form action="" method="post">
        <label for="time">Escribe una hora</label>
        <input type="text" name="time">
        <input type="submit" name="submit" value="ACEPTAR">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $time = (explode(":",$_POST['time']))[0];    // !!!
        if ($time >= 6 && $time < 12) {
            echo ("¡Buenos días!");
        } elseif ($time >= 12 && $time < 20) {
            echo ("¡Buenos tardes!");
        } elseif (($time >= 20 && $time < 24) || ($time >= 0 && $time < 6)) {
            echo ("¡Buenas noches!");
        } else {
            echo ("Hora incorrecta...");
        }
    }
    ?>

    <br/><br/>
    <form name="form" action="" method="post">
        <label for="day">Escribe un número del 1 al 7</label>
        <input type="number" name="day">
        <input type="submit" name="dayform" value="ACEPTAR">
    </form>

    <?php

    if (isset($_POST['dayform'])) {
        $day = $_POST['day'];
       // if ($day < 1 || $day > 7 || !is_int($day)) echo "ERROR: Ha introducido un valor no valido";
        switch ($day) {
            case 1:
                echo ("Día de la semana: LUNES");
                break;
            case 2:
                echo ("Día de la semana: MARTES");
                break;
            case 3:
                echo ("Día de la semana: MIÉRCOLES");
                break;
            case 4:
                echo ("Día de la semana: JUEVES");
                break;
            case 5:
                echo ("Día de la semana: VIERNES");
                break;
            case 6:
                echo ("Día de la semana: SÁBADO");
                break;
            case 7:
                echo ("Día de la semana: DOMINGO");
                break;
            default:
                echo "ERROR: Ha introducido un valor no valido";   // ya englobaría los casos no válidos
        }
    }
    ?>

</body>

</html>
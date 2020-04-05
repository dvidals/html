<!-- 14. Divida a cadea separando por dous puntos (o que puidera ser un formato hh:mm:ss)
Exemplo de entrada : '092402' -> 	Exemplo de saída : 09:24:02 -->

<!DOCTYPE html>
<html>

<body>
    <form action="" method="post">
        <label>Escribe seis números</label>
        <input type="number" name="cadena" />
        <input type="submit" value="ACEPTAR" />
    </form>

    <?php

    if (!empty($_POST['cadena'])) {
        $time = $_POST['cadena'];

        if (
            (strlen($time) == 6) && is_numeric($time) &&
            intval(substr($time, 0, 2)) >= 0 && intval(substr($time, 0, 2)) < 24 &&
            intval(substr($time, 2, 2)) >= 0 && intval(substr($time, 2, 2)) < 59 &&
            intval(substr($time, 4, 2)) >= 0 && intval(substr($time, 4, 2)) < 59
        )
            //echo "Hora introducida: " .  implode(":", str_split($time, 2));
            ///echo substr(chunk_split($time, 2, ":"),0,-1);
            echo $time[0].$time[1].":".$time[2].$time[3].":".$time[4].$time[5];
        else
            echo ("ERROR: el formato debe ser HHMMSS");
    }

    ?>

</body>

</html>
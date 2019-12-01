<!-- 23. 
Escribir un algoritmo que…
a) solicite un número y nos diga si es capicúa. Para ello programa la función esCapicua.
b) solicite un número N y nos visualice la suma de todos los números capicúa menores que N -->


<html>

<body>
    <form name="form" action="" method="post">
        <label>Escribe un número</label>
        <input type="text" name="numero" placeholder="Número">
        <input type="submit" name="submit" value="COMPROBAR">
    </form>
    <br /><br /><br />

    <?php

    function esCapicua($num): bool
    {
        $num = intval($num);
        return $num == strrev($num);
    }

    if (!isset($_POST['submit'])) exit();
    $numero = $_POST['numero'];
    if (empty($numero) || !is_numeric($numero)) exit('Debe introducir algún número.');

    if (esCapicua($numero)) echo 'El número introducido es capicúa<br/>';
    else echo 'El número introducido no es capicúa<br/>';

    $suma = 0;
    for ($i = 1; $i < $numero; $i++)
        if (esCapicua($i)) {
            //echo $i . '&nbsp;';
            $suma += $i;
        }

    echo "<br/>La suma de los capicuas anteriores a $numero es $suma";

    ?>

</body>

</html>
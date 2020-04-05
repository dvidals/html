<!-- 11. 
Escribe un programa que pida 10 números por teclado y que luego muestre los números introducidos 
junto con las palabras “máximo” y “mínimo” al lado del máximo y del mínimo respectivamente.
Haz dos versiones: donde los 10 números se pidan como un String separado por comas y también con inputs separados.

Ambas versiones deben devolver un error si se han introducido menos de 4 números. -->

<html>

<body>
    <form name="form" action="" method="post">
        <label for="day">Introduzca 10 números:</label>
        <input type="number" name="number-1" style="width:40px;">
        <input type="number" name="number-2" style="width:40px;">
        <input type="number" name="number-3" style="width:40px;">
        <input type="number" name="number-4" style="width:40px;">
        <input type="number" name="number-5" style="width:40px;">
        <input type="number" name="number-6" style="width:40px;">
        <input type="number" name="number-7" style="width:40px;">
        <input type="number" name="number-8" style="width:40px;">
        <input type="number" name="number-9" style="width:40px;">
        <input type="number" name="number-10" style="width:40px;">
        <br /><br />

        <label for="numbers">O escriba los diez números separados por comas</label>
        <input type="text" name="numbers" />

        <br /><br />
        <input type="submit" value="CALCULAR">
    </form>
    <br /><br />

    <?php


    class LessThan4Exception extends Exception
    { }
    class NotNumberException extends Exception
    { }

    function printArrayWithMinMax($array)
    {
        if (!isset($array) || count($array) < 4) throw new LessThan4Exception("ERROR: No hay al menos 4 valores en las cajas");
        $min = min($array); // Devuelve el valor mínimo del array
        $max = max($array);
        foreach ($array as $val) {
            if (!is_numeric($val)) throw new NotNumberException("ERROR: No puede introducir valores no numéricos");
            echo $val;
            if ($val == $min) echo ' <-- Mínimo';
            if ($val == $max) echo ' <-- Máximo';
            echo '<br/>';
        }
    }

   /* function printArrayWithMinMaxManual($array)
    {
        if (!isset($array) || count($array) < 4) throw new LessThan4Exception();
        
        // $min = min($array); // Devuelve el valor mínimo del array
        // $max = max($array);
        $min = PHP_INT_MAX;
        $max = PHP_INT_MIN;
        foreach ($array as $val) {
            if ($val > $max) $max = $val;
            if ($val < $min) $min = $val;
        }

        foreach ($array as $val) {
            if (!is_numeric($val)) throw new NotNumberException();
            echo $val;
            if ($val == $min) echo ' <-- Mínimo';
            if ($val == $max) echo ' <-- Máximo';
            echo '<br/>';
        }
    }*/






    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        /* Valores en cajas: */

        $array = NULL;
        for ($i = 0; $i < 10; $i++) {
            $num = $_POST['number-' . ($i + 1)];
            if (!empty($num)) {
                $array[] = $num;
            }
        }

        try {
            echo 'Valores en cajas:<br/>';
            printArrayWithMinMax($array);
        } catch (LessThan4Exception $e) {
           echo $e->getMessage();
        } catch (NotNumberException $e) {
            echo $e->getMessage();
        }

        echo '<br/><br/><br/>';

        /* Valores separados por comas */

        $porComas = $_POST['numbers'];
        try {
            echo 'Valores separados por comas:<br/>';
            printArrayWithMinMax(explode(",", str_replace(" ", "", $porComas)));
        } catch (LessThan4Exception $e) {
            echo $e->getMessage();
        } catch (NotNumberException $e) {
            echo $e->getMessage();
        }
    }

    ?>
    </div>
</body>

</html>
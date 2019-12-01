<!-- 5. 
a) Genera un array t[8][8]. Haz que cada uno de sus elementos se 
    rellene aleatoriamente con valores que pueden ser 0,1 y 2. 
b) Indica qué casillas están a 0 y tienen algún 1 a su alrededor 
    (ambas condiciones simultáneamente). -->

<html>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        Introduce a base do cubo:
        <input type="number" name="valor" placeholder="8" min="2" max="20">
        <input type="submit" value="Pintar">
    </form>

    <?php

    define('SIZE', 8); // Definimos el tamaño de la matriz
    define('RAND_MIN', 0);
    define('RAND_MAX', 2);


    /**
     * Función que escribe un array bidimensional
     */
    function printArrayBi($array)
    {
        foreach ($array as $fila) {
            foreach ($fila as $elem) echo $elem . "&nbsp;&nbsp;";
            echo "<br>";
        }
    }

    /**
     * Función que crea un array de $num_rows filas x $num_colums columnas
     * con enteros aleatorios entre $min y $max como valores
     */
    function crearArray($num_rows = SIZE, $num_colums = SIZE, $min = RAND_MIN, $max = RAND_MAX)
    {
        for ($i = 0; $i < $num_rows; $i++) {
            for ($j = 0; $j < $num_colums; $j++) {
                $array[$i][$j] = mt_rand($min, $max);
            }
        }
        return $array;
    }

    /**
     * Función recursiva que crea un array de $dimen dimensiones (todas del mismo tamaño)
     * con enteros aleatorios entre $min y $max como valores
     */
    function crearArrayMulti($dimen, $size = SIZE, $min = RAND_MIN, $max = RAND_MAX)
    {
        for ($i = 0; $i < $size; $i++) {
            if ($dimen === 1) $array[] = mt_rand($min, $max);
            else  $array[] = crearArrayMulti($dimen - 1, $size, $min, $max);
        }
        return $array;
    }

    function printArrayBiCondition($array)
    {
        $num_rows = count($array);
        $num_colums = count($array[0]);

        for ($i = 0; $i < $num_rows; $i++) {
            for ($j = 0; $j < $num_colums; $j++) {
                if ($array[$i][$j] === 0 && (  // Condicion base: el valor es 0
                    ($j > 0 && $array[$i][$j - 1] === 1)  || // Hay un 1 en la columna anterior (salvo en la columna 0)
                    ($j < $num_colums - 1 && $array[$i][$j + 1] === 1) || // En la siguiente columna (salvo para la última)
                    ($i > 0 && $array[$i - 1][$j] == 1) || // Hay un 1 en la fila superior, si existe fila superior ($i>0)
                    ($i < $num_rows - 1 && $array[$i + 1][$j] === 1))) {
                    echo ('<b>' . $array[$i][$j] . '</b>');  // Si se cumplen las condiciones se pone el valor en negrita
                } else {
                    echo $array[$i][$j];
                }
                echo "&nbsp;&nbsp;";
            }
            echo ("<br/>");
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && is_numeric($_POST['valor'])) {
        
        //$array = crearArray(SIZE, SIZE);
        $array = crearArrayMulti(2, $_POST['valor']);

        printArrayBi($array);
        echo '<br /><br />';

        printArrayBiCondition($array);
    }

    ?>

</body>

</html>
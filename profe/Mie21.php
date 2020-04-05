<!DOCTYPE html>
<html>

<head>
    <title>Ejercicio propuesto 1</title>
</head>

<body>
    <h1>Script para resolver ecuaciones de segundo grado</h1>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <input name="a" type="number" style="width:40px;">x<sup>2</sup> +
        <input name="b" type="number" style="width:40px;">x +
        <input name="c" type="number" style="width:40px;"> = 0
        <input type="submit" name="submit">
    </form><br />

    <?php


    //if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit'])) {
        if (!is_numeric($_POST["a"]) || !is_numeric($_POST["b"]) || !is_numeric($_POST["b"]))
            exit("ERROR: solo se pueden introducir números.");

        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];

        if (empty($a)) {
            echo "ATENCIÓN: la ecuación no es cuadrática. <br/><br/>";
            if (empty($b)) exit("ERROR: esa ecuación no es válida.");
            exit("x = " . -$c / $b);
        }

        if ( ($disc = $b^2 - 4*$a*$c) < 0 ) {
            exit("ERROR: La ecuación no tiene soluciones reales.");
        }

        $x1 = round( (-$b + sqrt($disc)) / (2*$a), 2);
        $x2 = round( (-$b - sqrt($disc)) / (2*$a), 2);

        echo "x1 = $x1 <br/> x2 = $x2";
    }
    ?>

</body>

</html>
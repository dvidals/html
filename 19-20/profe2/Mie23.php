<!DOCTYPE html>
<html>

<head>
    <title>Ejercicio propuesto</title>
</head>

<body>
    <h1>Script para resolver ecuaciones de segundo grado</h1>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <input name="a" type="number" step="0.01" style="width:40px;" required>x<sup>2</sup> +
        <input name="b" type="number" step="0.01" style="width:40px;">x +
        <!-- <input name="c" type="number" step="0.01" style="width:40px;"> = 0 -->
        <input name="c" type="text" size="1"> = 0
        <input type="submit">
    </form><br />


    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        require "Mie22b.php";

        try {
            $sol = ec2grad($_POST["a"], $_POST["b"],  $_POST["c"]);
        } catch (TypeError $e) {
            exit("TypeError: solo se pueden introducir números."); //En caso de declarar tipos
        // } catch (NoCuadraticaException $e) {
        //     exit($e2->getMessage());
        } catch (Exception $e) {
            exit($e->getMessage());
        }

        echo "x1 = $sol[0] <br/> x2 = $sol[1]";
    }


    ?>


</body>

</html>
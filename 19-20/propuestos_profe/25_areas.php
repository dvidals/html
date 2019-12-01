<!-- 25. 
Haz un formulario con radio button para elegir círculo, triángulo y cuadrado 
y calcular su área en cada caso.  -->

<html>

<body>
    <form action="" method="post">
        <label>Escribe un valor numérico</label>
        <input type="number" name="number" /> <br />
        <input type="radio" name="type" value="circle" id="circle" checked>
        <label for="circle">Interpretar el valor como un radio</label> <br />
        <input type="radio" name="type" value="triangle" id="triangle">
        <label for="triangle">Interpretar el valor como un lado de un triángulo equilátero</label> <br />
        <input type="radio" name="type" value="square" id="square">
        <label for="square">Interpretar el valor como un lado de un cuadrado</label> <br />

        <input type="submit" value="CALCULAR" />
    </form>


    <?php

    if (isset($_POST['number'])) {
        $value = $_POST['number'];
        if (!empty($value) && is_numeric($value)) {

            if (isset($_POST['type'])) {
                $type = $_POST['type'];
                $result = 0;
                switch ($type) {

                    case "circle":
                        $result = M_PI * ($value * $value);
                        echo ("El área del círculo de radio $value es $result");
                        break;

                    case "triangle":
                        $result = (sqrt(3) / 4) * ($value * $value);
                        echo ("El área del triángulo equilátero de lado $value es " . number_format($result, 2));
                        break;

                    case "square":
                        $result = $value * $value;
                        echo ("El área del cuadrado de lado $value es $result");
                        break;
                }
            }
        } else {
            echo ("Escribe un valor numérico");
        }
    }
    ?>
</body>

</html>

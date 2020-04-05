<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<?php
//Completa las líneas de los comentarios para que se recorra todo el array y se muestren los datos por pantalla
$cajonDeSastre = [30, -7, "Me gusta el queso", 56, "¡eh!", 237];
foreach ($cajonDeSastre as $c => $v){
    echo $cajonDeSastre[$c]."<br>";
}
?>
</body>
</html>


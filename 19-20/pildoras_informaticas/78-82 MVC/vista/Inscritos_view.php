<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<style>
    td{
        border:1px dotted #FF0000;
    }

</style>
</head>

<body>

<table>
<tr><td>DORSAL</td><td>NOMBRE</td><td>APELLIDOS</td><td>FEDERADO</td><td>LICENCIA</td>
<td>CATEGORÍA</td><td>SEXO</td><td>FECHA DE NACIMIENTO</td><td>CLUB</td><td>EQUIPO</td></tr>
<?php

    //En este archivo tengo que mostrar el array de inscritos en pantalla después de recorrerlo

    foreach($matrizInscritos as $registro){
        echo "<tr><td>".$registro["Dorsal"]."</td><td>".$registro["Nombre"]."</td><td>".$registro["Apellidos"].
        "</td><td>".$registro["Federado"]."</td><td>".$registro["Licencia"]."</td><td>".$registro["Categoria_Prueba"].
        "</td><td>".$registro["Sexo"]."</td><td>".$registro["FechaNac"]."</td><td>".$registro["Club"].
        "</td><td>".$registro["Equipo"]."</td><td></tr>";
    }

?>
</table>

</body>
</html>
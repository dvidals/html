<?php
    require "DevuelveInscritos.php";
    $nombre=$_GET['buscar'];
	$ins=new DevuelveInscritos();

	$array_ins=$ins->get_inscritos($nombre);


?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<body>
	<?php

	foreach($array_ins as $fila){
	echo "<table><tr><td>";
    echo $fila['Dorsal']."</td><td>";
    echo $fila['Nombre']."</td><td>";
    echo $fila['Apellidos']."</td><td>";
    echo $fila['Federado']."</td><td>";
    echo $fila['Licencia']."</td><td>";
    echo $fila['Categoria_Prueba']."</td><td>";
    echo $fila['Sexo']."</td><td>";
    echo $fila['FechaNac']."</td><td>";
    echo $fila['Club']."</td><td>";
    echo $fila['Equipo']."</td><td></tr></table>";
    echo "<br>";
		
	}

	?>


</body>
</html>

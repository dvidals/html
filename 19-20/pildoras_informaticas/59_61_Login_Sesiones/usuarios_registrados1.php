<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>59 Usuarios_registrados1</title>
<style>
table {
	width: 50%;
	height: 300px;
    text-align: center;
}

</style>


</head>
<body>
 <?php

   session_start();
    if(!isset($_SESSION["usuario"])){
        header("Location:login.php");
    }
 ?>   
<h1>Bienvenidos Usuarios</h1>
<?php
    echo "Hola: ".$_SESSION["usuario"]."<br><br>";
?>
<p><a href="cierre.php">Cerrar sesión</a></p>


<p> Esto es información solo para usuarios registrados</p>

<TABLE BORDER >
	<TR>
		<TD colspan="3">Zona usuarios Registrados</TD> 
	</TR>
	<TR>
        <TD><a href="usuarios_registrados2.php">Página 1</a></TD> 
        <TD><a href="usuarios_registrados3.php">Página 2</a></TD> 
        <TD><a href="usuarios_registrados4.php">Página 3</a></TD>
	</TR>
</TABLE>


</body>
</html>

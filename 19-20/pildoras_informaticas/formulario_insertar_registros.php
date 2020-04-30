<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<style>

h1{
	text-align:center;
	color:#00F;
	border-bottom:dotted #0000FF;
	width:50%;
	margin:auto;
	
	
}

table{
	border:1px solid #F00;
	padding:20px 50px;
	margin-top:50px;
}

body{
	background-color:#FFC;
}


</style>
</head>

<body>
<h1>Inscripción de Corredores</h1>
<form name="form1" method="get" action="resultados_insertar_registros.php">
  <table border="0" align="center">
    <tr>
      <td>Dorsal</td>
      <td><label for="dorsal"></label>
      <input type="text" name="dorsal" id="dorsal"></td>
    </tr>
    <tr>
      <td>Nombre</td>
      <td><label for="nombre"></label>
      <input type="text" name="nombre" id="nombre"></td>
    </tr>
    <tr>
      <td>Apellidos</td>
      <td><label for="apellidos"></label>
      <input type="text" name="apellidos" id="apellidos"></td>
    </tr>
    <tr>
      <td>Federado</td>
      <td><label for="federado"></label>
      <input type="text" name="federado" id="federado"></td>
    </tr>
    <tr>
      <td>Licencia</td>
      <td><label for="licencia"></label>
      <input type="text" name="licencia" id="licencia"></td>
    </tr>
    <tr>
      <td>Categoria_Prueba</td>
      <td><label for="categoria"></label>
      <input type="text" name="categoria" id="categoria"></td>
    </tr>
    <tr>
      <td>Sexo</td>
      <td><label for="sexo"></label>
      <input type="text" name="sexo" id="sexo"></td>
    </tr>
    <tr>
      <td>FechaNac</td>
      <td><label for="fechanac"></label>
      <input type="text" name="fechanac" id="fechanac"></td>
    </tr>
    <tr>
      <td>Club</td>
      <td><label for="club"></label>
      <input type="text" name="club" id="club"></td>
    </tr>
    <tr>
      <td>Equipo</td>
      <td><label for="equipo"></label>
      <input type="text" name="equipo" id="equipo"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center"><input type="submit" name="enviar" id="enviar" value="Enviar"></td>
      <!--<td align="center"><input type="reset" name="Borrar" id="Borrar" value="Borrar"></td> -->
    </tr>
  </table>
</form>
</body>
</html>
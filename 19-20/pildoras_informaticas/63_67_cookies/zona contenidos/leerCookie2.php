<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>63 Cookies</title>

</head>
<body>
<?php
if(isset($_COOKIE["prueba"])){


    echo $_COOKIE["prueba"];//Nombre de la cookie como parámetro.
}else{
    echo"la cookie no se ha creado";
}
    

?>

</body>
</html>

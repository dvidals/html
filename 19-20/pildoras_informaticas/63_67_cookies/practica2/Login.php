<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>66 Login</title>
<style>
        h1,h2{text-align:center;
        }
        table{
            width:25%;
            background-color:#FFC;
            border:2px dotted #F00;
            margin:auto;
        }
        .izq{text-align:right;
        }
        .der{text-align:left}
        td{
            text-align:center;
            padding:10px;
        }
</style>
</head>
<body>
<?php
$autenticado=false;
if(isset($_POST["enviar"])){

try{

    $base=new PDO("mysql:host=localhost;dbname=pruebas","root","");
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql="select * from USUARIOS_PASS where USUARIO=:login and PASSWORD=:password";
    $resultado=$base->prepare($sql);
    $login=htmlentities(addslashes($_POST['login']));
    $password=htmlentities(addslashes($_POST['password']));
    $resultado->bindValue(":login",$login);
    $resultado->bindValue(":password",$password);
    $resultado->execute();
    $numero_registro=$resultado->rowCount();
    if($numero_registro!=0){
        $autenticado=true;//cambia a true porque se ha logueado exitosamente.
        if(isset($_POST["recordar"])){
            setcookie("nombre_usuario",$_POST["login"],time()+86400);
        }
        

    }else if($numero_registro==0 and !isset($_COOKIE["nombre_usuario"])){ //antes en esta línea sólo ponía else, le añadí todo
        //lo demás  porque cuando se activaba la casilla recordar seguía mostrando el error del echo de la línea de abajo cuando me logueaba sin contraseña.
        // mostraba la página del usuario, pero seguía mostrando a mayores "Error. Usuario o contraseña incorrectos";

        //Dejarlo dentro de un bucle infinito. Volver a la página de login si el usuario no existe
        //header("location:login.php");

        echo"Error. Usuario o contraseña incorrectos";
    
    }
}catch(Exception $e){

    die("Error:". $e->getMessage());
}
}

?>
<?php
/*if(!isset($_SESSION["usuario"])){
    include("formulario.html");

}else{
    echo "Usuario: ".$_SESSION["usuario"];
}*/
    if($autenticado==false and !isset($_COOKIE["nombre_usuario"])) include("formulario.html");

    if(isset($_COOKIE["nombre_usuario"])) echo"¡Hola ".$_COOKIE["nombre_usuario"]." !";

    else if($autenticado==true) echo "¡Hola ".$_POST["login"]." !";



?>
<h2>CONTENIDO DE LA WEB</h2>
<table width="800" border="0">
<tr>
<td><img src="imagenes/1.jpg" width="300" height="166"></td>
<td><img src="imagenes/2.jpg" width="300" height="166"></td>
</tr>
<tr>
<td><img src="imagenes/3.jpg" width="300" height="166"></td>
<td><img src="imagenes/4.jpg" width="300" height="166"></td>
</tr>
</table>
<?php

    if($autenticado==true || isset($_COOKIE["nombre_usuario"])) include("zona_registrados.html");

?>
</body>
</html>

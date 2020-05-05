<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>59 comprueba_login</title>

</head>
<body>
<?php

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
        //echo "<h2>Adelante!!</h2>";
        session_start();
        $_SESSION["usuario"]=$_POST["login"];
        header("Location:usuarios_registrados1.php");

    }else{
        //Dejarlo dentro de un bucle infinito. Volver a la página de login si el usuario no existe
        header("location:login.php");
    
    }
}catch(Exception $e){

    die("Error:". $e->getMessage());
}

?>


</body>
</html>

<?php
/* formulario de login habitual
  si va bien abre sesión, guarda el nombre de usuario y redirige a 11_sesiones1_principal.php
  si va mal, mensaje de error */

function comprobar_usuario($nombre, $clave) {
    if ($nombre === "usuario" and $clave === "1234") {
        $usu['nombre'] = "usuario";
        $usu['rol'] = 0;
        return $usu;
    } elseif ($nombre === "admin" and $clave === "1234") {
        $usu['nombre'] = "admin";
        $usu['rol'] = 1;
        return $usu;
    } else
        return false;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Formulario de login</title>		
        <meta charset = "UTF-8">
    </head> 
    <body>	

        <?php
        if (isset($_GET["redirigido"])) { // Si viene redirigido se enfatiza la necesidad de logearse
            echo "<p>Haga login para continuar</p>";
        }
        elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (!comprobar_usuario($_POST['usuario'], $_POST['clave'])) {
                echo "<p> revise usuario y contraseña</p>";
            } else {
                session_start();
                $_SESSION['usuario'] = $_POST['usuario'];
                header("Location: 11_sesiones1_principal.php");
            }
        }
        
        ?>
        
        <form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method = "POST">
            Usuario
            <input value="<?php if (isset($_POST['usuario'])) echo $_POST['usuario']; ?>"
                   id="usuario" name="usuario" type="text"><br>				
            Clave			
            <input id="clave" name="clave" type="password"><br>					
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>
<!--Ejemplo: Validar datos en la misma página que el formulario-->
<html>
    <head>
        <title>Formulario Módulos</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>

<?php
$nombre;
$apellidos;
if(!empty($_POST['modulos'])&&!empty($_POST['nombre'])&&!empty($_POST['apellidos'])){
    $nombre=$_POST['nombre'];
    $apellidos=$_POST['apellidos'];
    $modulos=$_POST['modulos'];
    $nModulo=1;
    print "Tu nombre: ".$nombre."<br/>";
    print "Tus apellidos: ".$apellidos."<br/>";
    foreach ($modulos as $modulo){
        print "Modulo ".$nModulo.": ".$modulo."<br/>";
        $nModulo++;
    }
}

else{
    
?>

<form name="input" action="<?php echo $_SERVER['PHP_SELF'];?>"method="post">
    Nombre del alumno:
    <input type="text" name="nombre" value="<?php echo $_POST['nombre'];?>"/>
    <?php
        if (isset($_POST['enviar'])&&empty($_POST['nombre']))
            echo "<span style='color:red'>&lt; -- Debe introducir un nombre</span>"
      ?><br/>
      Apellidos del alumno:
      <input type="text" name="apellidos" value="<?php echo $_POST['apellidos'];?>"/>
    <?php
        if (isset($_POST['enviar'])&&empty($_POST['apellidos']))
            echo "<span style='color:red'>&lt; -- Debe introducir los apellidos</span>"
      ?><br/>
      Módulos que cursa:
    <?php
        if (isset($_POST['enviar'])&&empty($_POST['modulos']))
            echo "<span style='color:red'>&lt; -- Debe escoger al menos un módulo</span>"
      ?><br/>
      <input type="checkbox" name=modulos[]" value="DWES"
             <?php
                 if(isset($_POST['modulos'])&& in_array("DWES",$_POST['modulos']))
                         echo 'checked="checked"';
              ?>
        />
            Desarrollo web en entorno servidor 
            <br/>
       <input type="checkbox" name=modulos[]" value="DWEC"
             <?php
                 if(isset($_POST['modulos'])&& in_array("DWEC",$_POST['modulos']))
                         echo 'checked="checked"';
              ?>
        />
            Desarrollo web en entorno cliente <br/> 
        <br/> 
        <input type="submit" value="Enviar" name="enviar"/> 
</form>
<?php
}
?>
</body>
</html>
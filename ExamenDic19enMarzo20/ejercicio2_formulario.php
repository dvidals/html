<html>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        Introduce el número de cuenta:
        <input type="text" name="cadena" placeholder="Introduzca el número de cuenta" size="40">
        <input type="submit" value="Enviar">
    </form>
<?php
$cadena=str_replace(" ","",$_POST['cadena']);
if(strlen($cadena)<>20) echo "Los números de cuenta tienen un total de 20 dígitos";
elseif(!is_numeric($cadena)) echo "Sólo se admiten números";
else {
 
    require "ejercicio2_funciones.php";
    
    var_dump(codigo_cuenta_correcto($cadena));
}
?>

</body>
</html>

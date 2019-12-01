<!-- 8. Escribe un programa que ordene números enteros introducidos por teclado. -->

<html>
<form name="form" action="" method="post">
    <label>Introduce los números a ordenar separados por comas</label><br/>
    <input type="text" name="cadena">
    <input type="submit" name='submit' value="ORDENAR">
</form>
<?php
if (isset($_POST['submit'])) {
    $array = explode(',', str_replace(" ", "", $_POST["cadena"]));
    foreach ($array as $val){
        if (!is_numeric($val)) exit('ERROR: Todos los valores deben ser números');
    }
    sort($array);
    echo implode(", ", $array);
}
?>

</html>
<!-- 17. Extraia o nome de usuario dunha conta de correo electrónico
Exemplo de entrada : 'jose@exemplo.gal' -> Exemplo de saída : 'jose' -->
<!-- 21. Mostra o dominio dunha conta de correo
Exemplo de entrada : ''jose@exemplo.gal' -> Exemplo de saída : 'exemplo.gal' -->

<html>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label>Introduce un email:
        <!-- <input type="email" name="texto" placeholder="Introduzca email"> -->
        <input type="text" name="email" placeholder="Introduzca email">
    </label>
    <input type="submit" value="Consultar">
</form>
<br />


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    if ( ($email = checkEmail($email)) !== FALSE) {
        echo "Usuario: $email[0] <br>";
        echo "Servidor: $email[1] <br>";
        echo "Nombre de dominio: $email[2]<br>";
    } else {
        exit('Correo incorrecto');
    }
}

function checkEmail($cadena)
{
    $div1 = explode("@", trim($cadena));
    //$div2 = explode(".", $div1[1],2);

    $div2 = explode(".", $div1[1]);
    $last = array_pop($div2);
    $div2 = array(implode(".", $div2), $last); 

    $ret = array($div1[0], $div2[0], $div2[1]);

    foreach ($ret as $parte) {
        if (strlen($parte) < 1) return FALSE;
    }

    return $ret;
}

?>


</body>

</html>
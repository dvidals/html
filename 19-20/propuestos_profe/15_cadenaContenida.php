<!-- 15. 
Comprobe se unha cadea está contida dentro doutra cadea
Exemplo de entrada : 'A galiña azul salta sobre o seu niño' -> Comprobas se conten a palabra ‘salta’ -->

<html>

<body>
    <form name="form" action="" method="post">
        <label>Escribe un texto</label>
        <input type="text" name="continente">
        <br />
        <label>Escribe otro texto</label>
        <input type="text" name="contenido">
        <input type="submit" name="submit" value="COMPROBAR">
    </form> <br/>

    <?php
    if (isset($_POST['submit']) && 
        !empty($continente = $_POST['continente']) && 
        !empty($contenido = $_POST['contenido']) ) {
            
        if ( ($pos=strpos($continente, $contenido)) !== FALSE) {  // Por si devuelve 0 (la subcadena está al principio)
            echo ("El primer texto contiene al segundo en la posición $pos");
        } else {
            echo ("El primer texto no contiene al segundo");
        }
    } else {
        echo ("Rellena ambas cajas");
    }
    ?>
</body>

</html>
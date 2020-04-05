<!-- 20. 
Atope o primeiro carácter que é diferente entre dúas cadeas
Cadea1 : 'casa'	Cadea2 : 'cata'	
-> Exemplo de saída : Primeira diferenza na posición 3: "s" vs "t" -->

<html>

<body>
    <form action='' method='post'>
        <label for='cadena'>Introduce 2 cadenas para comparar: </label>
        <br>
        <input type='text' name='cadena1'>
        <input type='text' name='cadena2'>
        <input type='submit' value='Enviar' name='submit'>
    </form>

    <?php

    if (isset($_POST['submit'])) {
        $cad1 = $_POST['cadena1'];
        $cad2 = $_POST['cadena2'];

        $len1 = strlen($cad1);
        $len2 = strlen($cad2);

        if ($len1 == 0 || $len2 == 0) exit("Hay que introducir dos cadenas");

        for ($i = 0; $i <$len1 && $i < $len2; $i++) {   // revisar longitudes distintas
            if ($cad1[$i] !== $cad2[$i]) break;
        }

        echo 'Primera diferencia en la posición ' . ($i+1);
    }

    ?>

    <br /><br /><br />
</body>

</html>
<!-- 22. 
Elimina os 0’s a esquerda
Exemplo de entrada : '000327023.24'
Exemplo de saída : '327023.24' -->


<html>

<body>
    <form method="post" action="<?php echo ($_SERVER["PHP_SELF"]); ?>">
        <label for="numero">Número:</label>
        <input type="text" name="numero"/>
        <input type="submit">
    </form>

    <?php  if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (is_numeric($_POST["numero"])) {
            echo floatval($_POST['numero']); // Solución básica
            echo '<br/>';
            echo rtrim(sprintf('%f',floatval($_POST['numero'])),'0');
            // evita notación científica en números muy bajos y elimina ceros al final 
        }
        else echo "Debe introducir un número";
    }
    ?>

</body>

</html>
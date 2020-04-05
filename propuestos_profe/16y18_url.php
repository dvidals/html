<!--
16. Extraia o nome do ficheiro dunha ruta.
Exemplo de entrada : 'www.exemplo.com/public_html/index.php' -> Exemplo de saída : 'index.php'
(Pfunción basename)

18. Obteña os tres últimos caracteres dunha cadea:
Exemplo de entrada : 'jose@exemplo.gal' -> Exemplo de saída : 'gal'
-->

<html>

<body>
    <h2>16</h2>

    <?php
    $url = 'www.exemplo.com/public_html/index.php';

    echo "Usando la función basename<br /><br />";
    echo "url -> " . $url . "<br />";
    echo "fichero -> " . basename($url) . "<br /><br />";

    echo "Sin usar basename<br /><br />";
    $url_split = explode("/", $url);
    echo "url -> " . $url . "<br />";
    echo "fichero -> " . end($url_split);
    ?>

    <h2>18</h2>

    <?php
    $email = 'jose@exemplo.gov.uk';
    echo substr($email, -3, 3);
    ?>

</body>

</html>
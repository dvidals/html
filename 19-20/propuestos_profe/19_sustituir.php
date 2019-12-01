<!-- 19. 
Reemplace a primeira ocurrencia da cadea ‘este’ por ‘aquel”
Exemplo de entrada : 'este é un lapis estupendo' -> Exemplo de saída : ‘aquel é un lapis estupendo’ -->

<html>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label>Texto: <input name="texto"></label><br /><br />
        <label>Buscar: <input name="buscar"></label><br /><br />
        <label>Sustituir por: <input name="sustituir"></label><br /><br />
        <label>¿Sustituir todos?
            <input type="radio" name="limit" value="null">Todos</input>
            <input type="radio" name="limit" value="2" checked>Solo el primero</input>
        </label><br /><br />

        <input type="submit" value="Consultar">
    </form>
    <?php

    // Para testear
    $ejemplos = array(
        'La versión 6 de PHP se abandonó debido a problemas de tratamiento de las cadenas Unicode',
        'sus mejoras fueron incorporadas en las últimas versiones 5.X',
        'PHP 7 añadió la directiva strict_types',
        'tipos que no se corresponden se intantan castear (con un valor 0)',
        'o bien se genere directamente un  error (con un valor 1)',
        'A partir de PHP 7 ya se pueden especificar los tipos bool, float,int,string e iterable.'
    );


    if ($_SERVER["REQUEST_METHOD"] == "POST" &&  !empty($_POST['sustituir']) &&  !empty($_POST['buscar'])) {
        if (!empty($_POST['texto'])) {

            echo remplazar($_POST['buscar'], $_POST['sustituir'], $_POST['texto'], $_POST['limit'])
                ?: 'El fragmento buscado no está en el texto';
        } else echo 'No se ha introducido texto';

        echo '<br/><br/><br/> En los ejemplos:<br/><br/>';

        foreach ($ejemplos as $texto) {
            echo $texto . '<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
            echo (remplazar($_POST['buscar'], $_POST['sustituir'], $texto, $_POST['limit'])
                ?: 'El fragmento buscado no está en el texto');
            echo '<br/>';
        }
    } else echo 'Debe introducirse al menos un texto a buscar y un texto a sustituir';


    function remplazar($buscar, $sustituir, $texto, $limit = null)
    {
        if (strpos($texto, $buscar) === FALSE) return FALSE;
        return implode('<b>'.$sustituir.'</b>', explode($buscar, $texto, $limit));
        
        // str_replace($buscar,$sustituir,$texto); reemplazaría todas
    }

    ?>

</body>

</html>
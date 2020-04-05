<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 13 transformar cadenas</title>
        <meta charset="UTF-8"/>
    </head>
    <body>
            <form action="" method="GET">
                Introduce un texto cualquiera<br/><br/>
                <input type="text" name="texto"/><br/><br/>
                <select name="conversion">
                    <option value="a">Transforma el texto en máyusculas</option>
                    <option value="b">Transforma el texto en minúsculas</option>
                    <option value="c">Transforma la primera letra del texto en máyuscula</option>
                    <option value="d">Transforma la primera letra de cada palabra en máyuscula</option>
                </select><br/><br/>
                <input type="submit" name='submit' value="Enviar"/>
            </form>
            <br/>
            <?php

                if (!empty($texto = $_GET['texto'])) {
                    $conversion = $_GET['conversion'];

                    switch ($conversion) {
                        case 'a':
                            echo strtoupper($texto);
                            break;
                        case 'b':
                            echo strtolower($texto);
                            break;
                        case 'c':
                            echo ucfirst($texto);
                            break;
                        case 'd':
                            echo ucwords($texto);
                            break;
                    }
                }
            ?>
    </body>
</html>
<!DOCTYPE html>
<!?Tarefa UD04_A1_1 -->
<html>
    <head>
        <meta charset="ISO-8859-1">
        <title>Uso de propiedades e métodos estáticos</title>
        <?php require_once("Data.php"); ?>
    </head>
    <body>
        <?php
          echo "Usamos o calendario: ". Data::getCalendario()."<br />";
          echo Data::getDataHora();
        ?>
    </body>
</html>



<?php
//Escribe un programa en que dado un número del 1 a 7 escriba el correspondiente nombre del día de la semana.

/*
$hora;
if(!empty($_POST['hora'])){
if ($_POST['hora']>=6 and $_POST['hora']<=11) echo"¡Buenos días!";
elseif($_POST['hora']>=12 and $_POST['hora']<=19) echo "¡Buenas tardes!";
else{
echo "¡Buenas noches!";
echo "$hora";
}
}

else{

?>

<form name="input" action="<?php echo $_SERVER['PHP_SELF'];?>"method="post">
Hora del día:
<input type="text" name="hora" value="<?php echo $_POST['hora'];?>"/>
<?php
if (isset($_POST['enviar'])&&empty($_POST['hora']))
echo "<span style='color:red'>&lt; -- Debe introducir un hora</span>"
?><br/>

<?php
}
?>

 */
$n = $_POST['num'];

function DiaSem($n)
{
    switch ($n) {
        case 1:
            echo "Lunes";
            break;
        case 2:
            echo "Martes";
            break;
        case 3:
            echo "Miércoles";
            break;
        case 4:
            echo "Jueves";
            break;
        case 5:
            echo "Viernes";
            break;
        case 6:
            echo "Sábado";
            break;
        case 7:
            echo "Domingo";
            break;
        default:
            echo "El número escrito no está entre 1 y 7";
    }
}
echo DiaSem($n);


<?php
/*
 Realiza un programa que pida una hora por teclado y que muestre luego buenos días,
 *  buenas tardes o buenas noches según la hora. 
 * Se utilizarán los tramos de 6 a 11, de 12 a 19 y de 20 a 5. respectivamente. 
 * Sólo se tienen en cuenta las horas, los minutos no se deben introducir por teclado.

 */
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





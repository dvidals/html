<!--
 Escribir una página Web (color.html) en la que a través de un formulario 
 con tres campos de texto, se introduzca un color en valores 
 RGB (0, 255) y llame a otra página muestra.php, que procesa el formulario
 y nos muestre el color deseado como color de fondo de la página.
 -->
 
<HTML>
 <HEAD>
   <TITLE>Ejercicio Básicos</TITLE>
 </HEAD>
 <style>
div {
    background-color: rgb(0, 191, 255);
    color: rgb(255, 255, 255);
    padding: 20px;
}
</style>
 <BODY>
   <CENTER>
     <H2>Ejercicio 14</H2>
 
     <?php

$rojo = $_POST['rojo'];
$verde = $_POST['verde'];
$azul=$_POST['azul'];
echo"<style></br>";
              echo"div{
                  background-color:rgb($rojo, $verde, $azul)}</br>";
              echo "</style>";

 if($rojo<0||$rojo>255)
     echo"Los valores tienen que estar estar comprendidos entre 0 y 255<br>
       <br><a href=\"14_color.html\" title=\"Volver\">Volver</a>";
 
 elseif($verde<0||$verde>255) echo"Los valores tienen que estar estar comprendidos entre 0 y 255<br>
     <br><a href=\"14_color.html\" title=\"Volver\">Volver</a>";
       elseif($azul<0||$azul>255) echo"Los valores tienen que estar estar comprendidos entre 0 y 255<br>
           <br><a href=\"14_color.html\" title=\"Volver\">Volver</a>";
        
          else{
           echo  "<table   bgcolor=$rojo,$verde,$azul width=300px height=150px border=1 align=center>";
    
               echo"<tr>";
                echo" <td align=center>";
                
                    echo "<font color='white'>Rojo:&nbsp;$rojo  </font><br>";
                    echo "<font color='white'>Verde:&nbsp;$verde</font><br>";
                    echo "<font color='white'>Azul:&nbsp;$azul </font><br>";
                
                echo"</td>";
                echo"</tr>";
            echo"<tr>";
                echo"<td align=center><p>";
                    echo"<a href=\"14_color.html\" title=\"Volver\">Volver</a>";
                echo"</p></td>";
            echo"</tr>";
        
        echo"</table>";
          }
?>
 
   </CENTER>
 </BODY>
</HTML>

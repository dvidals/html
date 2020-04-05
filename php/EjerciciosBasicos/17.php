<!--
Crear un formulario donde el usuario introduzca números separados por comas
y devuelva un mensaje en el que se indique cuales son primos.
-->
<?php
if (isset($_POST['Enviar'])){ //si el formulario es enviado
   if (empty($_POST['numero'])){ //comprobamos que se ha seleccionado alguna matrícula
       echo "Tienes que introducir algún número.<br>
       <a href='17.php' title='Volver'>Volver</a>"; //enlace volver
   }else{ //si se ha metido algún número
       $datos = $_POST['numero'];
     $arrayDatos = explode(",", $datos);    
     $longitud = count($arrayDatos);
     for ($i=0;$i<=$longitud-1;$i++){
        for ($i=2;$i<=$arrayDatos[i]-1;$i++){
            $a=0;
            if($arrayDatos[i]%$i<>0) $a=0;
            else $a=$a+1;
            
        }
        echo($a==0)?"$arrayDatos[i] es un número primo": "$arrayDatos[i] no es un número primo";
     }
  }     
}else{
?>    
<form action="17.php" method="post" name="form" id="form"><!--Inicio formulario-->
    
<table align="center" border="1" >  <!--tabla-->
                        
  <tr><!--línea título-->
    <td align="center" colspan="2" bgcolor="#f0f0f0">
       <h2>
       NÚMEROS PRIMOS
       </h2>
    </td>
  </tr><!--Fin de la línea título-->
            
  <tr><!--Línea introduce números-->
    <td bgcolor="#f0f0f0" colspan="2" align="center">Introduce números separados por comas: </td>
  </tr><!--Fin de la línea introduce números-->
            
  <tr><!--Línea números-->
     <td bgcolor="#f0f0f0">Números: </td>
     <td><input type="text" name="numero" size="70" maxlenght="40" title="Notas"/></td>
 </tr><!--Fin de la línea números-->
            
 <tr><!--línea botones-->
     <td align="center" bgcolor="#f0f0f0" colspan="2">
     <input type="submit" value="enviar" name="Enviar" title="Enviar" />
     &nbsp;||&nbsp;
     <input type="reset" value="borrar" name="borrar" title="borrar" />
     </td>
 </tr><!--Fin línea botones-->
            
</table><!--FIN de la tabla-->
</form><!--Fin del formulario-->
<?php
} //cerramos el else aquí para que no se imprima el resultado a la misma vez que se imprime la tabla html
?>
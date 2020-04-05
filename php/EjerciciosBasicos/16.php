<!--Crear una aplicación que en el que un usuario indique en qué materias se matricula,
a través de checkboxs y nos presente como resultado un resumen de las materias 
seleccionadas.
Recuérdese que en HTML, los valores de los checkbox marcados que tengan el mismo
nombre matricial, como por ejemplo, name = "matricula[]", se enviarán en un vector
con dicho nombre. No pueden omitirse los corchetes.-->
<?php
if (isset($_POST['Enviar'])){ //si el formulario es enviado
   if (empty($_POST['matricula'])){ //comprobamos que se ha seleccionado alguna matrícula
       echo "Tienes que seleccionar alguna asignatura.<br>
       <a href='16.php' title='Volver'>Volver</a>"; //enlace volver
   }else{ //si se ha seleccionado alguna matrícula
       echo "Las asignaturas seleccionadas son:<br>";
       $seleccionadas=$_POST['matricula']; //metemos dentro de la variable seleccionadas todas la matrículas seleccionadas
              
       foreach($seleccionadas as $nombres){ //recorremos los strings de $seleccionadas y se guardan en $nombres
            echo $nombres."<br>";
       }   
          echo "<a href='16.php' title='Volver'>Volver</a>";
  }     
}else{
?>    
<form action="16.php" method="post" name="form" id="form"><!--Inicio formulario-->
    
<table align="center" border="1" >  <!--tabla-->
                        
  <tr><!--línea matrícula-->
    <td align="center" colspan="2" bgcolor="#f0f0f0">
       <h2>
       Matricula
       </h2>
    </td>
  </tr><!--Fin de la línea matrícula-->
            
  <tr><!--Línea elige asignaturas-->
    <td bgcolor="#f0f0f0" colspan="2" align="center">Elige las asignaturas: </td>
  </tr><!--Fin de la línea elige asignaturas-->
            
  <tr><!--Primera línea checkbox-->
    <td><input type="checkbox" name="matricula[]" value="Salamandrés"/>Salamandrés</td>
    <td><input type="checkbox" name="matricula[]" value="Pensador"/>Pensador a tiempo parcial</td>
  </tr><!--Fin de la primera línea checkbox-->
            
   <tr><!--Segunda línea checkbox-->
    <td><input type="checkbox" name="matricula[]" value="Sentador"/>Sentador de banquetas</td>
    <td><input type="checkbox" name="matricula[]" value="Levantador"/>Levantador de barra fija</td>
   </tr><!--Fin segunda línea checkbox-->
            
   <tr><!--Tercera línea checkbox-->
    <td><input type="checkbox" name="matricula[]" value="Boceador"/>Boceador</td>
    <td><input type="checkbox" name="matricula[]" value="Silvador"/>Silvador</td>
   </tr><!--Fin de la tercera línea checkbox-->
            
   <tr><!--línea del botones-->
    <td align="center" bgcolor="#f0f0f0" colspan="2">
        <input type="submit" value="enviar" name="Enviar" title="Enviar" />
        ||
        <input type="reset" value="borrar" name="borrar" title="borrar" />
    </td>
   </tr><!--fin de la línea del botones-->
            
 </table><!--FIN de la tabla-->
     
</form><!--Fin del formulario-->
<?php
} //cerramos el else aquí para que no se imprima el resultado a la misma vez que se imprime la tabla html
?>

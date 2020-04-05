<html>
    <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <style>
        
        .advertencia {
    color:red;
   font-size:30px;
   
}
    </style>
    <body>

<?php

/*
 Debes programar una aplicación para mantener una pequeña agenda en una única página web programada en PHP. 
 La agenda almacenará únicamente dos datos de cada persona: su nombre y un número de teléfono.
 Además, no podrá haber nombres repetidos en la agenda.
 En la parte superior de la página web debe figurar un sencillo formulario con dos cuadros de texto, 
 uno para el nombre y otro para el número de teléfono. 
 En la parte inferior se mostrará el contenido de la agenda. 
 Cada vez que se envíe el formulario: Si el nombre está vacío, se mostrará una advertencia. 
 Si el nombre que se introdujo no existe en la agenda, y el número de teléfono no está vacío, se añadirá a la agenda.
 Si el nombre que se introdujo ya existe en la agenda y se indica un número de teléfono, se sustituirá el número de teléfono anterior. 
 Si el nombre que se introdujo ya existe en la agenda y no se indica número de teléfono, se eliminará de la agenda la entrada correspondiente a ese nombre. 
 */

if (isset($_POST['Enviar'])){
  if(empty($_POST['nombre'])){
    echo"<div class='advertencia'>";
    echo "¡El campo nombre est&aacute; vac&iacute;o!";
    echo"</div>";
    echo "<br>";
          }
   if(empty($_POST['telefono'])){
   echo"<div class='advertencia'>";
   echo  "¡El campo teléfono est&aacute; vac&iacute;o!";
   echo"</div>";
   echo "<br>";
  }
      
}
?>
<form  method="post" name="form" id="form"><!--Inicio formulario-->
    
   
     <h2> Escribe tus datos más abajo</h2>
    <h3> Nombre:</h3>
    <input type="text" name="nombre" size="70"  title="nombre"/>
    <h3> Teléfono:</h3>
    <input type="text" name="telefono" size="70"   title="telefono"/>
            
    </br> </br> 
                
 
     <input type="submit" value="enviar" name="Enviar" title="Enviar" />
     &nbsp;||&nbsp;
     <input type="reset" value="borrar" name="borrar" title="borrar" />
     
     </br>  </br>
     <table>
     <tr><th>Nombre</th><th>Teléfono</th></tr>
<?php
$nombre = $_POST['nombre'];
$telefono =$_POST['telefono'];

function agregar($n,$t){
    //echo "<div>";
    echo"<tr>";
    echo '<td>'.$n.'</td>';
    echo '<td>'.$t.'</td>';
    echo "</tr>";
    echo '<input name="arraynombre[]" type="hidden" readonly value="'.$n.'">';
     echo '<input name="arraytelefono[]" type="hidden" readonly value="'.$t.'">';
     //echo "</div>";
}

$existe=false;

for ($i=0;$i<count($_POST['arraynombre']);$i++){
    $n=$_POST['arraynombre'][$i];
    $t=$_POST['arraytelefono'][$i];
    
    
    if($n==trim($nombre)){
        $existe=true;
        if(strlen($telefono)==0){
            //unset($n);
            //unset($t);
            //$n="<strike>$n</strike"; //podemos jugar con varias posibilidades para ver como se pinta: unset, null o strike. Las opciones correctas serían unset o null.
            $n=null;
           $t=null;
        }
        else{
            $t=trim($telefono);
        }
    }
    agregar($n,$t); //Es una de la líneas claves, tengo que volver a agregar todos los valores con cada submit.Es la función agregar la que nos pinta los valores y los guarda en un array
}
    if(!$existe and strlen(trim($nombre))>0)  agregar($nombre,$telefono);

?>
     </table>
</form><!--Fin del formulario-->
    </body>
</html>
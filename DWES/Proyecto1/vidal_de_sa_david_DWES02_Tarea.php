Debes programar una aplicación para mantener una pequeña agenda en una única página web programada en PHP.

La agenda almacenará únicamente dos datos de cada persona: su nombre y un número de teléfono. Además, no podrá haber nombres repetidos en la agenda.

En la parte superior de la página web debe figurar un sencillo formulario con dos cuadros de texto, uno para el nombre y otro para el número de teléfono. En la parte inferior se mostrará el contenido de la agenda. .

Cada vez que se envíe el formulario:

Si el nombre está vacío, se mostrará una advertencia.
Si el nombre que se introdujo no existe en la agenda, y el número de teléfono no está vacío, se añadirá a la agenda.
Si el nombre que se introdujo ya existe en la agenda y se indica un número de teléfono, se sustituirá el número de teléfono anterior.
Si el nombre que se introdujo ya existe en la agenda y no se indica número de teléfono, se eliminará de la agenda la entrada correspondiente a ese nombre.




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
  
          
  function existeNombre($nombre, $agenda) {
                    $existe = false;
                    //recorro el array
                    foreach ($agenda as $item) {
                        //separo el nombre del numero
                        $res = explode("-", trim($item));
                        //pregunto por el nombre
                        if ($res[0] == $nombre) {
                            $existe = true;
                        }
                    }
                    return $existe;
                }
                
  function guardarAgenda($agenda) {
                    $txtArea = "<textarea style='display: none' name='listaAgenda' form='form'>";
                    foreach ($agenda as $item) {
                        $txtArea .= trim($item) . "\n";
                    }
                    $txtArea .= "</textarea>";
                   echo $txtArea;
                } 
 function dividirAgenda($agenda) {
                    $table = "<table>";
                    $table .= "<tr>";
                    $table .= "<td>NOMBRE</td>";
                    $table .= "<td>NUMERO</td>";
                    $table .= "</tr>";
                    foreach ($agenda as $item) {
                        $res = explode("-", trim($item));
 
                        $table .= "<tr>";
                        $table .= "<td>$res[0]</td>";
                        $table .= "<td>$res[1]</td>";
                        $table .= "</tr>";
                    }
                    $table .= "</table>";
                    echo $table;
                }
 
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
  
 
 function agregar($nombre, $telefono){
     $agenda=array();
     if (isset($_POST['listaAgenda'])) {
                        //separamos y almacenamos dentro de un array los items de la lista textArea
                        $agenda = explode("\n", trim($_POST['listaAgenda']));
     }
     
     
                        //valido que el nombre no exista
                        if (!existeNombre($nombre, $agenda)) {
                            //agrego al array los nuevos datos
                           $agenda[] = trim($nombre) . '-' . trim($telefono);
                            
                       } else {
                           if (!empty($nombre)){
                          echo"<div class='advertencia'>";
                          echo  "¡El nombre ya existe!";
                           echo"</div>";
                                 if (strlen($telefono)==0) {
                                    $nombre = null;
                                     $telefono = null;
                                  }
                                  else $agenda[]=trim($nombre).'-'.trim($telefono);//Esta línea la puse yo a mayores para demostrar que añade el mismo nombre si el campo teléfono no está vacío.
                           
                           }
                        } 
      
      guardarAgenda($agenda);
      dividirAgenda($agenda);
      
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
     
     </br>  </br> </br>
<?php


 $nombre = $_POST['nombre'];
 $telefono =$_POST['telefono'];
 //$nombre_nuevo=$nombre;
 //$telefono_nuevo=$telefono;
 agregar($nombre, $telefono);

 

 
 //echo "</br>";
  //echo $nombre;
 //echo "</br>";
  //echo $telefono;
 
 // $nombre y $telefono solos debajo no se guarda nada
 // $nombre y $ telefono con agregar() arriba sólo se guarda la primera fila
 //Snombre y $telefono  con agregar() abajo se guarda todo
 //escribirAgenda es la que permite guardar más de una fila
 //es el echo de la última línea del escribirAgenda el que permite más de una fila
 
    
 
 ?>


   
</form><!--Fin del formulario-->
    </body>
</html>


<html>
<!-- Debes programar una aplicación para mantener una pequeña agenda en una única página web programada en PHP. 
 La agenda almacenará únicamente dos datos de cada persona: su nombre y un número de teléfono.
 Además, no podrá haber nombres repetidos en la agenda.
 En la parte superior de la página web debe figurar un sencillo formulario con dos cuadros de texto, 
 uno para el nombre y otro para el número de teléfono. 
 En la parte inferior se mostrará el contenido de la agenda. 
 Cada vez que se envíe el formulario: Si el nombre está vacío, se mostrará una advertencia. 
 Si el nombre que se introdujo no existe en la agenda, y el número de teléfono no está vacío, se añadirá a la agenda.
 Si el nombre que se introdujo ya existe en la agenda y se indica un número de teléfono, se sustituirá el número de teléfono anterior. 
 Si el nombre que se introdujo ya existe en la agenda y no se indica número de teléfono, se eliminará de la agenda la entrada correspondiente a ese nombre -->
    <style>
        .advertencia{
            color:red;
            font-size:30px;
        }
    </style>
    <body>
    <form method="post">
        <h1>Introduzca sus datos</h1>
        Nombre:
        <input name="n" size="50">
        Teléfono:
        <input name="t" size="50">
        <br><br>
        <input type="submit" value="Enviar" name="enviar"  />
     &nbsp;||&nbsp;
     <input type="reset" value="Borrar" name="borrar" />
     
     </br>  </br>
        <table>
            <tr><th>Nombre</th><th>Teléfono</th></tr>
<?php

error_reporting(E_ALL& ~(E_WARNING|E_NOTICE));
$n=$_POST['n'];
$t=$_POST['t'];

function agregar ($nombre,$telefono){
    echo "<tr><td>".$nombre."</td><td>".$telefono."</td></tr>";
    echo '<input  name="arrayn[]" type="hidden" readonly value="'.$nombre.'">';
     echo '<input  name="arrayt[]" type="hidden" readonly value="'.$telefono.'">';
    
}

if (isset($_POST['enviar'])){
  if(empty($n)){
    echo"<div class='advertencia'>";
    echo "¡El campo nombre est&aacute; vac&iacute;o!";
    echo"</div>";
    echo "<br>";
          }
   if(empty($t)){
   echo"<div class='advertencia'>";
   echo  "¡El campo teléfono est&aacute; vac&iacute;o!";
   echo"</div>";
   echo "<br>";
  }
      
}


$existe=false;

for ($i=0;$i<count($_POST['arrayn']);$i++){
    
    
    $nombre=$_POST['arrayn'][$i];
    $telefono=$_POST['arrayt'][$i];
   
    if ($nombre==trim($n)){
        $existe=true;
        if(strlen(trim($t))==0){
            $nombre=null;
            $telefono=null;
            
        }
        else{
            $telefono=trim($t);
            //agregar($nombre,$telefono);
        }
        
    }
    agregar($nombre,$telefono);
}
if(!$existe and strlen(trim($n))>0)agregar($n,$t);
?>
        </table>
    </form>
    </body>
</html>

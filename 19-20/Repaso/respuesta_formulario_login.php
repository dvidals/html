<?php

$nombre=array('Juan','Pablo','David','Lucas','Enrique','Julián','Manuel','Paco');
$clave=array('123','abc','456','def','789','ghi','012','jkl');

$nombre_actual=$_POST['usuario'];
$clave_actual=$_POST['clave'];
$posicion=NULL;
echo $nombre_actual."<br>".$clave_actual."<br>";



foreach($nombre as $indice => $valor){
    if($valor==$nombre_actual){
        $posicion=$indice;
        if($clave_actual==$clave[$posicion]) echo "Usuario y contraseña correctas <br> Usuario: ".$nombre_actual."<br> Contraseña: ".$clave_actual."<br>";
        else {
            echo "Contraseña incorrecta<br>";
            echo"<a href='formulario_login.php'>Volver al Formulario</a>";
            
        }
    } 

}
    //echo $posicion."<br>";
    
    
    if(is_null($posicion)){
         echo "No se reconoce ese usuario<br>";
         echo"<a href='formulario_login.php'>Volver al Formulario</a>";
    }
    


?>
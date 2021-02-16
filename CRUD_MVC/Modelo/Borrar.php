<?php
class Borrar{

    
    
    

    static public function borrado(){

        require ("Conectar.php");


    $sql = "delete from cuadro where CodCuadro='$_GET[Cod]'";    
    $resultado=Conectar::conexion()->prepare($sql);
    $resultado->execute(array());

    header ("Location:../index.php");

    }

}

Borrar::borrado();

?>
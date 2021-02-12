<?php
class Borrar{

    
    
    

    static public function borrado(){

            $base=new PDO('mysql:host=localhost; dbname=pinacoteca','root','');
            $base->exec("SET CHARACTER SET UTF8");
              
    $sql = "delete from cuadro where CodCuadro='$_GET[Cod]'";    
    $resultado=$base->prepare($sql);
    $resultado->execute(array());

    header ("Location:../index.php");

    }

}

Borrar::borrado();

?>
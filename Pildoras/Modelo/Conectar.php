<?php

class Conectar{
public static function conexion(){
    require ('config.php');
    global $conexion;

    try{
        $conexion=new PDO("mysql:host=$host; dbname=$db",$user,$password);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexion->exec("SET CHARACTER SET UTF8");
        /*echo "Conexión establecida <br/>";
        echo $host."<br/>";
        echo $db."<br/>";
        echo $user."<br/>";
        echo $password."<br/>";*/


    }catch (Exception $e){
        die ("Error". $e->getMessage());
        echo "Linea del error".$e->getLine();
    }
    return $conexion;
}


}

//$conexion=new Conectar();
//$conexion->conexion();


?>
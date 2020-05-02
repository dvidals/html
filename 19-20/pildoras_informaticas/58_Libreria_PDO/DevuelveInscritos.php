<?php

require "Conexion.php";

class DevuelveInscritos extends Conexion{
    public function DevuelveInscritos(){
        parent::Conexion();
    }

    public function get_inscritos($dato){

        $sql="select * from tabla where Nombre='".$dato."'order by Dorsal asc";

        $sentencia=$this->conexion_db->prepare($sql);

        $sentencia->execute(array());

        $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);

        $sentencia->closeCursor();

        return $resultado;

        $this->conexion_db=null;

        /*$resultado=$this->conexion_db->query('select * from tabla where Nombre="'.$dato. '"order by Dorsal asc');

        $inscritos=$resultado->fetch_all(MYSQLI_ASSOC);
        return $inscritos;*/
    }
}


?>
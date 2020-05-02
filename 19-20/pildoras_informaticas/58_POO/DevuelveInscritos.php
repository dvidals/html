<?php

require "Conexion.php";

class DevuelveInscritos extends Conexion{
    public function DevuelveInscritos(){
        parent::Conexion();
    }

    public function get_inscritos($dato){
        $resultado=$this->conexion_db->query('select * from tabla where Nombre="'.$dato. '"order by Dorsal asc');

        $inscritos=$resultado->fetch_all(MYSQLI_ASSOC);
        return $inscritos;
    }
}


?>
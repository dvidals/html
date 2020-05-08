
<?php

class Personas_modelo{

    private $db; //almaceno la conexion en esa variable.
    private $personas; //almaceno los inscritos (todos en principio)
    public function __construct(){ //se encarga de conectar con la base de datos

        require_once("modelo/Conectar.php");
        $this->db=Conectar::conexion();
        $this->personas=array();

    }

    public function get_personas(){  //se encarga de mostrar los inscritos

        require ("paginacion.php");
 
        $consulta=$this->db->query("select * from datos_usuarios limit $inicio,$limite"); //consulta es un array y se pasa su información a otro array llamado productos.
        while ($filas=$consulta->fetch(PDO::FETCH_ASSOC)){
            $this->personas[]=$filas;
        }

        return $this->personas;

    }




}

?>


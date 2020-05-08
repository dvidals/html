
<?php

class Inscritos_modelo{

    private $db; //almaceno la conexion en esa variable.
    private $inscritos; //almaceno los inscritos (todos en principio)
    public function __construct(){ //se encarga de conectar con la base de datos

        require_once("modelo/Conectar.php");
        $this->db=Conectar::conexion();
        $this->inscritos=array();

    }

    public function get_inscritos(){  //se encarga de mostrar los inscritos
 
        $consulta=$this->db->query("select * from tabla order by dorsal"); //consulta es un array y se pasa su información a otro array llamado productos.
        while ($filas=$consulta->fetch(PDO::FETCH_ASSOC)){
            $this->inscritos[]=$filas;
        }

        return $this->inscritos;

    }




}

?>


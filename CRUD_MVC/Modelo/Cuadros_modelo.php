<?php
class Cuadros_modelo{

    private $base;
    private $cuadros;
    public function _construct(){

        
        $this->cuadros=array();

        
    }

    public function get_cuadros(){
        require("paginacion.php");
        
    $resultado=Conectar::conexion()->prepare($sql_total);
    $resultado->execute(array());

        $consulta="SELECT * FROM CUADRO  limit $empezar_desde, $tamano_paginas";
        $resultado=Conectar::conexion()->prepare($consulta);
        $resultado->execute(array());

       // $consulta=$this->base->query("SELECT * FROM CUADRO  limit $empezar_desde, $tamano_paginas");

        while ($filas=$resultado->fetch(PDO::FETCH_ASSOC)){

            $this->cuadros[]=$filas;
            

           // echo $filas['CodCuadro']."       ". $filas['Ncuadro'].$filas['NPintor']."   ".$filas['NPinacoteca']."<br/>";
               
            
           
        }

        return $this->cuadros;
        //return $filas;

    }

}

$modelo = new Cuadros_modelo();
$modelo->get_cuadros();

?>
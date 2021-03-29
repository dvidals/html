<?php
class Insertar{

    
    
    

    static public function insertado(){

        require ("Conectar.php");

        $codi=$_POST['cod'];
        $cua=$_POST['nom'];
        $alt=$_POST['alt'];
        $anc=$_POST['anc'];
        $fec=$_POST['fec'];
        $tec=$_POST['tec'];
        $pint=$_POST['pint'];
        $pina=$_POST['pina'];
        $sala=$_POST['sala'];
        $numero=$_POST['numero'];
        
        

    
    $sql = "insert into  cuadro(CodCuadro, NCuadro, Alto, Ancho, Fcuadro, Tecnica, NPintor, NPinacoteca, numsala, NumerodeCopias)
     values (:cod, :cua, :alt, :anc, :fec, :tec, :pint, :pina, :sala, :numero)";    
    $resultado=Conectar::conexion()->prepare($sql);
    $resultado->execute(array(":cod"=>$codi, ":cua"=>$cua, ":alt"=>$alt, ":anc"=>$anc, ":fec"=>$fec, ":tec"=>$tec, ":pint"=>$pint, ":pina"=>$pina,
    ":sala"=>$sala, ":numero"=>$numero));

    header ("Location:../paginacion.php");

    }

}

Insertar::insertado();

?>
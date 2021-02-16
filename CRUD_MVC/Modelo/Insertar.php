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
        

    
    $sql = "insert into  cuadro(CodCuadro, NCuadro, Alto, Ancho, Fcuadro, Tecnica, NPintor, NPinacoteca, numsala)
     values (:cod, :cua, :alt, :anc, :fec, :tec, :pint, :pina, :sala)";    
    $resultado=Conectar::conexion()->prepare($sql);
    $resultado->execute(array(":cod"=>$codi, ":cua"=>$cua, ":alt"=>$alt, ":anc"=>$anc, ":fec"=>$fec, ":tec"=>$tec, ":pint"=>$pint, ":pina"=>$pina,
    ":sala"=>$sala));

    header ("Location:../index.php");

    }

}

Insertar::insertado();

?>
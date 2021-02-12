<?php
class Insertar{

    
    
    

    static public function insertado(){

        $codi=$_POST['cod'];
        $cua=$_POST['nom'];
        $alt=$_POST['alt'];
        $anc=$_POST['anc'];
        $fec=$_POST['fec'];
        $tec=$_POST['tec'];
        $pint=$_POST['pint'];
        $pina=$_POST['pina'];
        $sala=$_POST['sala'];
        


    try{

            $base=new PDO('mysql:host=localhost; dbname=pinacoteca','root','');
            $base->exec("SET CHARACTER SET UTF8");
            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $base->exec("SET CHARACTER SET UTF8");
        echo "Conexión establecida <br/>";
        

    }catch (Exception $e){
        die ("Error". $e->getMessage());
        echo "Linea del error".$e->getLine();
    }
          
    
    $sql = "insert into  cuadro(CodCuadro, NCuadro, Alto, Ancho, Fcuadro, Tecnica, NPintor, NPinacoteca, numsala)
     values (:cod, :cua, :alt, :anc, :fec, :tec, :pint, :pina, :sala)";    
    $resultado=$base->prepare($sql);
    $resultado->execute(array(":cod"=>$codi, ":cua"=>$cua, ":alt"=>$alt, ":anc"=>$anc, ":fec"=>$fec, ":tec"=>$tec, ":pint"=>$pint, ":pina"=>$pina,
    ":sala"=>$sala));

    header ("Location:../index.php");

    }

}

Insertar::insertado();

?>
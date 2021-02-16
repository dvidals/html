<?php
class Actualizar{

    

    static public function actualizado(){

        require_once("../hoja.css");
        require_once("Conectar.php");
        Conectar::conexion();
    
    
    
    if (!isset($_POST['act'])){
    $codi=$_GET['Cod'];
    $cua=$_GET['Cua'];
    $alt=$_GET['Alt'];
    $anc=$_GET['Anc'];
    $fec=$_GET['Fec'];
    $tec=$_GET['Tec'];
    $pint=$_GET['Pint'];
    $pina=$_GET['Pina'];
    $sala=$_GET['Sala'];
    }
    else{
    $codi=$_POST['codi'];
    $cua=$_POST['cua'];
    $alt=$_POST['alt'];
    $anc=$_POST['anc'];
    $fec=$_POST['fec'];
    $tec=$_POST['tec'];
    $pint=$_POST['pint'];
    $pina=$_POST['pina'];
    $sala=$_POST['sala'];

    $sql = "update  cuadro set  CodCuadro=:codi, NCuadro=:cua, Alto=:alt, Ancho=:anc, Fcuadro=:fec, Tecnica=:tec, NPintor=:pint,
     NPinacoteca=:pina, numsala=:sala where CodCuadro=$codi";
    $resultado=Conectar::conexion()->prepare($sql);
    $resultado->execute(array(":codi"=>$codi,":cua"=>$cua,":alt"=>$alt, ":anc"=>$anc, ":fec"=>$fec, ":tec"=>$tec, ":pint"=>$pint, ":pina"=>$pina,
    ":sala"=>$sala));

    header ("Location:../index.php");

    }
    

    ?>

     <h1> ACTUALIZAR </h1>
    <form method='post' action="<?php $_SERVER['PHP_SELF']?>">
    <table width='30%' border='0' align='center'>
        <tr><td class='primera_fila'>Código</td><td><input type='text' name='codi' id='codi' value="<?php echo $codi ?>" class='act'></td></tr>
        <tr><td class='primera_fila'>Nombre Cuadro</td><td><input type='text' name='cua' id='cua' value="<?php echo $cua ?>"class='act'></td></tr>
        <tr><td class='primera_fila'>Alto</td><td><input type='text' name='alt' id='alt' value="<?php echo $alt ?>"class='act'></td></tr>
        <tr><td class='primera_fila'>Ancho</td><td><input type='text' name='anc' id='anc' value="<?php echo $anc ?>" class='act'></td></tr>
        <tr><td class='primera_fila'>Fecha</td><td><input type='text' name='fec' id='fec' value="<?php echo $fec ?>" class='act'></td></tr>
        <tr><td class='primera_fila'>Técnica</td><td><input type='text' name='tec' id='tec' value="<?php echo $tec ?>" class='act'></td></tr>
        <tr><td class='primera_fila'>Pintor</td><td><input type='text' name='pint' id='pint' value="<?php echo $pint ?>" class='act'></td></tr>
        <tr><td class='primera_fila'>Pinacoteca</td><td><input type='text' name='pina' id='pina' value="<?php echo $pina ?>" class='act'></td></tr>
        <tr><td class='primera_fila'>Nº Sala</td><td><input type='text' name='sala' id='sala' value="<?php echo $sala ?>" class='act'></td></tr>
        <tr><td colspan='2' class='act' ><input type='submit' name='act' id='act' value='Actualizar' class='act'></td></tr>
    </table>
    </form>
    
    <?php

    }

}

Actualizar::actualizado();

?>
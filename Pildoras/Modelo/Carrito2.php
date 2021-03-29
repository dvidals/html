
<?php
class Comprar{

    

    static public function comprado(){

        require_once("../hoja.css");
        require_once("Conectar.php");
        Conectar::conexion();
    
?>
<style>

td{
    
 white-space: nowrap;
}


</style>
<?php 
    session_start();
    $cont=(int)$_GET['Cont'];
    $codi=$_GET['Cod'];
    
    if (isset($_SESSION['carrito'][$codi])){

        $_SESSION['carrito'][$codi] +=$cont;

    }else {

    $_SESSION['carrito'][$codi] =$cont;

}
    
    if (!isset($_POST['act'])){
  
    
    $array=array($_GET['Cod'],$_GET['Cua'],$_GET['Pint'], $_GET['Pina'], $_GET['Sala'],$_GET['Numero'],(int)$_GET['Cont']);
    
    $arrayTot=unserialize($_GET['ArrayTot']);
    var_dump($arrayTot);
    $arrayTot[]=$array;

    
    var_dump($arrayTot);

    
    $codi=$_GET['Cod'];
    

    }
    else{

    
    $codi=$_POST['codi'];
    $numero=$_POST['Numero']-$_POST['cont'];
    

    $sql = "update  cuadro set  NumerodeCopias=:numero where CodCuadro=$codi";
    $resultado=Conectar::conexion()->prepare($sql);
    $resultado->execute(array(":numero"=>$numero));

    header ("Location:../paginacion2.php");

    }
    

    ?>

     <h1> CARRITO </h1>
    <form method='post' action="<?php $_SERVER['PHP_SELF']?>">
    <table width='95%' border='0' align='center'>
        <tr><td hidden class='primera_fila'>Código</td><td class='primera_fila'>Nombre Cuadro</td><td class='primera_fila'>Pintor</td>
        <td class='primera_fila'>Pinacoteca</td><td class='primera_fila'>Nº Sala</td><td hidden class='primera_fila'>NºCopias</td><td class='primera_fila'>Unidades</td></tr>
       <?php
        foreach ($arrayTot as $array):?>
        <tr><td hidden><input class="centrado" type='text' name='codi' id='codi' value="<?php echo $array[0] ?>"></td>
        <td><?php echo $array[1] ?></td>
        <td><?php echo $array[2] ?></td>
        <td><?php echo $array[3] ?></td>
        <td><?php echo $array[4] ?></td>
        <td hidden><input class="centrado" type='text' name='Numero' id='Numero' value="<?php echo $array[5] ?>"></td>
        <td ><input class="centrado" type='text' name='cont' id='cont' value="<?php echo $array[6] ?>" ></td>

        <td   class="bot"><a href="?Cod=<?php echo $array[0]?> & Cua=<?php echo $array[1]?>
        & Pint=<?php echo $array[2]?> & Pina=<?php echo $array[3]?> & Sala=<?php echo $array[4]?> & Numero=<?php echo $array[5]?> &
        Cont=<?php  echo intval($array[6]-1)?>"><input type='button' name='menos' id='menos' value='-' ></a></td>
        
        <td   class="bot"><a href="?Cod=<?php echo $array[0]?> & Cua=<?php echo $array[1]?>
        & Pint=<?php echo $array[2]?> & Pina=<?php echo $array[3]?> & Sala=<?php echo $array[4]?> & Numero=<?php echo $array[5]?>
        & Cont=<?php   echo intval($array[6]+1)?>"><input type='button' name='mas' id='mas' value='+' ></a></td></tr>

        <?php
        endforeach;
        ?>



        <tr> <td   class="bot"  colspan="2"><input type='submit' name='act' id='act' value='Comprar' ></td></tr>
        <?php
      

        echo '<tr><td class="bot">'."<a href='../paginacion2.php?ArrayTot=". urlencode(serialize($arrayTot))."'>Volver</a></td></tr>";
        ?>
    </table>
    </form>
    
    <?php

    }

}

Comprar::comprado();

?>
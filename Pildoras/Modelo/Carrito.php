
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
   
    if (!isset($_POST['act'])){
    $codi=$_GET['Cod'];
    $cua=$_GET['Cua'];
    $pint=$_GET['Pint'];
    $pina=$_GET['Pina'];
    $sala=$_GET['Sala'];
    $numero=$_GET['Numero'];
    $cont=$_GET['Cont'];
    }
    else{

    
    $codi=$_POST['codi'];
    $numero=$_POST['Numero']-$_POST['cont'];
    

    $sql = "update  cuadro set  NumerodeCopias=:numero where CodCuadro=$codi";
    $resultado=Conectar::conexion()->prepare($sql);
    $resultado->execute(array(":numero"=>$numero));

    header ("Location:../paginacion.php");

    }
    

    ?>

     <h1> CARRITO </h1>
    <form method='post' action="<?php $_SERVER['PHP_SELF']?>">
    <table width='95%' border='0' align='center'>
        <tr><td hidden class='primera_fila'>Código</td><td class='primera_fila'>Nombre Cuadro</td><td class='primera_fila'>Pintor</td>
        <td class='primera_fila'>Pinacoteca</td><td class='primera_fila'>Nº Sala</td><td hidden class='primera_fila'>NºCopias</td><td class='primera_fila'>Unidades</td></tr>
       
       
        <tr><td hidden><input class="centrado" type='text' name='codi' id='codi' value="<?php echo $codi ?>"></td>
        <td><?php echo $cua ?></td>
        <td><?php echo $pint ?></td>
        <td><?php echo $pina ?></td>
        <td><?php echo $sala ?></td>
        <td hidden><input class="centrado" type='text' name='Numero' id='Numero' value="<?php echo $numero ?>"></td>
        <td ><input class="centrado" type='text' name='cont' id='cont' value="<?php echo $cont ?>" ></td>

        <td   class="bot"><a href="?Cod=<?php echo $codi?> & Cua=<?php echo $cua?>
        & Pint=<?php echo $pint?> & Pina=<?php echo $pina?> & Sala=<?php echo $sala?> & Numero=<?php echo $numero?> &
        Cont=<?php echo --$cont?>"><input type='button' name='menos' id='menos' value='-' ></a></td>
        
        <td   class="bot"><a href="?Cod=<?php echo $codi?> & Cua=<?php echo $cua?>
        & Pint=<?php echo $pint?> & Pina=<?php echo $pina?> & Sala=<?php echo $sala?> & Numero=<?php echo $numero?> &
        Cont=<?php echo $cont+2?>"><input type='button' name='mas' id='mas' value='+' ></a></td></tr>



        <tr> <td   class="bot"  colspan="2"><input type='submit' name='act' id='act' value='Comprar' ></td></tr>

        <tr><td class="bot"><a href="../paginacion.php">Volver</a></td></tr>
    </table>
    </form>
    
    <?php

    }

}

Comprar::comprado();

?>
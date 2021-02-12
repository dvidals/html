<html>
<head>
<meta charset="ut-8">

</head>
<body>
<?php

    require("Modelo/paginacion.php");
    require("hoja.css");
?>

<form action="Modelo/Insertar.php" method="post">
    <table width="90%" border="0" align="center>"
        <tr>
            <td class="primera_fila">Código</td>
            <td class="primera_fila">Nombre Cuadro</td>
            <td class="primera_fila">Alto</td>
            <td class="primera_fila">Ancho</td>
            <td class="primera_fila">Fecha</td>
            <td class="primera_fila">Técnica</td>
            <td class="primera_fila">Pintor</td>
            <td class="primera_fila">Pinacoteca</td>
            <td class="primera_fila">Nº Sala</td>
            <td class="sin">&nbsp;</td>
            <td class="sin">&nbsp;</td>
            <td class="sin">&nbsp;</td>
        </tr>
    <?php
    foreach ($matrizCuadros as $cuadros):?>

        <tr>
            <td><?php echo $cuadros["CodCuadro"]?></td>
            <td><?php echo $cuadros["Ncuadro"]?></td>
            <td><?php echo $cuadros["Alto"]?></td>
            <td><?php echo $cuadros["Ancho"]?></td>
            <td><?php echo $cuadros["Fcuadro"]?></td>
            <td><?php echo $cuadros["Tecnica"]?></td>
            <td><?php echo $cuadros["NPintor"]?></td>
            <td><?php echo $cuadros["NPinacoteca"]?></td>
            <td><?php echo $cuadros["numsala"]?></td>
            <td class="bot"><a href="Modelo/Borrar.php?Cod=<?php echo $cuadros["CodCuadro"]?>"><input type='button' name='del' id='del' value=
            'Borrar'></a></td>
            <td class="bot"> <a href="Modelo/Actualizar.php?
            Cod=<?php echo $cuadros["CodCuadro"]?> & Cua=<?php echo $cuadros["Ncuadro"]?>
            & Alt=<?php echo $cuadros["Alto"]?> & Anc=<?php echo $cuadros["Ancho"]?> & Fec=<?php echo $cuadros["Fcuadro"]?>
            & Tec=<?php echo $cuadros["Tecnica"]?> & Pint=<?php echo $cuadros["NPintor"]?> & Pina=<?php echo $cuadros["NPinacoteca"]?>
            & Sala=<?php echo $cuadros["numsala"]?>">
            <input type='button' name='up' id='up' value='Actualizar'></a></td>
        </tr>
        <?php
        endforeach;
        ?>

        <tr>
            <td><input type='text' name='cod' size='5' clas='centrado'></td>
            <td><input type='text' name='nom' size='25' clas='centrado'></td>
            <td><input type='text' name='alt' size='5' clas='centrado'></td>
            <td><input type='text' name='anc' size='5' clas='centrado'></td>
            <td><input type='text' name='fec' size='15' clas='centrado'></td>
            <td><input type='text' name='tec' size='10' clas='centrado'></td>
            <td><input type='text' name='pint' size='20' clas='centrado'></td>
            <td><input type='text' name='pina' size='20' clas='centrado'></td>
            <td><input type='text' name='sala' size='5' clas='centrado'></td>
            <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td>
        </tr>
        <tr>
            <td>
        <!-- ----------------------------PAGINACIÓN----------------------------------------------------- -->

            <?php

                for ($i=1; $i<=$total_paginas; $i++){
                echo "<a href='?pagina=".$i."'>".$i." "."&nbsp;&nbsp;"."</a>";
                 }

            ?>
            </td>
        </tr>
    </table>
</form>
</body>
</html>

<html>
<head>
<meta charset="ut-8">

<style>
@charset "utf-8";

h1{padding: 20px; text-align:center;}
.subtitulo{font-size:12px;}
body{background-color:#FFC;}
table{margin: auto;}
table td{text-align:center; border:1px #000099 dotted;}
table .sin {border:0;}
table .bot{padding:0 5px; display:inline; border:0;}
table .primera_fila{font-size:1.5em;text-decoration:underline;background-color: #FC3;}
.centrado{text-align:center;}
.act {border:0 ; font-size:22px ; font-weight:bolder ; text-align:center;}
p{padding-left: 10%; font-weight: bold;}
</style>


</head>
<body>
<?php
try{

        $conexion=new PDO("mysql:host=localhost; dbname=pinacoteca",'root','');
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexion->exec("SET CHARACTER SET UTF8");
        /*echo "Conexión establecida <br/>";
        echo $host."<br/>";
        echo $db."<br/>";
        echo $user."<br/>";
        echo $password."<br/>";*/


    }catch (Exception $e){
        die ("Error". $e->getMessage());
        echo "Linea del error".$e->getLine();
    }
    //return $conexion;

    
     if(isset($_GET["porPagina"])){
         
        $porPagina=$_GET["porPagina"];
       
   }
   else {
    $porPagina=10;

   } 

    if(isset($_GET["pagina"])){

            $pagina=intval($_GET["pagina"]);
        
    } else{
        $pagina=1;
        
    }


    //$porPagina=10;
    $matrizCuadros=array();
    $resultado=$conexion->prepare('select * from cuadro');
    $resultado->execute();
    $total_registros=$resultado->rowCount();
    $total_paginas=ceil($total_registros/$porPagina);
    $empezar= ($pagina-1)*$porPagina;
    $mostrar=$conexion->prepare("select * from cuadro limit $empezar,$porPagina");
    $mostrar->execute(array());

    while ($cuadros=$mostrar->fetch(PDO::FETCH_ASSOC)){

       
           
       $matrizCuadros[]=$cuadros;
        
       
    }

    

    ?>

<h1> PAGINACIÓN EN UN SOLO ARCHIVO</h1>

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
                echo "<a href='?pagina=".$i." & porPagina=$porPagina'>".$i." "."&nbsp;&nbsp;"."</a>";
                 }

            ?>
            </td>
            <td>
            <?php

                echo "Seleccione el nº de registros por página: ";
                echo "<a href='?porPagina="."5"."'>"."5"." "."&nbsp;&nbsp;"."</a>";
                echo "<a href='?porPagina="."10"."'>"."10"." "."&nbsp;&nbsp;"."</a>"; 
                echo "<a href='?porPagina="."15"."'>"."15"." "."&nbsp;&nbsp;"."</a>";

            ?>
           
            </td>
           
        </tr>
    </table>
    <p>

<?php

    if($pagina!=$total_paginas)
    echo  "Mostrando los registros del ".($empezar+1). " hasta el ". ($empezar+$porPagina). " de un total de $total_registros.";
    else echo "Mostrando los registros del ".($empezar+1). " hasta el ". ($total_registros). " de un total de $total_registros.";
    
    

?>
    </p>
</form>
</body>
</html>
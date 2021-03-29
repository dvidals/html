
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

    
        global $arrayTot;
        if(isset($_GET['ArrayTot'])){
        $arrayTot=unserialize($_GET['ArrayTot']);
        }
        
        else $arrayTot=array();
      // var_dump($arrayTot);
     

    
        


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
            <td class="primera_fila">Nº Copias</td>
            <td class="sin">&nbsp;</td>
            <td class="sin">&nbsp;</td>
            <td class="sin">&nbsp;</td>
        </tr>
    <?php
     error_reporting(E_ALL ^ E_NOTICE);
     function agregar($uno,$dos,$tres,$cuatro,$cinco,$seis,$siete){
        
       echo"
       <a href='Modelo/Carrito2.php?
       uno[]=<?php echo $uno?> &  dos[]=<?php echo $dos?>
        &  tres[]=<?php echo $tres?> &  cuatro[]=<?php echo $cuatro?>
       &  cinco[]=<?php echo $cinco?>&  seis[]=<?php echo $seis?> &  siete[]=<?php echo $siete?>>
        
        ";
    }

    //global $contador;
    //$contador=0;
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
            <td><?php echo $cuadros["NumeroDeCopias"]?></td>
            <td class="bot"><a href="Modelo/Borrar.php?Cod=<?php echo $cuadros["CodCuadro"]?>"><input type='button' name='del' id='del' value=
            'Borrar'></a></td>
            <td class="bot"> <a href="Modelo/Actualizar.php?
            Cod=<?php echo $cuadros["CodCuadro"]?> & Cua=<?php echo $cuadros["Ncuadro"]?>
            & Alt=<?php echo $cuadros["Alto"]?> & Anc=<?php echo $cuadros["Ancho"]?> & Fec=<?php echo $cuadros["Fcuadro"]?>
            & Tec=<?php echo $cuadros["Tecnica"]?> & Pint=<?php echo $cuadros["NPintor"]?> & Pina=<?php echo $cuadros["NPinacoteca"]?>
            & Sala=<?php echo $cuadros["numsala"]?> & Numero=<?php echo $cuadros["NumeroDeCopias"]?>">
            <input type='button' name='up' id='up' value='Actualizar'></a></td>
            <td class="bot"> <a href="Modelo/Carrito2.php?
            ArrayTot=<?php echo urlencode(serialize($arrayTot))?>
            & Cod=<?php echo $cuadros["CodCuadro"]?> & Cua=<?php echo $cuadros["Ncuadro"]?>
             & Pint=<?php echo $cuadros["NPintor"]?> & Pina=<?php echo $cuadros["NPinacoteca"]?>
            & Sala=<?php echo $cuadros["numsala"]?>& Numero=<?php echo $cuadros["NumeroDeCopias"]?>
            & Cont=<?php $cont=1;echo $cont?>
            ">

            <input type='button' name='up' id='up' value='Añadir'>
            </a>
            <?php
            /*
            echo '<td class="bot">'. "<a href='Modelo/Carrito2.php?ArrayTot=". urlencode(serialize($arrayTot))."
            & Cod=". $cuadros['CodCuadro']." & Cua=". $cuadros['Ncuadro']."
             & Pint=". $cuadros['NPintor']." & Pina=". $cuadros["NPinacoteca"]."
            & Sala=".  $cuadros['numsala']." & Numero=".$cuadros['NumeroDeCopias']."
            & Contador=". $contador." & Cont=".$cont."'".
            
            ">

            <input type='button' name='up' id='up' value='Añadir'>
            </a>
            </td>";
            */
            ?>
            
            <?php
            /*
                $existe=false;
                for ($i=0;$i<count($_POST["uno"]);$i++){
                    $uno=$_GET["uno"][$i];
                    $dos=$_GET["dos"][$i];
                    $tres=$_GET["tres"][$i];
                    $cuatro=$_GET["cuatro"][$i];
                    $cinco=$_GET["cinco"][$i];
                    $seis=$_GET["seis"][$i];
                    $siete=$_GET["siete"][$i];

                    if ($uno==trim($cuadros["CodCuadro"])){
                        ++$siete;
                    }

                    if ($uno!=null){
                        agregar($uno, $dos, $tres, $cuatro, $cinco, $seis,$siete);
                    }

                }

                if(!$existe){
                    agregar($cuadros["CodCuadro"],$cuadros["Ncuadro"],$cuadros["NPintor"],$cuadros["Ninacoteca"],$cuadros["numsala"],$cuadros["NumeroDeCopias"], $cont );
                }

               */
                

            ?>
            </td>
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
            <td><input type='text' name='numero' size='5' clas='centrado'></td>
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
<?php

$base=new PDO('mysql:host=localhost; dbname=pinacoteca','root','');
$base->exec("SET CHARACTER SET UTF8");

$tamano_paginas=15;

    if(isset($_GET["pagina"])){
        if ($_GET["pagina"]==1){
            header("Location:index.php");
        }else{
            $pagina=$_GET["pagina"];
        }
    } else{
        $pagina=1;
    }


    $empezar_desde=($pagina-1)*$tamano_paginas;
    $sql_total="SELECT * FROM cuadro";
    $resultado=$base->prepare($sql_total);
    $resultado->execute(array());
    $num_filas=$resultado->rowCount();
    $total_paginas=ceil($num_filas/$tamano_paginas);
    //echo"  ". $num_filas."  ".  $total_paginas;

  
    /*while ($filas=$resultado->fetch(PDO::FETCH_ASSOC)){

        echo $filas['CodCuadro']."       ". $filas['Ncuadro'].$filas['NPintor']."   ".$filas['NPinacoteca']."<br/>";
       
    }*/

    
    ?>
<?php
try{
        $conexion=new PDO('mysql:host=localhost; dbname=pinacoteca','root','');
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexion->exec("SET CHARACTER SET UTF8");
        


    }catch (Exception $e){
        die ("Error". $e->getMessage());
        echo "Linea del error".$e->getLine();
    }

    $consulta=$conexion->query("SELECT * FROM CUADRO order by CodCuadro desc");
    echo "<br/>";
    while ($filas=$consulta->fetch(PDO::FETCH_ASSOC)){

        echo $filas['CodCuadro']."       ". $filas['Ncuadro'].$filas['NPintor']."   ".$filas['NPinacoteca']."<br/>";
       
    }


?>
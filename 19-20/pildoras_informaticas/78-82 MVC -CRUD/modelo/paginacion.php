<?php
require_once("Conectar.php");
$base=Conectar::conexion();
$contador=0;
  $limite=3;

    if (isset($_GET["pagina"])){
    if($_GET["pagina"]==1)header("Location:index.php");
    else $pagina=$_GET["pagina"];
    }else $pagina=1;
  
  
  $sql_total="select * from datos_usuarios";

  $resultado=$base->prepare($sql_total);
  $resultado->execute(array());
  $num_filas=$resultado->rowCount();//si utilizase esta variable en vez de contador me ahorraría el primer bucle while.
  $total_paginas=$num_filas/$limite;

  $paginas=ceil($num_filas/$limite);
  $inicio=($pagina-1)*$limite;

  while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
    $contador++;

  }
  ?>

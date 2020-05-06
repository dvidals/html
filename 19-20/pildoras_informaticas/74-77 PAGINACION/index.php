<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PAGINACIÓN</title>
</head>

<body>
<?php
try{

  $base=new PDO ('mysql:host=localhost;dbname=pruebas','root','');//creamos la conexión, 3 argumentos separados por comas.

  $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $base->exec("SET CHARACTER SET UTF8");
  $contador=0;
  $limite=5;

    if (isset($_GET["pagina"])){
    if($_GET["pagina"]==1)header("Location:index.php");
    else $pagina=$_GET["pagina"];
    }else $pagina=1;
  
  
  $sql_total="select Dorsal, Nombre, Apellidos, Categoria_Prueba from tabla where Categoria_Prueba='MASTER 30'";

  $resultado=$base->prepare($sql_total);
  $resultado->execute(array());
  $num_filas=$resultado->rowCount();//si utilizase esta variable en vez de contador me ahorraría el primer bucle while.
  $total_paginas=$num_filas/$limite;

  $paginas=ceil($num_filas/$limite);
  $inicio=($pagina-1)*$limite;

  while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
    $contador++;

  }

  echo "Número de registros de la consulta: "./*$num_filas*/$contador."<br/>";
  echo "Mostramos ".$limite. " registros por página <br>";
  echo "Mostrando la página ".$pagina. " de ".$paginas."<br>";

  $resultado->closeCursor();

  $sql_limite="select Dorsal, Nombre, Apellidos, Categoria_Prueba from tabla where Categoria_Prueba='MASTER 30' order by Dorsal
  limit $inicio,$limite";
  $resultado=$base->prepare($sql_limite);
  $resultado->execute(array());

  while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){

    echo "Dorsal: ".$registro["Dorsal"]. " Nombre: " .$registro["Nombre"]. " Apellidos: ".$registro["Apellidos"].
    " Categoría: ".$registro["Categoria_Prueba"]."<br/>";
    $contador++;
  }

 
 
  $resultado->closeCursor();

}catch(Exception $e){

  die('Error: '.$e->GetMessage());
  echo "Línea del error: ".$e->getLine();	
  
}

//-----------PAGINACIÓN--------------

for($i=1;$i<=$paginas;$i++){

  echo "<a href='?pagina=".$i. "'>".$i."</a> ";
}


  



?>

</body>
</html>
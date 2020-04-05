<?php
session_start();
    ini_set('display errors'.true);
    $bd = new mysqli('localhost','root','root','proyecto');

    if ($bd->connect_errno) { 
         die('No puedo conectar: '.$bd->connect_error);
    }

    $sql="SELECT * FROM usuarios RIGHT JOIN docentes On(usuarios.id=docentes.id) where usuarios.usuario = '" . $_SESSION['usuario']."'";
    $result = $bd->query($sql);

    if ($bd->errno) {die('Esto va mal' . $bd->error);}

   $resulta['data']=array();
    while($registro = $result->fetch_assoc()) {  
        $resulta['data'][]=$registro;
    }
        
    header('Content-Type: application/json; charset=utf-8');

    $result->close();

    echo json_encode($resulta);
?>



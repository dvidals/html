<?php
    ini_set('display errors'.true);
    $bd = new mysqli('localhost','root','root','proyecto');

    if ($bd->connect_errno) { 
         die('No puedo conectar: '.$bd->connect_error);
    }

    $sql="SELECT * FROM usuarios";
    $result = $bd->query($sql);

    if ($bd->errno) {die('Esto va mal' . $bd->error);}

   // $resulta = array();
   $resulta['data']=array();
    while($registro = $result->fetch_assoc()) {
        //$resulta['name'] = $registro['name'];
        //$resulta['position'] = $registro['position'];
        //$resulta['salary'] = $registro['salary'];
        //$resulta['start_date'] = $registro['start_date'];
        //$resulta['office'] = $registro['office'];
       // $resulta['extn'] = $registro['extn'];
        //Todos los resulta se pueden sustituir por uno único
        $resulta['data'][]=$registro;
        //si $resulta=array() se sutituye por: //$resulta['data']=array();
        
    }
        
    header('Content-Type: application/json; charset=utf-8');

    $result->close();

    echo json_encode($resulta);
?>



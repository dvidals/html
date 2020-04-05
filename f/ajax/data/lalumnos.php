<?php
session_start();
    ini_set('display errors'.true);
    $bd = new mysqli('localhost','root','root','proyecto');

    if ($bd->connect_errno) { 
         die('No puedo conectar: '.$bd->connect_error);
    }

    //$sql="SELECT * FROM usuarios where tipousuario='4'";
    //$sql="SELECT * FROM usuarios RIGHT JOIN alumnos On(usuarios.id=alumnos.id) RIGHT JOIN fct On (usuarios.id=fct.alumno)  where usuarios.usuario = '" . $_SESSION['usuario']."'";

    $sql="SELECT usuarios.id, usuarios.usuario, usuarios.passwd, usuarios.alta, usuarios.baja, alumnos.apellidos, alumnos.dni, alumnos.direccion, alumnos.poblacion, alumnos.codpostal, alumnos.provincia, alumnos.fechanac, docentes.nombre as nombret, horas  FROM usuarios RIGHT JOIN alumnos On(usuarios.id=alumnos.id) RIGHT JOIN fct On (usuarios.id=fct.alumno) JOIN docentes On (fct.docente=docentes.id) where usuarios.usuario = '" . $_SESSION['usuario']."'";

    $result = $bd->query($sql);
    //echo $sql;
    if ($bd->errno) {die('Esto va mal' . $bd->error);}

   
   $resulta['data']=array();
    while($registro = $result->fetch_assoc()) {
        
        $resulta['data'][]=$registro;
        
        
    }
        
    header('Content-Type: application/json; charset=utf-8');

    $result->close();

    echo json_encode($resulta);
?>



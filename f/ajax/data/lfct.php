<?php
    ini_set('display errors'.true);
    $bd = new mysqli('localhost','root','root','proyecto');

    if ($bd->connect_errno) { 
         die('No puedo conectar: '.$bd->connect_error);
    }

    
   // $sql="SELECT * FROM fct RIGHT JOIN usuarios On(fct.alumno=usuarios.id) RIGHT JOIN docentes On (fct.docente=docentes.id)RIGHT JOIN empresa On (fct.empresa=empresa.id)";
    //$result = $bd->query($sql);
   
    $sql="SELECT fct.id, fct.alumno, alumnos.nombre as nombreal, fct.docente, docentes.nombre as nombretu, fct.inicio, fct.fin, fct.horas, fct.empresa, empresa.razon_social FROM fct RIGHT JOIN  docentes On(fct.docente=docentes.id) RIGHT JOIN alumnos On (fct.alumno=alumnos.id) JOIN empresa On (fct.empresa=empresa.id)";
   $result = $bd->query($sql);

    //$sql="SELECT * FROM fct RIGHT JOIN alumnos On(fct.alumno=alumnos.id) RIGHT JOIN docentes On (fct.docente=docentes.id)RIGHT JOIN empresa On (fct.empresa=empresa.id)";
    //$result = $bd->query($sql);



    if ($bd->errno) {die('Esto va mal' . $bd->error);}

   
   $resulta['data']=array();
    while($registro = $result->fetch_assoc()) {
        
        $resulta['data'][]=$registro;
        
        
    }
        
    header('Content-Type: application/json; charset=utf-8');

    $result->close();

    echo json_encode($resulta);
?>



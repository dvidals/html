<?php
	
if (isset($_POST['submit'])){	// Recoge los datos del envío POST
	$nombre = $_POST["nombre"];
	$direccion = $_POST["direccion"];
	$edad = $_POST["edad"];
	$profesion = $_POST["ocupacion"];
	$residente = $_POST["residente"];



	if (  
            strlen($nombre)==0)
            {
        echo "Es obligatorio completar su nombre<br>";
            $m=1;}
       
        if (empty($direccion)
            ){
            echo "Es obligatorio cubrir su domicilio<br>";
            $m=1;}
    
        
        if (
            strlen($edad)==0
                ){
            echo "Tiene que poner su edad<br>";
                $m=1;}
      
          if(     
                strlen($profesion)==0
                  
             ) {
        echo "Tiene que poner su ocupacion<br>";
             $m=1;}

              
        if (empty($m)){
    
          
          echo "Hola $nombre</br>";
          echo "Usted vive en $direccion</br>";
          echo "Es un $profesion";
          echo  " de $edad años</br>";
            
             if ($residente=='true')  
	echo "Además es usted residente";
        else echo "Usted no es residente en la zona";

        
        
}        
        
}
	
?>
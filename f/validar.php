<?php
    // Arrays para guardar mensajes y errores:
     $aErrores = array();
     $aMensajes = array();
    // Patrón para usar en expresiones regulares (admite letras acentuadas y espacios):
     $patron_texto = "/^[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]+$/";
    // Comprobar si se ha enviado el formulario:
    if( !empty($_POST) )
    {
        echo "FORMULARIO RECIBIDO:<br/>";
        echo "====================<p/>";
        // Mostrar la información recibida del formulario:
        print_r( $_POST );
        echo "<hr/>";
        // Comprobar si llegaron los campos requeridos:
         if( isset($_POST['txtNombre']) && isset($_POST['txtApellidos']) )
        {
            // Nombre:
             if( empty($_POST['txtNombre']) )
                $aErrores[] = "Debe especificar el nombre";
            else
            {
                // Comprobar mediante una expresión regular, que sólo contiene letras y espacios:
                 if( preg_match($patron_texto, $_POST['txtNombre']) )
                    $aMensajes[] = "Nombre: [".$_POST['txtNombre']."]";
                else
                    $aErrores[] = "El nombre sólo puede contener letras y espacios";
            }
            // Apellidos:
            if( empty($_POST['txtApellidos']) )
                $aErrores[] = "Debe especificar los apellidos";
            else
            {
                // Comprobar mediante una expresión regular, que sólo contienen letras y espacios:
                if( preg_match($patron_texto, $_POST['txtApellidos']) )
                    $aMensajes[] = "Apellidos: [".$_POST['txtApellidos']."]";
                else
                    $aErrores[] = "Los apellidos sólo pueden contener letras y espacios";
            }
        }
        else
        {
            echo "<p>No se han especificado todos los datos requeridos.</p>";
        }
        // Si han habido errores se muestran, sino se mostrán los mensajes
         if( count($aErrores) > 0 )
        {
            echo "<p>ERRORES ENCONTRADOS:</p>";
            // Mostrar los errores:
            for( $contador=0; $contador < count($aErrores); $contador++ )
                echo $aErrores[$contador]."<br/>";
        }
        else
        {
            // Mostrar los mensajes:
            for( $contador=0; $contador < count($aMensajes); $contador++ )
                echo $aMensajes[$contador]."<br/>";
        }
    }
    else
    {
        echo "<p>No se ha enviado el formulario.</p>";
    }
    echo "<p><a href='03_form3.html'>Haz clic aquí para volver al formulario</a></p>";

/*function validar_dni($dni){
	$letra = substr($dni, -1);
	$numeros = substr($dni, 0, -1);
	if ( substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros%23, 1) == $letra && strlen($letra) == 1 && strlen ($numeros) == 8 ){
		echo 'valido';
	}else{
		echo 'no valido';
	}
}
 
validar_dni('73547889F'); // válido
validar_dni('73547889M'); // no válido
validar_dni('73547889'); // no válido */
 /*
        Función que comprueba si se ha añadido correctamente el codigo postal
           @param string $cadena
           @return boolean
        */
    /*   function validaPostal ($cadena)
       {
          //Comrpobamos que realmente se ha añadido el formato correcto
         if(preg_match('/^[0-9]{5}$/i', $cadena)) 
             //La instruccion se cumple
             return true;
          else 
             //Contiene caracteres no validos
             return false; 

       }


?>

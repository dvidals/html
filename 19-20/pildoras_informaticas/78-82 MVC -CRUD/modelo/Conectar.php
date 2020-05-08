<?php

    class Conectar{

        public static function conexion (){

            try{

                $conexion=new PDO ('mysql:host=localhost;dbname=pruebas','root','');//creamos la conexión, 3 argumentos separados por comas.
            
                $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
                $conexion->exec("SET CHARACTER SET UTF8");
                //echo "Conexión OK";
        
            }catch(Exception $e){
        
                die('Error: '.$e->GetMessage());
                echo "Línea del error: ".$e->getLine();	
        
            }

            return $conexion;

        }
    }
	
	
	?>



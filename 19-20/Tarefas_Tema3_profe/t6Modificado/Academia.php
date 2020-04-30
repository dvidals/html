<?php

spl_autoload_register(function ($nombre_clase) {
    include_once $nombre_clase . '.php';
});

class NifExistenteException extends Exception{};

class Academia {
   const NOME="TEIS";

   private static array $arrayProfesores = array();
   private static array $arrayAlumnos = array();

   public static function addProfesores(Profesor ...$profesores) : void {
        $arraytemp=array();
        foreach ($profesores as $prof) {
            if (!empty(self::$arrayProfesores)) {
                foreach (self::$arrayProfesores as $key => $elem) {
                    if ($elem===$prof) continue 2;
                    elseif ($elem->nif===$prof->nif) {
                        throw new NifExistenteException();
                    }
                } 
            }
            $arraytemp[]=$prof;
       }
       // Solo se añaden si no saltó la excepción en ninguno
       self::$arrayProfesores=array_merge(self::$arrayProfesores,$arraytemp);
   }

   public static function addAlumnos(Alumno ...$alumnos) : void {
       foreach ($alumnos as $alumno) {
            if (!empty(self::$arrayAlumnos)) {
                foreach (self::$arrayAlumnos as $key => $elem) {
                    if ($elem===$alumno) continue 2;
                } 
            }
            self::$arrayAlumnos[]=$alumno;
        }
    }

    public function __get($atributo) {  
        if (property_exists(__CLASS__, $atributo)) {  
            return $this->$atributo;  
        }  
        return NULL;  
    }

   public static function printInfo() : string {
    $cad='<br /><br /><br />PROFESORES: <br /><br />';
    foreach(self::$arrayProfesores as $prof) {
        $cad .= $prof.'<br />';
    }
    $cad .= '<br />ALUMNOS: <br />';
    foreach(self::$arrayAlumnos as $alumno) {
        $cad .= $alumno.'<br />';
    }
    return $cad;
   }
}
?>


<?php

include_once("Objeto_Blog.php");

class Manejo_Objetos{

        private $conexion;

        public function __construct($cone){
            $this->setConexion($cone);
        }

        public function setConexion(PDO $cone){
            $this->conexion=$cone;
        }


        public function getContenidoPorFecha(){
            $matriz=array(); //array con las entradas del Blog
            $contador=0; // pasando de registro a registro en esa matriz (son el número de entradas)
            $resultado=$this->conexion->query("select * from contenido order by fecha desc");
            while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
                $blog=new Objeto_Blog();
                $blog->setId($registro['Id']);
                $blog->setTitulo($registro['Titulo']);
                $blog->setComentario($registro['Comentario']);
                $blog->setFecha($registro['Fecha']);
                $blog->setImagen($registro['Imagen']);

                $matriz[$contador]=$blog; //almaceno en matriz un objeto blog en cada vuelta del bucle
                $contador++;
            }

            return $matriz;
        }

        public function insertaContenido(Objeto_Blog $blog){
            $sql="insert into contenido (Titulo, Fecha, Comentario, Imagen) values ('".$blog->getTitulo()."','"
            .$blog->getFecha()."','".$blog->getComentario()."','".$blog->getImagen()."')";

            $this->conexion->exec($sql);
        }
}

?>
<?php
// https://code.tutsplus.com/tutorials/understanding-and-applying-polymorphism-in-php--net-14362

class poly_base_Article {  
// package_component_Class (common way to separate classes into virtual namespaces 
// to avoid name collisions)

    public $title;
    public $author;
    public $date;
    public $category;
 
    public function  __construct($title, $author, $date, $category = 0) {
        $this->title = $title;
        $this->author = $author;
        $this->date = $date;
        $this->category = $category;
    }

    public function write(poly_writer_Writer $writer) {
        return $writer->write($this);
    }
    

}



interface poly_writer_Writer {                                 //Se crea un interfaz porque las dos clase XML y JSON van a implementar el método de ese interfaz
    public function write(poly_base_Article $obj);
}

class poly_writer_XMLWriter implements poly_writer_Writer {
    public function write(poly_base_Article $obj) {
        $ret = '<article>';
        $ret .= '<title>' . $obj->title . '</title>';
        $ret .= '<author>' . $obj->author . '</author>';
        $ret .= '<date>' . $obj->date . '</date>';
        $ret .= '<category>' . $obj->category . '</category>';
        $ret .= '</article>';
        return $ret;
    }
}

class poly_writer_JSONWriter implements poly_writer_Writer {
    public function write(poly_base_Article $obj) {
        $array = array('article' => $obj);
        return json_encode($array);
    }
}

class UnsupportedFormatException extends Exception{}

abstract class poly_base_Factory {
    public static function getWriter() {
        $format = $_REQUEST['format']; // grab request variable
        $class = 'poly_writer_' . $format . 'Writer';// construct class name and check existence
        if(class_exists($class)) {
            return new $class(); // return a new Writer object
        }
        throw new UnsupportedFormatException();
    }
}

$article = new poly_base_Article('Polymorphism', 'Steve', time(), 0);
 
try {
    $writer = poly_base_Factory::getWriter();
} catch (UnsupportedFormatException $e) {
    $writer = new poly_writer_XMLWriter();
    //$writer2 = new poly_writer_JSONWriter();

}
 
echo $article->write($writer);
//echo $article->write($writer2);


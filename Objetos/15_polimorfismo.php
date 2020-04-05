<?php

class poly_base_Article {   //Sería la clase Article, pero dentro de base y está a su vez dentro de poly.
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

}


function write($obj, $type) {
    $ret = '';
    switch($type) {
        case 'XML':
            $ret = '<article>';
            $ret .= '<title>' . $obj->title . '</title>';
            $ret .= '<author>' . $obj->author . '</author>';
            $ret .= '<date>' . $obj->date . '</date>';
            $ret .= '<category>' . $obj->category . '</category>';
            $ret .= '</article>';
            break;
        case 'JSON':
            $array = array('article' => $obj);
            $ret = json_encode($array);
            break;
    }
    return $ret;
}
$article = new poly_base_Article('Polymorphism', 'Steve', time(), 0);

echo write($article,'XML');
echo write($article,'JSON');

<?php
declare(strict_types=1);

class Entidad {
    protected $meta;
    private $a;

    function __construct(array $meta = null){
        $this->meta = $meta;
    }

    function __destruct(){
        echo "objeto elminado".__CLASS__."<br/>";
    }
}

class Tweet extends Entidad {
    protected $id;
    protected $text;

    function __construct ($id, $text, array $meta = null){
        $this->id = $id;
        $this->text = $text;
        parent::__construct($meta); //estás llamando a un método de la clase padre. En este caso se prodría hacer $this->meta=$meta por ser meta protected, pero no podría si fuese private.
    }

    

    function __get($property){
        if(property_exists($this, $property)) {
            return $this->$property;
        }
        else echo 'llamada a propiedad inexistente ('.$property . ') de la clase ' . __CLASS__;

    }


function __set($atributo,$valor){
   $this-> $atributo =$valor;
}

    function __destruct(){
        echo "objeto $this->id elminado". __CLASS__ .'<br/>';
    }

}

$tweet = new Tweet
(54, "Hola que tal");
$tweet = new Tweet
(55, "Hola que tal", array('php','programación'));

var_dump($tweet);

echo $tweet->text . '<br/>';
print_r($tweet->meta); echo '<br/>';

var_dump($tweet);

echo $tweet->noexisto . '<br/>'; // Devuelve: Esta propiedad no existe!

//si se hace un unset($tweet) es cuando se llama al método mágico _destruct. Diferencia entre unset($tweet) da error var_dump y $tweet=null no da error var_dump porque el objeto existe;
//unset ($tweet);
unset($tweet->id);
var_dump($tweet);
echo '<br/>...';
<?php
declare (strict_types=1);
class Chachi{
    public static $a=0;
    public $b=0;

    function __construct(){
        echo(++self::$a);
        echo(++$this->b);
    }
    
    function setChachi(int $a, int $b){
        self::$a=$a;
        $this->b=$b;

    }
}

$a=new Chachi; echo'</br>';
$a=new Chachi; echo'</br>';
$b=new Chachi; echo '</br>';
$b->setChachi(5,4); echo'</br>';
//$b->setChachi(5,4.1); echo'</br>';
echo Chachi::$a;echo $b->b;echo'</br>'; //para mostar lo que hay en $a y  $b
$b=new Chachi; echo'</br>';

//1,1 //2,1//3,1//6,1.
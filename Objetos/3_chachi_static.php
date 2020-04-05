<?php 

declare(strict_types = 1);

class Chachi {

	public static $a=0;
	public $b=0;
	
	function __construct() {
		//echo (++self::$a);
            echo (++Chachi::$a);
		echo (++$this->b);
	}

	function setChachi(int $a, int $b) {
		//self::$a=$a;
            Chachi::$a=$a;
		$this->b=$b;
	}
}

$a = new Chachi;echo"</br>";
$a = new Chachi;echo"</br>";
$b = new Chachi;echo"</br>";
//$b->setChachi('5', 4.1);
$b->setChachi(5, 4);
echo Chachi::$a;echo"</br>";
echo $b->b;echo"</br>";
$b = new Chachi;

<?php 

declare(strict_types = 1);

class Chachi {

	public static $a=0;
	public $b=0;
	
	function __construct() {
		echo (++self::$a);
		echo (++$this->b);
	}

	function setChachi(int $a, int $b) {
		self::$a=$a;
		$this->b=$b;
	}
}

$a = new Chachi;
$a = new Chachi;
$b = new Chachi;
//$b->setChachi('5', 4.1);
$b->setChachi(5, 4);
echo Chachi::$a.'<br/>';
echo $b->b;
$b = new Chachi;

<?php
/*Tarefa 2. Definición de construtores e métodos.
Crear unha clase Persoa con tres propiedades (nome, data de nacemento e sexo) que nondeben ser accesibles directamente dende o exterior. 
Define un construtor que pode recibir como parámetro as 3 propiedades ou unicamente as dúas primeiras. Nese caso o valor que debe tomar o atributo sexo é 'H'.
Ao mostrar o sexo debe devolver 'home' se o valor de sexo é 'H', 'muller' se o valor de sexo é 'M', é descoñecido para calquera outro valor.
A clase debe incluír un método de nome diasVivo que devolverá información relativa aos días que pasaron dende a data de nacemento da persoa,
 empregando a clase DateTime dePHP, da forma: 5 anos, 3 meses, 14 días, un total de 1932 días
 Un exemplo da saída podería ser:
 Pedro ten 5 anos, 3 meses, 25 días, un total de 1943 días.
 O seu sexo é: home.
 */

 //https://programacion.net/articulo/calcular_la_diferencia_entre_dos_fechas_con_php_1566

 //https://www.baulphp.com/contar-dias-entre-fechas-php-ejemplos/

 /*

 function dias_transcurridos($fecha_i,$fecha_f)
{
	$dias	= (strtotime($fecha_i)-strtotime($fecha_f))/86400;
	$dias 	= abs($dias); $dias = floor($dias);		
	return $dias;
}
// Ejemplo de uso:
echo dias_transcurridos('2012-07-01','2012-07-18');
// Salida : 17

 */

 class Persoa extends DateTime{

    /*
    public function __toString() {
        return $this->format('Y-m-d H:i');
    }


    */


    private $nome;
    private $nacemento;
    private $sexo;
    public $df;

    function __construct($nome,$nacemento,$sexo)
    {
        $this->nome=$nome;
        $this->nacemento=$nacemento;
        $this->sexo='H';
        if ($this->sexo='H') $sexo='home';
        elseif($this->sexo='M') $sexo='muller';
        else $sexo='descoñecido';
    }

    /*
    public function diasVivo($now = 'NOW') {
        if(!($now instanceOf DateTime)) {
            $now = new DateTime($now);
        }
        return parent::diff($now);
    }

*/

function get_format($d1,$d2) {
    $df=$d1->diff($d2);

    $str = '';
    $str .= ($df->invert == 1) ? ' - ' : '';
    if ($df->y > 0) {
        // anos
        $str .= ($df->y > 1) ? $df->y . ' anos ' : $df->y . ' ano ';
    } if ($df->m > 0) {
        // meses
        $str .= ($df->m > 1) ? $df->m . ' meses ' : $df->m . ' mes ';
    } if ($df->d > 0) {
        // días
        $str .= ($df->d > 1) ? $df->d . ' días ' : $df->d . ' día ';
    
    }

    $str.= ', un total de '.(strtotime($d1)-strtotime($d2))/86400;
    $str.=' días';

    echo $str;
}

function diasVivos($df) {

    $str = '';
    $str .= ($df->invert == 1) ? ' - ' : '';
    if ($df->d > 0) {
        // days
        $str .= ($df->d > 1) ? $df->d . ' días ' : $df->d . ' día ';
    
    }

    echo $str;
}



 }

 $date1 = new DateTime("1990-04-02");
$date2 = new DateTime("now");
//$diff = $date1->diff($date2);
echo Persoa::get_format($date1,$date2);

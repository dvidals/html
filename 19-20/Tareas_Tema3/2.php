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

//https://desarrolloweb.com/articulos/calcular-dias-entre-dos-fechas-php.html

/*
function dias_transcurridos($fecha_i,$fecha_f)
{
$dias    = (strtotime($fecha_i)-strtotime($fecha_f))/86400;
$dias     = abs($dias); $dias = floor($dias);
return $dias;
}
// Ejemplo de uso:
echo dias_transcurridos('2012-07-01','2012-07-18');
// Salida : 17
 */

class Persoa
{

    /*
    public function __toString() {
    return $this->format('Y-m-d H:i');
    }
     */

    private $nome;
    private $nacemento;
    private $sexo;
    public $df;

    public function __construct($nome, DateTime $nacemento, $sexo='H')
    {
        $this->nome = $nome;
        $this->nacemento = $nacemento;
        $this->sexo = $sexo;
        var_dump($this);
        if ($this->sexo == 'H') {
            $this->sexo = 'O seu sexo é: home';
        } elseif ($this->sexo == 'M') {
            $this->sexo = 'O seu sexo é: muller';
        } else {
            $sexo = 'descoñecido';
        }

        var_dump($this);
    }

    public function __get($atributo)
    {
        return $this->$atributo;
    }

    public function verInformación()
    {
        echo "$this->nome  ten " . $this->diasVivo() . "<br/> O seu sexo é: $this->sexo"; //da igual que se ponga $nacemento en este punto
    }

    public function diasVivo()
    {

        $d2 = new DateTime("now");
        $d1 = $this->nacemento;

        $ano1 = $d1->format('Y');
        $ano2 = $d2->format('Y');
        $mes1 = $d1->format('m');
        $mes2 = $d2->format('m');
        $dia1 = $d1->format('d');
        $dia2 = $d2->format('d');

        $timestamp1 = mktime(0, 0, 0, $mes1, $dia1, $ano1);
        $timestamp2 = mktime(0, 0, 0, $mes2, $dia2, $ano2);
        $segundos_diferencia = $timestamp1 - $timestamp2;
        $dias_diferencia = $segundos_diferencia / (60 * 60 * 24);
        $dias_diferencia = abs($dias_diferencia);
        $dias_diferencia = floor($dias_diferencia);

        $df = $d1->diff($d2);

        $str = '';
        $str .= 'ten ';

        $str .= ($df->invert == 1) ? ' - ' : '';
        if ($df->y > 0) {
            // anos
            $str .= ($df->y > 1) ? $df->y . '  anos ' : $df->y . ' año ';
        }if ($df->m > 0) {
            // meses
            $str .= ($df->m > 1) ? $df->m . ' meses ' : $df->m . ' mes ';
        }if ($df->d > 0) {
            // días
            $str .= ($df->d > 1) ? $df->d . ' días ' : $df->d . ' día';
            //var_dump($d1);
        }

        $str .= ", un total de $dias_diferencia días";

        //$str.= ', un total de '.(strtotime($d1)-strtotime($d2))/86400; //strtotime trabaja con strings no con objetos
        //$str.=' días';

        echo $str;

        /*
        $fechaComoEntero1 = strtotime($d1);//no se puede usar con objetos solo con strings
        $fechaComoEntero2 = strtotime($d2);
        $ano1 = date("Y", $fechaComoEntero1);
        $ano2 = date("Y", $fechaComoEntero2);
        $mes1 = date("m", $fechaComoEntero1)+1;
        $mes2 = date("m", $fechaComoEntero2)+1;
        $dia1 = date("d", $fechaComoEntero1);
        $dia2 = date("d", $fechaComoEntero2);
         *
         */
        /*
        $d1->date=$fecha1;
        $d1->m=$mes1;
        $d1->d=$dia2;
        $d2->y=$ano2;
        $d2->m=$mes2;
        $d2->d=$dia2;
         */

        /*
    $timestamp1 = mktime(0,0,0,$mes1,$dia1,$ano1);
    $timestamp2 = mktime(0,0,0,$mes2,$dia2,$ano2);
    $segundos_diferencia = $timestamp1 - $timestamp2;
    $dias_diferencia = $segundos_diferencia / (60 * 60 * 24);
    //$dias_diferencia = abs($dias_diferencia);
    $dias_diferencia = floor($dias_diferencia);

    echo "<br/>";
    var_dump( $d1);echo "<br/>";
    echo $d1->date;echo "<br/>";
    var_dump( $fecha1);echo "<br/>";
    echo $ano1;echo "<br/>";
    echo $dias_diferencia;
     */

    }

/*
function diasVivos($df) {

$str = '';
$str .= ($df->invert == 1) ? ' - ' : '';
if ($df->d > 0) {
// days
$str .= ($df->d > 1) ? $df->d . ' días ' : $df->d . ' día ';

}

echo $str;
}
 */

}

$date1 = DateTime::createFromFormat('Y-m-d',"1990-04-02");

$persoa1 = new Persoa('Pedro', $date1);
var_dump($persoa1);

echo $persoa1->nome . " ";
$persoa1->diasVivo();
echo "<br/>";
echo $persoa1->sexo;

//$diff = $date1->diff($date2);
echo "<br/>";
echo "<br/>";
echo "<br/>";
$persoa1->verInformación();

//var_dump($date1);

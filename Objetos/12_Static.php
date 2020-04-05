<?php 

abstract class ElTiempo {
  
    public static $casos = ['frio', 'templado', 'calor'];

    public static function celsiusToFarenheit($c){
      return $c *( 9 / 5) + 32;
    }

    public static function determineTempCondition($f){
      if($f < 40){
        return self::$casos[0];
      } elseif($f < 70){
        return self::$casos[1];
      } else {
        return self::$casos[2];
      }
    }

  }

  print_r(ElTiempo::$casos); echo '<br/>';
  echo ElTiempo::celsiusToFarenheit(20); echo '<br/>';
  echo ElTiempo::determineTempCondition(80); echo '<br/>';

  $objeto = new ElTiempo;


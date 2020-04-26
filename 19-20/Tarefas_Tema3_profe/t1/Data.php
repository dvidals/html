<?php

declare(strict_types=1);

 class Data {
   private const dias = array("Domingo","Luns","Martes","Mércores","Xoves","Venres","Sábado");
   private const meses = array("Xaneiro","Febreiro","Marzo","Abril","Maio","Xuño","Xullo",
      "Agosto","Setembro", "Outubro","Novembro","Decembro"); 

   private static string $calendario = "Calendario gregoriano";

    public static function getData() : string {
       return self::dias[date('w')] . " " . date('d') . " de " .
               self::meses[date('n')-1] . " do " . date('Y');

        // setlocale(LC_TIME, 'gl_ES.UTF-8');
         //return (strftime("%A %e de %B do %Y"));
    } 
    public static function getHora() : string {
       //return date('H') . ':' . date('i') . ':' . date('s');
       //return strftime("%H:%M:%S");
       return date('H:i:s');
    }
    public static function getDataHora() : string {
       return "Hoxe é ". self::getData() . ' e son as ' . self::getHora();
    }
    public static function getCalendario() : string {
       return Data::$calendario;
    }
 }
 



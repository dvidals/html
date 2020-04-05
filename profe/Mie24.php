<?php

declare(strict_types=1);

function palindromo(string $string): bool
{
    $no_permitidas = array("á", "é", "í", "ó", "ú", "Á", "É", "Í", "Ó", "Ú", "ñ", "À", "Ã", "Ì", "Ò", "Ù", "Ã™", "Ã ", "Ã¨", "Ã¬", "Ã²", "Ã¹", "ç", "Ç", "Ã¢", "ê", "Ã®", "Ã´", "Ã»", "Ã‚", "ÃŠ", "ÃŽ", "Ã”", "Ã›", "ü", "Ã¶", "Ã–", "Ã¯", "Ã¤", "«", "Ò", "Ã", "Ã„", "Ã‹");
    $permitidas = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U", "n", "N", "A", "E", "I", "O", "U", "a", "e", "i", "o", "u", "c", "C", "a", "e", "i", "o", "u", "A", "E", "I", "O", "U", "u", "o", "O", "i", "a", "e", "U", "I", "A", "E");
    $eliminables = array(' ', ',', '.', ';', ':', '-', '´', '\"', '\'', '¡', '¿', '!', '?');

    $string = str_replace($eliminables, "", $string);
    $string = str_replace($no_permitidas, $permitidas, $string);
    $string = strtolower($string);

    // Opción 1
    // $len = strlen($string);
    // for ($i = 0; $i < $len / 2; $i++) {
    //     if ($string[$i] != $string[$len - 1 - $i]) return FALSE;
    // }
    // return TRUE;

    // Opción 2
    return $string == strrev($string) ? TRUE : FALSE;
}

$array_pruebas = array(
    "abccba",
    "abcba",
    "",
    " 1 ",
    "ab- -ba",
    "dabale arroz a la zorra el abad",
    "No subas,abusón",
    "Adán no cede con Eva y Yavé no cede con nada",
    (string)23832,//yo: tuve que añadirle (string) a la solución del profesor porque sino cascaba, no admite integer cuando se declara en la función como entrada un string
    // Negativos
    "ab",
    "abc"
);

//foreach ($array_pruebas as $k => $v)
   //echo var_dump($v) . " : " . (palindromo($v) ? "TRUE" : "FALSE") . "<br/>";

foreach ($array_pruebas as $v) echo var_dump($v).palindromo($v)? "TRUE": "FALSE";

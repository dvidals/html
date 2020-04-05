<?php

// Ejemplo de funciones como parámetro

function impar($var)
{ // Retorna siempre que el número entero sea impar
    //return ($var%2!=0);
    return ($var & 1); // Se utiliza el operador booleano por ser más eficiente

}

function par($var)
{ // Retorna siempre que el número entero sea par
    return (!($var & 1));
}

function duplicar($var){
    return $var*2;  
}

$array1 = array("a" => 1, "b" => 2, "c" => 3, "d" => 4, "e" => 5);
$array2 = array(6, 7, 8, 9, 10, 11, 12);

echo "Impar :\n";
print_r(array_filter($array1, "impar"));
echo "<br/>";
echo "Par:\n";
print_r(array_filter($array2, "par"));
echo "<br/>";
print_r(array_map("duplicar",$array1));
echo "<br/>";
print_r(array_map("duplicar",$array2));

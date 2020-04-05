<?php


function filtraNoNumericos($array)
{
    // foreach ($array as $key => $val)
    //     if (!is_numeric($val)) unset($array[$key]);
    // return ($array);

    // Usando array_filter con función de callback
    return (array_filter($array, "is_numeric"));
}


var_dump(filtraNoNumericos(array(1, "a", NULL, "3", 0, FALSE, TRUE, 5)));
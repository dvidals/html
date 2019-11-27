<?php   // Test para Mie22.php

declare(strict_types=0);

require "Mie22.php";
//require "Mie22b.php";

$paramSet = array(
    array(0, 0, 0),
    array(0, 0, 'a'),
    array(0, 4, 0),
    array(4, '4', 0),
    array(4, 3, 4)
);

foreach ($paramSet as $param) {
    try {
        echo '<br/><br/>ec2grad(' . implode(', ', $param) . '): ';
        var_dump(ec2grad($param[0], $param[1], $param[2]));
    } catch (Throwable $e) {
        echo ($e);
    }
}

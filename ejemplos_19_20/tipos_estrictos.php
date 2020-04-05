<?php

declare(strict_types=1);

function bar(int $foo): string {
    return $foo;
}

$result = bar(123);

var_dump($result);
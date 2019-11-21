<?php

    $users = ['jose', 'maria', 'ivana', 'yerma', 'antonio', 'luka', 'ivano' ];

    usort($users, function ($a, $b) {
        return ($a < $b) ? -1 : (($a > $b) ? 1 : 0);
    });
    print_r ($users);

    // equivalente a
    
    usort($users, function ($a, $b) {
        return $a <=> $b;
    });

?>

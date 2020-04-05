<?php

$users = ['branko', 'ivana', 'luka', 'ivano'];

usort($users, function ($a, $b) {
  return ($a < $b) ? -1 : (($a > $b) ? 1 : 0);
});
 print_r ($users);
usort($users, function ($a, $b) {
  return $a <=> $b;
});

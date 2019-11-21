<?php

$name = $_GET['name'] ?? 'N/A';

var_dump($name);
echo "<br/>";

// #1
if (isset($_GET['name']) && !empty($_GET['name']))
{
$name = $_GET['name'];
}
else {
$name = 'N/A';
}

var_dump($name);
echo "<br/>";


// #2
if (!empty($_GET['name']))
{
$name = $_GET['name'];
}
else {
$name = 'N/A';
}

var_dump($name);
echo "<br/>";


// #3
$name = ((isset($_GET['name']) && !empty($_GET['name']))) ? $_GET['name'] :'N/A';

var_dump($name);
echo "<br/>";


// #4
$name = (!empty($_GET['name'])) ? $_GET['name'] : 'N/A';

var_dump($name);
echo "<br/>";
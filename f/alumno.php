<?php

$file = fopen("panel-controla.php", "r") or exit("Unable to open file!");
//Output a line of the file until the end is reached
while(!feof($file))
{
echo fgets($file);
}
fclose($file);
?>


<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
for($x = 1; $x <= 100; $x++)
{
    for($y = 1; $y <= 100; $y++)
    {
        echo $x * $y. " ";
    }
    echo "<br>";
}
?>
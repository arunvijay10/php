<?php
function name($a, $b)
{
    echo $a+$b;
}
function unsets($name)
{
     unset($name);
}
$name="Arun Vijay";
echo "$name\n";

name(20,30);
echo "\n$name\n";
unsets($name);
echo "\n$name\n"

?>
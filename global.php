<?php
echo "this is a global varibale";
$x = 45;
$y = 35;
function addition()
{
    $GLOBALS['z']=$GLOBALS['x']+$GLOBALS['y'];
}
addition();
echo "\nThe valiue of z is $z";
?>
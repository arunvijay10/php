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

echo "creating a second global variable";
$a=45;
$c=95;
function globally(){
    $GLOBALS['k']=$GLOBALS['a']+$GLOBALS['c'];
}
globally();
echo "\nthis is the value of k $k";
?>


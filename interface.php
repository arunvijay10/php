<?php

class int1
{
    function name()
    {
        echo "\n InterFace In Php\n";
    }
}

interface B
{
    function name();
    //    no body can be decalerd inside a function
    
}

class c implements B{
    function name()
    {
        echo "\n We Have To Right Upside Function otherwise there will be abstract error";
    }
}

$obj=new c();
$obj->name();
?>
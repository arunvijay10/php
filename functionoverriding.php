<?php
class clash
{
    public $init;
    function funover()
    {
        echo "this is will not override";
    }
}
class brand extends clash
{
    public $check;
    function funover()
    {
        echo "this will override the function";
    }
}

$obj= new brand();
$obj->funover();
?>
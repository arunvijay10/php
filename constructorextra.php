<?php

function testing()
{
    echo "Punjab is a great place\n";
}

class test
{
    public $age;
    public $year;
    public $work;

    function __construct($ages,$years,$works)
    {
        $this->age=$ages;
        $this->year=$years;
        $this->work=$works;
    }
    public function show()
    {
        echo "\nThis is the age\n".$this->age;
        echo "\nThis is the year\n".$this->year;
        echo "\nThis is the year of exper \n".$this->work;
    }

    public function punjab()
    {
        echo testing();
    } 
}  


$object = new test(1195,25,25);
echo $object->punjab();
$obj1 = new test(25,1995,2);
echo $obj1->show();

?>
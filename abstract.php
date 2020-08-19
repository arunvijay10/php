<?php
echo "This is a abstract Class Php PreProcessor Hypertext\n";

abstract class test
{
    public $var;
    public function test()
    {       
        echo "This is a abstract";

    }
    abstract public function nowork();//no object can be created by {"no this brackets can't be used} 
}

class inheri extends test{
    public $work;
    public function down(){
        echo "print message";
    } 
    public function nowork(){
        echo "\nwe have to write abstract function here\n";
        echo "\nerror is shown like this\n ";
        echo "\nPHP Fatal error:  Class inheri contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (test::nowork) in /home/user/Desktop/php/abstract.php on line 19\n";
    }
}



$obj= new inheri();
echo $obj->nowork();

?>
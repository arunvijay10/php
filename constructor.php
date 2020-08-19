<?php
class constructing
{
    public $house;
    public $colour;

    function __construct($house,$colour)
    {
        echo "Constructing A House\n";
        $this->house=$house;
        $this->colour=$colour;

    }

    public function price($p)
    {
        echo "what is the investment you want to invest";
        $this->house=$p;
    }
    public function colour($c)
    {
        echo "Enter the colour you want for your house";
        $this->colour=$c;
    }
    public function priceseeing()
    {
        echo "\nThis is the price you have invested\n ";
        echo $this->house;
    }
    public function wifechoice()
    {
        echo "\nThis is the Colour of your choice \n";
        echo $this->colour;
    }

    public function displayconst()
    {
        echo "This is the house you Gonna bulid\n".$this->house;
        echo "This is your choice not wife choice\n".$this->colour;
    }
}

class extra extends constructing
{
    public $execute;
    
    function __construct()
    {
        parent::__construct();
        echo"\nfully gonna build\n";
    }

    public function executes()
    {
    echo "\nyour house is Ready\n";   
    }
}




// $obj =new constructing();
// $obj->price("145 Lakh");
// $obj->colour("Wife choice");echo $obj->priceseeing();
// echo $obj->wifechoice();
// $ex =new extra();
// echo $ex->executes();

$con = new constructing("\n5 Storey","Black And White");
$con->displayconst();

?>
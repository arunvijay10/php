<?php
class constructing
{
    public $house;
    public $colour;

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
}
$obj =new constructing();
$obj->price("145 Lakh");
$obj->colour("Wife choice");
echo $obj->priceseeing();
echo $obj->wifechoice();
?>
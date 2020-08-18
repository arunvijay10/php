<?php
class anything{
public $name;
private $age;
protected $phone;

public function setname($n)
{
	$this->name=$n;
}
public function setage($a)
{
	$this->age=$a;
}
public function setphone($p)
{
	$this->phone=$p;
}
public function  fetch()
{
	return $this->name;
}
public function getage()
{
	return $this->age;
}
}

$objcreate = new anything();
$objcreate->setname("ArunVijay\n");
echo $objcreate->fetch();
$objcreate->setage("25");
echo $objcreate->getage();

?>



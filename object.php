<?php
class student
{
public $name;
public function addname($n)
{
	$this->name=$n;
}
public function getname()
{
	return $this->name;
}
}
$obj = new student();
$obj->addname("arun Vijay");
echo $obj->getname();



?>

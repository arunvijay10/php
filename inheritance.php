<?php

//creating a constructor



class  students{
	protected $class;
	protected $fee;
	protected $books;

function __construct()
{
        echo "name this as a contstructor\n";
}

}

class student1 extends students
{
	public $anyone;

	function __construct()
	{
	parent::__construct();
	echo "this is a student one";
}
}

$objstudent1 = new student1();
?>


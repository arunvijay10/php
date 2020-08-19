<?php

//Setting a variable to get the user fname and lname
$fnames=$_POST['fname'];
$lnames=$_POST['lname'];
if($fnames=="admin" && $lnames=="admin")
{	
	echo"Login is Sucessfull";
	}
	else{
echo"invalid";		
}

var_dump($_POST);


?>

<?php

$username= $_POST['fname'];
$lastname= $_POST['lname'];
$password1 =$_POST['pass1'];
$password2 =$_POST['pass2'];

if($password1==$password2)
{
	echo "Login is Successfull";
}
else
{
	echo "Passsword doesn't match";
}




?>

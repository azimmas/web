<?php 
	include 'function.php';
	$firstname =  $_POST['firstname'];
	$lastname =  $_POST['lastname'];
	$email=  $_POST['email'];
	$login =  $_POST['login'];
	$password =  $_POST['password'];

	if(findByLogin($login)){
		echo "registration failed";
	}else{
		registrationFunc($firstname,$lastname,$email,$login,$password);
	}
	//echo "$firstname $lastname $email $login $password ";
 ?>
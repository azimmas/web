<?php 
	session_start();
	include 'function.php';
	$login1 =  $_POST['login'];
	$pword1 =  $_POST['pword'];


	if (LoginFunc($login1,$pword1)!=NULL) {
			$_SESSION['uid'] = LoginFunc($login1,$pword1);
			header("Location:user/index.php"); 
	}
 ?>
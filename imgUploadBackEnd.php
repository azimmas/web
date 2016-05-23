<?php 
	include '../function.php';
	session_start();

	$userid = $_SESSION['uid'];

	$imgheader = $_POST['img_header'];

	$folderPath = "userArt/";
	
	if(is_uploaded_file($_FILES['imgArt']['tmp_name'])){
		
		$filename = $_FILES['imgArt']['name'];
		$localtime = date('d-m-Y-h-i-s');

		$fullpath = $folderPath.$localtime."-".$filename;

		addNewArt($userid,$fullpath,$imgheader);
		move_uploaded_file($_FILES['imgArt']['tmp_name'], $fullpath);
		header("Location:index.php?link=art&notice=success");

		//echo "$userid $fullpath $imgheader";
		
	}
 ?>
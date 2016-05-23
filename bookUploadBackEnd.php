<?php 
    include '../function.php';
	session_start();
	$userid = $_SESSION['uid'];
	

	$bookUrl = $_POST['bookUrl'];
	$bh = $_POST['book_header'];
	$cover = $_FILES['cover']['tmp_name'];
	$desc = $_POST['description'];

	echo "$userid";
	
	$folderPath = "userBooks/";

	if(is_uploaded_file($_FILES['cover']['tmp_name'])){
		
		$filename = $_FILES['cover']['name'];
		$localtime = date('d-m-Y-h:i:s');

		$fullpath = $folderPath.$localtime."-".$filename;

		addNewBook($userid,$bh,$fullpath,$bookUrl,$desc);

		move_uploaded_file($_FILES['cover']['tmp_name'], $fullpath);

		header("Location:index.php?link=books&notice=success");
		
	}

 ?>
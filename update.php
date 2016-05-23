+		<?php
		// $urlArt = $_POST['imgArt'];
		include 'function.php';
		$name = $_POST['img_header'];
		$id = $_POST['id'];
		include 'connection.php';
		$folderPath = "userArt/";

		// if(is_uploaded_file($_FILES['imgArt']['tmp_name'])){
		
		$filename = $_FILES['imgArt']['name'];
		// $localtime = date('d-m-Y-h-i-s');

		// $fullpath = $folderPath.$localtime."-".$filename;

		// move_uploaded_file($_FILES['imgArt']['tmp_name'], $fullpath);

		$urlArt = $filename;
		$query = "UPDATE `art` SET `urlArt`= '$urlArt',`nameArt`= '$name' WHERE id=$id";
		// echo $query;
		$result = mysqli_query($connection,$query);
		header("location:index.php");
		// $query = "UPDATE `art` SET `urlArt`= '$urlArt',`nameArt`= '$name' WHERE id=$id";
		// echo $query;
		// $result = mysqli_query($connection, $query);
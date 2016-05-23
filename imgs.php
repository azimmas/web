<?php 
$id=$_GET['id'];
include 'connection.php';
$query = "SELECT * FROM art WHERE id=$id";
$result = mysqli_query($connection, $query);
$num = mysqli_num_rows($result);
		for($i=0;$i<$num;$i++){
			$row = mysqli_fetch_assoc($result);
 ?>
<img src="<?= $row['urlArt'] ?>"/>
<?php
}
?>
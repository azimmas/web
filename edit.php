		<?php
		$id = $_REQUEST['id'];
		include 'connection.php';
		$query = "SELECT * FROM art WHERE id=$id";
		echo $query;
		$result = mysqli_query($connection, $query);
		$num = mysqli_num_rows($result);
		for($i=0;$i<$num;$i++){
			$row = mysqli_fetch_assoc($result);
			?>
<article>
<div class=artheader>
	Add New Art
</div>
<div class="main">
  
 <form method="POST" enctype="multipart/form-data" action="update.php">
				Choose File:
				<input type="file"   name="imgArt" value="<?= $row['urlArt'] ?>"></br>
				Art header:
				<input type="text"   name="img_header" value="<?= $row['nameArt'] ?>"></br>
				<input type="hidden" name="id" value="<?= $row['id'] ?>">
				<input type="submit" value="Add">
	</form>

</div>
</article>
<?php
}
?>
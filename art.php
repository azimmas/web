<article>
		<div id="list">
			<?php 
				// showAllArt();
			include 'connection.php';
		$query = "SELECT * FROM art";
		if ($result = mysqli_query($connection,$query)) {
	    		while ($row = $result->fetch_assoc()) {
	        		$id=$row['id'];
	        		echo '
	        			<div class="video">
	        				<a href="imgs.php?id='.$id.'">
			        			<img src="'.$row['urlArt'].'">
			        			<br>
			        			<br>
			        			<p>'.$row['nameArt'].'</p>
			        			<p>';
							        $uuid = $row['uid'];					
					    			$query2 = "SELECT * FROM users WHERE id='$uuid'";
							        if ($result2 = mysqli_query($connection,$query2)) {
					    					while ($row2 = $result2->fetch_assoc()) {	
					    						echo $row2['fname']." ". $row2['lname'];			
											}
										}
			        			

			        			echo '</p>
	        				</a>
	        				<a href="delete.php?id='.$id.'">Delete /</a>
	        				<a href="edit.php?id='.$id.'">Edit</a>
	        			</div>
	        			';
				}
		}
			 ?>
		</div>
</article>
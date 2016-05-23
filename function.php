 <?php 
	function registrationFunc($fn,$ln,$em,$lg,$ps){
		include 'connection.php';
		$ps=md5($ps);
		$query = "INSERT INTO users(fname, lname, email, login, pword) VALUES ('$fn','$ln','$em','$lg','$ps')";
		$result = mysqli_query($connection,$query);
		header("Location:index.php?link=Login");
	}
	function findByLogin($log){
		include 'connection.php';
		$query = "SELECT * FROM users WHERE login='$log'";
		
		if ($result = mysqli_query($connection,$query)) {
	    		while ($row = $result->fetch_assoc()) {
	        		//printf ("%s (%s)\n", $row["Name"], $row["CountryCode"]);
	        		if($row['login']==NULL){
	        			return false;
	        		}else return true;
    			}

    		//$result->free();
		}
	}
	function LoginFunc($login,$pword){
		include 'connection.php';
		$pword=md5($pword);
		// SELECT * FROM `users` WHERE 1
		$query = "SELECT * FROM users WHERE login='$login' AND pword = '$pword'";
		$propusk = false;
		if ($result = mysqli_query($connection,$query)) {
	    		while ($row = $result->fetch_assoc()) {
	        		//printf ("%s (%s)\n", $row["Name"], $row["CountryCode"]);
	        		if($row['pword']!=NULL){
						$propusk=true;
						$user = $row['id'];
					}
				}

    		//$result->free();
		}
		if($propusk) {
			return $user;  
		}else echo "failed";
	}
	function personalData($id){
		include 'connection.php';
		$query = "SELECT * FROM users WHERE id='$id'";
		if ($result = mysqli_query($connection,$query)) {
	    		while ($row = $result->fetch_assoc()) {
	        			echo "Name:".$row['fname']."<br>";
	        			echo "Surname:".$row['lname']."<br>";
	        			echo "Email:".$row['email']."<br>";
				}

    		//$result->free();
		}
	}
	function addNewArt($uid,$urlArt,$nameArt){
		include 'connection.php';
		$urlArt = "user/".$urlArt;
		$query = "INSERT INTO art VALUES (null,'$uid','$urlArt','$nameArt')";
		$result = mysqli_query($connection,$query);
	}
	function showAllArt(){
		include 'connection.php';
		$query = "SELECT * FROM art";
		if ($result = mysqli_query($connection,$query)) {
	    		while ($row = $result->fetch_assoc()) {
	        		$id=$row['id'];
	        		echo '
	        			<div class="video">
	        				<a href="#">
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
	        				<a href="delete.php?id= $id">D</a>
	        				<a href="edit.php?id= $id">E</a>
	        			</div>
	        			';
				}
		}
	}
	function addNewBook($uid,$nameBooks,$coverBook,$urlBooks,$bookDesc){
		include 'connection.php';
		$urlBooks = "user/".$urlBooks;
		$query = "INSERT INTO books VALUES (null,'$uid','$nameBooks','$coverBook','$urlBooks','$bookDesc')";
		$result = mysqli_query($connection,$query);
	}
	  
 ?>
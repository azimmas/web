<?php 
	session_start();
	if($_SESSION['uid']==NULL){
		header("Location:../index.php?link=login");
	}else $userid = $_SESSION['uid']; 

	if (isset($_GET['link'])) $link=$_GET['link']; else	$link="art";
	if (isset($_GET['notice'])) $notice = $_GET['notice']; else $notice = "";
	
 ?>
<!DOCTYPE html>
<html class="full">
<head>
	<title>My page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, minimumscale=1.0, maximum-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="../style/design.css">
</head>
<body class="full">
<div id="wrapping" class="shadow">
	<header class="shadow">
		<img id="menu" class="invisible" src="../img/icon1.png" onclick="menu();">
		<a href="index.php?link=art">
			<img id="logo" src="../img/ava5.png">
		</a>
		<p>
		<!-- Personal Information -->
		<?php 
			echo "$userid";
			include "../function.php";
			personalData($userid);
		 ?>		
		</p>
		<div>
			<a href="https://twitter.com/"><img src="../img/twitter.png" title="Twitter"></a>
			<a href="https://gmail.com"><img src="../img/gmail.png" title="Gmail"></a>
			<a href="https://instagram.com"><img src="../img/instagram.png" title="Instagram"></a>
			<a href="https://facebook.com"><img src="../img/facebook.png" title="Facebook"></a>
			</div>

	</header>

	<aside id="aside" class="shadow transition">
		<nav>
			<ul>
				<a href="index.php?link=art">
					<?php 
					if ($link=="art") {
					 	echo '<li id="current" title="..is part of you">Add Art</li>';
					 } else{
					 	echo "<li>Add Art</li>";
					 }
					 ?>
				</a>
				<a href="index.php?link=books" title="Do you like to read?">
				<?php 
					if ($link=="books") {
					 	echo '<li id="current" title="..is part of you"> Add Books</li>';
					 } else{
					 	echo "<li>Add Books</li>";
					 }
					 ?>
				</a>
				<a href="index.php?link=videos">
					<?php 
					if ($link=="videos") {
					 	echo '<li id="current" title="..is part of you">Add Videos</li>';
					 } else{
					 	echo "<li>Add Videos</li>";
					 }
					 ?>
				</a>
				
				<a href="index.php?link=mypage">
					<?php 
					if ($link=="mypage") {
					 	echo '<li id="current" title="..is part of you">My page</li>';
					 } else{
					 	echo "<li>My page</li>";
					 }
					 ?>
				</a>
				<a href="../index.php">
					<?php 
					if ($link=="logout") {
					 	echo '<li id="current" title="..is part of you">Logout</li>';
					 } else{
					 	echo "<li>Logout</>";
					 }
					 ?>
				</a>
			</ul>
		</nav>
	</aside>

<?php 
	if ($link=="art") include "article/addart.php"; 
	if ($link=="books") include "article/addbooks.php"; 
 	if ($link=="videos") include "article/addvideos.php";
	if ($link=="mypage") include "article/mypage.php";
	if ($link=="logout") include "article/LogIn.php"; 
 ?>

</div>

<script type="text/javascript">
	function menu(){
		if(document.getElementById("aside").style.marginLeft != "0px"){
			document.getElementById("aside").style.marginLeft = "0px";
		}else{
			document.getElementById("aside").style.marginLeft = "-200px";
		}
	}
</script>

</body>
</html>	
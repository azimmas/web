<?php
$id = $_REQUEST['id'];
include 'connection.php';
$query = "DELETE FROM art WHERE id=$id";
$result = mysqli_query($connection, $query);
header("location:index.php");
?>
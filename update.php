<?php
if (isset($_POST['Update'])) {
 include("config.php"); 
	$id = $_POST['id'];
	$name = $_POST['name'];
	$address = $_POST['address'];
	$conn->query("UPDATE playerInfo SET name='$name', address='$address' WHERE id=$id");
	$_SESSION['message'] = "info updated!"; 
	header('location: show.php');
}
?>

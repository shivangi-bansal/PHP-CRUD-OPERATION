<?php
if(isset($_POST['submit'])){
 include("config.php"); 
$name = $_POST['name'];
$address = $_POST['address'];
$sql = "INSERT INTO playerInfo(name, address) VALUES('$name', '$address')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  header("Location: show.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>CRUD: CReate, Update, Delete PHP MySQL</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name" value="">
		</div>
		<div class="input-group">
			<label>Address</label>
			<input type="text" name="address" value="">
		</div>
		<div class="input-group">
  <input type="submit" name="submit" value="Submit Form" class="btn">
		</div>
	</form><br>
<a href="show.php">List all Record</a>
</body>
</html>

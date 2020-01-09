<?php 
	if (isset($_GET['edit'])) {
 include("config.php"); 
$id = $_GET['edit'];
$sql = "select * from playerInfo where id = $id";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<head>
	<title>CRUD: CReate, Update, Delete PHP MySQL</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form method="post" action="update.php" >
		<div class="input-group">
 <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
			<label>Name</label>
			<input type="text" name="name" value="<?php echo $row["name"]?>">
		</div>
		<div class="input-group">
			<label>Address</label>
			<input type="text" name="address" value="<?php echo $row["address"]?>">
		</div>
		<div class="input-group">
  <input type="submit" name="Update" value="Update" class="btn">
		</div>
	</form>
</body>
</html>
<?php 

}
?>




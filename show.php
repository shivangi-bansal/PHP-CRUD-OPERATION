

<?php

 include("config.php"); 
$sql = "select * from playerInfo";
$result = $conn->query($sql); ?>
<center><h2>Player Info</h2>
<?php
if ($result->num_rows > 0) {
?>

<table style="border:2px solid">
<tr>
<th>ID </th>
<th>Name</th>
<th>Address</th>
<th colspan="2">Action</th>

</tr>
<?php while($row = $result->fetch_assoc()) {  ?>
<tr>
<td> <?php echo $row['id'] ?> </td>
<td> <?php echo $row['name'] ?> </td>
<td> <?php echo $row['address'] ?> </td>
<td> <a href="edit.php?edit=<?php echo $row['id']; ?>" class="edit_btn"> EDIT </a> </td>
<td> <a href="show.php?del=<?php echo $row['id']; ?> " class="del_btn"> DELETE </a></td>
</tr>

<?php   } ?>
</table></center>
<?php } else {
  echo "0 results";
}

$conn->close();
?>




<!DOCTYPE html>
<html>
   <head>
     <link href="style.css" rel='stylesheet'>
   </head>
   <body>
<a href="index.php">Insert new Record</a>   
  </body>
 </html>

  
<?php
if (isset($_GET['del'])) {
	$id = $_GET['del'];
 include("config.php"); 
	$conn->query("DELETE FROM playerInfo WHERE id=$id");
	$_SESSION['message'] = "Address deleted!"; 
	header('location: show.php');
}
?>




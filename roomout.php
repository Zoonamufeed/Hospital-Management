<!DOCTYPE html>
<html>

<head>

<title> Room form output</title>

</head>

<body>

<?php
require ('config.php');
  //taking all 4 values from the form data input
  $r_id=$_REQUEST["r_id"];
 $bed=$_REQUEST["bed"];
 $admit_d=$_REQUEST["admit_d"];
 $discharge_d=$_REQUEST["discharge_d"];
  
// perfroming insert query

$sql = "INSERT INTO room (r_id, bed, admit_d,discharge_d) VALUES
 ('$r_id','$bed', '$admit_d', '$discharge_d')";

if (mysqli_query($conn, $sql)){
	echo"<h3>data stored in a database successfully."
	."Please browse ypor localhost PHP my admin"
	."to view the updated data</h3>";
	
	echo nl2br("\n$r_id\n$bed\n$admit_d\n$discharge_d");}
else {
	echo "ERROR: Hush! sorry $sql."
	.mysqli_error($conn);
}
  mysqli_close($conn);
?>
</body>
</html>

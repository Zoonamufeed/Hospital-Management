<!DOCTYPE html>
<html>
<head>
<title> payment form output</title>
</head>
<body>
<?php
require ('config.php');

  //taking all 4 values from the form data input
  
  $pay_id=$_REQUEST["pay_id"];
  $p_id=$_REQUEST["p_id"];
  $total=$_REQUEST["total"];
 $tot_date=$_REQUEST["tot_date"];

 

// perfroming insert query

$sql = "INSERT INTO pay (pay_id, p_id, total,tot_date) VALUES
 ('$pay_id','$p_id', '$total', '$tot_date')";

if (mysqli_query($conn, $sql)){
	echo"<h3>data stored in a database successfully."
	."Please browse ypor localhost PHP my admin"
	."to view the updated data</h3>";
	
	echo nl2br("\n$pay_id\n$p_id\n$total\n$tot_date");}
else {
	echo "ERROR: Hush! sorry $sql."
	.mysqli_error($conn);
}
  mysqli_close($conn);
?>
</body>
</html>
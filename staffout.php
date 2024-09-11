
<!DOCTYPE html>
<html>
<head>
<title> Staff form output</title>
</head>

<body>
<?php
require ('config.php');
  
  //taking all 4 values from the form data input
  
  $staff_id=$_REQUEST["staff_id"];
  $sfirst_n=$_REQUEST["sfirst_n"];
  $slast_n=$_REQUEST["slast_n"];
 $pos=$_REQUEST["pos"];
 $p_num=$_REQUEST["p_num"];
 $email=$_REQUEST["email"];
  

// perfroming insert query

$sql = "INSERT INTO staff (staff_id, sfirst_n, slast_n,pos,p_num,email) VALUES
 ('$staff_id','$sfirst_n', '$slast_n', '$pos','$p_num','$email')";

if (mysqli_query($conn, $sql)){
	echo"<h3>data stored in a database successfully."
	."Please browse ypor localhost PHP my admin"
	."to view the updated data</h3>";
	
	echo nl2br("\n$staff_id\n$sfirst_n\n$slast_n\n$pos\n$p_num\n$email");}
else {
	echo "ERROR: Hush! sorry $sql."
	.mysqli_error($conn);
}
  mysqli_close($conn);
?>
</body>
</html>
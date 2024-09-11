<!DOCTYPE html>
<html>

<head>

<title> Patient Table</title>

</head>

<body>

<?php
require ('config.php');
  
  //taking all 5 values from the form data input
  $p_id=$_REQUEST["p_id"];
 $first_name=$_REQUEST["first_name"];
 $last_name=$_REQUEST["last_name"];
 $gender=$_REQUEST["gender"];
  $phone_no=$_REQUEST["phone_no"];
 $email=$_REQUEST["email"];
 $address=$_REQUEST["address"];

// perfroming insert query

$sql = "INSERT INTO patient (p_id, first_name, last_name, gender, phone_no, email, address) VALUES
 ('$p_id', '$first_name', '$last_name', '$gender', '$phone_no', '$email', '$address')";

if (mysqli_query($conn, $sql)){
	echo"<h3>data stored in a database successfully."
	."Please browse ypor localhost PHP my admin"
	."to view the updated data</h3>";
	
	echo nl2br("\n$p_id\n$first_name\n$last_name\n$gender\n$phone_no
\n$email\n$address");}
else {
	echo "ERROR: Hush! sorry $sql."
	.mysqli_error($conn);
}
  mysqli_close($conn);
?>
</body>
</html>
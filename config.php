<?php
$servername= "localhost";
$username= "root";
$password= "";
$database= "healthcare";

//create connection
$conn =  mysqli_connect($servername,$username,$password,$database);

//check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "";
?>
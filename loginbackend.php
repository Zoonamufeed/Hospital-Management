<?php

include('config.php');

$username = $_POST["user"];
$password = $_POST["pass"];

$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);

$sql = "SELECT * FROM login WHERE username='$username' and password='$password'";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);

if ($count == 1) {
    echo "<h1><center>Login Successful</center></h1>";
    require_once("home.php");
} else {
    echo "<h1><center>Login failed. Invalid username or password.</center></h1>";
    require_once("login.php");
}
	?>
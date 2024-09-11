<?php

include_once 'config.php';
if(count($_POST) > 0){
	 $staff_id=$_REQUEST["staff_id"];
 $sfirst_n=$_REQUEST["sfirst_n"];
 $slast_n=$_REQUEST["slast_n"];
 $pos=$_REQUEST["pos"];
 $p_num=$_REQUEST["p_num"];
 $email=$_REQUEST["email"];

	$sql = "UPDATE staff SET sfirst_n='$sfirst_n', slast_n='$slast_n', pos='$pos', 
	p_num='$p_num',email='$email' WHERE staff_id='$staff_id'";

    if (mysqli_query($conn, $sql)) {
        $message = "Record Modified Successfully";
    } else {
        $message = "Error updating record: " . mysqli_error($conn);
    }
}
$stmt = mysqli_prepare($conn, "SELECT * FROM staff WHERE staff_id = ?");
mysqli_stmt_bind_param($stmt, "s", $_GET['staff_id']);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_array($result);
mysqli_close($conn);
?>

<html>
<head>
    <title>Update staff information </title>
	<style>
	body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
    }
    form {
        width: 400px;
        margin: 0 auto;
        padding: 20px;
        background-color: #ffffff;
        border: 1px solid #dddddd;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    h1 {
        text-align: center;
        color: #007bff;
    }
   .button {
        background-color: #007bff;
        color: #ffffff;
        border: none;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
    }
    .button:hover {
        background-color: #0056b3;
    }
    .message {
        text-align: center;
        margin-bottom: 10px;
        color: #007bff;
    }
	a {
    text-decoration: none;
    color: #007bff;
    }

    a:hover {
    text-decoration: overline;
    }
	</style>
</head>
<body>
    <center>
        <form name="frmUser" method="post" action="">
            <div><?php if (isset($message)) {echo $message;} ?></div>
            <div style="padding-bottom:5px;">
                <h1><a href="stafftable.php">Update Staff </a></h1>
            </div>
            Staff ID:
            <input type="hidden" name="Staff_id" value="<?php echo $row['staff_id']; ?>">
            <input type="text" name="staff_id" value="<?php echo $row['staff_id']; ?>">
            <br><br>
			First Name:
            <input type="text" name="sfirst_n" value="<?php echo $row['sfirst_n']; ?>">
            <br><br>
            Last Name:
            <input type="text" name="slast_n" value="<?php echo $row['slast_n']; ?>">
            <br><br>
            Position:
            <input type="text" name="pos" value="<?php echo $row['pos']; ?>">
            <br><br>
            Phone Number:
            <input type="tel" name="p_num" value="<?php echo $row['p_num']; ?>">
            <br><br>
			Email-Address:
            <input type="text" name="email" value="<?php echo $row['email']; ?>">
            <br><br>
            <input type="submit" name="submit" value="Submit" class="button">
			<br><a href="stafftable.php"> view </a>
        </form>
    </center>
</body>
</html>
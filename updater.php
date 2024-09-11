<?php

include_once 'config.php';
if(count($_POST) > 0){
	 $r_id=$_REQUEST["r_id"];
 $bed=$_REQUEST["bed"];
 $admit_d=$_REQUEST["admit_d"];
 $discharge_d=$_REQUEST["discharge_d"];
	$sql = "UPDATE room SET bed='$bed', admit_d='$admit_d', 
	discharge_d='$discharge_d' WHERE r_id='$r_id'";

    if (mysqli_query($conn, $sql)) {
        $message = "Record Modified Successfully";
    } else {
        $message = "Error updating record: " . mysqli_error($conn);
    }
}
$stmt = mysqli_prepare($conn, "SELECT * FROM room WHERE r_id = ?");
mysqli_stmt_bind_param($stmt, "s", $_GET['r_id']);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_array($result);
mysqli_close($conn);
?>
<html>
<head>
    <title>Update Room Data</title>
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
	<script>
	// display a message after submitting the form
    function showMessage(message) {
        var messageDiv = document.getElementById('message');
        messageDiv.innerText = message;
    }
</script>
</head>
<body>
    <center>
        <form name="frmUser" method="post" action="">
            <div><?php if (isset($message)) {echo $message;} ?></div>
            <div style="padding-bottom:5px;">
                <h1><a href="roomtable.php">Update room </a></h1>
            </div>
            Room ID:
            <input type="hidden" name="r_id" value="<?php echo $row['r_id']; ?>">
            <input type="text" name="r_id" value="<?php echo $row['r_id']; ?>">
            <br><br>
            Bed No:
            <input type="text" name="bed" value="<?php echo $row['bed']; ?>">
            <br><br>
            Admit Date:
            <input type="date" name="admit_d" value="<?php echo $row['admit_d']; ?>">
            <br><br>
            Discharge Date:
            <input type="date" name="discharge_d" value="<?php echo $row['discharge_d']; ?>">
            <br><br>
            <input type="submit" name="submit" value="Submit" class="button">
			<br><a href="roomtable.php"> view </a>
        </form>
    </center>
</body>
</html>
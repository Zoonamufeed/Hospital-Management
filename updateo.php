<?php
include_once 'config.php';
if(count($_POST) > 0){
	 $schedule_id=$_REQUEST["schedule_id"];
 $staff_id=$_REQUEST["staff_id"];
 $op_date=$_REQUEST["op_date"];
 $start_time=$_REQUEST["start_time"];
 $end_time=$_REQUEST["end_time"];
	$sql = "UPDATE operation SET schedule_id='$schedule_id', staff_id='$staff_id',
	op_date='$op_date', start_time='$start_time',end_time='$end_time' WHERE schedule_id='$schedule_id'";

    if (mysqli_query($conn, $sql)) {
        $message = "Record Modified Successfully";
    } else {
        $message = "Error updating record: " . mysqli_error($conn);
    }
}
$stmt = mysqli_prepare($conn, "SELECT * FROM operation WHERE schedule_id = ?");
mysqli_stmt_bind_param($stmt, "s", $_GET['schedule_id']);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_array($result);
mysqli_close($conn);
?>
<html>
<head>
    <title>Update schedule information </title>
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
                <h1><a href="stafftable.php">Update schedule </a></h1>
            </div>
            Schedlue ID:
            <input type="hidden" name="schedule_id" value="<?php echo $row['schedule_id']; ?>">
            <input type="text" name="schedule_id" value="<?php echo $row['schedule_id']; ?>">
            <br><br>
			staff ID:
            <input type="text" name="staff_id" value="<?php echo $row['staff_id']; ?>">
            <br><br>
            Operation Date:
            <input type="Date" name="op_date" value="<?php echo $row['op_date']; ?>">
            <br><br>
            Start Time:
            <input type="Time" name="start_time" value="<?php echo $row['start_time']; ?>">
            <br><br>
            End Date:
            <input type="Time" name="end_time" value="<?php echo $row['end_time']; ?>">
            <br><br>
            <input type="submit" name="submit" value="Submit" class="button">
			<br><a href="optable.php"> view </a>
        </form>
    </center>
</body>
</html>
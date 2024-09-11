<?php
include_once 'config.php';
if(count($_POST) > 0){
	 $pay_id=$_REQUEST["pay_id"];
 $p_id=$_REQUEST["p_id"];
 $total=$_REQUEST["total"];
 $tot_date=$_REQUEST["tot_date"];
	$sql = "UPDATE pay SET pay_id='$pay_id', p_id='$p_id',
	total='$total', tot_date='$tot_date' WHERE pay_id='$pay_id'";
    if (mysqli_query($conn, $sql)) {
        $message = "Record Modified Successfully";
    } else {
        $message = "Error updating record: " . mysqli_error($conn);
    }
}
$stmt = mysqli_prepare($conn, "SELECT * FROM pay WHERE pay_id = ?");
mysqli_stmt_bind_param($stmt, "s", $_GET['pay_id']);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_array($result);
mysqli_close($conn);
?>
<html>
<head>
    <title>Update Payment Invoice </title>
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
                <h1><a href="paymenttable.php">Update Payment Invoice </a></h1>
            </div>
            Payment ID:
            <input type="hidden" name="pay_id" value="<?php echo $row['pay_id']; ?>">
            <input type="text" name="pay_id" value="<?php echo $row['pay_id']; ?>">
            <br><br>
			patient ID:
            <input type="text" name="p_id" value="<?php echo $row['p_id']; ?>">
            <br><br>
            Total Amount:
            <input type="text" name="total" value="<?php echo $row['total']; ?>">
            <br><br>
            Invoice Date:
            <input type="date" name="tot_date" value="<?php echo $row['tot_date']; ?>">
            <br><br>
            <input type="submit" name="submit" value="Submit" class="button">
			<br><a href="Paymenttable.php"> view </a>
        </form>
    </center>
</body>
</html>
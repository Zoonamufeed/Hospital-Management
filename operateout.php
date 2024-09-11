
<!DOCTYPE html>
<html>
<head>
<title> operation form output</title>
</head>
<body>
<?php
require ('config.php');
  //taking all 4 values from the form data input
  $schedule_id=$_REQUEST["schedule_id"];
  $staff_id=$_REQUEST["staff_id"];
  $op_date=$_REQUEST["op_date"];
 $start_time=$_REQUEST["start_time"];
 $end_time=$_REQUEST["end_time"];
// perfroming insert query

$sql = "INSERT INTO operation (schedule_id, staff_id, op_date,start_time,end_time) VALUES
 ('$schedule_id','$staff_id', '$op_date', '$start_time','$end_time')";

if (mysqli_query($conn, $sql)){
	echo"<h3>data stored in a database successfully."
	."Please browse ypor localhost PHP my admin"
	."to view the updated data</h3>";
	
	echo nl2br("\n$schedule_id\n$staff_id\n$op_date\n$start_time\n$end_time");}
else {
	echo "ERROR: Hush! sorry $sql."
	.mysqli_error($conn);
}
  mysqli_close($conn);
?>
</body>
</html>
<?php

include_once 'config.php';

$sql ="DELETE FROM operation WHERE schedule_id='".$_REQUEST["schedule_id"]."'";
if(mysqli_query($conn, $sql)) {
	echo"record deleted successfully";

} else{
	echo "ERROR deleting record". mysqli_error($conn);
}
mysqli_close($conn);
?>

<html>
<style>
a {
    text-decoration: none;
    color: #007bff;
    }

    a:hover {
    text-decoration: overline;
    }
	</style>
<body>
<br>
<a href="optable.php">view</a>
</body>
</html>
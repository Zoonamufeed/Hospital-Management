<?php

include_once 'config.php';

$sql ="DELETE FROM patient WHERE p_id='".$_REQUEST["p_id"]."'";
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
<a href="paview.php">view</a>
</body>
</html>
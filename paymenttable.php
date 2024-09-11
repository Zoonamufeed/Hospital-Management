<?php
include_once 'config.php';
$result = mysqli_query($conn, "SELECT * FROM pay");
?>
<!DOCTYPE html>
<html>
<head>
<title> Payment table </title>
<style>
table {
  width: 80%;
  border-collapse: collapse;
}
table, th, td {
  border: 1px solid #ccc;
}
th, td {
  padding: 8px;
  text-align: left;
}
th {
  background-color: #32a89d;
}
/*a {
  color: #007bff;
  text-decoration: none;
}*/
a:hover {
  text-decoration: underline;
}
body {
  margin: 0;
  font-family: "Lato", sans-serif;
}
.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}
.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
.sidebar a.active {
  background-color: #04AA6D;
  color: white;
}
.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}
div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}
@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}
@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
</style>
</head>
<body>
<div class="sidebar">
<img src ="hlogo/1.jpg"alt="Arogya" height="150px" width="200px">
<a href="adminview.php">Admin Dashboard</a>
  <a class="active" href="payment.php">Insert Payment</a>
  <a href="updatepay.php">Update payment</a>
  <a href="deletepay.php">Delete payment</a>
</div><div class="content">
<h2> Payment Infromation </h2>
<?php
if(mysqli_num_rows($result)>0){
?>	<table>
	 <tr>
	  <th> Payment ID</th>
	  <th> Patient ID</th>
	  <th> Total cost</th>
	  <th> Invoice Date </th>
	  <th> Update Record</th>
	  <th> Delete Record</th>
	 </tr>
	<tr>
	<?php $i=0;
		while ($row=mysqli_fetch_array($result)){
			?>
		<tr>		
			<td><?php echo $row["pay_id"];?></td>
			<td><?php echo $row["p_id"];?></td>
			<td><?php echo $row["total"];?></td>
			<td><?php echo $row["tot_date"];?></td>
		    <td><a href="updatepay.php?pay_id=<?php echo $row["pay_id"];?>">Update</a></td>
		    <td><a href="deletepay.php?pay_id=<?php echo $row["pay_id"];?>">Delete</a></td>
		</tr>	<?php 
		$i++;
			}?>
	</table>
    <?php
}else {
	echo "No results found";
      }?>
</div>
</body>
</html>
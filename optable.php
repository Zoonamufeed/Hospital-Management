<?php
include_once 'config.php';
$result = mysqli_query($conn, "SELECT * FROM operation");
?>
<!DOCTYPE html>
<html>
<head>
<title> operation table </title>
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
  <a class="active" href="operate.php">Insert Operation</a>
  <a href="updateo.php">Update Operation</a>
  <a href="deleteo.php">Delete Operation</a>
</div><div class="content">
<h2> Operation Infromation </h2>
<?php
if(mysqli_num_rows($result)>0){
?>	<table>
	 <tr>
	  <th> Schedule ID</th>
	  <th> staff ID</th>
	  <th> Operation Date</th>
	  <th> Start Time </th>
	  <th> End Time</th>
	  <th> Update Record</th>
	  <th> Delete Record</th>
	 </tr>
	<tr>
	<?php $i=0;
		while ($row=mysqli_fetch_array($result)){
			?>
		<tr>		
			<td><?php echo $row["schedule_id"];?></td>
			<td><?php echo $row["staff_id"];?></td>
			<td><?php echo $row["op_date"];?></td>
			<td><?php echo $row["start_time"];?></td>
			<td><?php echo $row["end_time"];?></td>
		    <td><a href="updateo.php?schedule_id=<?php echo $row["schedule_id"];?>">Update</a></td>
		    <td><a href="deleteo.php?schedule_id=<?php echo $row["schedule_id"];?>">Delete</a></td>
		</tr>	
		<?php 
		$i++;
			}
			?></table>
    <?php
}else {
	echo "No results found";
      }?>
</div>
</body>
</html>
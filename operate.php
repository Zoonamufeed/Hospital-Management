<!DOCTYPE html>
<html>
<head>
<title> Operation form </title>
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
h2 {
  text-align: center;
  color: #007bff;
}
input[type="text"],
input[type="tel"] {
  width: 250px;
  padding: 5px;
  border-radius: 3px;
  border: 1px solid #ccc;
}
input[type="submit"] {
  background-color: #007bff;
  color: white;
  border: none;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 5px;
  cursor: pointer;
}
input[type="submit"]:hover {
  background-color: #0056b3;
}
</style>
</head>
<body>
<form action="operateout.php" method="post">
<h2> Operation form </h2>
<br>
<label id="schedule_id"> Schedule ID : </label>
<input type ="text" name="schedule_id" id="schedule_id" >
<br><br>
<label id="staff_id"> Staff ID : </label>
<input type ="text" name="staff_id" id="staff_id" >
<br><br>
<label id="op_date"> Operating Date : </label>
<input type ="date" name="op_date" id="op_date" >
<br><br>
<label id="start_time"> Start Time : </label>
<input type ="Time" name="start_time" id="start_time" >
<br><br>
<label id="end_time"> End Time : </label>
<input type="Time" name="end_time" id="end_time">
<br><br>
<input type="submit"value="submit"><br><br>
</form>
</body>
</html>
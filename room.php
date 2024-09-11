<!DOCTYPE html>
<html>
<head>
<title> room form </title>
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
input[type="date"] {
  width: 250px;
  padding: 5px;
  border-radius: 3px;
  border: 1px solid #ccc;
}
label {
  display: inline-block;
  width: 120px;
  font-weight: none;
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
<form action="roomout.php" method="post">
<h2> Room availabity form </h2>
<br>
<label id="r_id"> Room ID : </label>
<input type ="text" name="r_id" id="r_id" >
<br><br>
<label id="bed"> Bed NO : </label>
<input type ="text" name="bed" id="bed" >
<br><br>
<label id="admit_d"> Admit Date : </label>
<input type ="date" name="admit_d" id="admit_d" >
<br><br>
<label id="discharge_d"> Discharge Date: </label>
<input type ="date" name="discharge_d" id="discharge_d" >
<br><br>
<input type="submit"value="submit"><br><br>
</form>
</body>
</html>
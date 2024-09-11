<!DOCTYPE html>

<html>
<head>
<title> staff form </title>
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


<form action="staffout.php" method="post">



<h2> Staff form </h2>


<br>

<label id="staff_id"> Staff ID : </label>
<input type ="text" name="staff_id" id="staff_id" >
<br><br>

<label id="sfirst_n"> First Name : </label>
<input type ="text" name="sfirst_n" id="sfirst_n" >
<br><br>

<label id="slast_n"> Last Name : </label>
<input type ="text" name="slast_n" id="slast_n" >
<br><br>

<label id="pos"> Position : </label>
<input type ="text" name="pos" id="pos" >
<br><br>

<label id="p_num"> Phone Number : </label>
<input type="tel" name="p_num" id="p_num">
<br><br>

<label id="email"> Email-Address : </label>
<input type="text" name="email" id="email">
<br><br>

<input type="submit"value="submit"><br><br>

</form>
</body>
</html>
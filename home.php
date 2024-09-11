<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
<style>
.navbar {
      width: 100%;
      background-color: #75c9eb;
     
    }
	body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
}
.container{
	max-width:400px;
	margin:0 auto;
	padding:20px
	border: 1px solid #ccc;
	border_radius:5px;
}
label {
  display: inline-block;
  width: 120px;
  font-weight: none;
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
form 
{
  width: 400px;
  margin: 0 auto;
  padding: 20px;
  background-color: #ffffff;
  border: 1px solid #dddddd;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

h1 {
  color: #007bff;
  text-align: center;
  font-size: 24px;
  margin-bottom: 20px;
  border-style: solid;
  border-color:#0b539c;
}
input[type="submit"]:hover {
  background-color: #0056b3;
}
	</style>
</head>
<body>
<nav class="navbar navbar-dark bg-primary">
   <div class="navbar">
   <nav class="navbar bg-light">
<ul class="nav justify-content-end" >
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="">Arogya health care</a>
  </li>
   <li class="nav-item">
    <a class="nav-link" href="welcome.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="patient.php">Patient</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="room.php">Room availabillity </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="payment.php">payments</a>
  </li>
</ul>
</div>
</nav>
<form action="patienttb.php" method="post">
<div class="container">
<h1> Registration form </h1>
<p style ="font-family:'Arial'"> Fill the below form to get consulted by the Doctor</p>
<br>
<label id="p_id"> Patient ID : </label>
<input type ="text" name="p_id" id="p_id" >
<br><br>
<label id="first_name"> First Name : </label>
<input type ="text" name="first_name" id="first_name" >
<br><br>
<label id="Last_name"> Last Name : </label>
<input type ="text" name="last_name" id="last_name" >
<br><br>
<label id="gender"> Gender : </label>
<input type ="text" name="gender" id="gender" >
<br><br>
<label id="phone_no"> Phone No : </label>
<input type ="tel" name="phone_no" id="phone_no" placeholder="123-12-23-234" required>
<br><br>
<label id="email"> E-mail : </label>
<input type ="text" name="email" id="email" >
<br><br>
<label id="address"> Address : </label>
<input type ="text" name="address" id="address" >
<br><br>
<input type="submit"value="submit"><br><br>
</div>
</form>
</body>
</html>
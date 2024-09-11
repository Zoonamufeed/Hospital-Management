<!DOCTYPE html>
<html>
<head>
<title>admin view</title>

<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>	
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
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 30px 64px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 24px;;
}
</style>
</head>
<body>
<div class="sidebar">
<img src ="hlogo/1.jpg"alt="Arogya" height="150px" width="200px">
<a href="welcome.php">Home </a>
  <a class="active" href="paview.php">Patient </a>
  <a href="stafftable.php">staff </a>
  <a href="roomtable.php">Room availability </a>
  <a href="optable.php">operating Schedule </a>
  <a href="paymenttable.php">paymnet </a>
</div>
<center>
<br>
<br><br><br><br>
<div class="content">
<a href="paview.php" class="button">patient </a> 

<a href="stafftable.php" class="button">staff  </a>
<a href="roomtable.php" class="button">Rooms</a><br><br><br><br>
<a href="optable.php" class="button">operating </a>
<a href="paymenttable.php" class="button">payment </a>
</div>
</center>
<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>
</body>
</html>
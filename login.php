<!DOCTYPE html>
<html>
<head>
<meta name ="viewport" content = "width = device-width, intitial- scale =1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

form {
  border: 3px solid #f1f1f1;
  background-color: #f9f9f9;
  max-width: 300px;
  margin: 0 auto;
  padding: 20px;
}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.pswd {
  float: right;
  padding-top: 16px;
}


@media screen and (max-width: 300px) {
  span.pswd {
    display: block;
    float: none;
  }
</style>
<script>
document.getElementById("loginForm").addEventListener("submit", function(event) {
  var username = document.getElementsByName("username")[0].value;
  var password = document.getElementsByName("password")[0].value;
  
  if (username === "" || password === "") {
    alert("Please fill in all fields.");
    event.preventDefault(); // Prevent form submission if fields are empty
  }
};
</script>
</head>
<body>

<h3>Welcome back</h3>
<form id="loginForm" action="loginbackend.php" method="post">
<!--<form action="loginbackend.php" "method = "post">-->
<div class ="imgcontainer">
<img src="hlogo/loginimg.png" alt="Avatar" class="avatar">
</div>

<div class="container">
<label for ="username">
<b>Username</b>
</label>
<input type="text" id="user"placeholder="Enter Username"name="user" required>
<label for ="password">
<b>Password</b>
</label>
<input type="password" id ="pass" placeholder ="Enter Password" name="pass" required>
<br>
<br>
<button type = "submit" id="btn">LOGIN</button>
<br>
<br>
<label>
<input type="checkbox" checked="checked" name ="remember">Remember me
</label>
</div>
<div class ="container" style="background-color:#f1f1f1">
<a href="logout.php">Forgot password?</a> 
</href>
</form>
</body>
</html>

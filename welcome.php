
<!DOCTYPE html>
<html>
<head>

<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
        
            height: 300px; /* Specify the desired height */
            margin: 0 auto; /* Center the content horizontally */
        }

h1 {
  background-color: #ADD8E6;
}
.navbar {
      width: 100%;
      background-color: #75c9eb;
     
    }
	
	.form-container {
  border: 2px solid #ccc;
  padding: 20px;
  border-radius: 5px;
  width:70%;
  height:85%;
}

.form-container h2 {
  text-align: center;
}
</style>

</head>
<body>
 <div id="my_col_edits" >
  <h1 class="display-5"background-><img src="hlogo/1.jpg" alt="Arogya" height="150px" width="180px"> WELCOME! Healing Hands. Caring hearts</h1>
   </div> 
   </div> 
<nav class="navbar navbar-dark bg-primary">
   <div class="navbar">

   <nav class="navbar bg-light">
   
<ul class="nav justify-content-end" >
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="home.php">HOME</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="aboutus.php">ABOUT US</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="services.php">SERVICES</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="contact.php">Contact</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="login.php">Login</a>
  </li>
   <li class="nav-item">
    <a class="nav-link" href="adminview.php">Admin</a>
  </li>
</ul>
</div>
</nav>
<center>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-75" src="hlogo/doc.webp" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-75" src="hlogo/123.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-75" src="hlogo/hospital.avif" alt="Third slide">
    </div>
  </div>
</div>
</center>

<div id="my_row_edits" class="row">
            <div id="my_col_edits" class="col">          
<h2 style="color:blue;"> Concerning Arogya Health Care:</h2>
<p class="lead">
Leading healthcare organization Arogya Health Care is committed to provide patients top-notch medical care in a compassionate setting.
 We work to improve the health and wellbeing of the people and communities we serve with a strong commitment to quality. 
 Our cutting-edge facilities, skilled medical staff, and cutting-edge treatment alternatives have made us a reputable brand in the healthcare sector.</p>


 </div>
 <div id="my_col_edits" class="col">
 <div class="form-container">
  <h2>Login</h2>
  <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    
  </div>
 
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
	<small id="Password" class="form-text text-muted">Enter your password using symbols and text.</small>
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
</div>
</body>
</html>

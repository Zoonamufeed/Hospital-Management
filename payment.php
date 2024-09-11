<!DOCTYPE html>
<html>
<head>
<title> Paymnet form </title>
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
<form action="paymentout.php" method="post">
<h2> payment invoice </h2>
<br>
<label id="pay_id"> Payment ID : </label>
<input type ="text" name="pay_id" id="pay_id" >
<br><br>
<label id="p_id">  Patient ID: </label>
<input type ="text" name="p_id" id="p_id" >
<br><br>
<label id="total"> Total Amount : </label>
<input type ="text" name="total" id="total" >
<br><br>
<label id="tot_date"> Invoice Date : </label>
<input type ="date" name="tot_date" id="tot_date" >
<br><br>
<input type="submit"value="submit"><br><br>
</form>
</body>
</html>
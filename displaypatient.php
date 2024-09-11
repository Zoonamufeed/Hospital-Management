<?php


$Pid=$_REQUEST["Pid"];
$fn=$_REQUEST["fn"];
$ln=$_REQUEST["ln"];
$gender=$_REQUEST["gender"];
$phno=$_REQUEST["phno"];
$email=$_REQUEST["email"];
$add=$_REQUEST["add"];


echo ($Pid."<br>") ;
echo ($fn."<br>") ;
echo ($ln."<br>") ;
echo ($gender."<br>") ;
echo ($phno."<br>") ;
echo ($email."<br>") ;
echo ($add."<br>") ;


if(isset($_REQUEST['submit'])){// to run PHP script on submit
if(!empty($_REQUEST ['submit']))
		// loop to store and display values of individual checked checkbox
		foreach($_REQUEST['submit']as $selected){
			echo $selected."</br>";
		}
	}

?>
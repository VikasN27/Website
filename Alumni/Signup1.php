<?php
 include("database.php"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title> Welcome - Alumni Meet</title>
	<link rel="stylesheet" type="text/css" href="signup.css">
	
</head>
<body>
	<div class="banner">
			<div class="navbar">
				<img src="logo.png" class="logo">
				<ul>
				 	<li><a href="home.html">Home</a></li>
					<li><a href="about.html">About Us</a></li>
					<li><a href="#">Contact Us</a></li>
				</ul>
			</div>

	<div class="main">
		<div class="register">
			<h2>REGISTER HERE</h2>
			<form  id="register" action="#" method="POST">
				<label>First Name : </label>
				<label style="margin-left:305px;">Last Name : </label>
				<br>
				<input type="text" name="fname" id="name" placeholder="Enter Your First Name">
				<input style="margin-left:100px;" type="text" name="lname" id="name" placeholder="Enter Your Last Name" >
				<br><br>
				<label>Your Age : </label>
				<br>
				<input type="number" name="age" id="name" placeholder="How old are You?">
				<br><br>
				<label>Email : </label>
				<br>
				<input type="Email" name="email" id="name" placeholder="Enter Your Valid Email">
				<br><br>
				<label> Contact Number : </label>
				<br>
				<input type="text" name="number" pattern="[0-9]{10}" placeholder="e.g. 99999-99999" style="height: 30px" >
				<br><br>
				<label>Gender : </label>
				<br>
				&nbsp; &nbsp; &nbsp; 
				<input type="radio" id="male" name="gender" value="m"> &nbsp; 
				<span id="male">Male</span>
				&nbsp; &nbsp; &nbsp; &nbsp; 
				<input type="radio" id="female" name="gender" value="f">
				&nbsp; 
				<span id="female">Female</span>
				<br><br> 
				<label>Known Language : </label>
				<br>
				&nbsp; &nbsp; &nbsp; 
				<input type="checkbox" name="language" id="hindi" value="hindi" >
				&nbsp; 
				<span id="hindi">Hindi</span>
				&nbsp; &nbsp; &nbsp; &nbsp; 
				<input type="checkbox" name="language" value="english" id="eng">
				&nbsp; 
				<span id="eng">English</span>
				&nbsp; &nbsp; &nbsp; &nbsp; 
				<input type="checkbox" name="language" id="french" value="french">
				&nbsp; 
				<span id="french">French</span>
				<br><br>
				<label>Address : </label>
				<br>
				<input type="text" name="address" id="address" placeholder="Enter Your Valid Address" style="width:600px; height: 30px;">
				<br><br>
				<label> City : </label>
				<label style="margin-left: 267px;"  > State/Province/Region : </label>
				<br>
				<input type="text" name="state" id="city" style="height:30px">
				<input type="text" name="region" id="sta" style="margin-left:150px;">
				<br><br>
				<label> Password : </label>
				<br>
				<input type="Password" name="pass" id="zip" style="height: 30px;">
				<br><br>
				<label> Confirm Password : </label>
				<br>
				<input type="Password" name="cpass" id="zip" style="height: 30px;">
				<br><br>

				<label> University Graduated from: </label>
				<br>
				<input type="text" name="graduation" id="position" style= "height: 30px;" style="width: 300px;">
				<br><br>
				<label> Your Description : </label>
				<br>
				<input type="text" name="about" id="desc" style="height:100px; width:400px;">
				<br><br>
				<div class="index">
				<button name="registration" onclick="return mess()" class="btn" value="Register" type="submit" >Register</button>
				</div>

				<script type="text/javascript">
					function mess()
					{
						alert("Your Record is Successfully Saved");
						return true;
					}
				</script>
			</form>
		</div>
	</div>
</body>
</html>


<?php

//error_reporting(0);
 if(isset ($_POST['registration']))
 {

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$age = $_POST['age'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$gender = $_POST['gender'];
	$language = $_POST['language'];
	$address = $_POST['address'];
	$state = $_POST['state'];
	$region = $_POST['region'];
	$pass = $_POST['pass'];
	$cpass = $_POST['cpass'];
	$graduation = $_POST['graduation'];
	$about = $_POST['about'];
	

	$query="INSERT INTO a_registration VALUES('$fname', '$lname', '$age', '$email', '$number', '$gender', '$language', '$address', '$state', '$region', '$pass', '$cpass', '$graduation', '$about')";
	$data=mysqli_query($conn,$query);

	if($data)
	{
		//echo "Data inserted into Database";
		header("Location:Signup1.php");
		exit;
	}
else{
	echo "Failed to insert data into Database";
  }
 }
?>
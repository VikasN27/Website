<?php
include("connect.php")
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
			<form action="connect.php" method="post" id="register" method="post">
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
				<input type="text" name="number" pattern="[0-9]{10}" placeholder="e.g. 99999-99999" style="height: 30px" "">
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
				<input type="text" name="region" id="sta" style="margin-left:150px;" "height:30px" >
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
				<label> Please upload your Photograph : </label>
				<br>
				<input type="file" id="real-file"/>
				<br><br>
				<div class="index">
				<a href="#"><button id="submit" type="button"><span></span> Sign Up </button> </a>
				</div>
			</form>
		</div>
	</div>
</body>
</html>
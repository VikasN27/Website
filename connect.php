<?php
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

	//database connection
	$con = new mysqli('localhost','root','','signup');
	if($conn->connect_error){
		die('connection failed : '.connect_error );
	}else{
		$stmt = $conn->prepare(insert into signup ("fname, lname, age, email, number, gender, language, address, state, region, pass, cpass, graduation, about) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,)");
			$stmt->bind_param("ssisisssssssss,$fname, $lname, $age, $email, $number, $gender, $language, $address, $state, $region, $pass, $cpass, $graduation, $about");
			$stmt->execute();
			$stmt->execute();
			echo "Registration Successfull";
			$stmt->close();
			$conn->close
	}
?>
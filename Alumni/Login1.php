<?php
  include('database.php');

    if(isset($_POST['email'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "select * from a_registration where email='".$email."' AND password='".$password."' limit 1";

        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) == 1){
            //echo "You Have Successfully Logged in";
            echo "<script> alert('You have logged in successfully!'); window.location='index1.php' </script>";
            exit();
        }
        else{
            echo "<script> alert('Wrong Credentials!'); window.location='login1.php' </script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Here</title>
	<link rel="stylesheet" type="text/css" href="Login.css">
	<script src="submit.js"></script>
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
	<section>
		<div class="contentBx">
			<div class="formBx">
				<h2>Login</h2>
				<form action="#" method="POST">
					<div class="inputBx">
						<span>Email</span>
						<input maxlength="50" minlength="4" type="text" name="email" id="user">
					</div>
					<div class="inputBx">
						<span>Password</span>
						<input type="Password" name="password" id="password">
					</div>
					<div class="remember">
						<label><input type="checkbox" name="">Keep me logged in</label>
					</div>
					<div class="ind">
					<button id="submit" type="submit" name="register"><span></span> Log In </button>
					</div>
					<div class="inputBx">
						<p>Don't have an account?<a href="Signup1.php">Sign up</a></p>
					</div>

				</form>
                
				<h3>Login with social media</h3>
				<ul class="sci">
					<li><img src="gmail.png"></li>
					<li><img src="facebook.png"></li>
					<li><img src="twitter.png"></li>
				</ul>

			</div>
		</div>
	</section>
    

</body>
</html>


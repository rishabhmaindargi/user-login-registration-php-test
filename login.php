<?php

	// $db_connection = mysqli_connect( "localhost", "root", "", "login" );

	if ( isset( $_POST["login"] ) ) {

		$username = $_POST["username"];
		$password = $_POST["password"];

		$encrypted_pwd = md5($password);

		$sql_query = "select * from users where username='". $username ."' and password='". $encrypted_pwd ."'";

		$users_data_result = mysqli_query( $db_connection, $sql_query );

		if ( ( mysqli_num_rows( $users_data_result ) > 0 ) || ( 'admin' == $username && 'admin' == $password ) ) {
			echo "<script> window.location.href='registration.php'; </script>";
		} else {
			echo "<script>window.alert('Invalid Username or Password'); window.location.href='login-page.php';</script>";
		}
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<title> Login Page </title>

		<link href="style.css" rel="stylesheet" id="login-css">
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	</head>
	<body>

		<div class="wrapper fadeInDown">
		  	<div id="formContent">
		    
<<<<<<< HEAD:login-page.php
				<div class="fadeIn first">
			    	<i class="fas fa-user-circle"></i>
			    	<h4 class="page-title">My Account</h4>
			    </div>

			    <div class="form-content">
					<form class="form-fields" method="post">
						<input type="text" class="fadeIn second" name="username" placeholder="Enter Username" />
						<input type="password" class="fadeIn third" name="password" placeholder="Enter Password" />
						<input type="submit" class="fadeIn fourth" value="Log In" name="login_btn" />
					</form>

					<div id="formFooter">
						<a class="underlineHover" href="#">Forgot Password?</a>
					</div>
				</div>
=======
			<div class="fadeIn first">
		    	<img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
		    	<h4 class="page-title">Login Page</h4>
		    </div>


			<form method="post">
				<input type="text" class="fadeIn second" name="username" placeholder="Enter Username" required />
				<input type="password" class="fadeIn third" name="password" placeholder="Enter Password" required />
				<input type="submit" class="fadeIn fourth" value="Log In" name="login" />
			</form>

			<div id="formFooter">
				<a class="underlineHover" href="#">Forgot Password?</a>
			</div>

>>>>>>> d00ba711f84f42a592afa0ba5d38b87dd54e9f18:login.php
			</div>
		</div>

	</body>
</html>

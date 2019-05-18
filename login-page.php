<?php

	$db_connection = mysqli_connect( "localhost", "root", "", "login" );

	if ( isset( $_POST["login_btn"] ) ) {

		$username = $_POST["username"];
		$password = $_POST["password"];

		$sql_query = "select * from users where username='". $username ."' and password='". $password ."'";

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

		<link href="login-style.css" rel="stylesheet" id="login-css">
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	</head>
	<body>

		<div class="wrapper fadeInDown">
		  <div id="formContent">
		    
			<div class="fadeIn first">
		    	<img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
		    	<h4 class="page-title">Login Page</h4>
		    </div>


			<form method="post">
				<input type="text" class="fadeIn second" name="username" placeholder="Enter Username" />
				<input type="text" class="fadeIn third" name="password" placeholder="Enter Password" />
				<input type="submit" class="fadeIn fourth" value="Log In" name="login_btn" />
			</form>

			<div id="formFooter">
				<a class="underlineHover" href="#">Forgot Password?</a>
			</div>

			</div>
		</div>

	</body>
</html> 

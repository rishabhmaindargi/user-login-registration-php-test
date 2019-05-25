<!DOCTYPE html>
<html>
	<head>
		<title> Registration Page </title>

		<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" id="fontawesome-css"/>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"/>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link href="style.css" rel="stylesheet" id="portal-css"/>

	</head>
	<body>

		<div class="wrapper fadeInDown">
		  <div id="formContent">

		  		<div class="fadeIn first">
			    	<i class="fas fa-user-circle"></i>
			    	<h4 class="page-title">Registration</h4>
			    </div>

			<div class="form-content">
				<form class="form-fields" method="post">
					<input type="text" class="fadeIn second" id="username" name="username" placeholder="Enter Username" required />
					<input type="password" class="fadeIn third" id="password" name="password" placeholder="Enter Password" required />
					<input type="submit" class="fadeIn fourth" value="Add User" name="register" id="register" />
				</form>
			</div>

			<script type="text/javascript">
				$(document).ready(function() {
					$('#register').click(function() {
						var username = $('#username').val();
						var password = $('#password').val();

						$.ajax({
							url: 'ajax-call.php',
							type: 'post',
							data: {
								username: username, 
								password: password
							},

							success:function(response) {
								if ( response == 'success' ) {
									window.alert('User added successfully.');
									window.location.href = 'index.php';
								} else {
									window.alert('Error ocurred. Please try again.');
									window.location.href = 'registration.php';
								}
							}
						})
					})
				});
			</script>

			</div>
		</div>

	</body>
</html>

<?php include('server22.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>user registration</title>
	<link rel ="stylesheet"type="text/css"href="administratorlogin.css">
</head>
<body>
<div class = "header">
	<h2>Login</h2>
</div>
<form method = "post" action = "administratorlogin.php">
	<!-- display validation errors here -->
	<?php include('errors1.php'); ?>
	<div class="input-group">
		<label>Username</label>
		<input type = "text" name ="email">
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type = "password" name ="password">
	</div>
	<div class="input-group">
		<button type = "submit" name = "login" class ="btn">Login</button> 
	</div>
	<p>
		<a href = "forgotpass.php"> Forgot Password? </a>
		
	</p>

	</form>
</body>
</html>
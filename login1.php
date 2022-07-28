<?php 
include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>user registration</title>
	<link rel ="stylesheet"type="text/css"href="login11.css">
</head>
<body>
<div class ="sign-up-form">
	<div class = "header">
	<h2>KENYA PORTS AUTHORITY</h2>
</div>
<h3> Customer Portal </h3>
	<img src="user.png">

<form method = "post" action = "login1.php">
	<?php include('errors1.php'); ?>
	<div class="input-group">
		<label>Username</label>
		<input type = "text" name ="username">
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type = "password" name ="password">
	</div>
	<p><span><input type="checkbox"></span> I agree to the terms of services</p>
	<div class="input-group">
		<button type = "submit" name = "login" class ="btn">Login</button> 
	</div>
	<p>
		Not yet a member? <a href = "register1.php"> Sign Up</a>
	</p>

	</form>
</div>
</body>
</html>
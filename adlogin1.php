<?php include('serverkad.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Administrator Login</title>
	<link rel ="stylesheet"type="text/css"href="adlogin.css">
</head>
<body>
<div class = "header">
	<h2>Login</h2>
</div>
<form method = "post" action = "adlogin1.php">

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
	
		
	</p>

	</form>
</body>
</html>
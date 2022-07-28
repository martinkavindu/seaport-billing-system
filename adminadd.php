<?php include('header4.php'); ?>
<?php 
include("configimport.php");
$result = mysqli_query($mysqli,"SELECT* from adminpass ORDER by id DESC");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add User</title>
	<link rel ="stylesheet"type="text/css"href="parameters.css">
</head>
<body>
<div class="formart">
<br>
<form method = "post" action = "adduserfunction.php">
	<div class="import-details">
		<h2> <b>Add New User<b></h2>
	<div class="input-group">
		<label>Email Address</label>
		<input type = "text" name ="email" placeholder="Enter valid user email">
	</div>
</div>
<br>
	<div class="button">
		<input type = "submit" name = "submit" value="SAVE">
	
</div>

	</form>
	
</div>
</body>
</html>
<?php include('header4.php'); ?>
<?php 
include("configimport.php");
$result = mysqli_query($mysqli,"SELECT* from parameters ORDER by id DESC");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Parameter</title>
	<link rel ="stylesheet"type="text/css"href="parameters.css">
</head>
<body>
<div class="formart">
<br>
<form method = "post" action = "parametersfunction.php">
	<div class="import-details">
		<h2> <b>Set Billing Parameters<b></h2>
	    <div class="input-group">
		<label>Type</label>
		<select name = "Type" type = "Type" placeholder="<?php echo "%"?>">
		<option selected disabled> Select Type </option>
		<option value = "Imports"> Imports</option>
		<option value = "Exports"> Exports</option>
	</select>
	</div>
	<div class="input-group">
		<label> Env_Protection</label>
		<input type = "text" name ="Env_Protection" placeholder="<?php echo "%"?>"> 
	</div>
	<div class="input-group">
		<label>Harbor_due</label>
		<input type = "text" name ="Harbor_due" placeholder="<?php echo "%"?>"> 
	</div>
	<div class="input-group">
		<label>VAT</label>
		<input type = "text" name ="VAT" placeholder="<?php echo "%"?>">
	</div>
	<div class="input-group">
		<label>Wharfage</label>
		<input type = "text" name ="Wharfage" placeholder="<?php echo "%"?>">
	</div>
	
	
</div>
<br>
	<div class="button">
		<input type = "submit" name = "submit" value="Upload">
	
</div>

	</form>
	
</div>
</body>
</html>
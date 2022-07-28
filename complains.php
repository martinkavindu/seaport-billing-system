<?php include('header2.php'); ?>
<?php 
include("configimport.php");
$result = mysqli_query($mysqli,"SELECT* from complains ORDER by id DESC");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Complaints</title>
	<link rel ="stylesheet"type="text/css"href="complaints.css">
</head>
<body>
<div class="formart">
<br>
<form method = "post" action = "complainsfunction.php">
	<div class="import-details">
		<h2> <b>Send complaints Here<b></h2>
	<div class="input-group">
		<label>Order_Number</label>
		<input type = "text" name ="Order_Number"> 
	</div>
	<div class="input-group">
		<label>Customer_id</label>
		<input type = "text" name ="Customer_id">
	</div>
	
	<div class="input-group">
		<label>Type</label>
		<select name = "Type" type = "Type">
		<option selected disabled> Select Type </option>
		<option value = "Imports"> Imports</option>
		<option value = "Exports"> Exports</option>
	</select>
	</div>
	<div class="textarea">
		<label>Subject</label>
		<textarea name = "Description" rows="5" cols="20"> </textarea>
	</div>
</div>
<br>
	<div class="button">
		<input type = "submit" name = "submit" value="send message">
	
</div>

	</form>
</div>
</body>
</html>
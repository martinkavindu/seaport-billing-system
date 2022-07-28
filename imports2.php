<?php include('header2.php'); ?>
<?php 
include("configimport.php");
$result = mysqli_query($mysqli,"SELECT* from import ORDER by id DESC");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> import registration</title>
	<link rel ="stylesheet"type="text/css"href="imports2.css">
</head>
<body>
<div class = "header">
	<h2>Register imports</h2>
</div>
<form method = "post" action = "imports2functions.php">
	<div class="import-details">
	<div class="input-group">
		<label>Order_Number</label>
		<input type = "text" name ="Order_Number"> 
	</div>
	<div class="input-group">
		<label>Customer_id</label>
		<input type = "text" name ="Customer_id">
	</div>
	<div class="input-group">
		<label> Full_Name</label>
		<input type = "text" name ="Full_Name" >
	</div>
	<div class="input-group">
		<label>Type</label>
		<select name = "Type" type = "Type">
		<option selected disabled> Select Type </option>
		<option value = "Machinery"> Machinery</option>
		<option value = "Vehicles & Automobiles">  Automobiles</option>
		<option value = "Minerals"> Minerals</option>
		<option value = "Agricultrural"> Agricultrural</option>
		<option value = "Permaceuticals"> Permaceuticals</option>
		<option value = "Agricultrural"> Other import Types</option>
	</select>
	</div>
	<div class="input-group">
		<label>Description</label>
		<input type = "Description" name ="Description">
	</div>
	<div class="input-group">
		<label> Origin Country</label>
		<select name = "Origin" type ="Origin">
		<option selected disabled> Select country </option>
		<option value = "china"> China</option>
		<option value = "germany">germany</option>
		<option value = "USA">USA</option>
		<option value = "FRANCE"> France</option>
		<option value = "ukraine">Ukraine</option>
		<option value = "nigeria">Nigeria</option>
		<option value = "south korea">south korea</option>
		<option value = "tanzania">tanzania</option>
		<option value = "japan">japan</option>
		<option value = "saudi arabia">saudi arabia</option>
		<option value = "italy">italy</option>
		<option value = "russia">russia</option>
		<option value = "netherlands">netherlands</option>
	</select>

	</div>
	<div class="input-group">
		<label>Landed cost</label>
		<input type = "Total_Cost" name ="Total_Cost">
	</div>
	<div class="input-group">
		<label>Arrival_Date</label>
		<input type = "Date" name ="Arrival_Date">
	</div>
</div>
<br>
	<div class="button">
		<input type = "submit" name = "submit">
		
	
</div>

	</form>
	
</table>
</body>
</html>
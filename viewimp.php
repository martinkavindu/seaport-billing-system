<?php include('header4.php'); ?>
<?php 
include("configimport.php");
$result = mysqli_query($mysqli,"SELECT* from import ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> IMPORTS</title>
	<link rel ="stylesheet"type="text/css"href="view.css">
</head>
<body>
<div class="imports">
<div class = "header">
	<h2> <b><img src="seaportlog.png"width = "100px" height = "100px" align="left">CURRENT IMPORTS</b></h2>
</div>
<div class ="table">

	<table border = "2" align="center">

	<tr>
		<th colspan="10">
			KENYA PORTS AUTHORITY
		</th>
	</tr>
	<tr>
		<th colspan="10">
			IMPORTS DETAILS
		</th>
	</tr>
	<tr>
	<th> Order_Number </th>
	<th> Customer_id </th>
	<th> Full_Name </th>
	<th> Type </th>
	<th> Description</th>
	<th> Origin</th>
	<th> Total_Cost </th>
	<th> Arrival_Date</th>
	<th> Delete</th>

	</tr>

	<?php
	While($res = mysqli_fetch_array($result)){
		echo '<tr>';
		echo'<td>'.$res['Order_Number']. '</td>';
		echo'<td>'.$res['Customer_id']. '</td>';
        echo'<td>'.$res['Full_Name']. '</td>';
		echo'<td>'.$res['Type']. '</td>';
		echo'<td>'.$res['Description']. '</td>';
		echo'<td>'.$res['Origin']. '</td>';
		echo'<td>'.$res['Total_Cost']. '</td>';
		echo'<td>'.$res['Arrival_Date']. '</td>';
		echo " <td><a href = \"delete.php?id= $res[id]\"><input type = 'submit' value = 'Delete'> </a>";

		echo '</tr>';


	}

	?>
</table>
</div>
</div>
</body>
</html>
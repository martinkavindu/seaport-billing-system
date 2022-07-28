<?php include('header4.php'); ?>
<?php 
include("configimport.php");
$result = mysqli_query($mysqli,"SELECT* from export_bill ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CURRENT EXPORTS- KPA</title>
	<link rel ="stylesheet"type="text/css"href="view.css">
</head>
<body>
<div class="imports">
<div class = "header">
<h2> <b><img src="seaportlog.png"width = "100px" height = "100px" align="left">Export_BILLS</b> </h2>
</div>
<div class ="table">

	<table border = "2" align="center">

	<tr>
		<th colspan="10">
			KENYA PORTS AUTHORITY
		</th>
	</tr>
	<tr>
		<th colspan="13">
			EXPORT_BILLS
		</th>
	</tr>
	<tr>
	<th> Export_id </th>
	<th> Customer_id </th>
	<th> Description</th>
	<th> Total_Cost </th>
	<th> Env_Protection </th>
	<th> Harbor_Due </th>
	<th> VAT </th>
	<th> Wharfage</th>
	<th> Total_Dues</th>
	<th> Pickup_Date</th>
	</tr>

	<?php
	While($res = mysqli_fetch_array($result)){
		echo '<tr>';
		echo'<td>'.$res['Export_id']. '</td>';
		echo'<td>'.$res['Customer_id']. '</td>';
		echo'<td>'.$res['Description']. '</td>';
		echo'<td>'.$res['Total_Cost']. '</td>';
		echo'<td>'.$res['Env_Protection']. '</td>';
		echo'<td>'.$res['Harbor_Due']. '</td>';
		echo'<td>'.$res['Vat']. '</td>';
		echo'<td>'.$res['Wharfage']. '</td>';
		echo'<td>'.$res['Total_Dues']. '</td>';
		echo'<td>'.$res['Due_Date']. '</td>';
		echo '</tr>';


	}

	?>

</table>
</div>
</div>
</body>
</html>
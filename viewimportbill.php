<?php include('header4.php'); ?>
<?php 
include("configimport.php");
$result = mysqli_query($mysqli,"SELECT* from import_bill ORDER BY id DESC");
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
<h2> <b><img src="seaportlog.png"width = "100px" height = "100px" align="left">IMPORT_BILLS</b> </h2>
<div class ="table">

	<table border = "2" align="center">

	<tr>
		<th colspan="10">
			KENYA PORTS AUTHORITY
		</th>
	</tr>
	<tr>
		<th colspan="13">
			IMPORT_BILLS
		</th>
	</tr>
	<tr>
	<th> Order_Number </th>
	<th> Customer_id </th>
	<th> Full_Name</th>
	<th> Type </th>
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
		echo'<td>'.$res['Order_Number']. '</td>';
		echo'<td>'.$res['Customer_id']. '</td>';
        echo'<td>'.$res['Full_Name']. '</td>';
		echo'<td>'.$res['Type']. '</td>';
		echo'<td>'.$res['Description']. '</td>';
		echo'<td>'.$res['Total_Cost']. '</td>';
		echo'<td>'.$res['Env_Protection']. '</td>';
		echo'<td>'.$res['Harbor_Due']. '</td>';
		echo'<td>'.$res['Vat']. '</td>';
		echo'<td>'.$res['Wharfage']. '</td>';
		echo'<td>'.$res['Total_Dues']. '</td>';
		echo'<td>'.$res['Pickup_Date']. '</td>';
		echo '</tr>';


	}

	?>

</table>
</div>
</div>
</body>
</html>
<?php include('header3.php'); ?>
<?php 
include("configimport.php");
$result = mysqli_query($mysqli,"SELECT* from complains ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>View Complains</title>
	<link rel ="stylesheet"type="text/css"href="viewcomp.css">
</head>
<body>
<div class="imports">
<div class = "header">
	<h2>Respond to Complaints</h2>
</div>
<div class ="table">

	<table border = "2" align="center">

	<tr>
		<th colspan="7">
			KENYA PORTS AUTHORITY
		</th>
	</tr>
	<tr>
		<th colspan="10">
			Current Complaints Received
		</th>
	</tr>
	<tr>
	<th> Order_Number </th>
	<th> Customer_id </th>
	<th> Type </th>
	<th> Subject</th>
	<th> Response</th>
	<th> Delete</th>

	</tr>

	<?php
	While($res = mysqli_fetch_array($result)){
		echo '<tr>';
		echo'<td>'.$res['Order_Number']. '</td>';
		echo'<td>'.$res['Customer_id']. '</td>';
		echo'<td>'.$res['Type']. '</td>';
		echo'<td>'.$res['Description']. '</td>';
		echo " <td><a href = \"#.php?id= $res[id]\"><input type = 'submit' value = 'Edit'> </a>";
		echo " <td><a href = \"#.php?id= $res[id]\"><input type = 'submit' value = 'Delete'> </a>";

		echo '</tr>';


	}

	?>
</table>
</div>
</div>
</body>
</html>
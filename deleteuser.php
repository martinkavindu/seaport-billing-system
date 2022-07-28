<?php include('header4.php'); ?>
<?php 
include("configimport.php");
$result = mysqli_query($mysqli,"SELECT* from adminpass ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Staff Mails Registered</title>
	<link rel ="stylesheet"type="text/css"href="view.css">
</head>
<body>
<div class="imports">
<div class = "header">
	<h2><b><img src="seaportlog.png"width = "100px" height = "100px" align="left">Staff Mails Registered</b></h2>
</div>
<div class ="table">

	<table border = "2" align="center">

	<tr>
		<th colspan="10">
			KENYA PORTS AUTHORITY
		</th>
	</tr>
	<tr>
		<th colspan="2">
			Staff Mails Registered
		</th>
	</tr>
	<tr>
	<th> email </th>
	<th> Delete</th>
	</tr>
	<?php
	While($res = mysqli_fetch_array($result)){
		echo '<tr>';
		echo'<td>'.$res['email']. '</td>';
		echo " <td><a href = \"deleteuser2.php?id= $res[id]\"><input type = 'submit' value = 'Delete'></a>";
		echo '</tr>';


	}

	?>
</table>
</div>
</div>
</body>
</html>


<?php 

    include("configimport.php");
	if(isset($_POST['submit']))
	{
	$Order_Number = $_POST['Order_Number'];
	$Customer_id = $_POST['Customer_id'];
	$Type = $_POST['Type'];
	$Description = $_POST['Description'];

	$result = mysqli_query($mysqli,"INSERT into complains values('','$Order_Number','$Customer_id','$Type','$Description')");
	if ($result) 
	{
		header("location:header2.php");
	}
	else{
		echo "Failed";
	}
	}
 
	?>
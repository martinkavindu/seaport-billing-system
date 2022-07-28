

<?php 

    include("configimport.php");
	if(isset($_POST['submit']))
	{
	$Type = $_POST['Type'];
	$Env_Protection = $_POST['Env_Protection'];
	$Harbor_due = $_POST['Harbor_due'];
	$VAT = $_POST['VAT'];
	$Wharfage = $_POST['Wharfage'];

	$result = mysqli_query($mysqli,"INSERT into parameters values('','$Type','$Env_Protection','$Harbor_due','$VAT','$Wharfage')");
	if ($result) 
	{
		header("location:header4.php");
	}
	else{
		echo "Failed";
	}
	}
 
	?>
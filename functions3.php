

<?php 

    include("configimport.php");
	if(isset($_POST['submit']))
	{
	$Export_id = $_POST['Export_id'];
	$Customer_id = $_POST['Customer_id'];
	$Full_Name = $_POST['Full_Name'];
	$Type = $_POST['Type'];
	$Description = $_POST['Description'];
	$Total_Cost = $_POST['Total_Cost'];
	$Destination = $_POST['Destination'];
	$Arrival_Date= $_POST['Arrival_Date']; 

	$result = mysqli_query($mysqli,"INSERT into exports values('','$Export_id','$Customer_id','$Full_Name','$Type','$Description','$Total_Cost','$Destination','$Arrival_Date')");
	if ($result) 
	{
		header("location:header2.php");
	}
	else{
		echo "Failed";
	}
	}
 
	?>
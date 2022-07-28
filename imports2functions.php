

<?php 

    include("configimport.php");
	if(isset($_POST['submit']))
	{
	$Order_Number = $_POST['Order_Number'];
	$Customer_id = $_POST['Customer_id'];
	$Full_Name = $_POST['Full_Name'];
	$Type = $_POST['Type'];
	$Description = $_POST['Description'];
	$Origin = $_POST['Origin'];
	$Total_Cost = $_POST['Total_Cost'];
	$Arrival_Date= $_POST['Arrival_Date']; 
	
	

	$result = mysqli_query($mysqli,"INSERT into import values('','$Order_Number','$Customer_id','$Full_Name','$Type','$Description','$Origin','$Total_Cost','$Arrival_Date')");

	if ($result) 
	{
		header("location:header2.php");
	
	}
	else {  
			echo "All fields are required!";  
	}
	
	}
 
	?>
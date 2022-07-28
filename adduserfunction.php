<?php 
	include("configimport.php");
	if(isset($_POST['submit']))
	{
	$email = $_POST['email'];

	$result = mysqli_query($mysqli,"INSERT into adminpass values('','$email','')");
	if ($result) 
	{
		header("location:header4.php");
        echo "added successfully";
	}
	else{
		echo "Failed";
	}
	}
 
	?>
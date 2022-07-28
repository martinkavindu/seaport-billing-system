<?php include('header2.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Search Data into TextBox</title>
	<link rel ="stylesheet"type="text/css"href="viewresponse.css">
	
</head>
<body>
	<center>
		<div class ="export_bills">
		<h1><b> Search Your complaints</b></h1>
		<form action="" method="POST">
			<input type = "text" name = "id" placeholder="Order_Number"/>
			<input type = "submit" name="search" value="Search">
		
		</form>

<?php 

	$connection = mysqli_connect ("localhost","root", "");
	$db = mysqli_select_db($connection , 'seaport');
	$month = isset($_GET['month']) ? $_GET['month'] : date('Y-m');


	if(isset($_POST['search']))
	{
		
		$id = $_POST['id'];
		$total= '';


		$query = "SELECT Order_Number,Type,Description, Type FROM response where Order_Number  = '$id'";
		$query_run = mysqli_query ($connection, $query);


			//ensure that form fieldss are filled properly
	if (empty($id)) 
	{
		echo "Enter a valid Export id";
	}

		while ($row = mysqli_fetch_array($query_run))
		{
			?>

           
			<form action="" method="POST">
				<hr>

        <h2><b>Response </b></h2>
				<div class="merchant">
				<label>Order_Number</label>
				<input type="text" name="Order_Number" value="<?php echo $row ['Order_Number'] ?>" />
				<label>Type &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
				<input type="text" name="Type" value="<?php echo $row ['Type'] ?>"/> <br>
				
				<label>Description &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
				<input type="text" name="Description" value="<?php echo $row ['Description'] ?>"/> 
			</div> 
		
	            
			</form>
            

			<?php

			
		}
	}
	
	?>

	</center>
</div>

</body>
</html>
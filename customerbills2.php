<?php include('header2.php');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> View Bills</title>
	<link rel ="stylesheet"type="text/css"href="customerbills2.css">
	
</head>
<body>
	<center>
		<div class ="export_bills">
		<h1> <b> View Export Bills</b></h1>
		<form action="" method="POST">
			<input type = "text" name = "id" placeholder="Enter Your Order number"/>
			<input type = "submit" name="search" value="View My bills">
	

		</form>


<?php 

// connect to the database
	$connection = mysqli_connect ("localhost","root", "");
	$db = mysqli_select_db($connection , 'seaport');
	$month = isset($_GET['month']) ? $_GET['month'] : date('Y-m');


	if(isset($_POST['search']))
	{
		
		$id = $_POST['id'];
		$total= '';


		$query = "SELECT Export_id, Customer_id, Description,Total_Cost,Env_Protection,Harbor_Due,VAT,Wharfage,Total_Dues,Due_Date FROM export_bill where Export_id = '$id'";
		$query_run = mysqli_query ($connection, $query);


			//ensure that form fieldss are filled properly
	if (empty($id)) 
	{
		array_push($errors, "Enter a valid Export id");
	}

		while ($row = mysqli_fetch_array($query_run))
		{
			?>

           
			<form action="" method="POST">
        
        <div class="merchant">
        	<h2> <b>Kenya Ports Authority</b></h2>
        	<img src="seaportlog.png"width = "100px" height = "100px" align="left">
        	<h3> <b>Customer Invoice</b> </h3>
        	<hr>
        <div class="details">
				<label>Export_id</label>
				<input type="text" name="Export_id"value="<?php echo $row ['Export_id'] ?>" />
				<label>Customer_id</label>
				<input type="text" name="Customer_id" value="<?php echo $row ['Customer_id'] ?>"/> <br>
				<label>Description</label>
				<input type="text" name="Description" value="<?php echo $row ['Description'] ?>"/>
				<label>Total_Cost</label>
				<input type="text" name="Total_Cost" value="<?php echo $row ['Total_Cost'] ?>"/> <br>
				</div>
				<div class = "bills">
				<hr color = "red">
				&nbsp;&nbsp;<label>Env_Protection</label><input type="text" name="Env_Protection"value="<?php echo $row ['Env_Protection'] ?>" />
				&nbsp;&nbsp;<label>Harbor_Due</label> <input type="text" name="Harbor_Due" value="<?php echo $row ['Harbor_Due'] ?>"/> <br>
				&nbsp;&nbsp;<label>VAT</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="VAT" value="<?php echo $row ['VAT'] ?>"/> 
				&nbsp;&nbsp;&nbsp;&nbsp;<label>Wharfage</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="Wharfage" value="<?php echo $row ['Wharfage'] ?>"/> 
				<br>
				 </div>
				 <div class="total_dues">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Total_Dues</label><input type="text" name="Total_Dues" value=" Ksh. <?php echo $row ['Total_Dues'] ?> /= "/>
				<label>Due_Date</label>
				<input type="date" name="Due_Date" value="<?php echo $row ['Due_Date'] ?>"/> <br>
        </div>
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
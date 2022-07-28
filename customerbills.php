<?php include('header2.php');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> View Bills</title>
	<link rel ="stylesheet"type="text/css"href="customerbills.css">
	
</head>
<body>
	<center>
		<div class ="export_bills">
		<h1> <b> View Import Bills </b></h1>
		<form action="" method="POST">
			<input type = "text" name = "id" placeholder="Enter Your Order_Number"/>
			<input type = "submit" name="search" value="View My bills">
	

		</form>


<?php 


	$connection = mysqli_connect ("localhost","root", "");
	$db = mysqli_select_db($connection , 'seaport');
	$month = isset($_GET['month']) ? $_GET['month'] : date('Y-m');


	if(isset($_POST['search']))
	{
		
		$id = $_POST['id'];
		$total= '';


		$query = "SELECT Order_Number, Customer_id, Full_Name, Description,Total_Cost,Env_Protection,Harbor_Due,VAT,Wharfage,Total_Dues, Pickup_Date FROM import_bill where Order_Number = '$id'";
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
        	<h2><b>Kenya Ports Authority</b></h2>
        	<img src="seaportlog.png"width = "100px" height = "100px" align="left">
        	<h3><b>Customer Invoice</b></h3>
        	<hr>
        <div class="details">
				<label>Order_Number</label>
				<input type="text" name="Order_Number"value="<?php echo $row ['Order_Number'] ?>" />
				<label>Customer_id</label>
				<input type="text" name="Customer_id" value="<?php echo $row ['Customer_id'] ?>"/> <br>
				<label>Full_Name</label>
				<input type="text" name="Full_Name" value="<?php echo $row ['Full_Name'] ?>"/>
				<label>Description</label>
				<input type="text" name="Description" value="<?php echo $row ['Description'] ?>"/><br>
				<label>Total_Cost</label>
				<input type="text" name="Total_Cost" value="<?php echo $row ['Total_Cost'] ?>"/> 
			</div>
				<div class = "bills">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Env_Protection</label><input type="text" name="Env_Protection"value="<?php echo $row ['Env_Protection'] ?>" />
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Harbor_Due </label> <input type="text" name="Harbor_Due" value="<?php echo $row ['Harbor_Due'] ?>"/> <br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>VAT</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="VAT" value="<?php echo $row ['VAT'] ?>"/> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Wharfage</label><input type="text" name="Wharfage" value="<?php echo $row ['Wharfage'] ?>"/> 
				<br>
				 </div>
				 <div class="total_dues">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Total_Dues</label><input type="text" name="Total_Dues" value=" Ksh. <?php echo $row ['Total_Dues'] ?> /= "/>
				<label>Pickup_Date</label><input type="date" name="Total_Cost" value="<?php echo $row ['Pickup_Date'] ?>"/>


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
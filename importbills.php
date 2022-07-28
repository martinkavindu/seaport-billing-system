<?php include('header3.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Search Data into TextBox</title>
	<link rel ="stylesheet"type="text/css"href="importbills.css">
	
</head>
<body>
	<center>
		<div class ="export_bills">
		<h1><b>IMPORT BILLS</b></h1>
		<form action="" method="POST">
			<input type = "text" name = "id" placeholder="Enter Import Id"/>
			<input type = "submit" name="search" value="Process Bill">
		
		</form>

<?php 

	$connection = mysqli_connect ("localhost","root", "");
	$db = mysqli_select_db($connection , 'seaport');
	$month = isset($_GET['month']) ? $_GET['month'] : date('Y-m');


	if(isset($_POST['search']))
	{
		
		$id = $_POST['id'];
		$total= '';


		$query = "SELECT Order_Number, Customer_id, Full_Name, Type,Description, Total_Cost FROM import where Order_Number  = '$id'";
		$query_run = mysqli_query ($connection, $query);


			
	if (empty($id)) 
	{
		echo "Enter a valid import id";
	}

		while ($row = mysqli_fetch_array($query_run))
		{
			?>

           
			<form action="" method="POST">
				<hr>

        <h2><b>Order_Details </b></h2>
				<div class="merchant">
				<label>Order_Number</label>
				<input type="text" name="Order_Number" value="<?php echo $row ['Order_Number'] ?>" />
				<label>Customer_id </label>
				<input type="text" name="KRA pin" value="<?php echo $row ['Customer_id'] ?>"/><br>
				<label>Full_Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
				<input type="text" name="Full_Name" value="<?php echo $row ['Full_Name'] ?>"/>
				<label>Type &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
				<input type="text" name="Type" value="<?php echo $row ['Type'] ?>"/> <br>
				<label>Description &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
				<input type="text" name="Description" value="<?php echo $row ['Description'] ?>"/> 
				<label>Total_Cost </label>
				<input type="text" name="Total_Cost" value="<?php echo $row ['Total_Cost'] ?>"/><br>
			</div>
				<hr>
				<h2><b>Import Bills</b></h2>
				<div class="bills">
				<label>Env_Protection</label>
				<input type="text" name="Env_Protection" value="<?php echo $row ["Total_Cost"] * 0.025; ?>">
				<label>Harbor_Due </label>
				<input type="text" name="Harbor_Due" value="<?php echo $row ["Total_Cost"] * 0.026; ?>"/><br> 
				<label>VAT &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
				<input type="text" name="Vat" value="<?php echo $row ["Total_Cost"] * 0.05; ?>"/>
				<label>Wharfage&nbsp;&nbsp;&nbsp;&nbsp; </label>
				<input type="text" name="Wharfage" value="<?php echo $row ["Total_Cost"] * 0.0125; ?>"/> <br>
        </div>
          <br>
        <hr>
        <label>Total_Dues</label>
        <input type="text" name="Total_Dues" value="<?php echo (($row ["Total_Cost"] * 0.025)
        + ($row ["Total_Cost"] * 0.026)
        + ($row ["Total_Cost"] * 0.05)
        + ($row ["Total_Cost"] * 0.0125));
          ?>"/>

         
        <label>Pickup_Date </label>
				<input type="date" name="Pickup_Date"/> <br> 
         
	       <input type = "submit" name="save" value="SAVE BILL"> 
		
	            
			</form>
            

			<?php

			
		}
	}
	
	?>

	</center>
</div>

</body>
</html>

<?php
$connection = mysqli_connect ("localhost","root", "");
$db = mysqli_select_db($connection , 'seaport');

if(isset($_POST['save']))
{
	  $Order_Number = $_POST['Order_Number'];
		$Customer_id = $_POST['Customer_id'];
		$Full_Name = $_POST['Full_Name'];
		$Type = $_POST['Type'];
		$Description = $_POST['Description'];
		$Total_Cost= $_POST['Total_Cost'];
		$Env_Protection = $_POST['Env_Protection'];
		$Harbor_Due = $_POST['Harbor_Due'];
		$Vat = $_POST['Vat'];
		$Wharfage = $_POST['Wharfage'];
		$Total_Dues = $_POST['Total_Dues'];
		$Pickup_Date = $_POST['Pickup_Date'];



	$query = "INSERT INTO import_bill (Order_Number,Customer_id,Full_Name,Type,Description,Total_Cost,Env_Protection,Harbor_Due,Vat,Wharfage,Total_Dues,Pickup_Date) VALUES ('$Order_Number','$Customer_id','$Full_Name','$Type','$Description','$Total_Cost','$Env_Protection','$Harbor_Due','$Vat','$Wharfage','$Total_Dues','$Pickup_Date')";
	$query_run = mysqli_query ($connection, $query);

	if($query_run)
    {
    	echo '<script> alert("Bill Processed") </script>';

    }
    else
    {
      echo '<script> alert("Invalid") </script>';
    }
}

?>

<?php include('header3.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Search Data into TextBox</title>
	<link rel ="stylesheet"type="text/css"href="exportbills.css">
	
</head>
<body>
	<center>
		<div class ="export_bills">
		<h1><b>Export Bills</b></h1>
		<form action="" method="POST">
			<input type = "text" name = "id" placeholder="Enter Exports Id"/>
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


		$query = "SELECT Export_id, Customer_id, Description, Total_Cost FROM exports where Export_id  = '$id'";
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
        <h2><b>Export_Details</b></h2>
        <div class="merchant">
				<label>Export_id</label>
				<input type="text" name="Export_id" value="<?php echo $row ['Export_id'] ?>" />
				<label>Customer_id </label>
				<input type="text" name="Customer_id" value="<?php echo $row ['Customer_id'] ?>"/> <br>
				<label>Description </label>
				<input type="text" name="Description" value="<?php echo $row ['Description'] ?>"/>
				<label>Total_Cost </label>
				<input type="text" name="Total_Cost" value="<?php echo $row ['Total_Cost'] ?>"/> 
				</div>
				<hr>
				<h2><b>Export_Bills</b></h2>
				<div class="bills">
				<label>Env_Protection(2%) </label>
				<input type="text" name="Env_Protection" value="<?php echo $row ["Total_Cost"] * 0.02; ?>">
				<label>HarborDue(3%)</label>
				<input type="text" name="Harbor_Due" value="<?php echo $row ["Total_Cost"] * 0.03; ?>"/><br> 
				<label>VAT(4%)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
				<input type="text" name="Vat" value="<?php echo $row ["Total_Cost"] * 0.04; ?>"/>
				<label>Wharfage (1.25)</label>
				<input type="text" name="Wharfage" value="<?php echo $row ["Total_Cost"] * 0.0125; ?>"/> <br>
       </div>
       <br>
       <hr>
        <label>Total_Dues </label>
        <input type="text" name="Total_Dues" value="<?php echo (($row ["Total_Cost"] * 0.02)
        + ($row ["Total_Cost"] * 0.03) 
        + ($row ["Total_Cost"] * 0.04)
        + ($row ["Total_Cost"] * 0.0125));
          ?>"/>
              	             
                 <? 
	            $total = "";
	// if(isset($row['total']))
		{

	        $Env_Protection = $row ["Total_Cost"] * 0.03;
	        $Harbor_Due = $row ["Total_Cost"] * 0.03;
	        $Vat = $row ["Total_Cost"] * 0.04;
	        $Wharfage =$row ["Total_Cost"] * 0.0125;
            
	        $total = $Env_Protection + $Harbor_Due + $Vat + $Wharfage;
		}  
	?>
       <label>Due_Date </label>
				<input type="date" name="Due_Date"/> <br> 
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
	  $Export_id = $_POST['Export_id'];
		$Customer_id = $_POST['Customer_id'];
		$Description = $_POST['Description'];
		$Total_Cost= $_POST['Total_Cost'];
		$Env_Protection = $_POST['Env_Protection'];
		$Harbor_Due = $_POST['Harbor_Due'];
		$Vat = $_POST['Vat'];
		$Wharfage = $_POST['Wharfage'];
		$Total_Dues = $_POST['Total_Dues'];
		$Due_Date = $_POST['Due_Date'];


	$query = "INSERT INTO export_bill (Export_id,Customer_id,Description,Total_Cost,Env_Protection,Harbor_Due,Vat,Wharfage,Total_Dues,Due_Date) VALUES ('$Export_id','$Customer_id','$Description','$Total_Cost','$Env_Protection','$Harbor_Due','$Vat','$Wharfage','$Total_Dues','$Due_Date')";
	$query_run = mysqli_query ($connection, $query);

	if($query_run)
    {
    	echo '<script> alert("Data inserted") </script>';

    }
    else
    {
      echo '<script> alert("Invalid") </script>';
    }
}

?>

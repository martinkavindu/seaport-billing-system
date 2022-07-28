<?php 
include("configimport.php");
$id = $_GET['id'];
$result = mysqli_query($mysqli,"SELECT* from import where id=$id");
while($res = mysqli_fetch_array($result))

{   
	  $Order_Number =  $res['Order_Number'];
    $Customer_id =  $res['Customer_id'];
    $Full_Name =  $res['Full_Name'];
    $Type = $res['Type'];
    $Description = $res['Description'];
    $Origin = $res['Origin'];
    $Total_Cost = $res['Total_Cost'];
    $Arrival_Date = $res['Arrival_Date'];

 }
?>
<?php
if (Isset($_POST['update'])){
    $id = $_POST['id'];
	  $Order_Number = $_POST['Order_Number'];
    $Customer_id = $_POST['Customer_id'];
    $Full_Name = $_POST['Full_Name'];
    $Type = $_POST['Type'];
    $Description = $_POST['Description'];
    $Origin = $_POST['Origin'];
    $Total_Cost = $_POST['Total_Cost'];
    $Arrival_Date = $_POST['Arrival_Date'];
    $result= mysqli_query($mysqli, "update import SET Order_Number ='$Order_Number',Customer_id ='$Customer_id',Full_Name ='$Full_Name',Type ='$Type',Description = '$Description',Origin ='$Origin',Total_Cost = '$Total_Cost',Arrival_Date = '$Arrival_Date'Where id =$id"); 

    if($result)
    {
      echo "updated";
    }
    else
    {
    	echo "Failed";
    }
}
?>
<form action = "" method="POST">

Order_Number<input type = "text" name ="Order_Number" value="<?php echo $Order_Number; ?>">
<br>
Customer_id<input type = "text" name ="Customer_id" value="<?php echo $Customer_id; ?>">
<br>
Full_Name<input type = "text" name ="Full_Name" value="<?php echo $Full_Name; ?>">
<br>
Type<input type = "Type" name ="Type" value="<?php echo $Type; ?>">
<br>
Description<input type = "Description" name ="Description" value="<?php echo $Description; ?>">
<br>
Origin<input type = "Origin" name ="Origin" value="<?php echo $Origin; ?>">
<br>
Total_Cost<input type = "Total_Cost" name ="Total_Cost" value="<?php echo $Total_Cost; ?>">
<br>
Arrival_Date<input type = "Date" name ="Arrival_Date" value="<?php echo $Arrival_Date; ?>">
<br>
<input type="hidden" name="id"value= <?php echo $_GET['id'];?>>
<br>
<input type = "submit" name = "update" value="update">

</form>


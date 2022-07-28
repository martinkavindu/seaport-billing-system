<?php 
include("configimport.php");
$id = $_GET['id'];
$result = mysqli_query($mysqli,"SELECT* from adminpass where id=$id");
while($res = mysqli_fetch_array($result))

{   
    $email =  $res['email'];
 }
?>
<?php
if (Isset($_POST['delete'])){
    $id = $_POST['id'];
    $email = $res['email'];
    
    $result= mysqli_query($mysqli, "delete from adminpass Where id =$id"); 

    if($result)
    {
      echo "User Deleted";
    }
    else
    {
      echo "Failed";
    }
}
?>
<form action = "" method="POST">

email<input type = "text" name ="email" value="<?php echo $email; ?>">
<br>
<input type="hidden" name="id"value= <?php echo $_GET['id'];?>>
<br>
<input type = "submit" name = "delete" value="delete">

</form>


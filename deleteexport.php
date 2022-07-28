<?php 
include("configimport.php");
$id = $_GET['id'];
$result = mysqli_query($mysqli, "DELETE FROM  export WHERE id=$id");
header("location:header3.php");

?>

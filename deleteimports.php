<?php 
include("configimport.php");
$id = $_GET['id'];
$result = mysqli_query($mysqli, "DELETE FROM import WHERE id=$id");

?>



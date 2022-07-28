<?php
	session_start();

	$username = "";
	$email = ""; 
	$errors = array();

// connect to the database
$db = mysqli_connect('localhost','root','','seaport');

//log user in from login page
if (isset($_POST['login'])){
	$email = mysqli_real_escape_string($db,$_POST['email']);
	$password = mysqli_real_escape_string($db,$_POST['password']);
if (empty($email)) 
	{
		array_push($errors, "email is required");
	}
	
	if (empty($password))
	{
		array_push($errors, "Password is required");
	}
	 if (count($errors)==0){
	    //$password = md5($password); // encrypt password before comparing with that from database
	 	$query = "select * from adminpass where email ='$email' AND password = '$password'";
	 	$result = mysqli_query($db, $query);
	 	if (mysqli_num_rows($result) == 1)
	 	{
	 		//log user in 
	 		$_SESSION['email'] = $email;
	 		$_SESSION['success'] = "Welcome";
	 		header('location: header4.php');
	 	} else {
	 		array_push($errors, "username or password incorrect!");
	 	}
	 }
}

 // logout 
if (isset($_GET['Logout'])){
	session_destroy();
	unset($_SESSION['email']);
	header('location: home.php');
}

?>
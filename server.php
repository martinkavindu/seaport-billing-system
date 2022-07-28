<?php
	session_start();

	$username = "";
	$email = ""; 
	$errors = array();

// connect to the database
$db = mysqli_connect('localhost','root','','seaport');

// if the register button is clicked
if (isset($_POST['register'])){
	$username = mysqli_real_escape_string($db,$_POST['username']);
	$email = mysqli_real_escape_string($db,$_POST['email']);
	$password_1 = mysqli_real_escape_string($db,$_POST['password_1']);
	$password_2 = mysqli_real_escape_string($db,$_POST['password_2']);

	//ensure that form fieldss are filled properly
	if (!preg_match("/^[a-zA-Z ]+$/",$username)) 
	{
		array_push($errors, "Name must contain only alphabets and space");
	}
	if(!filter_var($email,FILTER_VALIDATE_EMAIL))
	{
		array_push($errors, "Invalid email format");
	}
	if (empty($password_1))
	{
		array_push($errors, "Password is required");
	}
	if ($password_1!= $password_2){
		array_push($errors,"The two passwords do not match");
	}
	 // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

	// if there are no errors, save user to database
	if(count($errors)==0){
		$password = md5($password_1);// encrypt password before storing in database (security)
		$sql = "INSERT INTO users (username, email, password) VALUES ('$username','$email','$password')";
		mysqli_query($db, $sql);
		$_SESSION['username'] = $username;
		$_SESSION['success'] = "You are now logged in";
		header('location: login1.php');//redirecting to customer page
	}
}
//log user in from login page
if (isset($_POST['login'])){
	$username = mysqli_real_escape_string($db,$_POST['username']);
	$password = mysqli_real_escape_string($db,$_POST['password']);
if (empty($username)) 
	{
		array_push($errors, "Username is required");
	}
	
	if (empty($password))
	{
		array_push($errors, "Password is required");
	}
	 if (count($errors)==0){
	 	$password = md5($password); // encrypt password before comparing with that from database
	 	$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
	 	$result = mysqli_query($db, $query);
	 	if (mysqli_num_rows($result) == 1)
	 	{
	 		//log user in 
	 		$_SESSION['username'] = $username;
	 		$_SESSION['success'] = "You are now logged in";
	 		header('location: header2.php');
	 	} else {
	 		array_push($errors, "invalid username or password");
	 	}
	 }
}

 // logout 
if (isset($_GET['Logout'])){
	session_destroy();
	unset($_SESSION['username']);
	header('location: login1.php');
}

?>
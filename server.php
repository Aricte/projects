<?php
//Creates a new Session to Log in 
session_start();

// initializing variables
$username = "";    //User
$password = "";    //Pass
$errors = array(); //Errors if any

// connect to the Database
$db = mysqli_connect('localhost', 'root', '', 'db_name');

//Pressed Button: Time to go
if (isset($_POST['login_user'])) 
{
  //Get the user Pass from input boxes
	$username = mysqli_real_escape_string($db, $_POST['user']); 
	$password = mysqli_real_escape_string($db, $_POST['pass']);

  //Makes Sure the said fields are not empty
	if (empty($username)) 
	{
		array_push($errors, "Username is required");
	}

	if (empty($password)) 
	{
		array_push($errors, "Password is required");
	}
  
  //If things check out from above step, start auth.
	if (count($errors) == 0) 
	{
    //Checks the Username and password combo to see if a user exists
		$password = md5($password);
		$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
		$results = mysqli_query($db, $query);

  //if a user does exist time to log in
	if (mysqli_num_rows($results) == 1) 
	{
		$_SESSION['username'] = $username; //Stores username
		$_SESSION['success'] = "You are now logged in"; //Custom sucess message
		echo '<script type="text/javascript">alert("'.$_SESSION['success'].'");</script>'; //Alerts the User of "success"
	}
	else 
	{
  //Returned false
		array_push($errors, "Wrong username or password combination");
	}
}

}?>

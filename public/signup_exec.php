<?php
	//Start session
	session_start();
	
	//Include database connection details
	require_once('connect.php');
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}

//email format
	function isValidEmail($email){
	return eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email);
}

//name format

function isValidName($name){
return eregi ("^[a-zA-Z][a-zA-Z -]*$", $name);
}


	
	//Sanitize the POST values
	$first_name = clean($_POST['first_name']);
	$last_name = clean($_POST['last_name']);
	$email_address = clean($_POST['email_address']);
	$user_name = clean($_POST['user_name']);
	$password = clean($_POST['password']);
	$confirm_password = clean($_POST['confirm_password']);
	$borough = clean($_POST['borough']);
	
	//Input Validations
	if($first_name == '') {
		$errmsg_arr[] = 'First name missing';
		$errflag = true;
	}


	
	if($last_name == '') {
		$errmsg_arr[] = 'Last name missing';
		$errflag = true;
	}

	if($email_address == '') {
		$errmsg_arr[] = 'Email missing';
		$errflag = true;
	}
else
{
if(isValidEmail($email_address) ==TRUE)
{
}
else
{
$errmsg_arr[] = 'Email address is not valid';
		$errflag = true;
}
}
	if($user_name == '') {
		$errmsg_arr[] = 'Login ID missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
	if($confirm_password == '') {
		$errmsg_arr[] = 'Confirm password missing';
		$errflag = true;
	}
	if( strcmp($password, $confirm_password) != 0 ) {
		$errmsg_arr[] = 'Passwords do not match';
		$errflag = true;
	}
	
	if($borough == 'choose_borough') {
		$errmsg_arr[] = 'Borough missing';
		$errflag = true;
	}

	//Check for duplicate login ID
	if($login != '') {
		$qry = "SELECT * FROM Members WHERE User_Name='$user_name'";
		$result = mysql_query($qry);
		if($result) {
			if(mysql_num_rows($result) > 0) {
				$errmsg_arr[] = 'Login ID already in use';
				$errflag = true;
			}
			@mysql_free_result($result);
		}
		else {
			die("Query failed");
		}
	}
	
		//Check for duplicate login Email
	if($login != '') {
		$qry = "SELECT * FROM Members WHERE Email_Address='$email_address'";
		$result = mysql_query($qry);
		if($result) {
			if(mysql_num_rows($result) > 0) {
				$errmsg_arr[] = 'Email address already in use';
				$errflag = true;
			}
			@mysql_free_result($result);
		}
		else {
			die("Query failed");
		}
	}
	
	//If there are input validations, redirect back to the registration form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: user_registration.php");
		exit();
	}
	
	$country='United States';
	$state='NY';
	$ip_address= $_SERVER['REMOTE_ADDR'];

	//Create INSERT query
	$qry = "INSERT INTO Members(First_Name, Last_Name, Country, State, City, User_Name, Email_Address, Password, IP_Address) 
	VALUES('$first_name','$last_name', '$country', '$state', '$city', '$user_name', '$email_address','".md5($_POST['password'])."', '$ip_address' )";
	$result = @mysql_query($qry);
	
	//Check whether the query was successful or not
	if($result) {
			$_SESSION['SESS_USER'] = $user_name;
			$_SESSION['SESS_EMAIL'] = $email_address;
		header("location: user_registration_success.php");
		exit();
	}else {
		die("Query failed");
	}
?>
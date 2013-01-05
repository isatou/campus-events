<?php
	//Start session
	session_start();
	
	//Include database connection details
	//require_once('connect.php');
	include("connect.php");
	
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
	$business_name = clean($_POST['business_name']);
	$business_category = clean($_POST['business_category']);
	$other_category = clean($_POST['other_category']);
$phone = clean($_POST['phone']);
$fax = clean($_POST['fax']);
$website = clean($_POST['website']);
$street = clean($_POST['street']);
$borough = clean($_POST['borough']);
$zipcode = clean($_POST['zipcode']);
$email_address = clean($_POST['email_address']);
	$user_name = clean($_POST['user_name']);
	$password = clean($_POST['password']);
	$confirm_password = clean($_POST['confirm_password']);
$description = clean($_POST['description']);
	
	//Input Validations
	if($business_name == '') {
		$errmsg_arr[] = 'Business name missing';
		$errflag = true;
	}

if($business_category == 'choose_business_category' && $other_category == '' ) {
		$errmsg_arr[] = 'Category missing';
		$errflag = true;
	}

else
{ 

if($business_category == 'choose_business_category') {
		$chosen_category=$other_category;
	}

else
{

if($other_category == '' ) {
		$chosen_category=$business_category;
	}
}
}






if($phone == '') {
		$errmsg_arr[] = 'Phone missing';
		$errflag = true;
	}

if($street == '') {
		$errmsg_arr[] = 'Street missing';
		$errflag = true;
	}

if($borough == 'choose_borough') {
		$errmsg_arr[] = 'Borough missing';
		$errflag = true;
	}

if($zipcode == '') {
		$errmsg_arr[] = 'Zipcode missing';
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

	



	
	//Check for duplicate login ID
	if($login != '') {
		$qry = "SELECT * FROM users WHERE UserName='$user_name'";
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
	
	//If there are input validations, redirect back to the registration form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: business_registration.php");
		exit();
	}

$state= 'NY';
$country= 'United States';
	//Create INSERT query
	$qry = "INSERT INTO Business(Business_Name, Category, Street, City, State, Country, Zipcode, Description, Website, Phone, Fax, User_Name, Email_Address, Password) VALUES('$business_name', '$chosen_category', '$street', '$borough', '$state', '$country', '$zipcode', '$description', '$website', '$phone', '$fax', '$user_name', '$email_address','".md5($_POST['password'])."')";
	$result = @mysql_query($qry);
	
	//Check whether the query was successful or not
	if($result) {
			$_SESSION['SESS_USERNAME'] = $user_name;
			$_SESSION['SESS_EMAILADDRESS'] = $email_address;
		header("location: payment.php");
		exit();
	}else {
		die("Query failed");
	}
?>
<?php
	//Start session
	session_start();
	
	//Include database connection details
	require_once('connect.php');
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	/*//Connect to mysql server
	$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
	if(!$link) {
		die('Failed to connect to server: ' . mysql_error());
	}


	//Select database
	$db = mysql_select_db(DB_DATABASE);
	if(!$db) {
		die("Unable to select database");
	}
*/

	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
	//Sanitize the POST values
	$description_short = clean($_POST['description_short']);
	$category = clean($_POST['category']);
	
	//Input Validations
	if($description_short == '') {
		$errmsg_arr[] = 'No text added!';
		$errflag = true;
	}
	if($category == 'Category') {
		$errmsg_arr[] = 'Category missing';
		$errflag = true;
	}
	
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: discussion.php");
		exit();
	}


	
	//Create query
	$qry="INSERT INTO `discussions`(`discussion_short`, `category`) VALUES ('$description_short', '$category')";
	$result=@mysql_query($qry);
	if($result)
	{
	header("location: discussion.php");
	exit();
	}
	else
	{
	die("Query failed!");
	}
			

?>

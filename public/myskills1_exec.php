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


	//Sanitize the POST values
	$category= clean($_POST['category']);
	$title= clean($_POST['title']);
	$description =clean($_POST['description']);
	$swap_description =clean($_POST['swap_description']);
	$points =clean($_POST['points']);
	$duration =clean($_POST['duration']);
	$swap_description2 =clean($_POST['swap_description2']);
	$points2 =clean($_POST['points2']);
	$duration2 =clean($_POST['duration2']);
	
	//Input Validations
	
	if($category == 'choose_category')
	{
	$errmsg_arr[] = 'You must choose a category';
		$errflag = true;
		}
		
		if($title == '')
	{
	$errmsg_arr[] = 'You must enter a title';
		$errflag = true;
		}
		
			if($description == '')
	{
	$errmsg_arr[] = 'You must enter a description of your skill';
		$errflag = true;
		}	
		
		if($swap_description == '')
	{
	$errmsg_arr[] = 'You must enter a details of the direct swap';
		$errflag = true;
		}
		
			if($points == '')
	{
	$errmsg_arr[] = 'You must enter points for your skill';
		$errflag = true;
		}
		
			if($duration == '')
	{
	$errmsg_arr[] = 'You must enter the duration the points reflect';
		$errflag = true;
		}
		
		if($swap_description2 == '')
	{
	$errmsg_arr[] = 'You must enter a details of the direct swap';
		$errflag = true;
		}
		
			if($points2 == '')
	{
	$errmsg_arr[] = 'You must enter points for your skill';
		$errflag = true;
		}
		
			if($duration2 == '')
	{
	$errmsg_arr[] = 'You must enter the duration the points reflect';
		$errflag = true;
		}
		
		//Create INSERT query into Skills_Possessed table
		
		$qry= "INSERT INTO Skills_Possessed(Member_id, Category, Title, Details, Swap_Type) 
		VALUES ('$member_id', '$category', '$title', '$description', '$swap_type')";
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
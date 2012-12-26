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
	
$title = clean($_POST['title']);
$category = clean($_POST['category']);
$details = clean($_POST['details']);
$month = clean($_POST['month']);
$day = clean($_POST['day']);
$year = clean($_POST['year']);
$start_hour = clean($_POST['start_hour']);
$start_minute = clean($_POST['start_minute']);
$start = clean($_POST['start']);
$end_hour = clean($_POST['end_hour']);
$end_minute = clean($_POST['end_minute']);
$end = clean($_POST['end']);
$location = clean($_POST['location']);
$admission = clean($_POST['admission']);
$reservation = clean($_POST['reservation']);
$amount = clean($_POST['amount']);
$person = clean($_POST['person']);
$email = clean($_POST['email']);
$phone = clean($_POST['phone']);

$website = clean($_POST['website']);
$check_email = clean($_POST['check_email']);
$check_phone = clean($_POST['check_phone']);

$refreshments = clean($_POST['refreshments']);
$raffle = clean($_POST['raffle']);




	
	//Input Validations


if($category == 'choose_category') {
		$errmsg_arr[] = 'No category chosen!';
		$errflag = true;
	}

if($title == '') {
		$errmsg_arr[] = 'No title added!';
		$errflag = true;
	}

if($details == '') {
		$errmsg_arr[] = 'No details added!';
		$errflag = true;
	}

if($month == 'choose_month') {
		$errmsg_arr[] = 'No month chosen!';
		$errflag = true;
	}

if($day == 'choose_day') {
		$errmsg_arr[] = 'No day chosen!';
		$errflag = true;
	}

if($year == 'choose_year') {
		$errmsg_arr[] = 'No year chosen!';
		$errflag = true;
	}

if($location == '') {
		$errmsg_arr[] = 'No location chosen!';
		$errflag = true;
	}
/*
if($amount == '') {
		$errmsg_arr[] = 'No amount added!';
		$errflag = true;
	}
*/

/*if($person == '') {
		$errmsg_arr[] = 'No contact person added!';
		$errflag = true;
	}*/

if($email == '') {
		$errmsg_arr[] = 'Submitter email not provided!';
		$errflag = true;
	}

if($website == '') {
		$website='NULL';
	}

if($phone == '') {
		$phone='NULL';
	}


if (isset($_POST['check_phone']))
	{
		$check_phone=1;
	}
else
	{
		$check_phone=0;
	}

if (isset($_POST['check_email']))
	{
		$check_email=1;
	}
else
	{
		$check_email=0;
	}

if (isset($_POST['refreshments']))
	{
		$refreshments=1;
	}
else
	{
		$refreshments=0;
	}

if (isset($_POST['raffle']))
	{
		$raffle=1;
	}
else
	{
		$raffle=0;
	}

	

	
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: add_events2.php");
		exit();
	}


	
	//Create query
	$qry="INSERT INTO `events`(`title`, `details`, `start_hour`, `start_minute`, `start`, 
`end_hour`, `end_minute`, `end`, `month`, `day`, `year`,`category`,    `location`, `email`, `website`, `phone`, `name`,  `admission`, `amount`, `reservation`, `refreshments`, `raffle`, `check_phone`, `check_email`) 
VALUES ('$title',  '$details',   '$start_hour', '$start_minute', '$start', '$end_hour', '$end_minute', '$end', '$month','$day','$year','$category', '$location',   '$email',  '$website', '$phone', '$person','$admission', '$amount', '$reservation', '$refreshments', '$raffle', '$check_phone', '$check_email')"; 

	/*$qry="INSERT INTO `events`(`title`, `details`) VALUES ('$title',  '$details')";*/

	/*$qry="INSERT INTO `events`(`title`, `category`, `details`, `month`, `day`, `year`, `start_hour`, `start_minute`, `start`, 
`end_hour`, `end_minute`, `end`, `location`, `admission`, `reservation`, `name`, `email`, `phone`, `website`) 
VALUES ('$title', '$category', '$details, '$month', '$day', '$year', '$start_hour', '$start_minute', '$start', 
'$end_hour', '$end_minute', '$end', '$location', '$admission', '$reservation', '$person', '$email', '$phone', '$website')";*/
	$result=@mysql_query($qry);
	if($result)
	{
	header("location: events2.php");
	exit();
	}
	else
	{
	die("query failed32");
	}
			

?>

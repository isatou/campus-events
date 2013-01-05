<?php
	//Start session
	session_start();
	
	//Include database connection details
	require_once('config.php');


$user= $_SESSION['SESS_USER']; 

$email=$_SESSION['SESS_EMAIL'];
	//Create query
	$qry="SELECT * FROM Users WHERE `User_Name`='$user' AND `Email_Address`='$email'";
	$result=mysql_query($qry);

	//Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) == 1) {
		
		//Login Successful
			//session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			$earnings= $member['Earnings'];
			$referral= $member['Referral_Number'];
			$name= $member['First_Name'];
			


		
			
}
else
{
}
}
else{
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Business Registration</title>

<link href="funny.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="styles.css" />
<link href="rating.css" rel="stylesheet" type="text/css" />
</head>
<body>



<div id="container">

<h1 style="text-align:center"> User Registration </h1>
	<div id="header">

<a href="welcome.html"> It's time to let it all out! <img src="logo.png" > 
</a>
		<h1>
			Home
		</h1>
	</div>
	<div id="navigation">
		<ul>
			<li><a href="welcome.html">Home</a></li>
                        <li><a href="submission.php">Submit Your Story</a></li>
			<li><a href="about.php">About</a></li>	
			<li><a href="contactus.php">Contact Us</a></li>
			
			
		</ul>
	</div>





	<div id="content-container1">

		
			<div id="section-navigation">
<?php
		include('search_query.php');
		
		?>

			</div>

			<div id="content">

<h2  > <?php echo $name; ?>'s Account</h2>


<h3> Current Earnings: <?php echo $earnings; ?> </h3>
<p> You can <a href="#"> click here </a> to request for a payout when you have at least $100 in earnings. </p>

<h3> Referral Number: <?php echo $referral; ?> </h3>
<p> Give out this referral number to any businesses that you refer to the website.  You would be paid $5 (5% of registration fee)
for every business that registers using your referral number when making a payment.  
<a href="#"> Click here </a> to learn more about our Referral 
Rewards Program and how you can start earning money today!
</p> 

<h3> Upload pictures for your listing </h3>

<form action="upload-exec.php" method="post" enctype="multipart/form-data" name="uploadform">
        <input type="hidden" name="MAX_FILE_SIZE" value="350000">
        <input name="picture" type="file" id="picture" size="50">
	<input name="upload" type="submit" id="upload" value="Upload Picture!">
</form>







</div>







			
			<div id="footer">
				

<div align= "center">Copyright &copy; My Funny Memories, 2012 
<a href="advertise.php">Advertise</a>
</div>


			</div>
		
	</div>

</div>
</body>
</html>

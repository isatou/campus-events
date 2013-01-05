<?php
	//Start session
	session_start();
	
	//Include database connection details
	require_once('connect.php');

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
			$referral='US';
			$id= $member['User_id'];
			$referral .= $id;
			
mysql_query("UPDATE `Users` SET `Referral_Number`='$referral' where `User_Name`='$user' AND `Email_Address`='$email'");
		
			
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
<title>Registration Successful</title>

<link href="funny.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="styles.css" />
<link href="rating.css" rel="stylesheet" type="text/css" />
</head>
<body>



<div id="container">


	<div id="header">

<a href="home.php"> <img src="logo1.png" > 
</a>
		
	</div>
	<div id="navigation">
		<ul>
			<li><a href="home.php">Home</a></li>
                        <li><a href="business_registration.php">Business Registration</a></li>
						<li><a href="user_registration.php">User Registration</a></li>
			<li><a href="about1.php">About</a></li>	
			<li><a href="contactus1.php">Contact Us</a></li>
			
			
		</ul>
	</div>

<h1 style="text-align:center"> Registration Successful </h1>



	<div id="content-container1">

		
			<div id="section-navigation">


			</div>

			<div id="content">
			
<div id='submissionContainer'>

<h2> Thank you for signing up.  Your Referral number is <?php echo $referral; ?> . </h2>
</br>
<h2> Print this page or write down your referral number.     Give out this referral number to any businesses that you refer to the website.  You would be paid $5 
for every business that registers using your referral number when making a payment.  </h2>
</br>
<h2> The website would be launched in March 15th 2012.  You would be able to login into your account then using your username
or email address and password. </h2>
</br>




</div>
</div>






			
			<div id="footer">
				

<div align= "center">Copyright &copy; My Business Lookup, 2012 
</div>


			</div>
		
	</div>

</div>
</body>
</html>

<?php
	//Start session
	session_start();
	
	//Include database connection details
	require_once('connect.php');

$user= $_SESSION['SESS_USERNAME']; 

$email=$_SESSION['SESS_EMAILADDRESS'];
	//Create query
	$qry="SELECT * FROM Business WHERE `User_Name`='$user' AND `Email_Address`='$email'";
	$result=mysql_query($qry);

	//Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) == 1) {
		
		//Login Successful
			//session_regenerate_id();
			$business = mysql_fetch_assoc($result);
			$referral= $business['Referral'];
							
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

<h2> Congratulations!  Your payment has been received.  Your application would be reviewed and you would be contacted within the next 48 hours.   

Please keep your invoice along with the "processing code" <?php echo $referral; ?> in case you need to verify your payment. </h2>


</br>
<h2> Please note that your processing code is also your referral number.
Print this page or write down your referral number.     Give out this referral number to any businesses that you refer to the website.  You would be paid $5 
for every business that registers using your referral number when making a payment.  </h2>
</br>  

<h2> You have been entered into the sweeptakes for a chance to win $1000!  You also have
been given a free one-month gold membership which would be effective March 15th 2012
when the website launches.  You would be able to login into your account then using your username
or email address and password. </h2>
</br>

<h2> Feel free to send us an email at support@mybusinesslookup.com or call us on </br>646-284-0164 or 646-284-2799</h2>




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

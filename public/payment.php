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
			$referral='BS';
			$referral .= $business['Business_id'];
			$id= $business['Business_id'];

mysql_query("UPDATE `Business` SET `Referral_Number`='$referral', 
`Ranking`='$id' where `User_Name`='$user' AND `Email_Address`='$email'");
						
}
else
{
}
}
else{
}



?>




<!-- Put IE into quirks mode -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title> Payment </title>

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

<h1 style="text-align:center"> Payment </h1>



	<div id="content-container1">

		
			<div id="section-navigation">


			</div>

			<div id="content">
			
<div id='submissionContainer'>


<h2> Payment Information </h2>

</br>

<h3>Thank you for signing up.  All your information is complete.  You have to pay a one-time fee of $100 to complete your registration.  </h3>

<h3> Processing Code: <?php echo $referral; ?> </h3>



<h3> Enter the "Processing Code" that was provided above and please enter the referral number if you were referred to this website. </h3>


<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="GB6L5754FSVDE">
<table>
<tr><td><input type="hidden" name="on0" value="Processing Code">Processing Code</td></tr><tr><td><input type="text" name="os0" maxlength="200"></td></tr>
<tr><td><input type="hidden" name="on1" value="Referral # (if applicable)">Referral # (if applicable)</td></tr><tr><td><input type="text" name="os1" maxlength="200"></td></tr>
</table>
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>






</div>
</div>







			
			<div id="footer">
				

<<div align= "center">Copyright &copy; My Business Lookup, 2012 
</div>


			</div>
		
	</div>

</div>

</body>
</html>
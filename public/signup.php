<?php
	//Start session
	session_start();
	?>
	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>User Registration</title>

<link href="funny.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="styles.css" />
<link href="rating.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		echo '<ul class="err">';
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<li>',$msg,'</li>'; 
		}
		echo '</ul>';
		unset($_SESSION['ERRMSG_ARR']);
	}
?>
<p>&nbsp;</p>


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

<h1 style="text-align:center"> User Registration </h1>





	<div id="content-container1">

		
			<div id="section-navigation">


			</div>

			<div id="content">
			
<div id='submissionContainer'>



<form id="loginForm" name="loginForm" method="post" action="signup_exec.php">
  <table width="100%" border="0" align="left" cellpadding="2" cellspacing="0">
    <tr>
      <th>First Name </th>
      <td><input name="first_name" type="text" class="textfield" id="first_name" /></td>
    </tr>
    <tr>
      <th>Last Name </th>
      <td><input name="last_name" type="text" class="textfield" id="last_name" /></td>
    </tr>
    <tr>
      <th width="124">Choose a username</th>
      <td width="168"><input name="user_name" type="text" class="textfield" id="user_name" /></td>
    </tr>
	<tr>
      <th>Email Address </th>
      <td><input name="email_address" type="text" class="textfield" id="email_address" /></td>
    </tr>



    <tr>
      <th>Choose a password</th>
      <td><input name="password" type="password" class="textfield" id="password" /></td>
    </tr>
    <tr>
      <th>Confirm Password </th>
      <td><input name="confirm_password" type="password" class="textfield" id="confirm_password" /></td>
    </tr>
	
	<tr>
	<td>&nbsp;</td>
	<td> <select name="Borough">
<option value="choose_borough">Choose a borough</option>
<option value="Brooklyn">Brooklyn</option>
<option value="Bronx">Bronx</option>
<option value="Manhattan">Manhattan</option>
<option value="Queens">Queens</option>
<option value="Staten Island">Staten Island</option>
</select></td>
</tr>
	
	</table>
</br>
    
      <div align="center">
	  <input type="submit" name="Submit" value="Register" />
	  </div>
   
  

</form>


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

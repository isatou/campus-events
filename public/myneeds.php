<?php
	session_start();
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

<h1 style="text-align:center"> What I'm Seeking </h1>

	<div id="content-container1">

		
			<div id="section-navigation">


			</div>

			<div id="content">
			
<div id='submissionContainer'>

<form id="loginForm" name="loginForm" method="post" action="business_register_exec.php">
  <table width="100%" border="0" align="left" cellpadding="2" cellspacing="0">
  
  <select name="event_month">
<option value="choose_business_category">Choose a category</option>
<option value="restaurant">January</option>
<option value="dentist">February</option>
<option value="laundromat">March</option>
<option value="day_care">April</option>
<option value="supermarket">May</option>
</select>
	  

    <tr>
      <th > Title </th>
      <td><input name="business_name" size="70" type="text" class="textfield" id="business_name" /></td>
    </tr>

  </table>
  

  
 <div>


<p>
   <b> Details </b>
</p>

<textarea name="description" id="styled"  onfocus="this.value=''; setbg('#e5fff3');" onblur="setbg('white')"></textarea>

</div>

  <table width="100%" border="0" align="left" cellpadding="2" cellspacing="0">
  
  <select name="event_month">
<option value="choose_business_category">Swap type</option>
<option value="restaurant">Direct swap only</option>
<option value="dentist">Point swap only</option>
<option value="laundromat">Both</option>
</select>


</br>

<h2> What I can offer: </h2>

<table  border="0"  cellpadding="2" cellspacing="0">
<tr>
<td><b>Check all categories that apply:</b></td>
   
<td ><input name="adventure" value='SET' type="checkbox"> Adventure</td>
<td ><input name="romance" value='SET' type="checkbox"> Romance</td>
<td ><input name="suspense" value='SET' type="checkbox"> Suspense</td>
<td ><input name="mystery" value='SET' type="checkbox"> Mystery</td>
<td ><input name="fantasy" value='SET' type="checkbox"> Fantasy</td>
<td ><input name="non_fiction" value='SET' type="checkbox"> Non Fiction</td>
    </tr>
 
  </table>
  
</br>
	  

 <div>


<p>
   <b> Details </b>
</p>

<textarea name="description" id="styled"  onfocus="this.value=''; setbg('#e5fff3');" onblur="setbg('white')"></textarea>

</div>

 


<div >
		<input type="submit" name='Submit' value="Submit" >
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

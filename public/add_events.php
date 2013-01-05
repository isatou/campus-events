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

<h1 style="text-align:center"> Add an event </h1>

	<div id="content-container1">

		
			<div id="section-navigation">


			</div>

			<div id="content">
			
<div id='submissionContainer'>

<form id="loginForm" name="loginForm" method="post" action="business_register_exec.php">
  <table width="100%" border="0" align="left" cellpadding="2" cellspacing="0">

    <tr>
      <th > Title </th>
      <td><input name="business_name" size="70" type="text" class="textfield" id="business_name" /></td>
    </tr>
	   <tr>
      <th>Day </th>
      <td>
	<select name="event_day">
<option value="choose_business_category">Choose a day</option>
<option value="restaurant">1</option>
<option value="dentist">2</option>
<option value="laundromat">3</option>
<option value="day_care">4</option>
<option value="supermarket">5</option>
</select>
	  
	  </td>
	 
    </tr>
	
	   <tr>
      <th>Day </th>
      <td>
	<select name="event_month">
<option value="choose_business_category">Choose a month</option>
<option value="restaurant">January</option>
<option value="dentist">February</option>
<option value="laundromat">March</option>
<option value="day_care">April</option>
<option value="supermarket">May</option>
</select>
	  
	  </td>
	 
    </tr>
	
	   <tr>
      <th>Day </th>
      <td>
	<select name="event_day">
<option value="choose_business_category">Choose a year</option>
<option value="restaurant">2012</option>
<option value="dentist">2013</option>
<option value="laundromat">2014</option>
<option value="day_care">2015</option>
<option value="supermarket">2016</option>
</select>
	  
	  </td>
	 
    </tr>
	
	   <tr>
      <th>Address </th>
      <td><input name="street" size="70" type="text" class="textfield" id="street" /></td>
    </tr>
	
	   <tr>
      <th>Borough </th>
      <td>
	  <select name="borough">
<option value="choose_borough">Choose a borough</option>
<option value="brooklyn">Brooklyn</option>
<option value="bronx">Bronx</option>
<option value="manhattan">Manhattan</option>
<option value="queens">Queens</option>
<option value="staten_island">Staten Island</option>
</select>
	  
	  </td>
    </tr>
	
	  
	
	   <tr>
      <th>Zipcode </th>
      <td><input name="zipcode" type="text" class="textfield" id="zipcode" /></td>
    </tr>
		

    

  </br>
</br>

  </table>
  

  
 <div>


<p>
   <b> Event Details </b>
</p>

<textarea name="description" id="styled"  onfocus="this.value=''; setbg('#e5fff3');" onblur="setbg('white')"></textarea>

</div>

</br>

<p>
   <b> Upload event flier or picture (optional) </b>
</p>

<label for="file">Filename:</label>
 <input type="file" name="file" id="file" /> 

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

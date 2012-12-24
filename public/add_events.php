<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Business Registration</title>

<link href="funny.css" rel="stylesheet" type="text/css" />
<link href="agenda1.css" rel="stylesheet" type="text/css" />
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
      <th > Title * </th>
      <td><input name="business_name" size="70" type="text" class="textfield" id="business_name" /></td>
    </tr>
	   <tr>
      <th>Day *</th>
      <td>
	<select name="day">
<option value="choose_day">day</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>
	  
	  </td>
	 
    </tr>
	
	   <tr>
      <th>Month *</th>
      <td>
	<select name="month">
<option value="choose_month">month</option>
<option value="january">January</option>
<option value="february">February</option>
<option value="march">March</option>
<option value="april">April</option>
<option value="may">May</option>
<option value="june">June</option>
<option value="july">July</option>
<option value="august">August</option>
<option value="september">September</option>
<option value="october">October</option>
<option value="november">November</option>
<option value="december">December</option>

</select>
	  
	  </td>
	 
    </tr>
	
	   <tr>
      <th>Year *</th>
      <td>
	<select name="event_year">
<option value="choose_year">year</option>
<option value="2012">2012</option>
<option value="2013">2013</option>
<option value="2014">2014</option>
<option value="2015">2015</option>
<option value="2016">2016</option>
</select>
	  
	  </td>
	 
    </tr>
<tr>
<th>Start time </th>
      <td><input name="start" type="text" class="textfield" id="start" /></td>
      <td>
	<select name="start">
<option value="AM">AM</option>
<option value="PM">PM</option>
</select>
	  </td>
    </tr>

<th>End time </th>
      <td><input name="end" type="text" class="textfield" id="end" /></td>
    <td>
	<select name="end">
<option value="AM">AM</option>
<option value="PM">PM</option>
</select>
	  </td>
    </tr>
	
	   <tr>
      <th>Location *</th>
      <td><input name="location" size="70" type="text" class="textfield" id="street" /></td>
    </tr>
	
	   <tr>
      <th>Event Type *</th>
      <td>
	  <select name="category">
<option value="choose_category">Choose a category</option>
<option value=""></option>
<option value=""></option>
<option value=""></option>
<option value=""></option>
<option value=""></option>
</select>
	  
	  </td>
    </tr>

	   <tr>
      <th>Admission *</th>
      <td>
	  <select name="admission">
<option value="free">free</option>
<option value="paid">paid</option>
</select>
	  
	  </td>
    </tr>

	   <tr>
      <th>Reservation required? *</th>
      <td>
	  <select name="reservation">
<option value="no">no</option>
<option value="yes">yes</option>
</select>
	  
	  </td>
    </tr>

    <tr>
      <th > Email </th>
      <td><input name="email" size="70" type="text" class="textfield" id="email" /></td>
    </tr>
<tr>
      <th>Phone </th>
      <td><input name="phone" type="text" class="textfield" id="phone" /></td>
    </tr>

    <tr>
      <th > Event Website </th>
      <td><input name="website" size="70" type="text" class="textfield" id="website" /></td>
    </tr> 
 



  </table>
  

  
 <div>


<p>
   <b> Event Details *</b>
</p>

<textarea name="description" id="styled"  onfocus="this.value=''; setbg('#e5fff3');" onblur="setbg('white')"></textarea>

</div>



<div>
<b> Check all that applies: </b>

<input type="checkbox" name="perks" value="refreshments"> Refreshments served
<input type="checkbox" name="perks" value="raffle"> Raffle
</div>

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

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

<h1 style="text-align:center"> Business Registration </h1>

	<div id="content-container1">

		
			<div id="section-navigation">


			</div>

			<div id="content">
			
<div id='submissionContainer'>

<form id="loginForm" name="loginForm" method="post" action="business_register_exec.php">
  <table width="100%" border="0" align="left" cellpadding="2" cellspacing="0">

    <tr>
      <th >Business Name </th>
      <td><input name="business_name" size="70" type="text" class="textfield" id="business_name" /></td>
    </tr>
	   <tr>
      <th>Category </th>
      <td>
	<select name="business_category">
<option value="choose_business_category">Choose a category</option>
<option value=""></option>
<option value="grocery_store">Grocery Store</option>
<option value="bakery">Bakery</option>
<option value="fast_food">Fast Food</option>
<option value="furniture">Furniture</option>
<option value="clothing">Clothing</option>
<option value="insurance">Insurance</option>
<option value="tax_preparation">Tax Preparation</option>
<option value="fish_market">Fish Market</option>
<option value="african_market">African Market</option>
<option value="photography">Photography</option>
<option value="printing">Printing</option>
<option value="gas_station">Gas Station</option>
<option value="post_office">Post Office</option>
<option value="Auto parts"> Auto Parts</option>
<option value="Car dealers">Car Dealers</option>
<option value="Electronics">Electronics</option>
<option value="beauty_supply">Beauty Supply</option>
<option value="gym">Gym</option>
<option value="barbershop">Barbershop</option>
<option value="dollar_store">Dollar Store</option>
<option value="restaurant">Restaurant</option>
<option value="dentist">Dentist</option>
<option value="laundromat">Laundromant</option>
<option value="day_care">Day Care</option>
<option value="supermarket">Supermarket</option>
</select>
	  
	  </td>
	 
    </tr>
	
	<tr>
	<th> </th>
	 <td > Enter category if none of the above categories match your business  </td>
	 <td><input name="other_category"  type="text" class="textfield" id="other_category" /></td>
	  
	</tr>
	

	
    <tr>
      <th>Phone Number </th>
      <td><input name="phone" size="50" type="text" class="textfield" id="phone" /></td>
    </tr>
	
	<tr>
      <th>Fax Number (if you have one)  </th>
      <td><input name="fax" size="50" type="text" class="textfield" id="fax" /></td>
    </tr>
	
	<tr>
      <th>Website (if you have one) </th>
      <td><input name="website" size="50" type="text" class="textfield" id="website" /></td>
    </tr>
	
	   <tr>
      <th>Street Address </th>
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
		

    <tr>
      <th width="124">Choose a username</th>
      <td width="168"><input name="user_name" type="text" class="textfield" id="user_name" /></td>
    </tr>
	<tr>
      <th>Email Address </th>
      <td><input name="email_address" size="50" type="text" class="textfield" id="email_address" /></td>
    </tr>



    <tr>
      <th>Choose a password</th>
      <td><input name="password" type="password" class="textfield" id="password" /></td>
    </tr>
    <tr>
      <th>Confirm Password </th>
      <td><input name="confirm_password" type="password" class="textfield" id="confirm_password" /></td>
    </tr>
  </br>
</br>

  </table>
  

  
 <div>


<p>
   <b>Short Description of your Business (Maximum of 10 lines)</b>
</p>

<textarea name="description" id="styled"  onfocus="this.value=''; setbg('#e5fff3');" onblur="setbg('white')"></textarea>

</div>

</br>

<div >
		<input type="submit" name='Submit' value="Submit" >
</div>

</form>



</div>
</div>







			
			<div id="footer">
				

<div align= "center">Copyright &copy; Neighborhood Portal, 2012 
</div>


			</div>
		
	</div>

</div>
</body>
</html>

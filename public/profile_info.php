<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Your Information</title>

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

<h1 style="text-align:center"> Fill out your information </h1>

	<div id="content-container1">

		
			<div id="section-navigation">


			</div>

			<div id="content">
			
<div id='submissionContainer'>

<form id="loginForm" name="loginForm" method="post" action="business_register_exec.php">

<h2> Fill out your information now.  You can always edit your details by going to the "Edit My Profile" tab. </h2>

<p>
   <b> Upload your picture </b>
</p>

<label for="file">Filename:</label>
 <input type="file" name="file" id="file" /> 

  </br>
  
 <div>


<p>
   <b> About Me </b>
</p>

<textarea name="description" id="styled"  onfocus="this.value=''; setbg('#e5fff3');" onblur="setbg('white')"></textarea>

</div>

<p>

   <b> Skills I'm offering: </b>
</p>


<input name="adventure" value='SET' type="checkbox"> Babysitting
<input name="romance" value='SET' type="checkbox"> Hair Braiding
<input name="suspense" value='SET' type="checkbox"> Gardening
<input name="mystery" value='SET' type="checkbox"> Driving
<input name="fantasy" value='SET' type="checkbox"> Plumbing
<input name="non_fiction" value='SET' type="checkbox"> Carpentry
<input name="non_fiction" value='SET' type="checkbox"> Musical Instrument
<input name="non_fiction" value='SET' type="checkbox"> Writing
<input name="non_fiction" value='SET' type="checkbox"> Laundry
<input name="non_fiction" value='SET' type="checkbox"> Cooking
<input name="non_fiction" value='SET' type="checkbox"> Cleaning
<input name="non_fiction" value='SET' type="checkbox"> Tutoring
    
  
  <p> Details </p>

<textarea name="description" id="styled"  onfocus="this.value=''; setbg('#e5fff3');" onblur="setbg('white')"></textarea>



</br>

<p>

   <b> Skills I'm seeking: </b>
</p>

<table  border="0"  cellpadding="2" cellspacing="0">
<tr>
<td><b>Check the category of your story:</b></td>
   
<td ><input name="adventure" value='SET' type="checkbox"> Adventure</td>
<td ><input name="romance" value='SET' type="checkbox"> Romance</td>
<td ><input name="suspense" value='SET' type="checkbox"> Suspense</td>
<td ><input name="mystery" value='SET' type="checkbox"> Mystery</td>
<td ><input name="fantasy" value='SET' type="checkbox"> Fantasy</td>
<td ><input name="non_fiction" value='SET' type="checkbox"> Non Fiction</td>
    </tr>
 
  </table>
  
    <p> Details </p>

<textarea name="description" id="styled"  onfocus="this.value=''; setbg('#e5fff3');" onblur="setbg('white')"></textarea>



</br>

<p>

  <b> Items I'm swapping: </b>
</p>



<textarea name="description" id="styled"  onfocus="this.value=''; setbg('#e5fff3');" onblur="setbg('white')"></textarea>



</br>

   <b> Items I'm seeking: </b>
</p>

<textarea name="description" id="styled"  onfocus="this.value=''; setbg('#e5fff3');" onblur="setbg('white')"></textarea>



</br>


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

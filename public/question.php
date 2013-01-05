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

<h1 style="text-align:center"> Ask A Question </h1>

	<div id="content-container1">

		
			<div id="section-navigation">


			</div>

			<div id="content">
			
<div id='submissionContainer'>

<form id="loginForm" name="loginForm" method="post" action="business_register_exec.php">
  <table width="100%" border="0" align="left" cellpadding="2" cellspacing="0">

 
	 
	
	   <tr>
      <th>Ask question to? </th>
      <td>
	  <select name="borough">
<option value="choose_borough">Select an option</option>
<option value="brooklyn">Everybody</option>
<option value="queens">People in my zipcode</option>
<option value="bronx">People in my neighborhood</option>
<option value="manhattan">People in my city</option>
</select>
	  
	  </td>
    </tr>
	
	
	 
  </br>
</br>

  </table>
  

  
 <div>


<p>
   <b> Write you Question here </b>
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
				

<div align= "center">Copyright &copy; My Business Lookup, 2012 
</div>


			</div>
		
	</div>

</div>
</body>
</html>

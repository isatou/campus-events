<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Business Registration</title>

<link href="funny.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="styles.css" />
<link href="rating.css" rel="stylesheet" type="text/css" />


<style>

body{
font-family:Verdana, Geneva, sans-serif;
font-size:14px;}

.slidingDiv {
	height:300px;
	background-color: #99CCFF;
	padding:20px;
	margin-top:10px;
	border-bottom:5px solid #3399FF;
}

.show_hide {
	display:none;
}


</style>


</head>

<body>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
$('#box1').hide();
$('#box2').hide();
$('#box3').hide();
$("#thechoices").change(function(){
if(this.value == 'all')
{$("#boxes").children().show();}
else
{$("#" + this.value).show().siblings().hide();}
});

$("#thechoices").change();
});
</script>
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

<h1 style="text-align:center"> What I'm Offering </h1>

	<div id="content-container1">

		
			<div id="section-navigation">


			</div>

			<div id="content">
			
			<div id='submissionContainer'>
			
<select id="thechoices">
<option value="box1">Box 1</option>
<option value="box2">Box 2</option>
<option value="box3">Box 3</option>
<option value="all">All Boxes</option> 
</select>

<!-- the DIVs -->
<div id="boxes">
<div id="box1">



  
 
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

<textarea name="description"   onfocus="this.value=''; setbg('#e5fff3');" onblur="setbg('white')"></textarea>

</div>

</div>
<div id="box2"><p>Box 2 stuff...</p></div>
<div id="box3"><p>Box 3 stuff...</p></div>
</div>

</div>
</div>
</div>
</body> 
</html>
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
$('#direct_swap').hide();
$('#point_swap').hide();
$('#all_swap').hide();
$("#swap_type").change(function(){
if(this.value == 'both')
{$("#swap").children().show();}
else
{$("#" + this.value).show().siblings().hide();}
});

$("#swap_type").change();
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


 
   <select id="swap_type">
<option value="choose_swap_type">Choose swap type</option>
<option value="direct_swap">Direct swap only</option>
<option value="point_swap">Point swap only</option>
<option value="all_swap">Both1</option>
<option value="both">Both</option>
</select>

</br>

<div id="swap">

<div id="direct_swap">








<h2> Direct Swap </b>

</br>

<select name="event_month">
<option value="choose_business_category">Choose a category</option>
<option value="restaurant">January</option>
<option value="dentist">February</option>
<option value="laundromat">March</option>
<option value="day_care">April</option>
<option value="supermarket">May</option>
</select>
	  
  <table width="100%" border="0" align="left" cellpadding="2" cellspacing="0">
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


 

</br>

<p>
   <b> Upload Picture(s) </b>
</p>

<div>
<label for="file">Filename:</label>
 <input type="file" name="file" id="file" /> 
 </div>
 <div>
 <label for="file">Filename:</label>
 <input type="file" name="file" id="file" /> 
 </div>
 <div>
 <label for="file">Filename:</label>
 <input type="file" name="file" id="file" /> 
 </div>
 <div>
  <label for="file">Filename:</label>
 <input type="file" name="file" id="file" /> 
 </div>
 <div>
  <label for="file">Filename:</label>
 <input type="file" name="file" id="file" /> 
 </div>
 
 </br>

<h2> What I need in return: </h2>

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

<textarea name="description"   onfocus="this.value=''; setbg('#e5fff3');" onblur="setbg('white')"></textarea>

</div>


 
 </br>
 

 




 


<div >
		<input type="submit" name='Submit' value="Submit" >
</div>

 




</div>

<div id="point_swap">

 
<select name="event_month">
<option value="choose_business_category">Choose a category</option>
<option value="restaurant">January</option>
<option value="dentist">February</option>
<option value="laundromat">March</option>
<option value="day_care">April</option>
<option value="supermarket">May</option>
</select>
	  <table width="100%" border="0" align="left" cellpadding="2" cellspacing="0">  

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


 

</br>

<p>
   <b> Upload Picture(s) </b>
</p>

<div>
<label for="file">Filename:</label>
 <input type="file" name="file" id="file" /> 
 </div>
 <div>
 <label for="file">Filename:</label>
 <input type="file" name="file" id="file" /> 
 </div>
 <div>
 <label for="file">Filename:</label>
 <input type="file" name="file" id="file" /> 
 </div>
 <div>
  <label for="file">Filename:</label>
 <input type="file" name="file" id="file" /> 
 </div>
 <div>
  <label for="file">Filename:</label>
 <input type="file" name="file" id="file" /> 
 </div>
 
 </br>

  





<h2> Point Swap </h2>

<p>	  
<b> Note: $1 corresponds to 1 point.  Be honest and realistic in the points your write.  Even though it is up to other users to accept or decline your offer, 
we do not condone any abuse of the point system.  Posts with unrealistic points would be deleted!!!
</p>

  <table width="100%" border="0" align="left" cellpadding="2" cellspacing="0">
    <tr>
      <th > Points </th>
      <td><input name="business_name" size="70" type="text" class="textfield" id="business_name" /></td>
    </tr>
	
	 <tr>
      <th > Duration </th>
      <td><input name="business_name" size="70" type="text" class="textfield" id="business_name" /></td>
    </tr>

  </table>

</br>



 




 


<div >
		<input type="submit" name='Submit' value="Submit" >
</div>

 



</div>



<div id="all_swap">

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


 

</br>

<p>
   <b> Upload Picture(s) </b>
</p>

<div>
<label for="file">Filename:</label>
 <input type="file" name="file" id="file" /> 
 </div>
 <div>
 <label for="file">Filename:</label>
 <input type="file" name="file" id="file" /> 
 </div>
 <div>
 <label for="file">Filename:</label>
 <input type="file" name="file" id="file" /> 
 </div>
 <div>
  <label for="file">Filename:</label>
 <input type="file" name="file" id="file" /> 
 </div>
 <div>
  <label for="file">Filename:</label>
 <input type="file" name="file" id="file" /> 
 </div>
 
 </br>

 

<h2> Direct Swap </b>

<h2> What I need in return: </h2>

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

<textarea name="description"   onfocus="this.value=''; setbg('#e5fff3');" onblur="setbg('white')"></textarea>

</div>


 
 </br>
 

  





<h2> Point Swap </h2>

<p>	  
<b> Note: $1 corresponds to 1 point.  Be honest and realistic in the points your write.  Even though it is up to other users to accept or decline your offer, 
we do not condone any abuse of the point system.  Posts with unrealistic points would be deleted!!!
</p>

  <table width="100%" border="0" align="left" cellpadding="2" cellspacing="0">
    <tr>
      <th > Points </th>
      <td><input name="business_name" size="70" type="text" class="textfield" id="business_name" /></td>
    </tr>
	
	 <tr>
      <th > Duration </th>
      <td><input name="business_name" size="70" type="text" class="textfield" id="business_name" /></td>
    </tr>

  </table>

</br>


 

 




 


<div >
		<input type="submit" name='Submit' value="Submit" >
</div>

 



</div>










</div>

 



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


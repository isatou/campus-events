<?php
	session_start();
?>


<!-- Put IE into quirks mode -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title> Submit an Event </title>
<link href="agenda.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="styles.css" />
<meta name="Author" content="Isatou" />

<script type="text/javascript">



function addCategory(category_num)
{
	var issue1= document.getElementById('myCategory');


	if(category_num.category.value == 'for sale')
	{
	issue1.innerHTML='<tr id="myCategory"><th>Amount: ($) </th><td><input name="amount" type="text" class="textfield" id="amount" ></td></tr>';
	}

	else if(category_num.category.value == 'housing wanted')
	{
	issue1.innerHTML='<tr> <th>Amount </th> <td><input name="amount" type="text" class="textfield" id="amount" ></td></tr><tr><th > Submitter Email * </th><td><input name="email" size="70" type="text" class="textfield" id="email" ></td></tr> <tr> <th>  </th> <td> <input type="checkbox" name="contact_check" id="contact_check" value="1" onclick="FillContactEmail(this.form)"> same as above </td> </tr><tr><th> Contact Email  </th><td><input name="contact_email" size="70" type="text" class="textfield" id="contact_email" ></td></tr><tr><th> Contact Person </th><td><input name="person" size="70" type="text" class="textfield" id="person" ></td></tr><tr><th>Contact Phone </th><td><input name="phone" type="text" class="textfield" id="phone" ></td></tr><tr><th > Check to display on event page </th> <td><input type="checkbox" name="check_phone" id="check_phone" value="1"> phone<input type="checkbox" name="check_email" id="check_email" value="1"> email</td></tr><tr><th width="40%">Details *</th><td ><textarea name="details" id="details" style="width:400px; height:200px;" onfocus="this.value=''; setbg("#e5fff3");" onblur="setbg("white")"></textarea></td></tr><tr><th></th><td><input type="submit" name="submit" id="submit" value="Submit" ></td></tr>'; 

	}


	else if(category_num.category.value == 'housing available')
	{
	issue1.innerHTML='<tr> <th>Amount </th> <td><input name="amount" type="text" class="textfield" id="amount" ></td></tr><tr><th > Submitter Email * </th><td><input name="email" size="70" type="text" class="textfield" id="email" ></td></tr> <tr> <th>  </th> <td> <input type="checkbox" name="contact_check" id="contact_check" value="1" onclick="FillContactEmail(this.form)"> same as above </td> </tr><tr><th> Contact Email  </th><td><input name="contact_email" size="70" type="text" class="textfield" id="contact_email" ></td></tr><tr><th> Contact Person </th><td><input name="person" size="70" type="text" class="textfield" id="person" ></td></tr><tr><th>Contact Phone </th><td><input name="phone" type="text" class="textfield" id="phone" ></td></tr><tr><th > Check to display on event page </th> <td><input type="checkbox" name="check_phone" id="check_phone" value="1"> phone<input type="checkbox" name="check_email" id="check_email" value="1"> email</td></tr><tr><th width="40%">Details *</th><td ><textarea name="details" id="details" style="width:400px; height:200px;" onfocus="this.value=''; setbg("#e5fff3");" onblur="setbg("white")"></textarea></td></tr><tr><th></th><td><input type="submit" name="submit" id="submit" value="Submit" ></td></tr>'; 
	}

	else if(category_num.category.value == 'job')
	{
	issue1.innerHTML='<tr><th > Submitter Email * </th><td><input name="email" size="70" type="text" class="textfield" id="email" ></td></tr> <tr> <th>  </th> <td> <input type="checkbox" name="contact_check" id="contact_check" value="1" onclick="FillContactEmail(this.form)"> same as above </td> </tr><tr><th> Contact Email  </th><td><input name="contact_email" size="70" type="text" class="textfield" id="contact_email" ></td></tr><tr><th> Contact Person </th><td><input name="person" size="70" type="text" class="textfield" id="person" ></td></tr><tr><th>Contact Phone </th><td><input name="phone" type="text" class="textfield" id="phone" ></td></tr><tr><th > Check to display on event page </th> <td><input type="checkbox" name="check_phone" id="check_phone" value="1"> phone<input type="checkbox" name="check_email" id="check_email" value="1"> email</td></tr><tr><th width="40%">Details *</th><td ><textarea name="details" id="details" style="width:400px; height:200px;" onfocus="this.value=''; setbg("#e5fff3");" onblur="setbg("white")"></textarea></td></tr><tr><th></th><td><input type="submit" name="submit" id="submit" value="Submit" ></td></tr>'; 
	}

	else if(category_num.category.value == 'internship')
	{
	issue1.innerHTML='<tr><th > Submitter Email * </th><td><input name="email" size="70" type="text" class="textfield" id="email" ></td></tr> <tr> <th>  </th> <td> <input type="checkbox" name="contact_check" id="contact_check" value="1" onclick="FillContactEmail(this.form)"> same as above </td> </tr><tr><th> Contact Email  </th><td><input name="contact_email" size="70" type="text" class="textfield" id="contact_email" ></td></tr><tr><th> Contact Person </th><td><input name="person" size="70" type="text" class="textfield" id="person" ></td></tr><tr><th>Contact Phone </th><td><input name="phone" type="text" class="textfield" id="phone" ></td></tr> <tr><th> Website </th><td><input name="website" size="70" type="text" class="textfield" id="website" ></td></tr><tr><th > Check to display on event page </th> <td><input type="checkbox" name="check_phone" id="check_phone" value="1"> phone<input type="checkbox" name="check_email" id="check_email" value="1"> email</td></tr><tr><th width="40%">Details *</th><td ><textarea name="details" id="details" style="width:400px; height:200px;" onfocus="this.value=''; setbg("#e5fff3");" onblur="setbg("white")"></textarea></td></tr><tr><th></th><td><input type="submit" name="submit" id="submit" value="Submit" ></td></tr>'; 
	}

	else if(category_num.category.value == 'services')
	{
	issue1.innerHTML='<tr> <th>Amount </th> <td><input name="amount" type="text" class="textfield" id="amount" ></td></tr><tr><th > Submitter Email * </th><td><input name="email" size="70" type="text" class="textfield" id="email" ></td></tr> <tr> <th>  </th> <td> <input type="checkbox" name="contact_check" id="contact_check" value="1" onclick="FillContactEmail(this.form)"> same as above </td> </tr><tr><th> Contact Email  </th><td><input name="contact_email" size="70" type="text" class="textfield" id="contact_email" ></td></tr><tr><th> Contact Person </th><td><input name="person" size="70" type="text" class="textfield" id="person" ></td></tr><tr><th>Contact Phone </th><td><input name="phone" type="text" class="textfield" id="phone" ></td></tr><tr><th > Check to display on event page </th> <td><input type="checkbox" name="check_phone" id="check_phone" value="1"> phone<input type="checkbox" name="check_email" id="check_email" value="1"> email</td></tr><tr><th width="40%">Details *</th><td ><textarea name="details" id="details" style="width:400px; height:200px;" onfocus="this.value=''; setbg("#e5fff3");" onblur="setbg("white")"></textarea></td></tr><tr><th></th><td><input type="submit" name="submit" id="submit" value="Submit" ></td></tr>'; 
	}

	else if(category_num.category.value == 'tutoring')
	{
	issue1.innerHTML='<tr> <th>Amount </th> <td><input name="amount" type="text" class="textfield" id="amount" ></td></tr><tr><th > Submitter Email * </th><td><input name="email" size="70" type="text" class="textfield" id="email" ></td></tr> <tr> <th>  </th> <td> <input type="checkbox" name="contact_check" id="contact_check" value="1" onclick="FillContactEmail(this.form)"> same as above </td> </tr><tr><th> Contact Email  </th><td><input name="contact_email" size="70" type="text" class="textfield" id="contact_email" ></td></tr><tr><th> Contact Person </th><td><input name="person" size="70" type="text" class="textfield" id="person" ></td></tr><tr><th>Contact Phone </th><td><input name="phone" type="text" class="textfield" id="phone" ></td></tr><tr><th > Check to display on event page </th> <td><input type="checkbox" name="check_phone" id="check_phone" value="1"> phone<input type="checkbox" name="check_email" id="check_email" value="1"> email</td></tr><tr><th width="40%">Details *</th><td ><textarea name="details" id="details" style="width:400px; height:200px;" onfocus="this.value=''; setbg("#e5fff3");" onblur="setbg("white")"></textarea></td></tr><tr><th></th><td><input type="submit" name="submit" id="submit" value="Submit" ></td></tr>'; 
	}

	else if(category_num.category.value == 'textbooks wanted')
	{
	issue1.innerHTML='<tr><th > Submitter Email * </th><td><input name="email" size="70" type="text" class="textfield" id="email" ></td></tr> <tr> <th>  </th> <td> <input type="checkbox" name="contact_check" id="contact_check" value="1" onclick="FillContactEmail(this.form)"> same as above </td> </tr><tr><th> Contact Email  </th><td><input name="contact_email" size="70" type="text" class="textfield" id="contact_email" ></td></tr><tr><th> Contact Person </th><td><input name="person" size="70" type="text" class="textfield" id="person" ></td></tr><tr><th>Contact Phone </th><td><input name="phone" type="text" class="textfield" id="phone" ></td></tr><tr><th > Check to display on event page </th> <td><input type="checkbox" name="check_phone" id="check_phone" value="1"> phone<input type="checkbox" name="check_email" id="check_email" value="1"> email</td></tr><tr><th width="40%">Details *</th><td ><textarea name="details" id="details" style="width:400px; height:200px;" onfocus="this.value=''; setbg("#e5fff3");" onblur="setbg("white")"></textarea></td></tr><tr><th></th><td><input type="submit" name="submit" id="submit" value="Submit" ></td></tr>'; 
	}

	else if(category_num.category.value == 'textbooks for sale')
	{
	issue1.innerHTML='<tr> <th>Amount </th> <td><input name="amount" type="text" class="textfield" id="amount" ></td></tr><tr><th > Submitter Email * </th><td><input name="email" size="70" type="text" class="textfield" id="email" ></td></tr> <tr> <th>  </th> <td> <input type="checkbox" name="contact_check" id="contact_check" value="1" onclick="FillContactEmail(this.form)"> same as above </td> </tr><tr><th> Contact Email  </th><td><input name="contact_email" size="70" type="text" class="textfield" id="contact_email" ></td></tr><tr><th> Contact Person </th><td><input name="person" size="70" type="text" class="textfield" id="person" ></td></tr><tr><th>Contact Phone </th><td><input name="phone" type="text" class="textfield" id="phone" ></td></tr><tr><th > Check to display on event page </th> <td><input type="checkbox" name="check_phone" id="check_phone" value="1"> phone<input type="checkbox" name="check_email" id="check_email" value="1"> email</td></tr><tr><th width="40%">Details *</th><td ><textarea name="details" id="details" style="width:400px; height:200px;" onfocus="this.value=''; setbg("#e5fff3");" onblur="setbg("white")"></textarea></td></tr><tr><th></th><td><input type="submit" name="submit" id="submit" value="Submit" ></td></tr>'; 
	}

	else if(category_num.category.value == 'choose_category')
	{
	issue1.innerHTML='';
	}



	if(category_num.category.value == '1')
	{
	issue1.innerHTML='<tr id="myDiv"><th>Amount: ($) </th><td><input name="amount" type="text" class="textfield" id="amount" ></td></tr>';
	}
	

	if(category_num.category.value == '0')
	{
	issue1.removeChild(issue1.firstChild);
	issue1.removeChild(issue1.firstChild);
	}
}




</script>

</head>
<body>

<?php
include('side_bar.php');
?>

<div id="container">

<div id="content-container1">
<div id="content-container3">
<div id="content">

<?php
$result_pro=mysql_query($qry_pro);
if($result_pro)
{
	

	if(mysql_num_rows($result_pro) != 0)
	{
?>

		


			

		<b style="color:#0196e3";> Promoted Events: </b>	
		<?php
			$row_pro=mysql_fetch_assoc($result_pro);
			$url="event_page.php?id=";
			$url .=$row_pro['event_id'];

			echo '	<div id="submissionPromotion" style="color:#0196e3";>
					<b #0196e3><a href="'.$url.'">  '.$row_pro['title'].' @ '.$row_pro['location'].' from '.$row_pro['start_hour'].':'.$start.' '.$row_pro['start'].' to '.$row_pro['end_hour'].':'.$end.' '.$row_pro['end'].'</a></b>
			<br/>
			'.$row_pro['details'].'
			<br/>'; 
			foreach ($extra as $i)
				{
					echo ' *'.$i.'* ';
				}
	}
}
else
{
die("promotion query failed!");
}

?>



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



<form id="loginForm" name="loginForm" method="post" action="event_exec.php">
  <table width="100%" border="0" align="left" cellpadding="2" cellspacing="0" id='submissionContainer' style="color:#0196e3";>


    <tr>
      <th > Title * </th>
      <td><input name="title" size="70" type="text" class="textfield" id="title" /></td>
    </tr>


  <tr>
      <th>Event Type (*)</th>
      <td>
	  <select name="category" id="drop" onclick="addCategory(this.form)">
<option style="background-color:#58B9EB"; value="choose_category">Choose a category</option>
<option style="background-color:#58B9EB"; value="for sale">for sale</option>
<option style="background-color:#58B9EB"; value="housing wanted">housing wanted</option>
<option style="background-color:#58B9EB"; value="housing available">housing available</option>
<option style="background-color:#58B9EB"; value="job">job</option>
<option style="background-color:#58B9EB"; value="internship">internship</option>
<option style="background-color:#58B9EB"; value="services">services</option>
<option style="background-color:#58B9EB"; value="tutoring">tutoring</option>
<option style="background-color:#58B9EB"; value="textbooks wanted">textbooks wanted</option>
<option style="background-color:#58B9EB"; value="textbooks available">textbooks available</option>
</select>
	  
	  </td>
    </tr>
   <tr id="myCategory">
      

    </tr>



</table>
</form>



</div>

<?php
include('adverts.php');
?>



			
			
	

</div>
</div>
 </div>



<?php
include('menu.php');
?>




     
 





</body></html>
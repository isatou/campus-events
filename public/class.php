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

function FillContactEmail(contact) 
{
	if(contact.contact_check.checked == true)
	{
  //if(f.billingtoo.checked == true) {
	contact.contact_email.value=contact.email.value;
    //f.billingname.value = f.shippingname.value;
   // f.billingcity.value = f.shippingcity.value;
  	}
}


function addAmount2(amount_num)
{
	var issue1= document.getElementById('myDiv');
	var text=document.createElement('div1'); 

	text.innerHTML='<th>Amount: ($) </th><td><input name="amount" type="text" class="textfield" id="amount" ></td>';


	if(amount_num.admission.value == '1')
	{
	//var issue1= document.getElementById('myDiv');
	//var text=document.createElement('div1'); 

	//text.innerHTML='<th>Amount: ($) </th><td><input name="amount" type="text" class="textfield" id="amount" ></td>';
	
//"Hello this is a test"; 
	//issue1.appendChild(text);
	issue1.innerHTML='<tr id="myDiv"><th>Amount: ($) </th><td><input name="amount" type="text" class="textfield" id="amount" ></td></tr>';
	//issue1.removeChild(text);

	}
	
	
	

	if(amount_num.admission.value == '0')
	{
	//var issue1= document.getElementById('myDiv');
	//var text=document.createElement('div1'); 

	//text.innerHTML='<th>Amount: ($) </th><td><input name="amount" type="text" class="textfield" id="amount" ></td>';
	//var d = document.getElementById('myDiv');
  	//var olddiv = document.getElementById(divNum);
  	//d.removeChild(text);
	//text.parentNode.removeChild(text);
	//issue1.removeChild(issue1.firstChild);


	issue1.removeChild(issue1.firstChild);
	issue1.removeChild(issue1.firstChild);
	//issue1.innerHTMl='<tr id="myDiv"></tr>'
	}
}

function addAmount()
{

var issue1= document.getElementById('myDiv');
var text=document.createElement('div1'); 
text.innerHTML='<p> Issue: </p><textarea name="description_short" id="description_short"  ></textarea>';
//"Hello this is a test";
issue1.appendChild(text);
//issue1.removeChild(text);

}



function displayDate()
{
document.getElementById("demo").innerHTML=Date();
}

function AmountForm(amount_num) 
{
	if(amount_num.admission.value == '0')
	{
	document.getElementById("add").innerHTML=Date();
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
	  <select name="category" id="drop">
<option style="background-color:#58B9EB"; value="choose_category">Choose a category</option>
<option style="background-color:#58B9EB"; value="student_club">student club</option>
<option style="background-color:#58B9EB"; value="workshop">workshop</option>
<option style="background-color:#58B9EB"; value="conference">conference</option>
<option style="background-color:#58B9EB"; value="religious">religious</option>
<option style="background-color:#58B9EB"; value="sports">sports</option>
<option style="background-color:#58B9EB"; value="movie">movie</option>
<option style="background-color:#58B9EB"; value="show">live show</option>
</select>
	  
	  </td>
    </tr>
	
	 

	   <tr>
      <th >Admission *</th>
      <td>
	<select name="admission" id="drop"  onclick="addAmount2(this.form)">
	<option style="background-color:#58B9EB"; value="0">free</option>
	<option style="background-color:#58B9EB"; value="1">paid</option>
	</select>
	  
	  </td>
    </tr>



   <tr id="myDiv">
      

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

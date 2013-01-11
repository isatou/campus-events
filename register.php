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

<script>

function FillContactEmail(contact) 
{
	if(contact.contact_check.checked == true)
	{
	contact.contact_email.value=contact.email.value;
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
	issue1.appendChild(text);
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

<b style="color:#0196e3";> Promoted Event: </b>
<?php
$result_pro=mysql_query($qry_pro);
if($result_pro)
{
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
else
{
die("promotion query failed!");
}

?>
</div>


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
      <th>School (*)</th>
      <td>
	  <select name="school" id="drop">
<option style="background-color:#58B9EB"; value="choose school">Choose a school</option>
<option style="background-color:#58B9EB"; value="ccny">CCNY</option>
</select>
	  
	  </td>
    </tr>
<tr>
 <th>Gender (*)</th>
<td>
<select name="gender" id="drop">
<option style="background-color:#58B9EB"; value="all">Choose gender</option>
<option style="background-color:#58B9EB"; value="male">Male</option>
<option style="background-color:#58B9EB"; value="female">Female</option>
</select>
</td>
</tr>

    <tr>
      <th >  First Name * </th>
      <td><input name="first_name" size="70" type="text" class="textfield" id="first_name" /></td>
    </tr>

    <tr>
      <th >  Last Name * </th>
      <td><input name="last_name" size="70" type="text" class="textfield" id="last_name" /></td>
    </tr>

    <tr>
      <th >  School Email * </th>
      <td><input name="email" size="70" type="text" class="textfield" id="email" /></td>
    </tr>


<tr>
<th>
</th>
<td>
		<input type="submit" name='submit' id="submit" value="Submit" >
</td>
</tr> 

</table>
</form>


 



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

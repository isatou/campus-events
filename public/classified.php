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
	contact.contact_email.value=contact.email.value;
  	}
}

</script>

<script type="text/javascript">

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

</script>

<script type="text/javascript">

function hide_fields()
{

	//hide for sale	
	var sale1= document.getElementById("sale1");
	sale1.style.display="none";

	var sale2= document.getElementById("sale2");
	sale2.style.display="none";

	var sale3= document.getElementById("sale3");
	sale3.style.display="none";

	var sale4= document.getElementById("sale4");
	sale4.style.display="none";

	var sale5= document.getElementById("sale5");
	sale5.style.display="none";

	var sale6= document.getElementById("sale6");
	sale6.style.display="none";

	var sale7= document.getElementById("sale7");
	sale7.style.display="none";

	var sale8= document.getElementById("sale8");
	sale8.style.display="none";

	var sale9= document.getElementById("sale9");
	sale9.style.display="none";

	//hide housing wanted
	var housing_wanted1= document.getElementById("housing_wanted1");
	housing_wanted1.style.display="none";

	var housing_wanted2= document.getElementById("housing_wanted2");
	housing_wanted2.style.display="none";

	var housing_wanted3= document.getElementById("housing_wanted3");
	housing_wanted3.style.display="none";

	var housing_wanted4= document.getElementById("housing_wanted4");
	housing_wanted4.style.display="none";

	var housing_wanted5= document.getElementById("housing_wanted5");
	housing_wanted5.style.display="none";

	var housing_wanted6= document.getElementById("housing_wanted6");
	housing_wanted6.style.display="none";

	var housing_wanted7= document.getElementById("housing_wanted7");
	housing_wanted7.style.display="none";

	var housing_wanted8= document.getElementById("housing_wanted8");
	housing_wanted8.style.display="none";

	var housing_wanted9= document.getElementById("housing_wanted9");
	housing_wanted9.style.display="none"; 

	//hide housing available
	var housing_available1= document.getElementById("housing_available1");
	housing_available1.style.display="none";

	var housing_available2= document.getElementById("housing_available2");
	housing_available2.style.display="none";

	var housing_available3= document.getElementById("housing_available3");
	housing_available3.style.display="none";

	var housing_available4= document.getElementById("housing_available4");
	housing_available4.style.display="none";

	var housing_available5= document.getElementById("housing_available5");
	housing_available5.style.display="none";

	var housing_available6= document.getElementById("housing_available6");
	housing_available6.style.display="none";

	var housing_available7= document.getElementById("housing_available7");
	housing_available7.style.display="none";

	var housing_available8= document.getElementById("housing_available8");
	housing_available8.style.display="none";

	var housing_available9= document.getElementById("housing_available9");
	housing_available9.style.display="none"; 

	//hide job
	//var job1= document.getElementById("job1");
	//job1.style.display="none";

	var job2= document.getElementById("job2");
	job2.style.display="none";

	var job3= document.getElementById("job3");
	job3.style.display="none";

	var job4= document.getElementById("job4");
	job4.style.display="none";

	var job5= document.getElementById("job5");
	job5.style.display="none";

	var job6= document.getElementById("job6");
	job6.style.display="none";

	var job7= document.getElementById("job7");
	job7.style.display="none";

	var job8= document.getElementById("job8");
	job8.style.display="none";

	var job9= document.getElementById("job9");
	job9.style.display="none";

	//hide internship
	//var internship1= document.getElementById("internship1");
	//internship1.style.display="none";

	var internship2= document.getElementById("internship2");
	internship2.style.display="none";

	var internship3= document.getElementById("internship3");
	internship3.style.display="none";

	var internship4= document.getElementById("internship4");
	internship4.style.display="none";

	var internship5= document.getElementById("internship5");
	internship5.style.display="none";

	var internship6= document.getElementById("internship6");
	internship6.style.display="none";

	var internship7= document.getElementById("internship7");
	internship7.style.display="none";

	var internship8= document.getElementById("internship8");
	internship8.style.display="none";

	var internship9= document.getElementById("internship9");
	internship9.style.display="none"; 

	//hide services
	var services1= document.getElementById("services1");
	services1.style.display="none";

	var services2= document.getElementById("services2");
	services2.style.display="none";

	var services3= document.getElementById("services3");
	services3.style.display="none";

	var services4= document.getElementById("services4");
	services4.style.display="none";

	var services5= document.getElementById("services5");
	services5.style.display="none";

	var services6= document.getElementById("services6");
	services6.style.display="none";

	var services7= document.getElementById("services7");
	services7.style.display="none";

	var services8= document.getElementById("services8");
	services8.style.display="none";

	var services9= document.getElementById("services9");
	services9.style.display="none";

	//hide tutoring
	var tutoring1= document.getElementById("tutoring1");
	tutoring1.style.display="none";

	var tutoring2= document.getElementById("tutoring2");
	tutoring2.style.display="none";

	var tutoring3= document.getElementById("tutoring3");
	tutoring3.style.display="none";

	var tutoring4= document.getElementById("tutoring4");
	tutoring4.style.display="none";

	var tutoring5= document.getElementById("tutoring5");
	tutoring5.style.display="none";

	var tutoring6= document.getElementById("tutoring6");
	tutoring6.style.display="none";

	var tutoring7= document.getElementById("tutoring7");
	tutoring7.style.display="none";

	var tutoring8= document.getElementById("tutoring8");
	tutoring8.style.display="nonen";

	var tutoring9= document.getElementById("tutoring9");
	tutoring9.style.display="none";

	//hide textbooks wanted
	var textbooks_wanted1= document.getElementById("textbooks_wanted1");
	textbooks_wanted1.style.display="none";

	var textbooks_wanted2= document.getElementById("textbooks_wanted2");
	textbooks_wanted2.style.display="none";

	var textbooks_wanted3= document.getElementById("textbooks_wanted3");
	textbooks_wanted3.style.display="none";

	var textbooks_wanted4= document.getElementById("textbooks_wanted4");
	textbooks_wanted4.style.display="none";

	var textbooks_wanted5= document.getElementById("textbooks_wanted5");
	textbooks_wanted5.style.display="none";

	var textbooks_wanted6= document.getElementById("textbooks_wanted6");
	textbooks_wanted6.style.display="none";

	var textbooks_wanted7= document.getElementById("textbooks_wanted7");
	textbooks_wanted7.style.display="none";

	var textbooks_wanted8= document.getElementById("textbooks_wanted8");
	textbooks_wanted8.style.display="none";

	//hide textbooks for sale
	var textbooks_available1= document.getElementById("textbooks_available1");
	textbooks_available1.style.display="none";

	var textbooks_available2= document.getElementById("textbooks_available2");
	textbooks_available2.style.display="none";

	var textbooks_available3= document.getElementById("textbooks_available3");
	textbooks_available3.style.display="none";

	var textbooks_available4= document.getElementById("textbooks_available4");
	textbooks_available4.style.display="none";

	var textbooks_available5= document.getElementById("textbooks_available5");
	textbooks_available5.style.display="none";

	var textbooks_available6= document.getElementById("textbooks_available6");
	textbooks_available6.style.display="none";

	var textbooks_available7= document.getElementById("textbooks_available7");
	textbooks_available7.style.display="none";

	var textbooks_available8= document.getElementById("textbooks_available8");
	textbooks_available8.style.display="none";

	var textbooks_available9= document.getElementById("textbooks_available9");
	textbooks_available9.style.display="none";

}

</script>

<script type="text/javascript">

function addCategory(category_num)
{
	var issue1= document.getElementById('myCategory');


	if(category_num.category.value == '0')
	{
	//issue1.innerHTML='<tr ><th>Amount: ($) </th><td><input name="amount" type="text" class="textfield" id="amount" ></td></tr>';

//issue1.style.display="inline";

	hide_fields();

	var sale1= document.getElementById("sale1");
	sale1.style.display="table-row";

	var sale2= document.getElementById("sale2");
	sale2.style.display="table-row";

	var sale3= document.getElementById("sale3");
	sale3.style.display="table-row";

	var sale4= document.getElementById("sale4");
	sale4.style.display="table-row";

	var sale5= document.getElementById("sale5");
	sale5.style.display="table-row";

	var sale6= document.getElementById("sale6");
	sale6.style.display="table-row";

	var sale7= document.getElementById("sale7");
	sale7.style.display="table-row";

	var sale8= document.getElementById("sale8");
	sale8.style.display="table-row";

	var sale9= document.getElementById("sale9");
	sale9.style.display="table-row";

	}

	 else if(category_num.category.value == 'housing wanted')
	{

	hide_fields();

	var housing_wanted1= document.getElementById("housing_wanted1");
	housing_wanted1.style.display="table-row";

	var housing_wanted2= document.getElementById("housing_wanted2");
	housing_wanted2.style.display="table-row";

	var housing_wanted3= document.getElementById("housing_wanted3");
	housing_wanted3.style.display="table-row";

	var housing_wanted4= document.getElementById("housing_wanted4");
	housing_wanted4.style.display="table-row";

	var housing_wanted5= document.getElementById("housing_wanted5");
	housing_wanted5.style.display="table-row";

	var housing_wanted6= document.getElementById("housing_wanted6");
	housing_wanted6.style.display="table-row";

	var housing_wanted7= document.getElementById("housing_wanted7");
	housing_wanted7.style.display="table-row";

	var housing_wanted8= document.getElementById("housing_wanted8");
	housing_wanted8.style.display="table-row";

	var housing_wanted9= document.getElementById("housing_wanted9");
	housing_wanted9.style.display="table-row"; 

	}


	else if(category_num.category.value == 'housing available')
	{
	hide_fields();

	var housing_available1= document.getElementById("housing_available1");
	housing_available1.style.display="table-row";

	var housing_available2= document.getElementById("housing_available2");
	housing_available2.style.display="table-row";

	var housing_available3= document.getElementById("housing_available3");
	housing_available3.style.display="table-row";

	var housing_available4= document.getElementById("housing_available4");
	housing_available4.style.display="table-row";

	var housing_available5= document.getElementById("housing_available5");
	housing_available5.style.display="table-row";

	var housing_available6= document.getElementById("housing_available6");
	housing_available6.style.display="table-row";

	var housing_available7= document.getElementById("housing_available7");
	housing_available7.style.display="table-row";

	var housing_available8= document.getElementById("housing_available8");
	housing_available8.style.display="table-row";

	var housing_available9= document.getElementById("housing_available9");
	housing_available9.style.display="table-row"; 
	}

	else if(category_num.category.value == 'job')
	{
	hide_fields();

	var job1= document.getElementById("job1");
	job1.style.display="table-row";

	var job2= document.getElementById("job2");
	job2.style.display="table-row";

	var job3= document.getElementById("job3");
	job3.style.display="table-row";

	var job4= document.getElementById("job4");
	job4.style.display="table-row";

	var job5= document.getElementById("job5");
	job5.style.display="table-row";

	var job6= document.getElementById("job6");
	job6.style.display="table-row";

	var job7= document.getElementById("job7");
	job7.style.display="table-row";

	var job8= document.getElementById("job8");
	job8.style.display="table-row";

	var job9= document.getElementById("job9");
	job9.style.display="table-row";
	}

	else if(category_num.category.value == 'internship')
	{
	hide_fields();

	var internship1= document.getElementById("internship1");
	internship1.style.display="table-row";

	var internship2= document.getElementById("internship2");
	internship2.style.display="table-row";

	var internship3= document.getElementById("internship3");
	internship3.style.display="table-row";

	var internship4= document.getElementById("internship4");
	internship4.style.display="table-row";

	var internship5= document.getElementById("internship5");
	internship5.style.display="table-row";

	var internship6= document.getElementById("internship6");
	internship6.style.display="table-row";

	var internship7= document.getElementById("internship7");
	internship7.style.display="table-row";

	var internship8= document.getElementById("internship8");
	internship8.style.display="table-row";

	var internship9= document.getElementById("internship9");
	internship9.style.display="table-row"; 
	}

	else if(category_num.category.value == 'services')
	{
	hide_fields();

	var services1= document.getElementById("services1");
	services1.style.display="table-row";

	var services2= document.getElementById("services2");
	services2.style.display="table-row";

	var services3= document.getElementById("services3");
	services3.style.display="table-row";

	var services4= document.getElementById("services4");
	services4.style.display="table-row";

	var services5= document.getElementById("services5");
	services5.style.display="table-row";

	var services6= document.getElementById("services6");
	services6.style.display="table-row";

	var services7= document.getElementById("services7");
	services7.style.display="table-row";

	var services8= document.getElementById("services8");
	services8.style.display="table-row";

	var services9= document.getElementById("services9");
	services9.style.display="table-row";
	}

	else if(category_num.category.value == 'tutoring')
	{
	hide_fields();

	var tutoring1= document.getElementById("tutoring1");
	tutoring1.style.display="table-row";

	var tutoring2= document.getElementById("tutoring2");
	tutoring2.style.display="table-row";

	var tutoring3= document.getElementById("tutoring3");
	tutoring3.style.display="table-row";

	var tutoring4= document.getElementById("tutoring4");
	tutoring4.style.display="table-row";

	var tutoring5= document.getElementById("tutoring5");
	tutoring5.style.display="table-row";

	var tutoring6= document.getElementById("tutoring6");
	tutoring6.style.display="table-row";

	var tutoring7= document.getElementById("tutoring7");
	tutoring7.style.display="table-row";

	var tutoring8= document.getElementById("tutoring8");
	tutoring8.style.display="table-row";

	var tutoring9= document.getElementById("tutoring9");
	tutoring9.style.display="table-row";
	}

	else if(category_num.category.value == 'textbooks wanted')
	{
	hide_fields();
	var textbooks_wanted1= document.getElementById("textbooks_wanted1");
	textbooks_wanted1.style.display="table-row";

	var textbooks_wanted2= document.getElementById("textbooks_wanted2");
	textbooks_wanted2.style.display="table-row";

	var textbooks_wanted3= document.getElementById("textbooks_wanted3");
	textbooks_wanted3.style.display="table-row";

	var textbooks_wanted4= document.getElementById("textbooks_wanted4");
	textbooks_wanted4.style.display="table-row";

	var textbooks_wanted5= document.getElementById("textbooks_wanted5");
	textbooks_wanted5.style.display="table-row";

	var textbooks_wanted6= document.getElementById("textbooks_wanted6");
	textbooks_wanted6.style.display="table-row";

	var textbooks_wanted7= document.getElementById("textbooks_wanted7");
	textbooks_wanted7.style.display="table-row";

	var textbooks_wanted8= document.getElementById("textbooks_wanted8");
	textbooks_wanted8.style.display="table-row";

	var textbooks_wanted9= document.getElementById("textbooks_wanted9");
	textbooks_wanted9.style.display="table-row";
	}

	else if(category_num.category.value == 'textbooks available')
	{
	hide_fields();

	var textbooks_available1= document.getElementById("textbooks_available1");
	textbooks_available1.style.display="table-row";

	var textbooks_available2= document.getElementById("textbooks_available2");
	textbooks_available2.style.display="table-row";

	var textbooks_available3= document.getElementById("textbooks_available3");
	textbooks_available3.style.display="table-row";

	var textbooks_available4= document.getElementById("textbooks_available4");
	textbooks_available4.style.display="table-row";

	var textbooks_available5= document.getElementById("textbooks_available5");
	textbooks_available5.style.display="table-row";

	var textbooks_available6= document.getElementById("textbooks_available6");
	textbooks_available6.style.display="table-row";

	var textbooks_available7= document.getElementById("textbooks_available7");
	textbooks_available7.style.display="table-row";

	var textbooks_available8= document.getElementById("textbooks_available8");
	textbooks_available8.style.display="table-row";

	var textbooks_available9= document.getElementById("textbooks_available9");
	textbooks_available9.style.display="table-row"; 
	}

	//issue1.innerHTML=category_num.category.value;

else	//hide the fields
	{
	hide_fields();
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
     <th > Title ** </th>
      <td><input name="title" size="70" type="text" class="textfield" id="title" /></td>
    </tr>


  <tr>
      <th>Event Type (*)</th>
      <td>
	<select name="category" id="drop" onclick="addCategory(this.form)">
	<option style="background-color:#58B9EB"; value="choose_category">Choose a category</option>
	<option style="background-color:#58B9EB"; value="0">for sale</option>
	<option style="background-color:#58B9EB"; value="housing wanted">housing wanted</option>
	<option style="background-color:#58B9EB"; value="housing available">housing available</option>
	<option style="background-color:#58B9EB"; value="job">job</option>
	<option style="background-color:#58B9EB"; value="internship">internship</option>
	<option style="background-color:#58B9EB"; value="services">services</option>
	<option style="background-color:#58B9EB"; value="tutoring">tutoring</option>
	<option style="background-color:#58B9EB"; value="textbooks wanted">textbooks wanted</option>
	<option style="background-color:#58B9EB"; value="textbooks available">textbooks for sale</option>
	</select>
	  
	  </td>
    </tr>

<tr id="myCategory">
</tr>


<tr id = "sale1" style="display:none">
<th>Amount </th> 
<td><input name="amount" type="text" class="textfield" id="amount" ></td>
</tr>
<tr id = "sale2" style="display:none">
<th > Submitter Email * </th>
<td><input name="email" size="70" type="text" class="textfield" id="email" ></td>
</tr> 
<tr id = "sale3" style="display:none"> 
<th>  </th>
<td> <input type="checkbox" name="contact_check" id="contact_check" value="1" onclick="FillContactEmail(this.form)"> same as above </td> 
</tr>
<tr id = "sale4" style="display:none">
<th> Contact Email  </th>
<td><input name="contact_email" size="70" type="text" class="textfield" id="contact_email" ></td>
</tr>
<tr id = "sale5" style="display:none">
<th> Contact Person </th>
<td><input name="person" size="70" type="text" class="textfield" id="person" ></td>
</tr>
<tr id = "sale6" style="display:none">
<th>Contact Phone </th>
<td><input name="phone" type="text" class="textfield" id="phone" ></td>
</tr>
<tr id = "sale7" style="display:none">
<th > Check to display on event page </th>
<td><input type="checkbox" name="check_phone" id="check_phone" value="1"> phone<input type="checkbox" name="check_email" id="check_email" value="1"> email</td>
</tr>
<tr id = "sale8" style="display:none">
<th width="40%">Details *</th>
<td ><textarea name="details" id="details" style="width:400px; height:200px;" onfocus="this.value=''; setbg("#e5fff3");" onblur="setbg("white")"></textarea></td>
</tr>
<tr id = "sale9" style="display:none">
<th></th>
<td><input type="submit" name="submit" id="submit" value="Submit" ></td>
</tr>

<tr id = "housing_wanted1" style="display:none">
<th>Amount </th> 
<td><input name="amount" type="text" class="textfield" id="amount" ></td>
</tr>
<tr id = "housing_wanted2" style="display:none">
<th > Submitter Email * </th>
<td><input name="email" size="70" type="text" class="textfield" id="email" ></td>
</tr> 
<tr id = "housing_wanted3" style="display:none"> 
<th>  </th>
<td> <input type="checkbox" name="contact_check" id="contact_check" value="1" onclick="FillContactEmail(this.form)"> same as above </td> 
</tr>
<tr id = "housing_wanted4" style="display:none">
<th> Contact Email  </th>
<td><input name="contact_email" size="70" type="text" class="textfield" id="contact_email" ></td>
</tr>
<tr id = "housing_wanted5" style="display:none">
<th> Contact Person </th>
<td><input name="person" size="70" type="text" class="textfield" id="person" ></td>
</tr>
<tr id = "housing_wanted6" style="display:none">
<th>Contact Phone </th>
<td><input name="phone" type="text" class="textfield" id="phone" ></td>
</tr>
<tr id = "housing_wanted7" style="display:none">
<th > Check to display on event page </th>
<td><input type="checkbox" name="check_phone" id="check_phone" value="1"> phone<input type="checkbox" name="check_email" id="check_email" value="1"> email</td>
</tr>
<tr id = "housing_wanted8" style="display:none">
<th width="40%">Details *</th>
<td ><textarea name="details" id="details" style="width:400px; height:200px;" onfocus="this.value=''; setbg("#e5fff3");" onblur="setbg("white")"></textarea></td>
</tr>
<tr id = "housing_wanted9" style="display:none">
<th></th>
<td><input type="submit" name="submit" id="submit" value="Submit" ></td>
</tr>

<tr id = "housing_available1" style="display:none">
<th>Amount </th> 
<td><input name="amount" type="text" class="textfield" id="amount" ></td>
</tr>
<tr id = "housing_available2" style="display:none">
<th > Submitter Email * </th>
<td><input name="email" size="70" type="text" class="textfield" id="email" ></td>
</tr> 
<tr id = "housing_available3" style="display:none"> 
<th>  </th>
<td> <input type="checkbox" name="contact_check" id="contact_check" value="1" onclick="FillContactEmail(this.form)"> same as above </td> 
</tr>
<tr id = "housing_available4" style="display:none">
<th> Contact Email  </th>
<td><input name="contact_email" size="70" type="text" class="textfield" id="contact_email" ></td>
</tr>
<tr id = "housing_available5" style="display:none">
<th> Contact Person </th>
<td><input name="person" size="70" type="text" class="textfield" id="person" ></td>
</tr>
<tr id = "housing_available6" style="display:none">
<th>Contact Phone </th>
<td><input name="phone" type="text" class="textfield" id="phone" ></td>
</tr>
<tr id = "housing_available7" style="display:none">
<th > Check to display on event page </th>
<td><input type="checkbox" name="check_phone" id="check_phone" value="1"> phone<input type="checkbox" name="check_email" id="check_email" value="1"> email</td>
</tr>
<tr id = "housing_available8" style="display:none">
<th width="40%">Details *</th>
<td ><textarea name="details" id="details" style="width:400px; height:200px;" onfocus="this.value=''; setbg("#e5fff3");" onblur="setbg("white")"></textarea></td>
</tr>
<tr id = "housing_available9" style="display:none">
<th></th>
<td><input type="submit" name="submit" id="submit" value="Submit" ></td>
</tr>


<tr id = "job2" style="display:none">
<th > Submitter Email * </th>
<td><input name="email" size="70" type="text" class="textfield" id="email" ></td>
</tr> 
<tr id = "job3" style="display:none"> 
<th>  </th
<td> <input type="checkbox" name="contact_check" id="contact_check" value="1" onclick="FillContactEmail(this.form)"> same as above </td> 
</tr>
<tr id = "job4" style="display:none">
<th> Contact Email  </th>
<td><input name="contact_email" size="70" type="text" class="textfield" id="contact_email" ></td>
</tr>
<tr id = "job5" style="display:none">
<th> Contact Person </th>
<td><input name="person" size="70" type="text" class="textfield" id="person" ></td>
</tr>
<tr id = "job6" style="display:none">
<th>Contact Phone </th>
<td><input name="phone" type="text" class="textfield" id="phone" ></td>
</tr>
<tr id = "job7" style="display:none">
<th > Check to display on event page </th>
<td><input type="checkbox" name="check_phone" id="check_phone" value="1"> phone<input type="checkbox" name="check_email" id="check_email" value="1"> email</td>
</tr>
<tr id = "job8" style="display:none">
<th width="40%">Details *</th>
<td ><textarea name="details" id="details" style="width:400px; height:200px;" onfocus="this.value=''; setbg("#e5fff3");" onblur="setbg("white")"></textarea></td>
</tr>
<tr id = "job9" style="display:none">
<th></th>
<td><input type="submit" name="submit" id="submit" value="Submit" ></td>
</tr>


<tr id = "internship2" style="display:none">
<th > Submitter Email * </th>
<td><input name="email" size="70" type="text" class="textfield" id="email" ></td>
</tr> 
<tr id = "internship3" style="display:none"> 
<th>  </th
<td> <input type="checkbox" name="contact_check" id="contact_check" value="1" onclick="FillContactEmail(this.form)"> same as above </td> 
</tr>
<tr id = "internship4" style="display:none">
<th> Contact Email  </th>
<td><input name="contact_email" size="70" type="text" class="textfield" id="contact_email" ></td>
</tr>
<tr id = "internship5" style="display:none">
<th> Contact Person </th>
<td><input name="person" size="70" type="text" class="textfield" id="person" ></td>
</tr>
<tr id = "internship6" style="display:none">
<th>Contact Phone </th>
<td><input name="phone" type="text" class="textfield" id="phone" ></td>
</tr>
<tr id = "internship7" style="display:none">
<th > Check to display on event page </th>
<td><input type="checkbox" name="check_phone" id="check_phone" value="1"> phone<input type="checkbox" name="check_email" id="check_email" value="1"> email</td>
</tr>
<tr id = "internship8" style="display:none">
<th width="40%">Details *</th>
<td ><textarea name="details" id="details" style="width:400px; height:200px;" onfocus="this.value=''; setbg("#e5fff3");" onblur="setbg("white")"></textarea></td>
</tr>
<tr id = "internship9" style="display:none">
<th></th>
<td><input type="submit" name="submit" id="submit" value="Submit" ></td>
</tr>

<tr id = "services1" style="display:none">
<th>Amount </th> 
<td><input name="amount" type="text" class="textfield" id="amount" ></td>
</tr>
<tr id = "services2" style="display:none">
<th > Submitter Email * </th>
<td><input name="email" size="70" type="text" class="textfield" id="email" ></td>
</tr> 
<tr id = "services3" style="display:none"> 
<th>  </th
<td> <input type="checkbox" name="contact_check" id="contact_check" value="1" onclick="FillContactEmail(this.form)"> same as above </td> 
</tr>
<tr id = "services4" style="display:none">
<th> Contact Email  </th>
<td><input name="contact_email" size="70" type="text" class="textfield" id="contact_email" ></td>
</tr>
<tr id = "services5" style="display:none">
<th> Contact Person </th>
<td><input name="person" size="70" type="text" class="textfield" id="person" ></td>
</tr>
<tr id = "services6" style="display:none">
<th>Contact Phone </th>
<td><input name="phone" type="text" class="textfield" id="phone" ></td>
</tr>
<tr id = "services7" style="display:none">
<th > Check to display on event page </th>
<td><input type="checkbox" name="check_phone" id="check_phone" value="1"> phone<input type="checkbox" name="check_email" id="check_email" value="1"> email</td>
</tr>
<tr id = "services8" style="display:none">
<th width="40%">Details *</th>
<td ><textarea name="details" id="details" style="width:400px; height:200px;" onfocus="this.value=''; setbg("#e5fff3");" onblur="setbg("white")"></textarea></td>
</tr>
<tr id = "services9" style="display:none">
<th></th>
<td><input type="submit" name="submit" id="submit" value="Submit" ></td>
</tr>

<tr id = "tutoring1" style="display:none">
<th>Amount </th> 
<td><input name="amount" type="text" class="textfield" id="amount" ></td>
</tr>
<tr id = "tutoring2" style="display:none">
<th > Submitter Email * </th>
<td><input name="email" size="70" type="text" class="textfield" id="email" ></td>
</tr> 
<tr id = "tutoring3" style="display:none"> 
<th>  </th
<td> <input type="checkbox" name="contact_check" id="contact_check" value="1" onclick="FillContactEmail(this.form)"> same as above </td> 
</tr>
<tr id = "tutoring4" style="display:none">
<th> Contact Email  </th>
<td><input name="contact_email" size="70" type="text" class="textfield" id="contact_email" ></td>
</tr>
<tr id = "tutoring5" style="display:none">
<th> Contact Person </th>
<td><input name="person" size="70" type="text" class="textfield" id="person" ></td>
</tr>
<tr id = "tutoring6" style="display:none">
<th>Contact Phone </th>
<td><input name="phone" type="text" class="textfield" id="phone" ></td>
</tr>
<tr id = "tutoring7" style="display:none">
<th > Check to display on event page </th>
<td><input type="checkbox" name="check_phone" id="check_phone" value="1"> phone<input type="checkbox" name="check_email" id="check_email" value="1"> email</td>
</tr>
<tr id = "tutoring8" style="display:none">
<th width="40%">Details *</th>
<td ><textarea name="details" id="details" style="width:400px; height:200px;" onfocus="this.value=''; setbg("#e5fff3");" onblur="setbg("white")"></textarea></td>
</tr>
<tr id = "tutoring9" style="display:none">
<th></th>
<td><input type="submit" name="submit" id="submit" value="Submit" ></td>
</tr>

<tr id = "textbooks_wanted1" style="display:none">
<th>Amount </th> 
<td><input name="amount" type="text" class="textfield" id="amount" ></td>
</tr>
<tr id = "textbooks_wanted2" style="display:none">
<th > Submitter Email * </th>
<td><input name="email" size="70" type="text" class="textfield" id="email" ></td>
</tr> 
<tr id = "textbooks_wanted3" style="display:none"> 
<th>  </th
<td> <input type="checkbox" name="contact_check" id="contact_check" value="1" onclick="FillContactEmail(this.form)"> same as above </td> 
</tr>
<tr id = "textbooks_wanted4" style="display:none">
<th> Contact Email  </th>
<td><input name="contact_email" size="70" type="text" class="textfield" id="contact_email" ></td>
</tr>
<tr id = "textbooks_wanted5" style="display:none">
<th> Contact Person </th>
<td><input name="person" size="70" type="text" class="textfield" id="person" ></td>
</tr>
<tr id = "textbooks_wanted6" style="display:none">
<th>Contact Phone </th>
<td><input name="phone" type="text" class="textfield" id="phone" ></td>
</tr>
<tr id = "textbooks_wanted7" style="display:none">
<th > Check to display on event page </th>
<td><input type="checkbox" name="check_phone" id="check_phone" value="1"> phone<input type="checkbox" name="check_email" id="check_email" value="1"> email</td>
</tr>
<tr id = "textbooks_wanted8" style="display:none">
<th width="40%">Details *</th>
<td ><textarea name="details" id="details" style="width:400px; height:200px;" onfocus="this.value=''; setbg("#e5fff3");" onblur="setbg("white")"></textarea></td>
</tr>
<tr id = "textbooks_wanted9" style="display:none">
<th></th>
<td><input type="submit" name="submit" id="submit" value="Submit" ></td>
</tr>

<tr id = "textbooks_available1" style="display:none">
<th>Amount </th> 
<td><input name="amount" type="text" class="textfield" id="amount" ></td>
</tr>
<tr id = "textbooks_available2" style="display:none">
<th > Submitter Email * </th>
<td><input name="email" size="70" type="text" class="textfield" id="email" ></td>
</tr> 
<tr id = "textbooks_available3" style="display:none"> 
<th>  </th
<td> <input type="checkbox" name="contact_check" id="contact_check" value="1" onclick="FillContactEmail(this.form)"> same as above </td> 
</tr>
<tr id = "textbooks_available4" style="display:none">
<th> Contact Email  </th>
<td><input name="contact_email" size="70" type="text" class="textfield" id="contact_email" ></td>
</tr>
<tr id = "textbooks_available5" style="display:none">
<th> Contact Person </th>
<td><input name="person" size="70" type="text" class="textfield" id="person" ></td>
</tr>
<tr id = "textbooks_available6" style="display:none">
<th>Contact Phone </th>
<td><input name="phone" type="text" class="textfield" id="phone" ></td>
</tr>
<tr id = "textbooks_available7" style="display:none">
<th > Check to display on event page </th>
<td><input type="checkbox" name="check_phone" id="check_phone" value="1"> phone<input type="checkbox" name="check_email" id="check_email" value="1"> email</td>
</tr>
<tr id = "textbooks_available8" style="display:none">
<th width="40%">Details *</th>
<td ><textarea name="details" id="details" style="width:400px; height:200px;" onfocus="this.value=''; setbg("#e5fff3");" onblur="setbg("white")"></textarea></td>
</tr>
<tr id = "textbooks_available9" style="display:none">
<th></th>
<td><input type="submit" name="submit" id="submit" value="Submit" ></td>
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

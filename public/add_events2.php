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


<form action="events2.php" method="get">
<p>

<input type="checkbox" value='0' name="free" id="free">free events
<input type="checkbox" value='1' name="refreshments" id="refreshments">refreshments served
<input type="checkbox" value='1' name="giveaways" id="giveaways">giveaways


<select name="department" id="drop">
<option style="background-color:#58B9EB"; value="choose_department">All Departmentss</option>
<option style="background-color:#58B9EB"; value="Engineering">Engineering</option>
<option style="background-color:#58B9EB"; value="Science">Science</option>
<option style="background-color:#58B9EB"; value="Humanities">Humanities</option>
<option style="background-color:#58B9EB"; value="Sophie Davis">Sophie Davis</option>
<option style="background-color:#58B9EB"; value="Architecture">Architecture</option>
<option style="background-color:#58B9EB"; value="Education">Education</option>
</select>
<input type="submit" id="submit" value="Update">
</form>
<br/>
</p>



			


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
 <th>Event Type (*)</th>
<td>
<select name="department" id="drop">
<option style="background-color:#58B9EB"; value="all">All Departmentss</option>
<option style="background-color:#58B9EB"; value="Engineering">Engineering</option>
<option style="background-color:#58B9EB"; value="Science">Science</option>
<option style="background-color:#58B9EB"; value="Humanities">Humanities</option>
<option style="background-color:#58B9EB"; value="Sophie Davis">Sophie Davis</option>
<option style="background-color:#58B9EB"; value="Architecture">Architecture</option>
<option style="background-color:#58B9EB"; value="Education">Education</option>
</select>
</td>
</tr>








	   <tr>
      <th  >Date *</th>

      <td>
<table>
<tr>
<td>
	<select name="month" id="drop">
<option style="background-color:#58B9EB"; value="choose_month">month</option>
<option style="background-color:#58B9EB"; value="January">January</option>
<option style="background-color:#58B9EB"; value="February">February</option>
<option style="background-color:#58B9EB"; value="March">March</option>
<option style="background-color:#58B9EB"; value="April">April</option>
<option style="background-color:#58B9EB"; value="May">May</option>
<option style="background-color:#58B9EB"; value="June">June</option>
<option style="background-color:#58B9EB"; value="July">July</option>
<option style="background-color:#58B9EB"; value="August">August</option>
<option style="background-color:#58B9EB"; value="September">September</option>
<option style="background-color:#58B9EB"; value="October">October</option>
<option style="background-color:#58B9EB"; value="November">November</option>
<option style="background-color:#58B9EB"; value="December">December</option>

</select>
	  
	  </td>

      <td >
	<select name="day" id="drop">
<option style="background-color:#58B9EB"; value="choose_day">day</option>
<option style="background-color:#58B9EB"; value="1">1</option>
<option style="background-color:#58B9EB"; value="2">2</option>
<option style="background-color:#58B9EB"; value="3">3</option>
<option style="background-color:#58B9EB"; value="4">4</option>
<option style="background-color:#58B9EB"; value="5">5</option>
<option style="background-color:#58B9EB"; value="6">6</option>
<option style="background-color:#58B9EB"; value="7">7</option>
<option style="background-color:#58B9EB"; value="8">8</option>
<option style="background-color:#58B9EB"; value="9">9</option>
<option style="background-color:#58B9EB"; value="10">10</option>
<option style="background-color:#58B9EB"; value="11">11</option>
<option style="background-color:#58B9EB"; value="12">12</option>
<option style="background-color:#58B9EB"; value="13">13</option>
<option style="background-color:#58B9EB"; value="14">14</option>
<option style="background-color:#58B9EB"; value="15">15</option>
<option style="background-color:#58B9EB"; value="16">16</option>
<option style="background-color:#58B9EB"; value="17">17</option>
<option style="background-color:#58B9EB"; value="18">18</option>
<option style="background-color:#58B9EB"; value="19">19</option>
<option style="background-color:#58B9EB"; value="20">20</option>
<option style="background-color:#58B9EB"; value="21">21</option>
<option style="background-color:#58B9EB"; value="22">22</option>
<option style="background-color:#58B9EB"; value="23">23</option>
<option style="background-color:#58B9EB"; value="24">24</option>
<option style="background-color:#58B9EB"; value="25">25</option>
<option style="background-color:#58B9EB"; value="26">26</option>
<option style="background-color:#58B9EB"; value="27">27</option>
<option style="background-color:#58B9EB"; value="28">28</option>
<option style="background-color:#58B9EB"; value="29">29</option>
<option style="background-color:#58B9EB"; value="30">30</option>
<option style="background-color:#58B9EB"; value="31">31</option>
</select>
	  
	  </td>
	 

	 
      <td >
	<select name="year" id="drop">
<option style="background-color:#58B9EB"; value="choose_year">year</option>
<option style="background-color:#58B9EB"; value="2012">2012</option>
<option style="background-color:#58B9EB"; value="2013">2013</option>
<option style="background-color:#58B9EB"; value="2014">2014</option>
<option style="background-color:#58B9EB"; value="2015">2015</option>
<option style="background-color:#58B9EB"; value="2016">2016</option>
</select>
	  
	  </td>
</tr>
</table>
</td>
	 
    </tr>

<tr >
<th  >Start time </th>

     <td>

<table>
<tr>
<td>

	<select name="start_hour" id="drop" align="left">
<option style="background-color:#58B9EB"; value="1">1</option>
<option style="background-color:#58B9EB"; value="2">2</option>
<option style="background-color:#58B9EB"; value="3">3</option>
<option style="background-color:#58B9EB"; value="4">4</option>
<option style="background-color:#58B9EB"; value="5">5</option>
<option style="background-color:#58B9EB"; value="6">6</option>
<option style="background-color:#58B9EB"; value="7">7</option>
<option style="background-color:#58B9EB"; value="8">8</option>
<option style="background-color:#58B9EB"; value="9">9</option>
<option style="background-color:#58B9EB"; value="10">10</option>
<option style="background-color:#58B9EB"; value="11">11</option>
<option style="background-color:#58B9EB"; value="12">12</option>
</select>
	  
	  </td>

   <td >
	<select name="start_minute" id="drop" align="left">
<option style="background-color:#58B9EB"; value="00">00</option>
<option style="background-color:#58B9EB"; value="01">01</option>
<option style="background-color:#58B9EB"; value="02">02</option>
<option style="background-color:#58B9EB"; value="03">03</option>
<option style="background-color:#58B9EB"; value="04">04</option>
<option style="background-color:#58B9EB"; value="05">05</option>
<option style="background-color:#58B9EB"; value="06">06</option>
<option style="background-color:#58B9EB"; value="07">07</option>
<option style="background-color:#58B9EB"; value="08">08</option>
<option style="background-color:#58B9EB"; value="09">09</option>
<option style="background-color:#58B9EB"; value="10">10</option>
<option style="background-color:#58B9EB"; value="11">11</option>
<option style="background-color:#58B9EB"; value="12">12</option>

<option style="background-color:#58B9EB"; value="13">13</option>
<option style="background-color:#58B9EB"; value="14">14</option>
<option style="background-color:#58B9EB"; value="15">15</option>
<option style="background-color:#58B9EB"; value="16">16</option>
<option style="background-color:#58B9EB"; value="17">17</option>
<option style="background-color:#58B9EB"; value="18">18</option>
<option style="background-color:#58B9EB"; value="19">19</option>
<option style="background-color:#58B9EB"; value="20">20</option>
<option style="background-color:#58B9EB"; value="21">21</option>
<option style="background-color:#58B9EB"; value="22">22</option>

<option style="background-color:#58B9EB"; value="23">23</option>
<option style="background-color:#58B9EB"; value="24">24</option>
<option style="background-color:#58B9EB"; value="25">25</option>
<option style="background-color:#58B9EB"; value="26">26</option>
<option style="background-color:#58B9EB"; value="27">27</option>
<option style="background-color:#58B9EB"; value="28">28</option>
<option style="background-color:#58B9EB"; value="29">29</option>
<option style="background-color:#58B9EB"; value="30">30</option>
<option style="background-color:#58B9EB"; value="31">31</option>
<option style="background-color:#58B9EB"; value="32">32</option>

<option style="background-color:#58B9EB"; value="33">33</option>
<option style="background-color:#58B9EB"; value="34">34</option>
<option style="background-color:#58B9EB"; value="35">35</option>
<option style="background-color:#58B9EB"; value="36">36</option>
<option style="background-color:#58B9EB"; value="37">37</option>
<option style="background-color:#58B9EB"; value="38">38</option>
<option style="background-color:#58B9EB"; value="39">39</option>
<option style="background-color:#58B9EB"; value="40">40</option>
<option style="background-color:#58B9EB"; value="41">41</option>
<option style="background-color:#58B9EB"; value="42">42</option>


<option style="background-color:#58B9EB"; value="43">43</option>
<option style="background-color:#58B9EB"; value="44">44</option>
<option style="background-color:#58B9EB"; value="45">45</option>
<option style="background-color:#58B9EB"; value="46">46</option>
<option style="background-color:#58B9EB"; value="47">47</option>
<option style="background-color:#58B9EB"; value="48">48</option>
<option style="background-color:#58B9EB"; value="49">49</option>
<option style="background-color:#58B9EB"; value="50">50</option>
<option style="background-color:#58B9EB"; value="51">51</option>
<option style="background-color:#58B9EB"; value="52">52</option>

<option style="background-color:#58B9EB"; value="53">53</option>
<option style="background-color:#58B9EB"; value="54">54</option>
<option style="background-color:#58B9EB"; value="55">55</option>
<option style="background-color:#58B9EB"; value="56">56</option>
<option style="background-color:#58B9EB"; value="57">57</option>
<option style="background-color:#58B9EB"; value="58">58</option>
<option style="background-color:#58B9EB"; value="59">59</option>


</select>
	  
	  </td>


<td >    
<select name="start" id="drop" >
<option style="background-color:#58B9EB"; value="AM">AM</option>
<option style="background-color:#58B9EB"; value="PM">PM</option>
</select>
	  </td>


</tr>
</table>
</td>

</tr>

<tr>

<th  >End time </th>
 <td>

<table>
<tr>
<td>

	<select name="end_hour" id="drop" >
<option style="background-color:#58B9EB"; value="1">1</option>
<option style="background-color:#58B9EB"; value="2">2</option>
<option style="background-color:#58B9EB"; value="3">3</option>
<option style="background-color:#58B9EB"; value="4">4</option>
<option style="background-color:#58B9EB"; value="5">5</option>
<option style="background-color:#58B9EB"; value="6">6</option>
<option style="background-color:#58B9EB"; value="7">7</option>
<option style="background-color:#58B9EB"; value="8">8</option>
<option style="background-color:#58B9EB"; value="9">9</option>
<option style="background-color:#58B9EB"; value="10">10</option>
<option style="background-color:#58B9EB"; value="11">11</option>
<option style="background-color:#58B9EB"; value="12">12</option>
</select>
	  
	  </td>

   <td >
	<select name="end_minute" id="drop">
<option style="background-color:#58B9EB"; value="00">00</option>
<option style="background-color:#58B9EB"; value="01">01</option>
<option style="background-color:#58B9EB"; value="02">02</option>
<option style="background-color:#58B9EB"; value="03">03</option>
<option style="background-color:#58B9EB"; value="04">04</option>
<option style="background-color:#58B9EB"; value="05">05</option>
<option style="background-color:#58B9EB"; value="06">06</option>
<option style="background-color:#58B9EB"; value="07">07</option>
<option style="background-color:#58B9EB"; value="08">08</option>
<option style="background-color:#58B9EB"; value="09">09</option>
<option style="background-color:#58B9EB"; value="10">10</option>
<option style="background-color:#58B9EB"; value="11">11</option>
<option style="background-color:#58B9EB"; value="12">12</option>

<option style="background-color:#58B9EB"; value="13">13</option>
<option style="background-color:#58B9EB"; value="14">14</option>
<option style="background-color:#58B9EB"; value="15">15</option>
<option style="background-color:#58B9EB"; value="16">16</option>
<option style="background-color:#58B9EB"; value="17">17</option>
<option style="background-color:#58B9EB"; value="18">18</option>
<option style="background-color:#58B9EB"; value="19">19</option>
<option style="background-color:#58B9EB"; value="20">20</option>
<option style="background-color:#58B9EB"; value="21">21</option>
<option style="background-color:#58B9EB"; value="22">22</option>

<option style="background-color:#58B9EB"; value="23">23</option>
<option style="background-color:#58B9EB"; value="24">24</option>
<option style="background-color:#58B9EB"; value="25">25</option>
<option style="background-color:#58B9EB"; value="26">26</option>
<option style="background-color:#58B9EB"; value="27">27</option>
<option style="background-color:#58B9EB"; value="28">28</option>
<option style="background-color:#58B9EB"; value="29">29</option>
<option style="background-color:#58B9EB"; value="30">30</option>
<option style="background-color:#58B9EB"; value="31">31</option>
<option style="background-color:#58B9EB"; value="32">32</option>

<option style="background-color:#58B9EB"; value="33">33</option>
<option style="background-color:#58B9EB"; value="34">34</option>
<option style="background-color:#58B9EB"; value="35">35</option>
<option style="background-color:#58B9EB"; value="36">36</option>
<option style="background-color:#58B9EB"; value="37">37</option>
<option style="background-color:#58B9EB"; value="38">38</option>
<option style="background-color:#58B9EB"; value="39">39</option>
<option style="background-color:#58B9EB"; value="40">40</option>
<option style="background-color:#58B9EB"; value="41">41</option>
<option style="background-color:#58B9EB"; value="42">42</option>


<option style="background-color:#58B9EB"; value="43">43</option>
<option style="background-color:#58B9EB"; value="44">44</option>
<option style="background-color:#58B9EB"; value="45">45</option>
<option style="background-color:#58B9EB"; value="46">46</option>
<option style="background-color:#58B9EB"; value="47">47</option>
<option style="background-color:#58B9EB"; value="48">48</option>
<option style="background-color:#58B9EB"; value="49">49</option>
<option style="background-color:#58B9EB"; value="50">50</option>
<option style="background-color:#58B9EB"; value="51">51</option>
<option style="background-color:#58B9EB"; value="52">52</option>

<option style="background-color:#58B9EB"; value="53">53</option>
<option style="background-color:#58B9EB"; value="54">54</option>
<option style="background-color:#58B9EB"; value="55">55</option>
<option style="background-color:#58B9EB"; value="56">56</option>
<option style="background-color:#58B9EB"; value="57">57</option>
<option style="background-color:#58B9EB"; value="58">58</option>
<option style="background-color:#58B9EB"; value="59">59</option>


</select>
	  
	  </td>


<td>    
<select name="end" id="drop">
<option style="background-color:#58B9EB"; value="AM">AM</option>
<option style="background-color:#58B9EB"; value="PM">PM</option>
</select>
	  </td>


</tr>
</table>
</td>


    </tr>





	
	   <tr>
      <th  >Location *</th>
      <td><input name="location" size="70" type="text" class="textfield" id="location" /></td>
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

	   <tr>
      <th>Reservation required? *</th>
      <td >
	  <select name="reservation" id="drop">
<option style="background-color:#58B9EB"; value="0">no</option>
<option style="background-color:#58B9EB"; value="1">yes</option>
</select>
	  
	  </td>
    </tr>





    <tr>
      <th > Submitter Email * </th>
      <td><input name="email" size="70" type="text" class="textfield" id="email" /></td>
    </tr>

<tr>

<th>  </th> 
<td>
<input type="checkbox" name="contact_check" id="contact_check" value="1" onclick="FillContactEmail(this.form)"> same as above
</td>
</tr>

    <tr>
      <th> Contact Email  </th>
      <td><input name="contact_email" size="70" type="text" class="textfield" id="contact_email" /></td>
    </tr>
    <tr>
      <th> Contact Person </th>
      <td><input name="person" size="70" type="text" class="textfield" id="person" /></td>
    </tr>
    <tr>
      <th>Contact Phone </th>
      <td><input name="phone" type="text" class="textfield" id="phone" /></td>
    </tr>

    <tr>
      <th> Event Website </th>
      <td><input name="website" size="70" type="text" class="textfield" id="website" /></td>
    </tr> 


<tr>

<th > Check to display on event page </th> 
<td>
<input type="checkbox" name="check_phone" id="check_phone" value="1"> phone
<input type="checkbox" name="check_email" id="check_email" value="1"> email
</td>
</tr>
  

 


 

  

  <tr>

<th> Check all that applies: </th> 
<td>
 
<input type="checkbox" name="refreshments" id="refreshments" value="1"> Refreshments served
<input type="checkbox" name="raffle" id="raffle" value="1"> Raffle
</td>
</tr>




<tr>

<th width="40%">
    Event Details *
</th>


<td >


<textarea name="details" id="details" style="width:400px; height:200px;" onfocus="this.value=''; setbg('#e5fff3');" onblur="setbg('white')"></textarea>



</td>
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

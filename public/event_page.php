<?php
//include("connect.php");
require_once('connect.php');
$id=$_GET["id"];
$qry="SELECT * from events where event_id='$id'";
$result=@mysql_query($qry);


if($result)
{

		
$row=mysql_fetch_assoc($result)
	


?>
<!-- Put IE into quirks mode -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />




<title> <?php echo ' '.$row['title'].' '; ?>	</title>
<link href="agenda.css" rel="stylesheet" type="text/css" />
<link href="styles.css" rel="stylesheet" type="text/css" />

<meta name="Author" content="Isatou" />

</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>






<?php
include('side_bar.php');
?>
   

<div id="container">

<div id="content-container1">
<div id="content-container3">


			<div id="content">



	

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





<?php

/*if($result)
{

	if(mysql_num_rows($result)==0)
	{
		echo "The are no events!";
	}
	else
	{
	while($row=mysql_fetch_assoc($result))
		{
*/

		$extra=array();
		if($row['start_minute']==0)
			{
				$start='00';	
			}
		if($row['end_minute']==0)
			{
				$end='00';	
			}
		if($row['admission']==0)
		{
			$admission='free';
		}
		else
		{
			$admission='$';
			$admission .=$row['amount'];
		}
		if($row['reservation']==0)
		{
			$reservation='No';
		}
		else
		{
			$reservation="Yes";
		}
		
		if($row['refreshments']==1)
		{
			$extra[]='refreshments';
		}
		if($row['raffle']==1)
		{
			$extra[]="raffle";
		}

		echo '	
		<h1 align="center">'.$row['title'].'</h1>
		<b> About </b>
		<div id="submissionContainer" style="color:#0196e3";>
		'.$row['details'].'
		</div>
		<div id="submissionContainer" style="color:#0196e3";>
		<b> When </b>
		<p><b>Date:</b> '.$row['month'].' '.$row['day'].' '.$row['year'].'</p>
		<p><b>Start Time:</b> '.$row['start_hour'].':'.$start.' '.$row['start'].'</p>
		<p><b>End Time:</b> '.$row['end_hour'].':'.$end.' '.$row['end'].'</p>
		<b> Where </b>
		<p><b>Location:</b> '.$row['location'].'</p>
		<b> Admission Details </b>
		<p><b>Admission Fee:</b> '.$admission.'</p>
		<p><b>Reservation Required:</b> '.$reservation.'</p>
		</div>';
		

	
		if(sizeof($extra) != 0)
		{
			echo '<div id="submissionContainer" style="color:#0196e3";>
			<p>Available:</p>';
			foreach ($extra as $i)
			{
				echo ' <li> '.$i.' </li>';
			}
			echo '</div>';
		}

		$contact_person =  $row['name'];
			

		if($row['check_phone'] == 1 & $row['check_email'] == 1)
		{
			echo ' <div id="submissionContainer" style="color:#0196e3";> ';
			if($contact_person != '')
			{
				echo 'Contact Person: '.$contact_person.' ';
			}
			echo ' <p> Phone: '.$row['phone'].' </p>
				<p> Email: '.$row['email'].'. </p>';
		}

		else if($row['check_phone'] == 1)
		{
			echo ' <div id="submissionContainer" style="color:#0196e3";> ';
			if($contact_person != '')
			{
				echo ' Contact Person: '.$contact_person.' ';
			}
			echo ' <p> Phone: '.$row['phone'].'. </p>';
		}
		
		else if($row['check_email'] == 1)
		{
			echo ' <div id="submissionContainer" style="color:#0196e3";> ';
			if($contact_person != '')
			{
				echo 'Contact Person: '.$contact_person.' ';
			}
			echo ' <p> Email: '.$row['email'].'. </p>';
		}
		
		echo '</div>';

		echo '
		<p>Category: '.$row['category'].'</p>
		';
		//}
	//}

}


else
{
	die("Query failed!");
}

?>

<div class="fb-like" data-href="http://dagenda.phpfogapp.com/event_page.php?id=<?php echo ' '.$id.' ';?>" data-send="false" data-width="450" data-show-faces="true"></div>
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

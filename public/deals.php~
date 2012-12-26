
<!-- Put IE into quirks mode -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title> College Campus Events </title>
<link href="agenda.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="styles.css" />
<meta name="Author" content="Isatou" />

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

		<b style="color:#0196e3";> Promoted Event: </b>
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



<select name="department" id="drop">
<option style="background-color:#58B9EB"; value="choose_category">All Departments</option>
<option style="background-color:#58B9EB"; value="Food">Engineering</option>
<option style="background-color:#58B9EB"; value="Books">Science</option>
<option style="background-color:#58B9EB"; value="Electronics">Humanities</option>
<option style="background-color:#58B9EB"; value="Beauty">Sophie Davis</option>
<option style="background-color:#58B9EB"; value="Exercise">Architecture</option>
<option style="background-color:#58B9EB"; value="Events">Education</option>
</select>
<input type="submit" id="submit" value="Update">
</form>
<br/>
</p>
<?php

if($result)
{

	if(mysql_num_rows($result)==0)
	{
		echo "The are no deals!";


echo '<table width="100%" border="0" align="left" cellpadding="2" cellspacing="0">
<table width="100%" border="0" align="left" cellpadding="2" cellspacing="0" id='submissionContainer' style="color:#0196e3";>
<tr>
<td>
<img src="ad.jpg" align="middle" width="90%" height="120">
</td>
<td>
<img src="ad2.jpg" align="middle" width="90%" height="120">
</td>
<td>
<img src="ad3.jpg" align="middle" width="90%" height="120">
</td>
<td>
<img src="ad4.jpg" align="middle" width="90%" height="120">
</td>
<td>
<img src="ad5.jpg" align="middle" width="90%" height="120">
</td>
</tr>
</table>';


	}
	/*else
	{
	while($row=mysql_fetch_assoc($result))
		{

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
		
		$count=0;
		$extra[0]=$row['category'];
		if($row['refreshments']==1)
			{
				$extra[1]='refreshments';
				$count=$count+1;
			}
		if($row['raffle']==1)
			{
				$extra[2]="raffle";
				$count=$count+1;
			}

		$url="event_page.php?id=";
		$url .=$row['event_id'];
		

		

		echo '	<div id="submissionContainer" style="color:#0196e3";>
		<b><a href="'.$url.'">  '.$row['title'].' @ '.$row['location'].' from '.$row['start_hour'].':'.$start.' '.$row['start'].' to '.$row['end_hour'].':'.$end.' '.$row['end'].'</a></b>
<br/>
'.$row['details'].'
<br/>'; 
foreach ($extra as $i)
		{
			echo ' *'.$i.'* ';
		}


$november=5;
$total=30;
$count=0;


echo '


		
		 </div>';
		}
	} */

}


else
{
	die("Query failed!");
}

?>

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

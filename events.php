<?php
//include("connect.php");
require_once('connect.php');
$qry="SELECT * from events ORDER BY event_id DESC";
$result=@mysql_query($qry);
?>
<!-- Put IE into quirks mode -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title> stu nicholls | CSS PLaY | cross browser fixed header/footer layout </title>
<link href="agenda.css" rel="stylesheet" type="text/css" />
<meta name="Author" content="Stu Nicholls" />

</head>
<body>

<div id="section-navigation">






				<ul>
					<li><a href="#">Start New Discussion</a></li>
					<li><a href="#">Update Profile Status</a></li>
					<li><a href="#">Make a poll</a></li>
					<li><a href="#">Vote for Discussion of the week</a></li>
					
				</ul>
			
</div>

<div id="container">

<div id="content-container1">
<div id="content-container3">
		<div id="content-container2">


			<div id="content">



				<h2>
					<div class="ex" align="center">Discussion of the Week:<br />
Discussion Title</div>
				</h2>

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

<ul class="navigation1">
 <li><a href="test8.html">Monthly Updates</a></li>
 <li><a href="vote.html">Events</a></li>
 <li><a href="test8status.html">Pictures</a></li>
 <li><a href="#">Contact Info</a></li>

 
</ul>




<?php

if($result)
{

	if(mysql_num_rows($result)==0)
	{
		echo "The are no events!";
	}
	else
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
		if($row['refreshments']==1)
		{
			$extra[0]='refreshments';
			$count=$count+1;
		}
		if($row['raffle']==1)
		{
			$extra[1]="raffle";
			$count=$count+1;
		}

		echo '	<div class="cover">
		<b>'.$row['title'].'</b>
		<p>'.$row['details'].'</p>
		<p>Date: '.$row['month'].' '.$row['day'].' '.$row['year'].'</p>
		<p>Start Time: '.$row['start_hour'].':'.$start.' '.$row['start'].'</p>
		<p>End Time: '.$row['end_hour'].':'.$end.' '.$row['end'].'</p>
		<p>Location: '.$row['location'].'</p>
		<p>Admission Fee: '.$admission.'</p>
		<p>Reservation Required: '.$reservation.'</p>';

		if($count != 0)
		{
			echo '<p>Available:</p>';
		}
		

		foreach ($extra as $i)
		{
			echo ' <li> '.$i.' </li>';
		}

		if($row['check_phone'] == 1 & $row['check_email'] == 1)
		{
			echo ' <p> For more information, call '.$row['phone'].' or send an email to '.$row['email'].'. </p>';
		}

		else if($row['check_phone'] == 1)
		{
			echo ' <p> For more information, call '.$row['phone'].'. </p>';
		}
		
		else if($row['check_email'] == 1)
		{
			echo ' <p> For more information, send an email to '.$row['email'].'. </p>';
		}
		
		

		echo '
		<p>Category: '.$row['category'].'</p>
		 </div>';
		}
	}

}


else
{
	die("Query failed!");
}

?>


			</div>

<div id="aside">
				<h3>
					Adverts
				</h3>
				<p>
					Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan.
				</p>
			</div>

			<div id="aside_one">
				<h3>
					Top Discussions
				</h3>
				<p>
					Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan.
				</p>
			</div>
			
	
</div>
</div>
</div>
 </div>








<div id="navigation">

	<ul>
<li> <img  src="/C:\Users\Isatou.Isatou-PC\Desktop/logo.png" width="100px" height="35px" </> </li>
		<li><a href="#">Home</a></li>
		<li><a href="profile.html">Profile</a></li>
		<li><a href="#">Discussions</a></li>
		<li><a href="#">Pages</a></li>  
		<li><a href="#">Friends </a></li> 
		<li><a href="#">Messages </a></li> 
		<li><a href="#">Featured Videos</a></li> 
		<li><a href="#">Featured Stories</a></li> 
		<li><a href="#">Top Discussions</a></li> 
		<li><a href="#">Opportunities</a></li>  
		<li><a href="#">More Categories</a>           
        		<ul>	<li><a href="#">Category 11</a></li>                      
				<li><a href="#">Category 12</a></li>                      
				<li><a href="#">Category 13</a></li>                      
				<li><a href="#">Category 14</a></li>             
        		</ul>            
		</li> 
		  
	</ul>  
</div>
     
 





</body></html>

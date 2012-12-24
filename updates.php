<?php
//include("connect.php");
require_once('connect.php');
$qry="SELECT * from updates ORDER BY post_id DESC";
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


<div class="cover">

<form id="updates" name="updates"  method="post" action="updates_exec.php">



<textarea name="post" id="post" onfocus="this.value=''; setbg('#e5fff3');" onblur="setbg('white')">Make a post...</textarea>


		




<p><input type="submit" name='submit' value="submit" ></p>
</form>
</div>



<?php

if($result)
{

	if(mysql_num_rows($result)==0)
	{
		echo "The are no posts!";
	}
	else
	{
		while($row=mysql_fetch_assoc($result))
		{
		$qry2="SELECT * from comments WHERE `post_id`='".$row['post_id']."' ";
		$result2=@mysql_query($qry2); 
		echo '
		<div class="cover">


		
		<p>'.$row['post'].'</p>
		<p>Date: '.$row['date'].'</p>
<p>
<input type="submit" name="submit" value="Delete" >
</p>';




if($result2)
{

while($row2=mysql_fetch_assoc($result2))
{
echo '
<div class="comment">
<p>'.$row2['comment'].'</p>
<p>Date: '.$row2['date'].'</p>
</div>
';
}
}

else
{
	die("Query comment failed!");
}


echo' 
<form id="comments" name="comments"  method="post" action="comments_exec.php">
<p><input type="hidden" name="post_id" id="post_id" value='.$row['post_id'].'></p>';?>

<textarea name="comment" id="comment" onfocus="this.value=''; setbg('#e5fff3');" onblur="setbg('white')">Make a comment....</textarea>

<?php
echo '<p><input type="submit" name="submit" value="comment" > </p>
</form>
		






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

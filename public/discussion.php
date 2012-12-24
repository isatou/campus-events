<?php
//include("connect.php");
require_once('connect.php');
$qry="SELECT * from discussions";
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
 <li><a href="test8.html">Start New Discussion</a></li>
 <li><a href="test8status.html">Update Profile Status</a></li>
 <li><a href="#">Make a poll</a></li>
 <li><a href="vote.html">Vote for Discussion of the Week</a></li>
 
</ul>


<div class="cover">

<form id="discussion" name="discussion"  method="post" action="discussion_exec.php">



<textarea name="description_short" id="description_short" onfocus="this.value=''; setbg('#e5fff3');" onblur="setbg('white')">New Discussion...</textarea>


		






<select name="category">
<option value="Category">Choose Category</option>
<option value="News">News</option>
<option value="Music">Music</option>
<option value="Food">Food</option>
<option value="Politics">Politics</option>
<option value="Education">Education</option>
<option value="Love">Love</option>
<option value="Religion">Religion</option>
<option value="Movies">Movies</option>
<option value="Other">Other</option>
</select>
<input type="submit" name='submit' value="submit" >
</form>
</div>


<?php
if($result)
{
	if(mysql_num_rows($result)==0)
	{
		echo "The are no discussions!";
	}
	else
	{
		while($row=mysql_fetch_assoc($result))
		echo '
		<div class="cover">

		

		
		<p>'.$row['discussion_short'].'</p>
		<p>Category: '.$row['category'].'     Date: '.$row['date'].'</p>
<p>
<input type="submit" name="submit" value="Delete" >
</p>

<p>
<input type="image" src="agree.jpg" width="20px" height="20px" title="agree" name="submit" value="Agree" > 
<input type="image" src="disagree.jpg" width="20px" height="20px" title="disagree" name="submit" value="Disagree" >
<input type="submit" name="submit" value="Share" >

</p>
		</div>';

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

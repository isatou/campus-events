<?php
	session_start();
	
	require_once('connect.php');
	
	$dbLink = new mysqli($db_host, $db_user, $db_pass, $db_database);
	if(mysqli_connect_errno()) {
		die("MySQL connection failed: ". mysqli_connect_error());
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Business Registration</title>

<link href="funny.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="styles.css" />
<link href="rating.css" rel="stylesheet" type="text/css" />
</head>
<body>
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
<p>&nbsp;</p>



<div id="container">

<div id="header">

<a href="home.php"> <img src="logo1.png" > 
</a>
		
	</div>
	<div id="navigation">
		<ul>
			<li><a href="home.php">Home</a></li>
                        <li><a href="business_registration.php">Business Registration</a></li>
						<li><a href="user_registration.php">User Registration</a></li>
			<li><a href="about1.php">About</a></li>	
			<li><a href="contactus1.php">Contact Us</a></li>
			
			
		</ul>
	</div>

<h1 style="text-align:center"> Event </h1>

	<div id="content-container1">

		
			<div id="section-navigation">


			</div>

			<div id="content">

 

	<?php
// Query for a list of all existing files
$sql = 'SELECT * FROM `Business` ';
$result = $dbLink->query($sql);
$i = 0;
// Check if it was successfull
if($result) {
    // Make sure there are some files in there
    if($result->num_rows == 0) {
        echo '<p>There are no files in the database</p>';
    }
    else {
        // Print the top of a table
        echo '<form action="filetablefunctions.php" method="post">
			<table width="100%" border="1" cellpadding="0" >
                <tr>
                <td class=tabhead><br /><b>Date</b></td>
		<td class=tabhead><br /><b>Time</b></td>
		<td class=tabhead><br /><b>Event</b></td>
		<td class=tabhead><br /><b>Location</b></td>
		
		
	
		
                
            </tr>';
 
        // Print each file
        while($row = $result->fetch_assoc()) {
            echo "<tr valign='middle'>";

echo '<td width="15%">'.$row['Business_Name'].'</td>'; 
		echo '<td width="15%">'.$row['State'].'</td>';
		echo '<td width="55%"><a href=\'' . $row['Street'] . '.php \'>'.$row['Street'].'</a></td>';
		echo '<td width="15%">'.$row['City'].'</td>';
		echo "</tr>";
        }
 
        // Close table
        echo '</table>
		
		</form>';
    }
 
    // Free the result
    $result->free();
}
else
{
    echo 'Error! SQL query failed:';
    echo "<pre>{$dbLink->error}</pre>";
}
 
// Close the mysql connection
$dbLink->close();
?>
		
</br>

<h2> March </h2>

<table width="100%" border="1" cellpadding="0" >
<tr>
<td> Sun </td>
<td> Mon </td>
<td> Tues </td>
<td> Wed </td>
<td> Thur </td>
<td> Fri </td>
<td> Sat </td>
</tr>

<tr>
<td>  </td>
<td>  </td>
<td>  </td>
<td> </td>
<td> 1 </td>
<td> 2 </td>
<td> 3 </td>
</tr>

<tr>
<td> 4 </td>
<td> 5 </td>
<td> 6 </td>
<td> 7 </td>
<td> 8 </td>
<td> 9 </td>
<td> 10 </td>
</tr>

<tr>
<td>11  </td>
<td> 12 </td>
<td> 13 </td>
<td> 14</td>
<td> 15 </td>
<td> 16 </td>
<td> 17 </td>
</tr>

<tr>
<td>18  </td>
<td> 19 </td>
<td> 20 </td>
<td> 21</td>
<td> 22 </td>
<td> 23 </td>
<td> 24 </td>
</tr>

<tr>
<td> 25 </td>
<td> 26 </td>
<td> 27 </td>
<td> 28</td>
<td> 29 </td>
<td> 30 </td>
<td> 31 </td>
</tr>

</table>



</div>







			
			<div id="footer">
				

<div align= "center">Copyright &copy; My Business Lookup, 2012 
</div>


			</div>
		
	</div>

</div>
</body>
</html>

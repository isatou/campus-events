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

<h1 style="text-align:center"> Offers </h1>

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
			<table width="100%" border="0" cellpadding="0" >';
          
 
        // Print each file
        while($row = $result->fetch_assoc()) {
            echo "<tr valign='middle'>";


		echo '<td width="55%"><a href=\'' . $row['Street'] . '.php \'>'.$row['Street'].'</a></td>';
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
		






</div>







			
			<div id="footer">
				

<div align= "center">Copyright &copy; My Business Lookup, 2012 
</div>


			</div>
		
	</div>

</div>
</body>
</html>

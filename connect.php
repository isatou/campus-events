<?php

/* Database config */

$db_host='a.db.shared.orchestra.io';
$db_user='user_2835e64a';
$db_pass= 'ZfA)mLDO&8hKeO';
$db_database='db_2835e64a'; 

/* End config */


$link = @mysql_connect($db_host,$db_user,$db_pass) or die('Unable to establish a DB connection');

mysql_query("SET NAMES 'utf8'");
mysql_select_db($db_database,$link);

?>

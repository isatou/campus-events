<?php
//include("connect.php");
require_once('connect.php');

$month=$_GET["month"];
$year=$_GET["year"];

$free=$_GET["free"];
$refreshments=$_GET["refreshments"];
$giveaways=$_GET["giveaways"];

if($month=='' || $year=='')
{
$month='December';
$year=2012;

$qry="SELECT * from events ";
$qry .= $part_qry;
$qry .="ORDER BY year ASC, month ASC, day ASC";
}

else

{





$part_qry='';

/*

if (isset($_POST['refreshments']))
	{
		$refreshments=1;
	}


if (isset($_POST['giveaways']))
	{
		$giveaways=1;
	}


if (isset($_POST['free']))
	{
		$free=0;
	}

*/


if($free=='0')
{
$part_qry.="and admission='$free'";
}

if($refresments=='1')
{
$part_qry.="and refreshments='$refreshments'";
}

if($giveaways=='1')
{
$part_qry.="and raffle='$giveaways'";
}

$category=$_GET["category"];

if($category!='')
{

$part_qry.="and category='$category'";
}



$day=$_GET["day"];
if($day=='')
{

$qry="SELECT * from events WHERE month='$month' and year='$year'";
$qry .= $part_qry;
$qry .="ORDER BY year ASC, month ASC, day ASC";
//$qry="SELECT * from events WHERE month='$month' and year='$year' ORDER BY year ASC, month ASC, day ASC";
}

else
{
//$qry="SELECT * from events WHERE month='$month' and year='$year' and day='$day' ORDER BY year ASC, month ASC, day ASC";
$qry="SELECT * from events WHERE month='$month' and year='$year' and day='$day'";
$qry .= $part_qry;
$qry .="ORDER BY year ASC, month ASC, day ASC";
}

if($month=='January')
{
$month_calendar=1;
}
else if($month=='February')
{
$month_calendar=2;
}
else if($month=='March')
{
$month_calendar=3;
}
else if($month=='April')
{
$month_calendar=4;
}
else if($month=='May')
{
$month_calendar=5;
}
else if($month=='June')
{
$month_calendar=6;
}
else if($month=='July')
{
$month_calendar=7;
}
else if($month=='August')
{
$month_calendar=8;
}
else if($month=='September')
{
$month_calenar=9;
}
else if($month=='October')
{
$month_calendar=10;
}
else if($month=='November')
{
$month_calendar=11;
}
else if($month=='December')
{
$month_calendar=12;
}


//promoted event

$qry_pro="SELECT * from events WHERE month='December' and year='2012' and day='18'";
$qry_pro .= $part_qry;
$qry_pro .="ORDER BY year ASC, month ASC, day ASC";


/*SELECT YEAR(GETDATE()) as "Year";

SELECT MONTH(GETDATE()) as "Month";

SELECT DAY(GETDATE()) as "Day"; */
$result=@mysql_query($qry);
} //end of else	
?>


<div id="section-navigation">




<?php	

$qry2="SELECT * from dates WHERE month='$month_calendar' and year='$year' ";	

$result2=mysql_query($qry2);



if($result2)
{
$row2=mysql_fetch_assoc($result2);
$start=$row2['week_start'];
$total_days=$row2['num_days'];	
$november=5;
$total=30;
//$count=0;
$count=$start-1;
$start_count=0;



echo '


<p><b> '.$month.' '.$year.' test </b></p>
<table border="1" style="border:4px solid #58B9EB";>
<tr>
<th>S</th>
<th>M</th>
<th>T</th>
<th>W</th>
<th>T</th>
<th>F</th>
<th>S</th>
</tr>
<tr>';

/*

	while($start_count!=$start)
	{
		echo '<td> </td>';
		$start_count=$start_count + 1;
		$count=$count+1;

		if($count==7)
		{
			$count=0;
			echo '</tr><tr>';
		}

	}
*/

for($start_count=1; $start_count<$start; $start_count++)
{
	echo '<td> </td>';
	
}

for($j=1; $j<=$total_days; $j++)
//for ($i=1; $i<=5; $i++)

{

	if($count==7 & $j!=$total_days)
	{
		$count=0;
		echo '</tr><tr>';
	}



	//if($j>=$start)
	//{
		//$day[$i]=$i;';
		$url="events2.php?month=";
		$url .=$month;
		$url .="&year=";
		$url .=$year;
		$url .="&day=";
		$url .=$j;

		//$url="events2.php?month=$month&year=$year";
		//$url="events2.php?month=March&year=2013";
		echo '<td> <a href="'.$url.'"> '.$j.' </a></td>';
	//}
	/*else
	{
		echo '<td> </td>';
		$start_count=$start_count + 1;
	}*/
$count=$count+1;
		if($j==$total_days)
	{
		$count=7-$count;
		for($k=1; $k<=$count; $k++)
		{
			echo '</td><td>';
		}
		echo '</tr>';
	}


}
}

else 
{
die('calendar query failed!');
}




echo '

</table>';

?>



<?php

	$url="events2.php?month=";
		$url .=$month;
		$url .="&year=";
		$url .=$year;





if($month=='January')
{
$previous_month='December';
}
else if($month=='February')
{
$previous_month='January';
}

else if($month=='March')
{
$previous_month='February';
}

else if($month=='April')
{
$previous_month='March';
}
else if($month=='May')
{
$previous_month='April';
}
else if($month=='June')
{
$previous_month='May';
}
else if($month=='July')
{
$previous_month='June';
}
else if($month=='August')
{
$previous_month='July';
}
else if($month=='September')
{
$previous_month='August';
}
else if($month=='October')
{
$previous_month='September';
}
else if($month=='November')
{
$previous_month='October';
}
else if($month=='December')
{
$previous_month='November';
}



if($month=='January')
{
$next_month='February';
}
else if($month=='February')
{
$next_month='March';
}
else if($month=='March')
{
$next_month='April';
}
else if($month=='April')
{
$next_month='May';
}
else if($month=='May')
{
$next_month='June';
}
else if($month=='June')
{
$next_month='July';
}
else if($month=='July')
{
$next_month='August';
}
else if($month=='August')
{
$next_month='September';
}
else if($month=='September')
{
$next_month='October';
}
else if($month=='October')
{
$next_month='November';
}
else if($month=='November')
{
$next_month='December';
}
else if($month=='December')
{
$next_month='January';
}






$previous="events2.php?month=";

//$previous_month=$month-1;
//$next_month=$month+1;
		$previous .=$previous_month;
		$previous .="&year=";
		$previous .=$year;
echo '<a href=" '.$previous.' "><img src="previous.jpg" width="20px" height="20px"  /></a>';
$next="events2.php?month=";
		$next .=$next_month;
		$next .="&year=";
		$next .=$year;
echo '&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href=" '.$next.' "><img src="next.jpg" width="20px" height="20px" /></a>';


		

$student_club=$url;
$student_club.="&category=student_club";
$workshop=$url;
$workshop.="&category=workshop";
$conference=$url;
$conference.="&category=conference";
$religious=$url;
$religious.="&category=religious";
$sports=$url;
$sports.="&category=sports";
$lecture=$url;
$lecture.="&category=lecture";
$exhibit=$url;
$exhibit.="&category=exhibit";
$movie=$url;
$movie.="&category=movie";
$show=$url;
$show.="&category=show";
?>


				<p><b style="color:#0196e3";>Sort by category: </b></p>
				<br/>
				<ul>
					<li><a href="<?php echo ' '.$student_club.' ';?>">Student Activities</a></li>
					<li><a href="<?php echo ' '.$workshop.' ';?>">Workshop</a></li>
					<li><a href="<?php echo ' '.$lecture.' ';?>">Lecture</a></li>
					<li><a href="<?php echo ' '.$conference.' ';?>">Conference</a></li>
					<li><a href="<?php echo ' '.$movie.' ';?>">Movie</a></li>
					<li><a href="<?php echo ' '.$religious.' ';?>">Religious</a></li>
					<li><a href="<?php echo ' '.$sports.' ';?>">Sports</a></li>
					<li><a href="<?php echo ' '.$show.' ';?>">Live Show</a></li>
					<li><a href="<?php echo ' '.$exhibit.' ';?>">Exhibit</a></li>
					
				</ul>



			
</div>



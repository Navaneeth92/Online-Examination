<?php
$con=@mysql_connect("localhost","root","") or die(mysql_error());

$db=@mysql_select_db("job",$con) or die(mysql_error());

$str="select * from quiz2";
$res=@mysql_query($str)or die(mysql_error());
$flag="a";
$score=0;
$count=0;
$total=0;
echo "<body bgcolor=blue text=Yellow>";
echo "<h1><center>Online Test Results</center><br><br><br>";
while($val=@MySql_fetch_array($res))
{
$ans=$_POST[$flag];
if($ans=="a"||$ans=="b"||$ans=="c"||$ans=="d")
$count++;
else
$count=$count;
if($ans==$val['wopt'])
$score+=5;
else
$score+=0;
$flag++;
$total++;
}
echo "<html><center><table border=2 bgcolor=green width=400 height=400 cellpadding=3 cellspacing=3>";
echo "<tr><td>Total Number of Questions : ";
echo "<td>",$total,"</tr>";
echo "<tr><td>Total Number of Questions Attended : ";
echo "<td>",$count,"</tr>";
echo "<tr><td>Total Score : ";
echo "<td>",$total*5,"</tr>";
echo "<tr><td>Scores Obtained : ";
echo "<td>",$score,"</tr>";
echo "<tr><td>Aggregate Score : ";
if($total*5>100)
{
$agg=($total*5)/100;
$aggscore=$score/$agg;
}
else
{
$agg=100/($total*5);
$aggscore=$score*$agg;
}
echo "<td>",$aggscore,"</tr>";
echo "<tr><td>Thanks For Attending Online Exam<td>Your Scores Will be Evaluated</td></tr>";
echo "</table></center>";
echo "</html>";
echo "<a href=onl.html>Log Out</a>";
?>
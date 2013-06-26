<?php
$con=@mysql_connect("localhost","root","") or die(mysql_error());

$db=@mysql_select_db("job",$con) or die(mysql_error());

$str="select * from quiz2";
$res=@mysql_query($str)or die(mysql_error());
$flag="a";

echo "<body bgcolor=blue text=white>";
echo "<h1>Welcome to Online Test</h1><br><br><br>";
while($val=@MySql_fetch_array($res))
{
$score=0;

echo "<form action=scores.php method=post> ";
echo "<table bgcolor=green text=white>";
echo "<tr><td>",$val['id'],")";
echo "<td>",$val['ques'],"</tr>";
echo "<tr><td><input type=radio name=$flag value=a>",$val['opt1'],"</tr>";
echo "<tr><td><input type=radio name=$flag value=b>",$val['opt2'],"</tr>";
echo "<tr><td><input type=radio name=$flag value=c >",$val['opt3'],"</tr>";
echo "<tr><td><input type=radio name=$flag value=d>",$val['opt4'],"</tr>\n\n";
$flag++;

}
echo "</table>";
echo "<input type=submit value=Finish Test>";
echo "</form>";


?>
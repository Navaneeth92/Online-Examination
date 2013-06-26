<?php
$id=$_POST['id'];
 $con=@mysql_connect("localhost","root","") or die(mysql_error());

$db=@mysql_select_db("job",$con) or die(mysql_error());

echo " conected"; 
$str="delete from quiz2 where id='$id'";
$res=@mysql_query($str)or die(mysql_error());
?>

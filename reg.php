<?php

$n=$_POST['id'];

$p=$_POST['pass'];


$n1=$_POST['name'];

$con=@mysql_connect("localhost","root","") or die(mysql_error());

$db=@mysql_select_db("job",$con) or die(mysql_error());

$str1="insert into general values('$n1','$n','$p');";
$str="insert into login values('$n','$p');";

$res=@mysql_query($str) or die(mysql_error());

$res1=@mysql_query($str1) or die(mysql_error());

echo "<b>LOGIN CREATED</b>";

$k=@mysql_num_rows($res);

echo "\n <a href='index.html'>Click here to Login</a>";

?>

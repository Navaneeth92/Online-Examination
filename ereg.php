<?php

$n=$_POST['name'];

$p=$_POST['pass'];

$random = rand(5984575,9824595);
$n1=$_POST['pass1'];

$con=@mysql_connect("localhost","root","") or die(mysql_error());

$db=@mysql_select_db("job",$con) or die(mysql_error());


$str2="select * from login where id='$n' && password='$p';";

$resu=@mysql_query($str2) or die(mysql_error());

$k=@mysql_num_rows($resu);


if($k!=1)


echo " Check your Job Portal password and id !!\n";

else
{

$str1="insert into examr values('$random','$p');";

$str="insert into examu values('$random');";

$res=@mysql_query($str) or die(mysql_error());

$res1=@mysql_query($str1) or die(mysql_error());

echo "<b>LOGIN CREATED!!     Your Key :   </b> "+$random;

$k=@mysql_num_rows($res);

echo "\n <a href='onl.html'>Click here to Login</a>";


}?>

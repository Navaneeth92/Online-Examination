<?php
$name=$_POST['key'];
$password=$_POST['password'];
$con=@mysql_connect("localhost","root","") or die(mysql_error());

$db=@mysql_select_db("job",$con) or die(mysql_error());

$str="select * from examr";
$res=@mysql_query($str)or die(mysql_error());

if($name=="admin" && $password=="admin")
{
echo "<html><br>ADMIN LOGIN SUCCESSFUL<br> <a href=Quiz_Entry_Admin.php>!! CLick here to Proceed</a></html>";
}
else
{
while($row=mysql_fetch_array($res,MYSQL_ASSOC))
{
if($name==$row['key1'] && $password==$row['pass1'])
$flag=1;
}
if($flag==1)
{
echo "<html><body background=success.jpg>";
echo "valid user:     $name";
echo "\t";
echo "<html><br>LOGIN SUCCESSFUL<br> <a href=quiz.php>!! CLick here to Proceed</a></html>";


}
else
{
echo "invalid username:   $name";
echo "<html><br><a href=onl.html>Sign up first</a><br><br><br><a href=onl.html>Return to Main Menu</a></html>";
}
}





?>

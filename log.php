<?php
$n=$_POST['id'];

$p=$_POST['pass'];

$con=@mysql_connect("localhost","root","") or die(mysql_error());

echo"connected\t";

$db=@mysql_select_db("job",$con) or die(mysql_error());

$str="select * from login where id='$n' && password='$p';";

$res=@mysql_query($str) or die(mysql_error());

$k=@mysql_num_rows($res);

if($n=="administrator")

echo "<a href='admin.html'>click here</a>";

else
{
if($k==1)

{

echo "login authenticated\n";

echo "<a href='home.html'>click here to proceed</a>";

}
else

{

echo " login not authenticated\n";

echo "<a href='log.html'>login again</a>";

}
}

?>




<?php

$amt1=$_POST['r1'];


    if ($amt1 == "at1") {
        
       $amt=1500;
        
    }
    
    else {
        
        $amt=3500;
        
    }    
echo $amt;
$pno=$_POST['pno'];
$name=$_POST['name'];
$id=$_POST['id'];
$pnr=$_POST['uid'];
$bank=$_POST['bank'];
$con=@mysql_connect("localhost","root","") or die(mysql_error());
echo "Connected to database\n";
$db=@mysql_select_db("job",$con)or die(mysql_error());
echo "DB selected\n";

$con=@mysql_connect("localhost","root","") or die(mysql_error());
echo "Connected to database\n";
$db=@mysql_select_db("job",$con)or die(mysql_error());
echo "DB selected\n";
$str="select * from ib";
$res=@mysql_query($str)or die(mysql_error());
$newbal=0; 
while($val=@MySql_fetch_array($res))
{
if($val['id']==$pno && $val['pin']==$id)
{
$newbal=$val['val']-$amt;
}

}
$con=@mysql_connect("localhost","root","") or die(mysql_error());
echo "Connected to database\n";
$db=@mysql_select_db("job",$con)or die(mysql_error());
echo "DB selected\n";
$str1="select * from ib where id='$pno'";
$res1=@mysql_query($str1)or die(mysql_error());
$val1=@MySql_fetch_array($res1);
if($val1['val']=="0")
{
echo " Nil Bal";
}
else
{
$str="update ib set val='$newbal' where  id='$pno'";
$res=@mysql_query($str)or die(mysql_error());
echo "<html><body>Transaction processed successfully<a href=home.html>click here to go home</a></body></html>";
}
?>


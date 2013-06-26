<?php
                              $con=@mysql_connect("localhost","root","") or die(mysql_error());

$db=@mysql_select_db("job",$con) or die(mysql_error());

echo " conected"; 
if($_POST["do"]=="quiz")
  {
$id=$_POST["id"];
  $question=$_POST["question"]; 
$opt1=$_POST["opt1"];
  $opt2=$_POST["opt2"]; 
  $opt3=$_POST["opt3"]; 
  $opt4=$_POST["opt4"]; 
  $woptcode=$_POST["woptcode"]; 
  echo " sucess";
 $query="select * from quiz1 "; 
  $temp=1; 
   
                        $result=mysql_query($query); 

                       
     $query="insert into quiz2 values('$id','$question','$opt1','$opt2','$opt3','$opt4','$woptcode')";  
     $result=mysql_query($query) or die(mysql_error()); 
     echo "successfully Saved"; 
 }
else
echo "error";
  ?> 
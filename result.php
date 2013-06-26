
<?php
$con=@mysql_connect("localhost","root","") or die(mysql_error());

$db=@mysql_select_db("navaneeth",$con) or die(mysql_error());


echo " db connected";
?>
<html>
<head>

<div id="heading">Online Quiz</div> 
   <br /> 
   <form name="quiz" method="post" action="result.php"> 
      <? 
  $rans=$_POST['rans']; 
  $tq=$_POST['tq']; 
  $end=$_POST['end']; 
  $startposition=$_POST['startposition']; 
?>
  <table cellpadding='5px' align='center' style='border:1px solid silver' width='80%' bgcolor='green'>
  <tr><td>Total Question Attempt</td><td><?$tq?></td><tr> 
  <tr><td>Correct Answer</td><td><?$rans?></td></tr> 
  <tr><td>Wrong Answer</td><td><?$tq-$rans?></td></tr> 
  <tr><td>Correct Answer Percentage</td><td><?$rans/$tq*100?>%</td></tr> 
 <tr><td>Wrong Answer Percenntage</td><td><?($tq-$rans)/$tq*100?>%</td></tr> 
  </table><br><br>
<?
  $query="select * from quiz1 where qid<="$end" and qid>="$startposition";"; />

<table cellpadding='5px' align='center' style='border:1px solid silver'> 
<tr><th colspan='4' id='heading'>Online Quiz Test Question</td></tr>
<? 
                        $result=mysql_query($query); 
                        while ($row = mysql_fetch_array($result)) { 

       echo "<tr><td>",$row[0],"</td><td colspan='2'>",$row[1],"</td></tr><tr><td></td>"; 
       echo "<td colspan='2'>A. ",$row[2],"</td>"; 
       echo "<td colspan='2'>B. ",$row[3],"</td></tr>"; 
       echo "<tr><td></td><td colspan='2'>C. ",$row[4],"</td>"; 
       echo "<td colspan='1'>D. ",$row[5],"</td></tr>"; 
       echo "<tr><td colspan='4' align='right' style='color:orange'>Correct option is ",strtoupper($row[6]),"</td></tr>"; 
       echo "<tr><td colspan='4' align='right' style='color:orange'><hr></td></tr>";  
       
   
   } 
   echo "</table>"; 
   echo "<p align='right'><a href='#' onclick='window.print()'>Print</a></p>";  
   echo "<div style='visibility:hidden;display:none'>"; 
   

?>
</form>
</body>
</html>
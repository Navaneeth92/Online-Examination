<html>
<body>
<filedset color=red>
  <form method="post" action="save.php"> 
  <table bgcolor="green"> 
  <tr><td colspan="2" id="heading">Online Quiz Test Question Entry Module</td> 
  </tr> 
<tr> 
  <td>Enter ID </td> 
  <td><input type="text" name="id"  /></td> 
  </tr> 
  <tr> 
  <td>Enter Question here </td> 
  <td><input type="text" name="question"  /></td> 
  </tr> 
  <tr> 
  <td>Enter First option</td> 
  <td><input type="text" name="opt1" /></td> 
  </tr> 
  <tr> 
  <td>Enter Second option</td> 
  <td><input type="text" name="opt2"  /></td> 
  </tr> 
  <tr> 
  <td>Enter Third option</td> 
  <td><input type="text" name="opt3"  /></td> 
  </tr> 
  <tr> 
  <td>Enter Fourth option</td> 
  <td><input type="text" name="opt4"  /></td> 
  </tr> 
  <tr> 
  <td>Select Right Option code</td> 
  <td><select name="woptcode"> 
  <option value="a">A</option> 
  <option value="b">B</option> 
  <option value="c">C</option> 
  <option value="d">D</option> 
  </select> 
  </td> 
</tr>
  <tr> 
  <td colspan="2"> 
  <input type="hidden" name="do" value="quiz" /><input type="submit" value="SAVE QUESTION"/>


  </td> 
  </tr> 
  </table> 
  </form>
<form action="del.php">
<input type=submit value="New Set">
</form>
<form action="del2.html">
<input type=submit value="Delete Question">
</form>
</fieldset>
</body>
</html>
<?php
echo "<a href=onl.html>Log Out</a>";
?>
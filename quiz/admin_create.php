<?php
if(isset($_COOKIE['c']))
{
print "
<body>
<br><br><br><br><br><br>
<br>
<br>
<table width='300' align='center' cellpadding='0' cellspacing='1' >
<tr><td>&nbsp;Create q</td></tr>
<tr>
<form name='user_create' method='post' action='admin_response.php'>
<td>
<table width='100%' border='0' cellpadding='3' cellspacing='1' >
<tr>
</tr>
<tr><select name='Stream'>
<option value='cse'>Computer Science</option>
</select>
</tr>
<tr><select name='Substreams'>
<option value='coa'>Computer Organization and Architecture</option>
<option value='cp'>Computer Programming</option>
<option value='dsa'>Data Structures and Algorithms</option>
<option value='itws'>IT Workshop</option>
</select>
</tr>
<tr><select name='Level'>
<option value='easy'>Easy</option>
<option value='in'>Intermediate</option>
<option value='dif'>Difficult</option>
</select>
</tr>
<tr>Question : <br>
</tr><tr>
<textarea name='Question' cols='25' rows='5'>
</textarea><br>
</tr>
<tr>
<td>Option 1</td>
<td>:</td>
<td><input name='option1' type='text' id='op1'/td>
</tr>
<tr>
<td>Option 2</td>
<td>:</td>
<td><input name='option2' type='text' id='op2'/td>
</tr>
<tr>
<td>Option 3</td>
<td>:</td>
<td><input name='option3' type='text' id='op3'/td>
</tr>
<tr>
<td>Option 4</td>
<td>:</td>
<td><input name='option4' type='text' id='op4'/td>
</tr>
<tr>
<td>Answer </td>
<td>:</td></tr><tr>
<td><input name='answer' type='radio' id='ans'>a</td>
</tr>
<tr>
<td><input name='answer' type='radio' id='ans'>b</td>
</tr>
<tr>
<td><input name='answer' type='radio' id='ans'>c</td>
</tr>
<tr>
<td><input name='answer' type='radio' id='ans'>d</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type='submit' name='Submit' value='Submit'></td>
<td>
</td>
</tr>
</table>
</td>
</form>
</tr>
</table>
</body>";
} else
	header("location:login1.php");
?>
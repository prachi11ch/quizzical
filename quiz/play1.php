<?php
if(isset($_COOKIE['c']))
{
	print "<table>
	<tr>
	<td>KRAZYKUIZ</td>
	</tr></table>
	<table style='float:right'><tr>
	<td><img src=''></td>
	<td>".$_COOKIE['c']."</td>
	<td><a href='signout.php'>Sign Out</a></td><td>&nbsp;</td></tr>
	</table><br><hr>";
	print "<div style='float:left;width:75%;height:90%;background-color:white'><table><tr></tr></table><br>
			<table><tr><td>&nbsp;</td><td><form action='wel.php'>
			<br>
			<tr><td><input type='submit' name='create' value='Create'></td></tr>
			<br>
			<tr><td><input type='submit' name='play' value='Play'></td></tr>
			</table>
			</form>
			</div>
			<div style='float:left;background-color:yellow;height:90%;width:25%'>successful welcome screen</div>";
	setcookie("c",$_COOKIE['c'],time()+3600);		
	if (isset($_GET['create']))
	{
		header("location:create_i.php");
	}
	if (isset($_GET['play']))
	{
		header("location:play1.php");
	}
	
}
else
{
	header("location:login1.php");
}	

?>
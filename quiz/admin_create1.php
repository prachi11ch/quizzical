<?php
	if(isset($_COOKIE['c']))
	{
	print "<form action='admin_create1.php'>
		<input type='submit' value='create' name='create' />
		<input type='submit' value='verify' name='verify' /></form>";
	}	
	print "<div>";
	if(isset($_GET['verify']))
	{
		
		//include 'admin_create.php';
		include "a_verify.php";
	}
	else
	{
		include "admin_create.php";
	}
	print "</div>";
?>
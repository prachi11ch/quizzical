<?php
if(isset($_COOKIE['c']))
{
		setcookie("c",$_COOKIE['c'],time()+3600);
		$con=mysql_connect('127.0.0.1','root','') ;
		if(!$con)
			print "error";
		if(mysql_select_db('user'))
			print "";
		else
			die("cant connect 2 database");
			$y=$_COOKIE['c'];
		$x="select id from users_info where username='$y'";
		$y=mysql_query($x,$con) or die(mysql_error());
		//$result = mysql_query($check);
        if($y == 1 || $y==2 || $y==3 || $y==4)
        {
			//setcookie("c",$u,time()+3600);
            header("location:admin_create1.php");

         }
         else
			header("location:user_create1.php");
}
else
{
	header("location:wel.php");
}
?>
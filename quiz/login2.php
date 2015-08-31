<?php
$u=$_POST['u'];
$p=$_POST['p'];
$con=mysql_connect('127.0.0.1','root','') ;
if(!$con)
print "error";
if(mysql_select_db('user'))
{
	print "";
}
else
{
	die("cant connect 2 database");
}
$select="select * from users_info where username = '$u' && password = '$p'";
$check=mysql_query($select,$con) or die(mysql_error());
//$result = mysql_query($check);
        if(mysql_num_rows($check) == 1)
        {
			setcookie("c",$u,time()+3600);
            header("location:wel.php");

         }
         else
         {
			
			header("location:logininvalid.php");
             

        }
?>
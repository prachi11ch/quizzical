<?php
$u=$_POST['u'];
$p=$_POST['p'];
if($u==='login' && $p==='pwd')
	header("location:wel.php");
else
	print "invalid data\n";
?>
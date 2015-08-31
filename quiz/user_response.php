<?php
$st=$_POST['Stream'];
$sub=$_POST['Substreams'];
$q=$_POST['Question'];
$op1=$_POST['option1'];
$op2=$_POST['option2'];
$op3=$_POST['option3'];
$op4=$_POST['option4'];
$ans=$_POST['answer']; 
$con=mysql_connect('127.0.0.1','root','') ;
		if(!$con)
			print "error";
		if(mysql_select_db('user'))
			print "";
		else
			die("cant connect 2 database");
		$x="INSERT INTO temp_ques(stream, substream, question, 
		option1, option2, option3, option4, answer) VALUES ('$st','$sub','$q','$op1','$op2','$op3','$op4','$ans')";
		$y=mysql_query($x,$con) or die(mysql_error());	
?>		
<?php
if(isset($_COOKIE['c']))
{
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
//	$check = true;
	//for($x=1;$x!=10;$x++)
//	{
//		$check="select stream from temp_q limit 10";
	$c="select count(*) from temp_ques";
	$ct=mysql_query($c,$con);
	$count=mysql_fetch_object($ct);
//	echo $count;
	$p = 0;
	while($p<1)
	{
		$p=$p+1;
		$check = "select * from temp_ques";
		$q = mysql_query($check,$con);
		while($row=mysql_fetch_object($q))
		{
			echo $row->stream."->";
			echo $row->substream."<br>";
			echo $row->question."<br>";
			echo $row->option1."<br>";
			echo $row->option2."<br>";
			echo $row->option3."<br>";
			echo $row->option4."<br>";
			echo $row->answer."<br>";
			
			print" <tr><select name='Substreams'>
			<option value='coa'>Computer Organization and Architecture</option>
			<option value='cp'>Computer Programming</option>
			<option value='dsa'>Data Structures and Algorithms</option>
			<option value='itws'>IT Workshop</option>
			</select>
			</tr>";
			print "<input type='submit' name='accept' value='accept'>
			 <input type='submit' name='discard' value='discard'>";
			if (isset($_GET['accept']))
			{
				$ch= "insert into ques values($row->stream,$row->substream,'$_GET[Substreams]',$row->question,$row->option1,
				$row->option2,$row->option3,$row->option4,$row->answer)";
				$ct=mysql_query($ch,$con);
				
				header("location:create_i.php");
			}
			//if (isset($_GET['discard'])
		}		
	}
			
	
	print "	<br>
	<div style='width:60%;float:left'>option1<br>option2</br>option3</br>option4<br>correctanswer<br></div>
	<div style='float:left;width:40%'><form><select name='sublevel'>
	<option value='easy'>Computer Organization and Architecture</option>
	<option value='medium'>Computer Programming</option>
	<option value='diffcult'>Data Structures and Algorithms</option>
	<br>
	</select></div>";

} 
else
	header("location:login1.php");
?>
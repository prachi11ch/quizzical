<html>
	<head>
		<title>
        Bus Booking
		</title>

<style>

#cssmenu {
  border: none;
  border: 0px;
  margin: 0px;
  padding: 0px;
  font: 67.5% 'Lucida Sans Unicode', 'Bitstream Vera Sans', 'Trebuchet Unicode MS', 'Lucida Grande', Verdana, Helvetica, sans-serif;
  font-size: 14px;
  font-weight: bold;
  width: auto;
}
#cssmenu ul {
  background: #333333;
  height: 35px;
  list-style: none;
  margin: 0;
  padding: 0;
}
#cssmenu li {
  float: left;
  padding: 0px;
}
#cssmenu li a {
  background: #333333 url('pic/seperator.png') bottom right no-repeat;
  display: block;
  font-weight: normal;
  line-height: 35px;
  margin: 0px;
  padding: 0px 25px;
  text-align: center;
  text-decoration: none;
}
#cssmenu > ul > li > a {
  color: #ede8ed;
}
#cssmenu ul ul a {
  color: #cccccc;
}
#cssmenu li > a:hover,
#cssmenu ul li:hover > a {
  background: #a3a7a8 url('pic/hover.png') bottom center no-repeat;
  color: #000000;
  text-decoration: none;
}
#cssmenu li ul {
  background: #333333;
  display: none;
  height: auto;
  padding: 0px;
  margin: 0px;
  border: 0px;
  position: absolute;
  width: 225px;
  z-index: 200;
  /*top:1em;
	/*left:0;*/

}
#cssmenu li:hover ul {
  display: block;
}
#cssmenu li li {
  background: url('pic/sub_sep.png') bottom left no-repeat;
  display: block;
  float: none;
  margin: 0px;
  padding: 0px;
  width: 225px;
}
#cssmenu li:hover li a {
  background: none;
}
#cssmenu li ul a {
  display: block;
  height: 35px;
  font-size: 12px;
  font-style: normal;
  margin: 0px;
  padding: 0px 10px 0px 15px;
  text-align: left;
}
#cssmenu li ul a:hover,
#cssmenu li ul li:hover > a {
  background: #a3a7a8 url('pic/hover_sub.png') center left no-repeat;
  border: 0px;
  color: #0a0a0a;
  text-decoration: none;
}
#cssmenu p {
  clear: left;
}


</style>		
	
</head>

                                                  <!--Body begins-->

<body background = "busBackDrop.jpg">

<br><br>

<div id='cssmenu'>
<ul>
	<li class='active'>
		<a href='mainBus.php'><span>Home</span></a>
	</li>

   <li><a href='aboutus.php'><span>About Us</span></a>
   </li>   
    <li>
	   <a href='agentlog.php'>Agent Login<span></span></a>
    </li>
   
    <li>
  	<a href='cancel.php'><span>Cancellation</span></a>
    </li>

    <li>
	   <a href='signup.php'><span>Sign Up</span></a>
    </li>
   
    <li>
	   <a href='feedback_form.php'><span>Feedback</span></a>
    </li>
</ul>
</div>
<div>

<br><br><br><br><br><br>
<br>
<br>
<br>
<table width="300" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCF">
<tr></tr>
<tr>
<form name="form1" method="post" action="alogin2.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td colspan="3"><strong>Agent Login </strong></td>
</tr>
<tr>
<td width="78">Agent Username</td>
<td width="6">:</td>
<td width="294"><input name="u" type="text" id="myusername"></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input name="p" type="password" id="mypassword"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Login"></td>
<td>
</td>
</tr>
</table>
<table width="300" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
</table>
</td>
</form>
</tr>
</table>
</div>
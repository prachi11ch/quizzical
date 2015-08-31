<!DOCTYPE HTML> 
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body> 

<?php
// define variables and set to empty values
$firstnameErr = $emailErr = $genderErr = $lastnameErr = $instituteErr = $usernameErr = $passwordErr = $photoErr = $phoneErr = $confirmpasswordErr = " ";
"";
$firstname = $email = $gender = $institute = $lastname = "";
$username = $password = $phone = $file = $confirmpassword= $photo= " ";


$x=1;
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	if (empty($_POST["firstname"]))
     {
		$firstnameErr = "firstname is required";
		$x=0;
	 }
    else
    {
		$firstname = test_input($_POST["firstname"]);
		// check if firstname only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$firstname))
       {
			$firstnameErr = "Only letters and white space allowed";
			$x=0;
       }
    }
	
    
	$lastname = test_input($_POST["lastname"]);
	// check if firstname only contains letters and whitespace
	if (!preg_match("/^[a-zA-Z ]*$/",$lastname))
		{
			$lastnameErr = "Only letters and white space allowed";
			$x=0;
		}
	
   
    if (empty($_POST["email"]))
    {
		$emailErr = "Email is required";
		$x=0;
	}
   else
    {
		$email = test_input($_POST["email"]);
		// check if e-mail address syntax is valid
		if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))
		{
			$emailErr = "Invalid email format"; 
			$x=0;
		}
    }
  
	if (empty($_POST["institute"]))
    {
		$institute = "";
		$x=0;
	}
	else
    {
		$institute = test_input($_POST["institute"]);
		// check if firstname only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$institute))
		{
			$x=0;
			$instituteErr = "Only letters and white space allowed";
		}
	}


	
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
	
	if (empty($_POST["username"]))
    {
		$usernameErr = "username is required";
		$x=0;
	}
	else
    {
		$username= test_input($_POST["username"]);
		// check if firstname only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z 0-9]*$/",$username))
		{
			$x=0;
			$usernameErr = "Only letters, numbers and white space allowed";
		}
		$select="select * from users_info where username = '$username'";
		$check=mysql_query($select,$con) or die(mysql_error());
		//$result = mysql_query($check);
        if(mysql_num_rows($check) == 1)
        {
			$usernameErr =" username already exists ";
			$x=0;
        }
	}

   if (empty($_POST["gender"]))
	{
		$genderErr = "Gender is required";
		$x=0;
	}
   else
    {
		$gender = test_input($_POST["gender"]);
	}
	
	if (empty($_POST["password"]))
     {
		$passwordErr = "password is required";
		$x=0;
	 }
    else
    {
		$password = test_input($_POST["password"]);
		// check if password only contains letters and whitespace
		if (!preg_match("/^\w{6,}$/",$password))
       {
			$passwordErr = "minimum 10 letters, numbers or underscore";
			$x=0;
       }
    }
	
	if (empty($_POST["confirmpassword"]))
     {
		$confirmpasswordErr = "Confirm Password is required";
		$x=0;
	 }
	else 
	{
		if($password === $confirmpassword)
		{
			$confirmpasswordErr = "Password did not match";
			$x=0;
		}
	}
	
	$phone = test_input($_POST["phone"]);
	// check if firstname only contains letters and whitespace
	if (!preg_match("/^\d{10}$/",$phone))
       {
			$phoneErr = "Invalid phone number";
			$x=0;
       }
    
	$allowedExts = array("gif", "jpeg", "jpg", "png");
	$temp = explode(".", $_FILES["file"]["name"]);
	$extension = end($temp);
	if ((($_FILES["file"]["type"] == "image/gif")
	|| ($_FILES["file"]["type"] == "image/jpeg")
	|| ($_FILES["file"]["type"] == "image/jpg")
	|| ($_FILES["file"]["type"] == "image/pjpeg")
	|| ($_FILES["file"]["type"] == "image/x-png")
	|| ($_FILES["file"]["type"] == "image/png"))
	&& ($_FILES["file"]["size"] < 80000)
	&& in_array($extension, $allowedExts))
	{
		if ($_FILES["file"]["error"] > 0)
		{
			echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
		}
		else
		{
			echo "Upload: " . $_FILES["file"]["name"] . "<br>";
			echo "Type: " . $_FILES["file"]["type"] . "<br>";
			echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
			echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
			$photo=$_FILES['file']['name'];
			
			if (file_exists("upload/" . $_FILES["file"]["name"]))
			{
				echo $_FILES["file"]["name"] . " already exists. ";
			}
			else
			{
				move_uploaded_file($_FILES["file"]["tmp_name"],
				"upload/" . $_FILES["file"]["name"]);
				echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
			}
		}
	}
	else
	{
		if (!empty($_POST["file"]))
			echo "Invalid file";
		
	}
	
	
}	

function test_input($data)
{
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
}
if($x==1 && isset($_POST['submit']))
{
	$con=mysql_connect('127.0.0.1','root','') ;
	if(!$con)
	print "error";
	if(mysql_select_db('user'))
	{
	print "uh";
	}
	else
	{
		die("cant connect 2 database");
	}
	
	$select="INSERT INTO `users_info`( `username`, `password`, `FIRST NAME`, `LAST NAME`, `GENDER`, `PHOTO`, `INSTITUTION`, `MAIL ID`, `PHONE NUMBER`) 
			VALUES ('$username','$password','$firstname','$lastname','$gender','$photo','$institute','$email','$phone') ";
			print "Dss";
	$check=mysql_query($select,$con) ;
	if($check)
	{
		header("location:test.php");
	}
	else
		die(mysql_error());
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data"> 
   Firstname: <input type="text" name="firstname" value="<?php echo $firstname;?>">
   <span class="error">* <?php echo $firstnameErr;?></span>
   <br><br>
   Lastname: <input type="text" name="lastname" value="<?php echo $lastname;?>">
   <span class="error"><?php echo $lastnameErr;?></span>
   <br><br>
   E-mail: <input type="text" name="email" value="<?php echo $email;?>" >
   <span class="error">* <?php echo $emailErr;?></span>
   <br><br>
   Username: <input type="text" name="username" value="<?php echo $username;?>">
   <span class="error">* <?php echo $usernameErr;?></span>
   <br><br>
   Password: <input type="password" name="password" ">
   <span class="error">* <?php echo $passwordErr;?></span>
   <br><br>
   Confirm Password: <input type="password" name="confirmpassword" >
   <span class="error">* <?php echo $confirmpasswordErr;?></span>
   <br><br>
   Institute: <input type="text" name="institute" value="<?php echo $institute;?>">
   <span class="error"> <?php echo $instituteErr;?></span>
   <br><br>
   Gender:
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?>  value="Female">Female
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?>  value="Male">Male
   <span class="error">* <?php echo $genderErr;?></span>
   <br><br>
   Phone number: <input type="text" name="phone" value="<?php echo $phone;?>">
   <span class="error"> <?php echo $phoneErr;?></span>
   <br><br>	
   
   PHOTO: <input type="file" name="file" id="file"><br><br>
   
<input type="submit" name="submit" value="Submit"> 
   
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $firstname;
echo "<br>";
echo $email;
echo "<br>";
echo $lastname;
echo "<br>";
echo $institute;
echo "<br>";
echo $gender;
?>

</body>
</html>	`
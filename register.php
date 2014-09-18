<?php include "base.php"; ?>
<?php session_destroy(); ?>
<html xmlns="http://www.w3.org/1999/xhtml">  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
<head>
<title>Register Page</title>
<link rel="stylesheet" href="Styling_and_Images/L_Rstyle.css" type="text/css" />
<link rel="stylesheet" href="Styling_and_Images/ButtonDesigns.css" type="text/css" />
</head>  
<body id="Back"> 
<img src="Styling_and_Images/MainLogoWhite.png" alt="Logo" width="300" height="250">
<center>
<div id="main">
<?php
if(!empty($_POST['username']) && !empty($_POST['password']))
{
	$username = mysql_real_escape_string($_POST['username']);
    $password = md5(mysql_real_escape_string($_POST['password']));
    $email = mysql_real_escape_string($_POST['email']);
    
	 $checkusername = mysql_query("SELECT * FROM users WHERE Username = '".$username."'");
     
     if(mysql_num_rows($checkusername) == 1)
     {
     	echo "<h1>Error</h1>";
        echo "<p>Sorry, that username is taken. Please go back and try again.</p>";
     }
     else
     {
     	$registerquery = mysql_query("INSERT INTO users (Username, Password, EmailAddress) VALUES('".$username."', '".$password."', '".$email."')");
        if($registerquery)
        {
        	echo "<h1>Success</h1>";
        	echo "<p>Your account was successfully created. Please <a href=\"index.php\">click here to login</a>.</p>";
        }
        else
        {
     		echo "<h1>Error</h1>";
        	echo "<p>Sorry, your registration failed. Please go back and try again.</p>";    
        }    	
     }
}
else
{
	?>
    
   <h2><i>Register</i></h2>
   <hr>
   <p><i><b>Please enter your details below to register. And join our growing community !</b></i></p>
    
	<form method="post" action="register.php" name="registerform" id="registerform">
	
		<label for="username"><b><i>New Username</i></b></label>
		<br />
		<input type="text" name="username" id="username" class="input"/>
		<br />
		
		<label for="password"><b><i>New Password</i></b></label>
		<br />
		<input type="password" name="password" id="password" class="input"/>
		<br />
		
        <label for="email"><b><i>Your Email</i></b></label>
		<br />
		<input type="text" name="email" id="email" class="input"/>
		<br />
		<br />
		<input type="submit" name="register" id="register" value="Register Your Account" class="LR_button"/>
	
	</form>
    
   <?php
}
?>
</div>
</body>
</html>
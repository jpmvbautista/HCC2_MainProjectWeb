<?php include "base.php"; ?>
<html xmlns="http://www.w3.org/1999/xhtml">  
<head>  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<head> 
<title>Login Page</title>
<link rel="stylesheet" href="Styling_and_Images/L_Rstyle.css" type="text/css" />
<link rel="stylesheet" href="Styling_and_Images/ButtonDesigns.css" type="text/css" />
</head>  
<body id="Back">  
<img src="Styling_and_Images/MainLogoWhite.png" alt="Logo" width="300" height="250">
<center>
<div id="main">
<?php
if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username']))
{
	 ?>
    
    <h1><i>Member Area</i></h1>
  	<p><i>Thanks for logging in, <b><?=$_SESSION['Username']?></b>!</i></p>
	<p><i>Feel Free to drop us some comments Enjoy Pixel Library</i></p>
    

        <a href="PixelHomePage.php" class="LR_button">Pixel Homepage</a><br><br>
		<a href="logout.php" class="LR_button">Logout Of Pixel</a>
		<br />
		

		
    <?php


}

elseif(!empty($_POST['username']) && !empty($_POST['password']))
{
	 $username = mysql_real_escape_string($_POST['username']);
    $password = md5(mysql_real_escape_string($_POST['password']));
    
	 $checklogin = mysql_query("SELECT * FROM users WHERE Username = '".$username."' AND Password = '".$password."'");
    
    if(mysql_num_rows($checklogin) == 1)
    {
    	 $row = mysql_fetch_array($checklogin);
        $email = $row['EmailAddress'];
        
        $_SESSION['Username'] = $username;
        $_SESSION['EmailAddress'] = $email;
        $_SESSION['LoggedIn'] = 1;
        
    	 echo "<h1>Success</h1>";
        echo "<p>Refersh Your Page To Enter Tthe Members Area</p>";
        echo "<meta http-equiv='refresh' content='=2;index.php' />";
    }
    else
    {
    	 echo "<h1>Error</h1>";
        echo "<p>Sorry, your account could not be found. Please <a href=\"index.php\">click here to try again</a>.</p>";
    }
}
else
{
	?>
   <h2><i>Members Club</i></h2>
   <hr>
   <p><b><i>Thanks for visiting! Please either login below, or <a href="register.php">click here to register</a>.</i></b></p> 
   
   <p><b><i><a href="PixelHomePage.php">Homepage</a></i></b></p> 
   
   <div id="LoginStyle">
	<form method="post" action="index.php" name="loginform" id="loginform">
	
		<label for="username"><b><i>Username</i></b></label>
		<br />
		<input type="text" name="username" id="username" class="input"/><br />
		
		<label for="password"><b><i>Password</i></b></label>
		<br />
		<input type="password" name="password" id="password" class="input"/><br />
		<br />
		<input type="submit" name="login" id="login" value="Login To Pixel Library" class="LR_button"/>
	
	</form>
    </div>
   <?php
}
?>
</div>
</center>
</body>
</html>
<link rel="stylesheet" type="text/css" href="Styling_and_Images/PixelMainStyle.css">

<?php
if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username'])){
	 ?>
  	<p>Thanks for logging in, <b><?=$_SESSION['Username']?></b>!</p>	
    <?php
}else{
	echo "<p>You must be new here. Please <a href=\"index.php\">click here to try again</a>.</p>";
}

?>

<div id="notification">
	<?php include 'userNotification.php'; ?>
</div>

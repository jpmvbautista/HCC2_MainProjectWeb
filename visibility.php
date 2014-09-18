<?php
if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username'])){
	header('location: commentForm.php');
}else{
	echo "You must be registered to comment!";
}
?>






<?php
		if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username'])){ 
			include 'demo.php';
		}else{
			echo "Hey, we just saw you're not a member or not logged in, better do that before you comment.
						<br />
						<br />
						<a href=\"index.php\"class=\"LR_button\">Login or Make an Account Lazy</a>";
				}
	?>
<?php

// Error reporting:
error_reporting(E_ALL^E_NOTICE);

include "connect.php";
include "comment.class.php";



/*
/	Select all the comments and populate the $comments array with objects
*/

$comments = array();
$result = mysql_query("SELECT * FROM comments ORDER BY id ASC");

while($row = mysql_fetch_assoc($result))
{
	$comments[] = new Comment($row);
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pixel Library's comments section</title>

<link rel="stylesheet" type="text/css" href="Styling_and_Images/Commentstyles.css" />

</head>

<body>
<div id="Main">

<div id="addCommentContainer">
	<p>Add a Comment</p><br>
	<form id="addCommentForm" method="post" action="">
    	<div>
        	<label for="name">Movie/Game/TV Title - Good, Bad, Terribad, Wouldwatch/10?</label>
        	<input type="text" name="name" id="name" />
            
            <label for="email">Email - For us to make sure your not spamming</label>
            <input type="text" name="email" id="email" />
            
            <label for="body">Comment - C'mon, let us know what you think ;)</label>
            <textarea name="body" id="body" cols="20" rows="5"></textarea>
            
            <input type="submit" id="submit" value="Submit" />
        </div>
    </form>
</div>

<?php

/*
/	Output the comments one by one:
*/

foreach($comments as $c){
	echo $c->markup();
}

?>


</div>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="Javascript _Imports/Commentsscript.js"></script>

</body>
</html>

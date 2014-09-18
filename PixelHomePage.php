<?php session_start();?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Pixel Library</title>
<!--Javascript Library Import-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<!--/-->
<!--Javascript Tab Import-->
<script type="text/javascript" src="Javascript _Imports/TabSystemJS.js"></script>
<!--/-->
<!--Javascript Top Five Import-->
<script type="text/javascript" src="Javascript _Imports/TopFiveListJS.js"></script>
<script type="text/javascript" src="Javascript _Imports/ToggleTop5JS.js"></script>
<!--/-->
<!--Search Imports-->
<script type="text/javascript" src="Javascript _Imports/MovieSearchJS.js"></script>
<script type="text/javascript" src="Javascript _Imports/TVSearchJS.js"></script>
<script type="text/javascript" src="Javascript _Imports/GameSearchJS.js"></script>
<script type="text/javascript" src="Javascript _Imports/EverythingSearchJS.js"></script>
<!--/-->
<!--Main StyleSheet Import-->
<link rel="stylesheet" type="text/css" href="Styling_and_Images/ButtonDesigns.css">
<link rel="stylesheet" type="text/css" href="Styling_and_Images/PixelMainStyle.css">
<link rel="stylesheet" type="text/css" href="Styling_and_Images/SearchStyles.css">
<!--/-->
<!--Hide Imports-->
<script type="text/javascript" src="Javascript _Imports/HideJS.js"></script>
<!--/-->
<!--Show Imports-->
<script type="text/javascript" src="Javascript _Imports/ShowJS.js"></script>
<!--/-->
<script></script>
</head>
<!--Main Body and tab system-->
<body onload="init()" id="HomeBackground">
<center>

<img src="Styling_and_Images/MainLogoWhite.png" alt="Logo" width="300" height="250">
<br />
<br />
<!--Login Link(Needs Gio's code-->
<div id="log-in"> <!--log-->
		<a href="index.php" class="LR_button">Log-in/Register</a>
</div>


<br />
<!--Tab System-->
<ul id="tabs">
      <li><a href="#one" class="selected">Search For Everything</a></li>
      <li><a href="#two">Search For Movies</a></li>
      <li><a href="#three">Search For Tv-shows</a></li>
	  <li><a href="#four">Search For Games</a></li>
</ul>
<!--End of Tab-->

<!--Start of everything Tab Information and Code-->

    <div class="tabContent" id="one">
      <h3><i>Why Not Search Everything</i></h3>
            <div id="ESearchDiv">
               <input id="ESearch" type="text" value="" />
			   <br />
			   <h4><i>"Are you to Lazy the default preference order is Movie,Tv and Games"</i></h4>

			   <?php include "userPreference.php"; ?>
<br />
            <input id="ESearchButton" class="Sbutton" type="button" value="Search Now" onclick="ShowEverythingResults();"/>
            </div>
    </div>

<!--End of Everything Search Tab information and code-->

<!--Start of Movies Tab Information and Code-->

    <div class="tabContent hide" id="two">
      <h3><i>Search for a Movie</i></h3>
            <div id="MSearchDiv">
               <input id="MSearch" type="text" value="" />
			   <br />
			   <br />
               <input id="MSearchButton" class="Sbutton" type="button" value="Search Now" onclick="ShowMovieResults();"/>
			   <br />
			   <h4><i>"Movies there running out of idea's just look at Noah, Spoiler It Rains"</i></h4>
            </div>
    </div> 
	
<!--End of Movies Tab information and code-->

<!--Start of tv Tab Information and Code-->

    <div class="tabContent hide" id="three">
      <h3><i>Search for a Tv-show</i></h3>
            <div id="TSearchDiv">
               <input id="TSearch" type="text" value="" />
			   <br />
			   <br />
               <input id="TSearchButton" class="Sbutton" type="button" value="Search Now" onclick="ShowTVResults();"/>
			   <br />
			   <h4><i>"Lots of great tv shows like Game of Thrones, every episode we hope Trion doesnt die"</i></h4>
            </div>
    </div>
	
<!--End of tv Tab information and code-->

<!--Start of games Tab Information and Code-->

	<div class="tabContent hide" id="four">
      <h3><i>Search for a Game</i></h3>
            <div id="GSearchDiv">
               <input id="GSearch" type="text" value="" />
			   <br />
			   <br />
               <input id="GSearchButton" class="Sbutton" type="button" value="Search Now" onclick="ShowGameResults();"/>
			   	<br />
			   <h4><i>"Games their blamed for everything wrong with youths, yup EVERYTHING HA!"</i></h4>
            </div>
    </div>
	
<!--End of games Tab Information and Code-->

<!--Movie Results-->
	<div id="infoMovies">
	<div id="MovieTitle">
	</div>
	<div id="MoviePoster">
	</div>
    <div id="MovieContent">
	</div>
	<div id="MovieReview">
	</div>
	<div id="MovieYotubeTrailer">
	</div>
    </div>
	
<!--Search Divs for movies-->
	<div id="MovieTitleBar">
	<h3>Movie Results</h3>
	</div>
	<br />
	<div id="MovieResults">
	</div>
<!--End of Movies Results-->

<!--TV Show Results-->
	<div id="infoTV">
	<div id="TVTitle">
	</div>
	<div id="TVPoster">
	</div>
    <div id="TVContent">
	</div>
	<div id="TVReview">
	</div>
	<div id="TVYotubeTrailer">
	</div>
    </div>
<!--Search Divs for tv shows-->
	<div id="TVTitleBar">
	<h3>TV Show Results</h3>
	</div>
	<br />
	<div id="TVResults">
	</div>
<!--End of Tv Show Results-->

<!--Game Results-->
	<div id="infoGame">
	<div id="GameTitle">
	</div>
	<div id="GamePoster">
	</div>
    <div id="GameContent">
	</div>
	<div id="GameReview">
	</div>
	<div id="GameYotubeTrailer">
	</div>
	<div id="GameTwitch">
	<h3>Check Out Some Of The Top Streams</h3>
	<hr>
	<iframe id="TwitchPlayer" name="frame1" type="text/html" width="600" height="370" src="" frameborder="1"/></iframe>
	<div id="TitleWindow">
	<h4>Twitch Streamers</h4>
	</div>
	<div id="StreamList">
    </div>
	</div>
    </div>
<!--Search Divs for Game-->
	<div id="GameTitleBar">
	<h3>Game Results</h3>
	</div>
	<br />
	<div id="GameResults">
	</div>
<!--End of Game-->

<!--Everything Div Start-->
<div id="container">
<div id="titleP1">
<h3>Preference One</h3>
</div>
<div id="titleP2">
<h3>Preference Two</h3>
</div>
<div id="titleP3">
<h3>Preference Three</h3>
</div>
<div id="pref1"></div>
<div id="pref2"></div>
<div id="pref3"></div>
</div>
<!--End-->

<!--Comments section-->
<div id="Comments">
	<h3>Drop us your own comment</h3>
	<hr>
    <div id="CommentArea">
	<?php include 'membersOnly.php' ?>
	</div>
	</div>
<!--End Commetns-->
<br />
<!--Box office and Popular tv shows results div-->
<div id="TopListWrapperMovie">
<h4>Box Office Showings</h4>
<div id="TopListMovie">

</div>
</div>
<div id="TopListWrapperTV">
<h4>Popular Tv Shows</h4>
<div id="TopListTV">
</div>
</div>
<!--/-->



</center>
</body>
</html>
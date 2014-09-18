<?php
if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username'])){
	echo	'<select id="pref1select"class="preferenceSelect">
<option value="M">Preference One</option>
    <option value="M">Movie</option>
    <option value="T">Tv</option>
    <option value="G">Games</option>
</select>

	<select id="pref2select"class="preferenceSelect">
<option value="T">Preference Two</option>
    <option value="M">Movie</option>
    <option value="T">Tv</option>
    <option value="G">Games</option>
</select>

	<select id="pref3select"class="preferenceSelect">
<option value="G">Preference Three</option>
    <option value="M">Movie</option>
    <option value="T">Tv</option>
    <option value="G">Games</option>
</select>';
}else{
	echo "You must be registered to use search preferences!<br>";
}
?>
<?php
mysql_connect("localhost", "username", "password") or die(mysql_error());
//echo "Connected to MySQL<br />";
mysql_select_db("database") or die(mysql_error());
//echo "Connected to Database<br /><br />";

// Make a MySQL Connection
$pid = '';
if ($_GET) {
	if (@$_GET['pid']) { $pid = $_GET['pid']; }
}
//a-h
if ($pid == 1) {
	$query = "SELECT recipe_title, recipe_id, permalink, recipe_image FROM wp_amd_zlrecipe_recipes where upper(substring(recipe_title,1,1)) >= 'A' and upper(substring(recipe_title,1,1)) <= 'H' order by recipe_title"; 	 
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_array($result)){
		//echo "<img src=" . $row['recipe_image'] . ">";
		echo "<a href=" . $row['permalink'] . ">" . $row['recipe_title'] . "</a>";
		echo "<br />";
	}
}
//i-p
if ($pid == 2) {
	$query = "SELECT recipe_title, recipe_id, permalink, recipe_image FROM wp_amd_zlrecipe_recipes where upper(substring(recipe_title,1,1)) >= 'I' and upper(substring(recipe_title,1,1)) <= 'P' order by recipe_title"; 	 
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_array($result)){
		//echo "<img src=" . $row['recipe_image'] . ">";
		echo "<a href=" . $row['permalink'] . ">" . $row['recipe_title'] . "</a>";
		echo "<br />";
	}
}
//q-z
if ($pid == 3) {
	$query = "SELECT recipe_title, recipe_id, permalink, recipe_image FROM wp_amd_zlrecipe_recipes where upper(substring(recipe_title,1,1)) >= 'Q' and upper(substring(recipe_title,1,1)) <= 'Z' order by recipe_title"; 	 
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_array($result)){
		//echo "<img src=" . $row['recipe_image'] . ">";
		echo "<a href=" . $row['permalink'] . ">" . $row['recipe_title'] . "</a>";
		echo "<br />";
	}
}

?>
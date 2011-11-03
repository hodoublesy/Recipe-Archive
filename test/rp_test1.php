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
	$query = "SELECT recipe_title, recipe_id, permalink FROM wp_amd_zlrecipe_recipes where upper(recipe_title) > 'A' and upper(recipe_title) < 'H'"; 	 
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_array($result)){
		echo "<a href=" . $row['permalink'] . ">" . $row['recipe_title'] . "</a>";
		echo "<br />";
	}
}
//i-p
if ($pid == 2) {
	$query = "SELECT recipe_title, recipe_id, permalink FROM wp_amd_zlrecipe_recipes where upper(recipe_title) > 'I' and upper(recipe_title) < 'P'"; 	 
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_array($result)){
		echo "<a href=" . $row['permalink'] . ">" . $row['recipe_title'] . "</a>";
		echo "<br />";
	}
}
//q-z
if ($pid == 3) {
	$query = "SELECT recipe_title, recipe_id, permalink FROM wp_amd_zlrecipe_recipes where upper(recipe_title) > 'Q' and upper(recipe_title) < 'Z'"; 	 
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_array($result)){
		echo "<a href=" . $row['permalink'] . ">" . $row['recipe_title'] . "</a>";
		echo "<br />";
	}
}

?>
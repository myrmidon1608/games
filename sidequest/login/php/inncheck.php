<?php

	session_start();
	
	include ('../game/functions.php');
	
	sidequest_data();
	
	$uid = $_SESSION['user_id'];
	
	$q = "SELECT health FROM user_stats WHERE user_id = " .$uid. " LIMIT 1";
	$gethp = mysql_fetch_assoc(mysql_query($q));
	$hp = $gethp['health'];
	
	$update = mysql_query("UPDATE user_stats SET damage = " .$hp);
	
?>
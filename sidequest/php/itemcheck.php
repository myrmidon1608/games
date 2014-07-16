<?php
	
	include ('../game/functions.php');
	
	sidequest_data();
	
	$q = mysql_query("SELECT * FROM items WHERE item_id = 1 LIMIT 1");
	$potion = mysql_fetch_assoc($q);
	
	$wid = rand(2,5);
	$q = mysql_query("SELECT * FROM items WHERE item_id = " .$wid. " LIMIT 1");
	$weapon = mysql_fetch_assoc($q);
	
	$aid = rand(6,9);
	$q = mysql_query("SELECT * FROM items WHERE item_id = " .$aid. " LIMIT 1");
	$armor = mysql_fetch_assoc($q);
	
	$mid = rand(10,13);
	$q = mysql_query("SELECT * FROM items WHERE item_id = " .$mid. " LIMIT 1");
	$access = mysql_fetch_assoc($q);
		
	$json = array(
		"potion" => $potion['name'],
		"weapon" => $weapon['name'],
		"armor" => $armor['name'],
		"access" => $access['name'],
		"pid" => $potion['item_id'],
		"wid" => $weapon['item_id'],
		"aid" => $armor['item_id'],
		"mid" => $access['item_id']
	);
	$output = json_encode($json);
	echo $output;
	
?>
<?php

	session_start();
	
	include ('../game/functions.php');
	
	sidequest_data();
	
	$uid = $_SESSION['user_id'];
	$itemid = $_GET['id'];
	
	$q = mysql_query("SELECT * FROM items WHERE item_id = " .$itemid. " LIMIT 1");
	$item = mysql_fetch_assoc($q);

	$q = mysql_query("SELECT * FROM user_items WHERE item_id = " .$itemid. " AND user_id = " .$uid. " LIMIT 1");
	$owned = mysql_num_rows($q);
	
	if($owned !== 0) {}
	else {mysql_query("INSERT INTO user_items (ui_id, user_id, item_id, owned) VALUES (null, " .$uid. ", " .$item['item_id']. ", 1)");}

?>
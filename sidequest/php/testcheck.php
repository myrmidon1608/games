<?php 
	session_start();
						
	include ('../game/functions.php');
	
	sidequest_data();

	$uid = $_SESSION['user_id'];
						
	$q = "SELECT item_id FROM user_items WHERE user_id = " .$uid. " ORDER BY item_id ASC";
	$ui = mysql_query($q);							
						
	while($inv = mysql_fetch_array($ui, MYSQL_ASSOC)) {
		$q = mysql_query("SELECT name FROM items WHERE item_id = " .$inv['item_id']);
		$item = mysql_fetch_array($q);
		echo "<li>{$item['name']}</li>";
	}?>
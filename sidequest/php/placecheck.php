<?php

	session_start();
	
	include ('../game/functions.php');
	
	sidequest_data();
	
	$uid = $_SESSION['user_id'];
	$xpos = $_REQUEST['x'];
	$ypos = $_REQUEST['y'];
	
	$q = mysql_query("SELECT * FROM user_tile WHERE user_id = " .$uid. " LIMIT 1");
	$loc = mysql_num_rows($q);
	$tile = mysql_fetch_assoc($q);
	
	if($loc !== 0) {
		$t = mysql_query("UPDATE user_tile SET xpos = " .$xpos. ", ypos = " .$ypos. " WHERE user_id = " .$uid);
		$q = mysql_query("SELECT * FROM user_tile WHERE user_id = " .$uid. " LIMIT 1");
		$area = mysql_fetch_assoc($q);
		
		$json = array(
			"x" => $area['xpos'],
			"y" => $area['ypos']
		);
		$output = json_encode($json);
		echo $output;
	}
	
	else {
		$t = mysql_query("INSERT INTO user_tile (pl_id, user_id, xpos, ypos) VALUES (null, " .$uid, $beginx, $beginy. ")");
	}
	
?>
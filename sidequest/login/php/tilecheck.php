<?php

	session_start();

	include ('../game/functions.php');
	
	sidequest_data();
	
	$uid = $_SESSION['user_id'];
	$x = $_REQUEST['x'];
	$y = $_REQUEST['y'];
	
	$q = "SELECT * FROM tiles2 WHERE xpos = ".($x - 1)." AND ypos = $y LIMIT 1";
	$lefttile = mysql_fetch_assoc(mysql_query($q));
	
	$q = "SELECT * FROM tiles2 WHERE xpos = ".($x + 1)." AND ypos = $y LIMIT 1";
	$righttile = mysql_fetch_assoc(mysql_query($q));
	
	$q = "SELECT * FROM tiles2 WHERE xpos = $x AND ypos = ".($y - 1)." LIMIT 1";
	$toptile = mysql_fetch_assoc(mysql_query($q));
	
	$q = "SELECT * FROM tiles2 WHERE xpos = $x AND ypos = ".($y + 1)." LIMIT 1";
	$bottomtile = mysql_fetch_assoc(mysql_query($q));

	$q = "SELECT task_id FROM user_tasks WHERE user_id = " .$uid. " AND taskactive = 1 LIMIT 1";
	$reftask = mysql_fetch_assoc(mysql_query($q));

	$json = array(
		"charx" => $x,
		"chary" => $y,
		"ow_lefttile" => $lefttile['world'], "ow_righttile" => $righttile['world'],
		"ow_toptile" => $toptile['world'], "ow_bottomtile" => $bottomtile['world']
		/*"task_lefttile" => $lefttile['task_check'], "task_righttile" => $righttile['task_check'],
		"task_toptile" => $toptile['task_check'], "task_bottomtile" => $bottomtile['task_check'],
		"ow_lefttile" => $lefttile['ow_bound'], "ow_righttile" => $righttile['ow_bound'],
		"ow_toptile" => $toptile['ow_bound'], "ow_bottomtile" => $bottomtile['ow_bound'],
		"shrine_lefttile" => $lefttile['shrine_bound'], "shrine_righttile" => $righttile['shrine_bound'],
		"shrine_toptile" => $toptile['shrine_bound'], "shrine_bottomtile" => $bottomtile['shrine_bound'],
		"mine_lefttile" => $lefttile['mine_bound'], "mine_righttile" => $righttile['mine_bound'],
		"mine_toptile" => $toptile['mine_bound'], "mine_bottomtile" => $bottomtile['mine_bound'],
		"tow_lefttile" => $lefttile['tower_bound'], "tow_righttile" => $righttile['tower_bound'],
		"tow_toptile" => $toptile['tower_bound'], "tow_bottomtile" => $bottomtile['tower_bound'],
		"bless_lefttile" => $lefttile['bless_bound'], "bless_righttile" => $righttile['bless_bound'],
		"bless_toptile" => $toptile['bless_bound'], "bless_bottomtile" => $bottomtile['bless_bound'],
		"id" => $reftask['task_id']*/
	);

	$output = json_encode($json);
	echo $output;
	
?>
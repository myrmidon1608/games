<?php

	session_start();
	
	include ('../game/functions.php');
	
	sidequest_data();
	
	$uid = $_SESSION['user_id'];
	$gain = $_GET['exp'];
	
	$q = "SELECT * FROM user_stats WHERE user_id = " .$uid. " LIMIT 1";
	$user_stats = mysql_fetch_assoc(mysql_query($q));
	$xp = $user_stats['experience'] + $gain;
	$lvl = $user_stats['level'];
	
	$update = mysql_query("UPDATE user_stats SET experience = " .$xp);
	
	$q = "SELECT * FROM exp WHERE level = " .$lvl. " LIMIT 1";
	$lvxp = mysql_fetch_assoc(mysql_query($q));
	$lvup = $lvxp['next_lvl'];
	if($xp >= $lvup) {
		mysql_query("UPDATE user_stats SET level = " .($lvl + 1). " WHERE user_id = " .$uid);
		
		$q = "SELECT level FROM user_stats WHERE user_id = " .$uid. " LIMIT 1";
		$nl = mysql_fetch_assoc(mysql_query($q));
		$lv = $nl['level'];
		
		$q = "SELECT next_lvl FROM exp WHERE level = " .$lv. " LIMIT 1";
		$xp = mysql_fetch_assoc(mysql_query($q));
		
		mysql_query("UPDATE user_stats SET lv_up = " .$xp['next_lvl']);
		
		$json = array(
			"lv" => $lv,
			"hp" => $lvxp['hp_up'],
			"atk" => $lvxp['atk_up'],
			"def" => $lvxp['def_up']
		);
		
		$output = json_encode($json);
		echo $output;
	}
	else {}
	
	$hpup = $_REQUEST['hp'];
	$atkup = $_REQUEST['atk'];
	$defup = $_REQUEST['def'];
	
	$nhp = $user_stats['health'] + $hpup;
	$nap = $user_stats['attack'] + $atkup;
	$ndp = $user_stats['defense'] + $defup;
	
	mysql_query("UPDATE user_stats SET health = " .$nhp. ", attack = " .$nap. ", defense = " .$ndp. " WHERE user_id = " .$uid);
	
?>
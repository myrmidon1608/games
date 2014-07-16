<?php

	session_start();
	
	include ('../game/functions.php');
	
	sidequest_data();
	
	$uid = $_SESSION['user_id'];
	
	$q = mysql_query("SELECT taskstatus FROM user_tasks WHERE taskstatus = 1");
	$tasknum = mysql_num_rows($q);
	
	$q = mysql_query("SELECT * FROM user_stats WHERE user_id = " .$uid. " LIMIT 1");
	$num = mysql_num_rows($q);
	$stat = mysql_fetch_assoc($q);
	
	if($num !== 0) {

		$json = array(
			"plv" => $stat['level'],
			"plxp" => $stat['experience'],
			"lvup" => $stat['lv_up'],
			"chp" => $stat['damage'],
			"plhp" => $stat['health'],
			"plap" => $stat['attack'],
			"pldp" => $stat['defense'],
			"tasks" => $tasknum
		);
		$output = json_encode($json);
		echo $output;
	}
	
	else {
		$q = mysql_query("SELECT * FROM baddies WHERE bad_id = 1 LIMIT 1");
		$inistat = mysql_fetch_assoc($q);
		$h = $inistat['health'];
		$a = $inistat['attack'];
		$d = $inistat['defense'];
		
		$q = mysql_query("SELECT next_lvl FROM exp WHERE level = 1 LIMIT 1");
		$next = mysql_fetch_assoc($q);
		$nl = $next['next_lvl'];
		
		$s = mysql_query("INSERT INTO user_stats (pro_id, user_id, level, experience, lv_up, damage, health, attack, defense)
				VALUES (null, " .$uid. ", 1, 0, " .$nl. ", " .$h. ", " .$h. ", " .$a. ", " .$d. ")");
				
		$q = mysql_query("SELECT * FROM user_stats WHERE user_id = " .$uid);
		$getpro = mysql_fetch_assoc($q);
				
		$json = array(
			"plv" => $getpro['level'],
			"plxp" => $getpro['experience'],
			"lvup" => $getpro['lv_up'],
			"chp" => $getpro['damage'],
			"plhp" => $getpro['health'],
			"plap" => $getpro['attack'],
			"pldp" => $getpro['defense'],
			"tasks" => $tasknum
		);
		$output = json_encode($json);
		echo $output;
	}

	
	
?>
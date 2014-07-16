<?php

	session_start();
	
	include ('../game/functions.php');
	
	sidequest_data();
	
	$uid = $_SESSION['user_id'];
	$baddie = $_GET['bid'];
	
	$q = "SELECT attack, defense FROM user_stats WHERE user_id = " .$uid;
	$getpro = mysql_fetch_assoc(mysql_query($q));
	
	$q = "SELECT * FROM baddies WHERE bad_id = " .$baddie. " LIMIT 1";
	$getbad = mysql_fetch_assoc(mysql_query($q));
	
	$json = array(
		"plap" => $getpro['attack'],
		"pldp" => $getpro['defense'],
		"id" => $getbad['bad_id'],
		"bn" => $getbad['name'],
		"hp" => $getbad['health'],
		"ap" => $getbad['attack'],
		"dp" => $getbad['defense'],
		"lxp" => $getbad['min_xp'],
		"hxp" => $getbad['max_xp']
	);

	$output = json_encode($json);
	echo $output;
	
?>
<?php
	
	session_start();
	
	include ('../game/functions.php');
	
	sidequest_data();
	
	$uid = $_SESSION['user_id'];
	$bd = $_GET['bd'];
	
	$q = "SELECT damage FROM user_stats WHERE user_id = " .$uid. " LIMIT 1";
	$php = mysql_fetch_assoc(mysql_query($q));
	if($bd >= 0) {
		$newhealth = $php['damage'] - $bd;
		
		$update = mysql_query("UPDATE user_stats SET damage = " .$newhealth. " WHERE user_id = " .$uid);
	
		$q = "SELECT damage FROM user_stats WHERE user_id = " .$uid. " LIMIT 1";
		$nphp = mysql_fetch_assoc(mysql_query($q));
	
		$json = array("hp" => $nphp['damage']);
	
		$output = json_encode($json);
		echo $output;
	}
	else {
		$json = array("hp" => $php['damage']);
	
		$output = json_encode($json);
		echo $output;
	}

	
	
?>
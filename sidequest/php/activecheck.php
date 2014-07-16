<?php

	session_start();

	include ('../game/functions.php');
	
	sidequest_data();

	$uid = $_SESSION['user_id'];
	
	$q = "SELECT task_id, taskactive FROM user_tasks WHERE taskactive = 1 AND user_id = " .$uid. "LIMIT 1";
	$reftask = mysql_fetch_assoc(mysql_query($q));
	
	$num = mysql_num_rows(mysql_query($q));
		
	$json = array("id" => $reftask['task_id'], "num" => $num);
	$output = json_encode($json);
	echo $output;

?>
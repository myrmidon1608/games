<?php

	session_start();

	include ('../game/functions.php');
	
	sidequest_data();
	
	$task = $_GET['taskid'];
	$uid = $_SESSION['user_id'];
	
	$q = "SELECT taskname FROM tasks WHERE task_id =" .$task. " LIMIT 1";
	$gettask = mysql_fetch_assoc(mysql_query($q));
	
	$tn = $gettask['taskname'];
	
	$q = "SELECT taskstatus, taskactive FROM user_tasks WHERE task_id =" .$task. " AND user_id =" .$uid. " LIMIT 1";
	$reftask = mysql_fetch_assoc(mysql_query($q));
	
	$ts = $reftask['taskstatus'];
	$ta = $reftask['taskactive'];
	
	if ($ta == 1 || $ts == 1) {
		$q = "SELECT task_id, taskstatus, taskactive FROM user_tasks WHERE task_id =" .$task. " LIMIT 1";
		$reftask = mysql_fetch_assoc(mysql_query($q));
		
		$num = mysql_num_rows(mysql_query($q));
			
		$json = array("id" => $reftask['task_id'], "status" => $reftask['taskstatus'], "active" => $reftask['taskactive'], "num" => $num);
		$output = json_encode($json);
		echo $output;
	}
	
	else {
		mysql_query("INSERT INTO user_tasks (ut_id, user_id, task_id, taskstatus, taskactive) VALUES (null, " .$uid. ", " .$task. ", 0, 1)");
			
		$json = array("name" => $tn, "id" => $task);
		$output = json_encode($json);
		echo $output;
	}

?>
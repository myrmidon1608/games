<?php
            
    include('smarty.php');
	
	switch($_GET['state']) {
		
		case "list":
		
		$tpl -> assign('page', 'list.tpl');
		
		$tpl -> assign('greet', strtoupper($_SESSION['nickname']).'\'S ');

		if($_GET['task']) {
			$s = $_GET['task'];
			$id = mysql_query("SELECT task_id FROM user_tasks WHERE ut_id = " .$s. " LIMIT 1");
	
			while($taskid = mysql_fetch_array($id, MYSQL_ASSOC)){
				mysql_query("UPDATE user_tasks SET taskstatus = 1, taskactive = 0 WHERE ut_id = " .$s. " LIMIT 1");
				
				$name = mysql_fetch_assoc(mysql_query("SELECT taskname FROM tasks WHERE task_id = '{$taskid['task_id']}'"));
				$n = strtoupper($name['taskname']);
				$tpl -> assign('cpl', 'You have completed task: '.$n. '<br />');
			}
		}

		$usertask = mysql_query("SELECT ut_id, task_id FROM user_tasks WHERE user_id = '{$_SESSION['user_id']}' AND taskstatus = 0 ORDER BY ut_id");
		
		$result = mysql_num_rows($usertask);
		
		if($result !== 0) {
			while($list = mysql_fetch_array($usertask, MYSQL_ASSOC)) {

				$name = mysql_fetch_assoc(mysql_query("SELECT taskname, taskdesc FROM tasks WHERE task_id = '{$list['task_id']}'"));
				$n = strtoupper($name['taskname']);
				$d = $name['taskdesc'];

				$tasks[] = array("name" => $n, "desc" => $d, "id" => $list['ut_id']);
				$tpl -> assign('tasks', $tasks);
			}
		}
		else {$tpl -> assign('nt', 'You have no tasks to complete at this time.');}
		
		$tpl -> display('index.tpl');
		
		break;
		
		default:
	
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$tpl -> assign('page', 'login.tpl');
			
		if ($username && $password) {
					
			mysql_connect('localhost', 'myrmidon', 'future04') or die('Not Connecting');
   			mysql_select_db('myrmidon_sidequest') or die ('No Database Selected');

			$query = mysql_query("SELECT * FROM users WHERE username ='$username'");
			$numrows = mysql_num_rows($query);
				
			if ($numrows != 0) {
				while ($row = mysql_fetch_assoc($query)) {
					$dbusername = $row['username'];
					$dbnickname = $row['nickname'];
					$dbpassword = $row['userpassword'];
					$userid = $row['user_id'];
				}
		
				if ($username == $dbusername && md5($password) == $dbpassword) {
						
					$_SESSION['username'] = $username;
					$_SESSION['nickname'] = $dbnickname;
					$_SESSION['user_id'] = $userid;
						
					header("Location:index.php?state=list");
				}
				else {$tpl -> assign('echo', 'Incorrect Password. Login:');}
			}
			else{$tpl -> assign('echo', 'Username Doesn\'t Exist. Login:');}
		}
		else {$tpl -> assign('echo', 'Login to Access Task List:');}
				
		$tpl -> display('index.tpl');
		
		break;
		
	}
	
?>
<?php

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

if ($username && $password) {
	
	sidequest_data();

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
			
			echo "<meta http-equiv='refresh' content='0;URL=index.php'>"; 
			
		}
		else echo "<p class='alert'>Incorrect password!</p>";
	}
	else echo "<p class='alert'>That username doesn't exist!</p>";
}
else echo "<p class='alert'>Enter a username and password!</p>";

login_form(33);

?>
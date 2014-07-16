<?php

$rusername = strip_tags($_POST['rusername']);
$rnickname = strip_tags($_POST{'rnickname'});
$rpassword = strtolower(strip_tags($_POST['rpassword']));
$repeatpassword = strip_tags($_POST['repeat_password']);
$email = strip_tags($_POST['email']);

if($_POST['register']) {
	
	sidequest_data();
	
	$checkuser = mysql_query("SELECT username FROM users WHERE username = '$rusername'");
	$count = mysql_num_rows($checkuser);
	if ($count != 0) {
		echo "<p class='alert'>Username already exists!</p>";
		register_form(33);
		die();
	}
	
	if($rusername) {
		
		if($rnickname) {
		
			if ($rpassword) {
			
				if($rpassword == $repeatpassword) {
					
					if(strlen($rusername) > 10) {
						echo "<p class='alert'>Username too long!</p>";
					}
					else if (strlen($rnickname) != 4) {
						echo "<p class='alert'>Nickname must be 4 characters!</p>";
					}
					else if (strlen($rpassword) > 25 || strlen($rpassword) < 6) {
						echo "<p class='alert'>Password must be between 6 and 25 characters!</p>";
					}
					else {
						
						$rpassword = md5($rpassword);
						$repeatpassword = md5($repeatpassword);
						
						$queryreg = mysql_query(
							"INSERT INTO users (
								user_id,
								username,
								nickname,
								userpassword,
								useremail,
								date
							) VALUES (
								null,
								'{$rusername}',
								'{$rnickname}',
								'{$rpassword}',
								'{$email}',
								NOW())");
								
						echo "<div class='login-suc' style='margin:-30px 0px 0px -30px;'><div>";
						echo "<p>You have been registered! <a href='index.php'>Go here</a> to login.</p>";
						echo "</div></div>";
						
					}
					
				}
				else echo "<p class='alert'>Your passwords do not match!</p>";
			}
			else echo "<p class='alert'>Enter a password!</p>";
		}
		else echo "<p class='alert'>Enter a nickname!</p>";
	}
	else echo "<p class='alert'>Enter a username!</p>";
	
}

register_form(33, $rusername, $rnickname, $email);

 ?>
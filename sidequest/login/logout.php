<?php 

	session_start();
	
	include ('top.php');
	
	session_destroy();
	
	echo "<div class='login-suc' style='margin:-30px 0px 0px -30px;'><div>";
	echo "<p>You have successfully logged out! To log back in, <a href='index.php'>click here</a>.</p>";
	echo "</div></div>";
	
	include ('bottom.php');
	
?>
<?php

    include('start.php');
    
    $title = "sideQUEST";
    $desc = "";
    
	include('header.php');
	
	if ($_SESSION['username']) {
        echo "Welcome, ".strtoupper($_SESSION['nickname'])."!";
        echo "<div style='float:right;'><a href='logout.php'>LOGOUT</a></div><br /><br />";

		echo"<div class='map'>";
		include ('account.php');
		echo"</div>";
		
		echo"<div style='text-align:right; margin-top:50px;'>
		<h3><a href='game/mobile/index.php' target='_blank'>DOWNLOAD THE MOBILE APP!</a></h3>
		</div>";
    }
	
	else {
		include ('login.php');
		
		echo"<p>If not a registered user, please register now. It's absolutely free!</p>";
		
		include ('register.php');
	}
		
	include('footer.php');
	
?>
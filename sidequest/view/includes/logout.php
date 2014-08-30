<?php 

	session_start();
	session_destroy();
    
    include('start.php');
    
    $title = "sideQUEST";
    $desc = "";
    
	include("header.php");
	
?>

    <p>You have successfully logged out! To log back in, <a href="index.php">click here</a>.</p>
	
<?php
    
    include("footer.php");
	
?>
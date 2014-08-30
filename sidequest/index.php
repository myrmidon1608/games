<?php

    include('start.php');
    
    $title = "sideQUEST";
    $desc = "";
    
	include("view/includes/header.php");

    $user = get("username", "SESSION");
    $nick = get("nickname", "SESSION");

    if ($user) { ?>
        <div class="left">
            <p>Welcome, <?php echo strtoupper($_SESSION['nickname']) ?>!</p>
        </div>
        <div class="right">
            <a href="view/includes/logout.php" class="right">LOGOUT</a>
        </div>

		<div class="map">
            <?php include ('account.php'); ?>
		</div>
		
		<div class="right">
            <h3><a href="game/mobile/index.php" target="_blank">DOWNLOAD THE MOBILE APP!</a></h3>
		</div>
    
    <?php
    
    } else {
		include ("view/includes/login.php"); ?>
		
		<p>If not a registered user, please register now. It's absolutely free!</p>
		
    <?php
        include ('view/includes/register.php');
	}
		
	include("view/includes/footer.php");
	
?>
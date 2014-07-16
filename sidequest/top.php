<?php session_start();
	mysql_connect('localhost', 'myrmidon', 'future04') or die('Not Connecting');
   	mysql_select_db('myrmidon_sidequest') or die ('No Database Selected'); ?>
    
<!DOCTYPE html>
<head>
<title>sideQUEST: <?php echo $title ?></title>
<meta name="description" content="<?php echo $desc ?>" />
<link rel="stylesheet" type="text/css" href="capstone.css" />
<script src="../scripts/jquery-1.6.4.js"></script>
<script src="capstone-tabs.js"></script>

</head>
<!--[if lte IE 7]><body class="ie"><![endif]-->
<body>
	<div class="container">
    	<div class="title">
        	<div class="logo">
                <a href="index.php"><div class="end-letters"></div></a>
                <div class="sword" id="sword"></div>
                <a href="index.php"><div class="sideque"></div></a>
            </div>
        <script>
			$(document).ready(function(){
				$("#sword").animate({marginLeft:"104px"}, 1000)
			});
		</script>
            <h3 style="margin-left:346px;">"The only way to save the world is to believe in yourself; or just your ability to take out the trash."</h3>
                <ul>
                    <li class="email"><a href="mailto:sidequest.game@gmail.com"></a></li>
                    <li class="facebook"><a href="#"></a></li>
                    <li class="twitter"><a href="https://twitter.com/#!/sideQUEST_game" target="_blank"></a></li>
                </ul>
            </div>
        <div>
            <div class="navbar">
                <ul>
                    <li id="left1" style="background:url(images/nav-bg/grass.png); color:#700003;"><a href="about.php">ABOUT</a></li>
                    <li id="left2" style="background:url(images/nav-bg/beach.png); color:#003C70;"><a href="design.php">DESIGN</a></li>
                    <li id="left3" style="background:url(images/nav-bg/ocean.png); color:#000000;"><a href="how-to-play.php">HOW TO PLAY</a></li>
                    <li id="left4" style="background:url(images/nav-bg/dungeon.png); color:#FFFFFF;"><a href="login/index.php">PLAY GAME</a></li>
                </ul>
            </div>
        	<div class="content">
            <?php if ($_SESSION['username']) {
				echo "Welcome, ".strtoupper($_SESSION['nickname'])."!";
				echo "<div style='float:right;'><a href='login/logout.php'>LOGOUT</a></div><br /><br />";
			}
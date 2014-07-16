<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>sideQUEST: Play the Game</title>
<meta name="description" content="" />
<link rel="stylesheet" type="text/css" href="../capstone.css" />
<link rel="stylesheet" type="text/css" href="game/nav.css"/>
<script type="text/javascript" src="../jquery-1.6.4.js"></script>
</head>
<!--[if lte IE 7]><body class="ie"><![endif]-->
<body>
	<div class="container">
    	<div class="title">
        	<div class="logo">
                <a href="../index.php"><div class="end-letters"></div></a>
                <div class="sword" id="sword"></div>
                <a href="../index.php"><div class="sideque"></div></a>
            </div>
        <script type="text/javascript">
			$(document).ready(function(){
				$("#sword").animate({marginLeft:"104px"}, 1000)
			});
		</script>
        <h3 style="margin-left:346px;">"The only way to save the world is to believe in yourself; or just your ability to take out the trash."</h3>
            <ul>
                <li class="email"><a href="mailto:myrmidon16@gmail.com"></a></li>
                <li class="facebook"><a href="#"></a></li>
                <li class="twitter"><a href="https://twitter.com/#!/sideQUEST_game" target="_blank"></a></li>
            </ul>
        </div>
        <div>
            <div class="navbar">
                <ul>
                    <li id="left1" style="background:url(../images/nav-bg/grass.png); color:#700003;"><a href="../about.php">ABOUT</a></li>
                    <li id="left2" style="background:url(../images/nav-bg/beach.png); color:#003C70;"><a href="../design.php">DESIGN</a></li>
                    <li id="left3" style="background:url(../images/nav-bg/ocean.png); color:#000000;"><a href="../how-to-play.php">STORYLINE</a></li>
                    <li id="left4" style="background:url(../images/nav-bg/dungeon.png); color:#FFFFFF;"><a href="index.php">PLAY GAME</a></li>
                </ul>
            </div>
        	<div class="content">
            <?php include ('game/functions.php');
			
			sidequest_data(); ?>
			
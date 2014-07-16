<!DOCTYPE html>
<!--[if gt IE 9]><html><![endif]-->
<!--[if lte IE 9]><html class="ie"><![endif]-->
<head>
    <title>sideQUEST: <?php echo $title ?></title>
    <meta name="description" content="<?php echo $desc ?>" />
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="capstone.css" />
</head>

<body>
	<div class="container">
    	<div class="header row">
        	<div class="logo col-sm-4">
                <a href="index.php"><div class="end-letters"></div></a>
                <div class="sword" id="sword"></div>
                <a href="index.php"><div class="sideque"></div></a>
            </div>
            <div class="col-sm-8">
                <h3>"The only way to save the world is to believe in yourself; or just your ability to take out the trash."</h3>
                <ul>
                    <li class="email"><a href="mailto:sidequest.game@gmail.com"></a></li>
                    <li class="facebook"><a href="#"></a></li>
                    <li class="twitter"><a href="https://twitter.com/#!/sideQUEST_game" target="_blank"></a></li>
                </ul>
            </div>
        </div>
        <div class="content">
        <?php if ($_SESSION['username']) {
            echo "Welcome, ".strtoupper($_SESSION['nickname'])."!";
            echo "<div style='float:right;'><a href='login/logout.php'>LOGOUT</a></div><br /><br />";
        }
<?php
	session_start();
	
	ob_start();
			
	$smarty['lib'] = 'smarty/libs/';
	$smarty['templates'] = 'templates/';
	$smarty['templates_c'] = 'templates_c/';
			
	include($smarty['lib'] . 'Smarty.class.php');
			
	$tpl = new Smarty();
	$tpl -> template_dir = $smarty['templates'];
	$tpl -> compile_dir = $smarty['templates_c'];
	
	mysql_connect('localhost', 'root', '') or die('Not Connecting');
   	mysql_select_db('sidequest') or die ('No Database Selected');
?>

<!DOCTYPE html>
<head>
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
	<title>sideQUEST</title>
	<link rel="stylesheet" href="mobile.css" />
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0-rc.1/jquery.mobile-1.1.0-rc.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/mobile/1.1.0-rc.1/jquery.mobile-1.1.0-rc.1.min.js"></script>
	<script type="text/javascript" src="orientation.js"></script>
</head>
<body onorientationchange="updateOrientation();">

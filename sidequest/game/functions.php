<?php
		
	$beginx = 14;
	$beginy = 30;
	
	function loading() {
		echo "<div class='show-load'>";
        echo "<img src='game/images/loading.gif' alt='LOADING...' /></div>";
	}
	
	function arrow_nav($script) {
		echo "<div style='left:135px; top:21px;'><img src='game/images/navigation/arrow-top.png' id='atop' onclick='" .$script. "(0,-1);' alt='^' /></div>";
		echo "<div style='left:294px; top:135px;'><img src='game/images/navigation/arrow-right.png' id='aright' onclick='" .$script. "(1,0);' alt='>' /></div>";
		echo "<div style='left:135px; top:294px;'><img src='game/images/navigation/arrow-bottom.png' id='abottom' onclick='" .$script. "(0,1);' alt='<' /></div>";
		echo "<div style='left:21px; top:135px;'><img src='game/images/navigation/arrow-left.png' id='aleft' onclick='" .$script. "(-1,0);' alt='v' /></div>";
	}
	
	function town_building($char, $text, $res, $script1, $script2) {
		echo "<img src='game/images/characters/" .$char. ".png' class='town-char' />";
        echo "<div id='town-text' class='town-text'><span>" .$text. "</span></div>";
		echo "<div class='yes-ret' style='display:none;'><span>" .$res. "</span></div>";
        echo "<div class='town-ans1'>
                  <div style='cursor:pointer; padding-left:10px; margin-bottom:13px;' onclick='interact();'><img src='game/images/screen/yes.png' /></div>
                  <div style='cursor:pointer; padding-left:10px;' onclick='exit(" .$script2. ");'><img src='game/images/screen/no.png' /></div>
			  </div>";
		echo "<div class='town-ans2' style='display:none;'>
				  <div id='sleep' style='cursor:pointer; padding-left:10px;' onclick='interact(" .$script1. ");'><img src='game/images/screen/ok.png' /></div>
              </div>";
	}
	
	function ret_world($xpos, $ypos, $nb) {
		echo "<div id='worldmap'>";
        include ('game/overworld.php');
        echo "</div>";
		echo "<script type='text/javascript'>move(" .$xpos. ", " .$ypos. ", " .$nb. ");</script>";
	}
	
	function ret_shrine($xpos, $ypos, $nb) {
		echo "<div id='shrine'>";
        include ('game/shrine.php');
        echo "</div>";
		echo "<script type='text/javascript'>move(" .$xpos. ", " .$ypos. ", " .$nb. ");</script>";
	}
	
?>

		<div class="navigation">
			<div class="return-button" id="retbutton1">
			<a href="index.php?state=w03"><img src="game/images/navigation/arrow-bottom.png" alt="v" /></a>
			</div>
			<div class="return-button" id="retbutton2">
			<a href="index.php?state=w04"><img src="game/images/navigation/arrow-bottom.png" alt="v" /></a>
			</div>
            <div class="return-button" id="retbutton3">
			<a href="index.php?state=w06"><img src="game/images/navigation/arrow-bottom.png" alt="v" /></a>
			</div>
			<div id="stairs" class="stairs">
				<div id="sd1" style="left:234px; top:78px;" onclick="chgFloor(2,0);"></div>
				<div id="su1" style="left:234px; top:78px;" onclick="chgFloor(-2,0);"></div>
				<div id="su2" style="left:234px; top:78px;" onclick="chgFloor(-2,0);"></div>
				<div id="sd2" style="left:234px; top:78px;" onclick="chgFloor(2,0);"></div>
                <div id="bd1" style="left:234px; top:78px;" onclick="chgFloor(0,2);"></div>
				<div id="bu1" style="left:234px; top:78px;" onclick="chgFloor(0,-2);"></div>
			</div>
		</div>

		<div id="shrine-enter" style="display:none;" onclick="enter();"></div>
		<div class="shrine-temple" style="z-index:20; display:none;">
			<img src="game/images/characters/priest-pray.png" class="pray-char" style="z-index:50; display:none;" />
			<?php town_building('priest', 'GOD IS ALWAYS WITH US. LET US PRAY.', '...',  '"temple"', ''); ?>
			<div class="prayer" style="display:none;">
				<span>AMEN.</span>
			</div>
		</div>
		
		<div id="shrine-nav" class="overworld" style="width:12636px;"><?php include ('game/maps/shrine-map.php'); ?></div>

<script type="text/javascript">

	function enter() {
		$('#shrine-enter').fadeOut(0);
		$('.shrine-temple').css('display', '');
		$('.return-button').fadeOut(0);
		$('.town-text').css('display', '');
		$('.yes-ret').css('display', 'none');
		$('.town-ans1').css('display', '');
		$('.town-ans2').css('display', 'none');
	}
	
	function exit() {
		$('#shrine-enter').fadeIn(0);
		$('.shrine-temple').fadeOut(0);
		$('.return-button').fadeIn(0);
	}
	
	function interact(temp) {
		var t = temp;

		if (t == 'temple') {
			$('.pray-char').css('display', 'none');
			$('.yes-ret').css('display', 'none');
			$('.prayer').fadeIn(0).delay(1000).fadeOut(0);
			$('.town-ans2').fadeOut(0).delay(1000).fadeIn(0, function() {
				exit('building');
			});
		}
		
		else {
			$('.town-text').css('display', 'none');
			$('.yes-ret').css('display', '');
			$('.prayer').css('display', 'none');
			$('.town-ans1').css('display', 'none');
			$('.town-ans2').css('display', '');
			$('.pray-char').css('display', '');
		}
	}
	
	var charx = 0;
	var chary = 0;
	move(0,0,1);
	
	function savePlace() {
		$('#save-echo').css('display', '');
		$('#yes-save').css('display', 'none');
		$('#no-save').css('display', '');
		screenExit('start');
	}
	
	function move(mvx, mvy) {
		var x = mvx;
		var y = mvy;

		var world = document.getElementById('shrine-nav');
		xpos = parseInt(world.style.marginLeft);
		ypos = parseInt(world.style.marginTop);
		boundary();
		
		function boundary () {
			
			$.ajax({
				type: "POST",
				url: "php/tilecheck.php",
				dataType: "json",
				data:{x:charx + x, y:chary + y},
				success: function(data) {
					
					charx += x;
					chary += y;
					
					var left = data.shrine_lefttile;
					var right = data.shrine_righttile;
					var top = data.shrine_toptile;
					var bot = data.shrine_bottomtile;
					var tleft = data.task_lefttile;
					var tright = data.task_righttile;
					var ttop = data.task_toptile;
					var tbot = data.task_bottomtile;
					
					var xypos = document.getElementById("coord");
					xypos.innerText = charx + ", " + chary;
					
					if(left == 1){
						$("#aleft").css('display', 'none');
					}
					else {
						$("#aleft").css('display', '');
					}
					
					if(right == 1){
						$("#aright").css('display', 'none');
					}
					else {
						$("#aright").css('display', '');
					}
					
					if(top == 1){
						$("#atop").css('display', 'none');
					}
					else {
						$("#atop").css('display', '');
					}
					
					if(bot == 1){
						$("#abottom").css('display', 'none');
					}
					else {
						$("#abottom").css('display', '');
					}
					
					var p = new Date();
					$("#walk").fadeIn(0).attr("src", "game/images/char-walk.gif?" + p.getTime(), function () {
						$('#ini').fadeOut(0).delay(800).fadeIn(0);
					});
					world.style.marginTop = -chary * 351 +"px";
					world.style.marginLeft = -charx * 351 +"px";
					
					if (charx == 4 && chary == 6) {
						$("#retbutton1").css('display', '');
						$("#retbutton2").css('display', 'none');
						$("#retbutton3").css('display', 'none');
					}
					else if (charx == 4 && chary == 11) {
						$("#retbutton1").css('display', 'none');
						$("#retbutton2").css('display', '');
						$("#retbutton3").css('display', 'none');
					}
					else if (charx == 17 && chary == 12) {
						$("#retbutton1").css('display', 'none');
						$("#retbutton2").css('display', 'none');
						$("#retbutton3").css('display', '');
					}
					else {
						$("#retbutton1").css('display', 'none');
						$("#retbutton2").css('display', 'none');
						$("#retbutton3").css('display', 'none');
					}
					
					if((charx == 4 && chary == 6) || (charx == 4 && chary == 11)) {
						$('#shrine-enter').css('display', '');
					}
					else {
						$('#shrine-enter').css('display', 'none');
					}
					
					if (charx == 4 && chary == 6) {
						$("#stairs").css('display', '');
						$("#sd1").css('display', '');
						$("#su1").css('display', 'none');
						$("#su2").css('display', 'none');
						$("#sd2").css('display', 'none');
						$("#bd1").css('display', 'none');
						$("#bu1").css('display', 'none');
					}
					else if (charx == 6 && chary == 6) {
						$("#stairs").css('display', '');
						$("#sd1").css('display', 'none');
						$("#su1").css('display', '');
						$("#su2").css('display', 'none');
						$("#sd2").css('display', 'none');
						$("#bd1").css('display', 'none');
						$("#bu1").css('display', 'none');
					}
					else if (charx == 6 && chary == 11) {
						$("#stairs").css('display', '');
						$("#sd1").css('display', 'none');
						$("#su1").css('display', 'none');
						$("#su2").css('display', '');
						$("#sd2").css('display', 'none');
						$("#bd1").css('display', 'none');
						$("#bu1").css('display', 'none');
					}
					else if (charx == 4 && chary == 11) {
						$("#stairs").css('display', '');
						$("#sd1").css('display', 'none');
						$("#su1").css('display', 'none');
						$("#su2").css('display', 'none');
						$("#sd2").css('display', '');
						$("#bd1").css('display', 'none');
						$("#bu1").css('display', 'none');
					}
					else if (charx == 17 && chary == 12) {
						$("#stairs").css('display', '');
						$("#sd1").css('display', 'none');
						$("#su1").css('display', 'none');
						$("#su2").css('display', 'none');
						$("#sd2").css('display', 'none');
						$("#bd1").css('display', '');
						$("#bu1").css('display', 'none');
					}
					else if (charx == 17 && chary == 14) {
						$("#stairs").css('display', '');
						$("#sd1").css('display', 'none');
						$("#su1").css('display', 'none');
						$("#su2").css('display', 'none');
						$("#sd2").css('display', 'none');
						$("#bd1").css('display', 'none');
						$("#bu1").css('display', '');
					}
					else {
						$("#stairs").css('display', 'none');
					}
				}
			});
		}
	}
			
</script>
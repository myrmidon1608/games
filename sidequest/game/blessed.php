        
    	<div class="navigation">
        	<div class="return-button" id="retbutton">
            <a href="index.php?state=w05"><img src="game/images/navigation/arrow-bottom.png" alt="v" /></a>
            </div>
            <div class="bossroom" id="blessedroom" style="display:none;">
            <img src="game/images/navigation/arrow-right.png" alt=">" onclick="bossBattle();" />
            </div>
            <div id="stairs" class="stairs">
            	<div id="db2a" style="left:234px; top:78px;" onclick="chgFloor(-5,2);"></div>
                <div id="ub1a" style="left:234px; top:78px;" onclick="chgFloor(5,-2);"></div>
                <div id="db3a" style="left:234px; top:234px;" onclick="chgFloor(15,15);"></div>
                <div id="ub2a" style="left:234px; top:234px;" onclick="chgFloor(-15,-15);"></div>
                <div id="db4a" style="left:78px; top:234px;" onclick="chgFloor(-1,-4);"></div>
                <div id="ub3a" style="left:78px; top:234px;" onclick="chgFloor(1,4);"></div>
                <div id="db5a" style="left:78px; top:78px;" onclick="chgFloor(-1,-11);"></div>
                <div id="ub4a" style="left:78px; top:78px;" onclick="chgFloor(1,11);"></div>
                <div id="db3b" style="left:234px; top:78px;" onclick="chgFloor(-2,12);"></div>
                <div id="ub2b" style="left:234px; top:78px;" onclick="chgFloor(2,-12);"></div>
                <div id="db2b" style="left:234px; top:78px;" onclick="chgFloor(-5,9);"></div>
                <div id="ub1b" style="left:234px; top:78px;" onclick="chgFloor(5,-9);"></div>
                <div id="db3c" style="left:234px; top:78px;" onclick="chgFloor(-13,-1);"></div>
                <div id="ub2c" style="left:234px; top:78px;" onclick="chgFloor(13,1);"></div>
                <div id="db2d" style="left:78px; top:234px;" onclick="chgFloor(-5,5);"></div>
                <div id="ub1d" style="left:78px; top:234px;" onclick="chgFloor(5,-5);"></div>
                <div id="db3d" style="left:234px; top:78px;" onclick="chgFloor(-7,-3);"></div>
                <div id="ub2d" style="left:234px; top:78px;" onclick="chgFloor(7,3);"></div>
            </div>
        </div>
        <div id="blessed-shrine" class="overworld" style="width:7371px;"><?php include ('game/maps/blessed-map.php'); ?></div>

<script type="text/javascript">

	function bossBattle() {
		move(1,0,1);
		battle(100, 'blessedboss');
		$('#blessedroom').css('display', 'none');
	}
	
	var charx = 12;
	var chary = 9;
	move(0,0,1);
	
	function savePlace() {
		$('#save-echo').css('display', '');
		$('#yes-save').css('display', 'none');
		$('#no-save').css('display', '');
		screenExit('start');
	}
	
	function move(mvx, mvy, nobattle) {
		var x = mvx;
		var y = mvy;
		var nb = nobattle;

		var world = document.getElementById('blessed-shrine');
		xpos = parseInt(world.style.marginLeft);
		ypos = parseInt(world.style.marginTop);
		boundary();
		
		if (nb !== 1) {
			battle(350, 'blessed');
		}
		else {}
		
		function boundary () {
			
			$.ajax({
				type: "POST",
				url: "php/tilecheck.php",
				dataType: "json",
				data:{x:charx + x, y:chary + y},
				success: function(data) {
					var id = data.id;
					charx += x;
					chary += y;
					
					var left = data.bless_lefttile;
					var right = data.bless_righttile;
					var top = data.bless_toptile;
					var bot = data.bless_bottomtile;
					var tleft = data.task_lefttile;
					var tright = data.task_righttile;
					var ttop = data.task_toptile;
					var tbot = data.task_bottomtile;
					
					var xypos = document.getElementById("coord");
					xypos.innerText = charx + ", " + chary;
					
					if(left == 1){
						$("#aleft").css('display', 'none');
					}
					else if(tleft == 7 && charx == 10 && chary == 8){
						$("#aleft").css('display', 'none');
						ajax(13,1);
					}
					else {
						$("#aleft").css('display', '');
					}
					
					if(right == 1){
						$("#aright").css('display', 'none');
					}
					else if(tright == 7 && charx == 14 && chary == 6){
						$("#aright").css('display', 'none');
						ajax(14,1);
					}
					else {
						$("#aright").css('display', '');
					}
					
					if(top == 1){
						$("#atop").css('display', 'none');
					}
					else if(ttop == 7 && charx == 11 && chary == 5){
						$("#atop").css('display', 'none');
						ajax(15,1);
					}
					else {
						$("#atop").css('display', '');
					}
					
					if(bot == 1){
						$("#abottom").css('display', 'none');
					}
					else if(tbot == 7 && charx == 13 && chary == 9){
						$("#abottom").css('display', 'none');
						ajax(16,1);
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
					
					if (charx == 12 && chary == 9) {
						$("#retbutton").css('display', '');
					}
					else {
						$("#retbutton").css('display', 'none');
					}
					
					if (charx == 17 && chary == 1) {
						$("#blessedroom").css('display', 'none');
						addTask("d3boss");
					}
					else {
						$("#blessedroom").css('display', 'none');
					}
					
					if (charx == 9 && chary == 3) {
						$("#stairs").css('display', '');
						$("#db2a").css('display', '');
						$("#ub1a").css('display', 'none');
						$("#db3a").css('display', 'none');
						$("#ub2a").css('display', 'none');
						$("#db4a").css('display', 'none');
						$("#ub3a").css('display', 'none');
						$("#db5a").css('display', 'none');
						$("#ub4a").css('display', 'none');
						$("#db3b").css('display', 'none');
						$("#ub2b").css('display', 'none');
						$("#db2b").css('display', 'none');
						$("#ub1b").css('display', 'none');
						$("#db3c").css('display', 'none');
						$("#ub2c").css('display', 'none');
						$("#db2d").css('display', 'none');
						$("#ub1d").css('display', 'none');
						$("#db3d").css('display', 'none');
						$("#ub2d").css('display', 'none');
					}
					else if (charx == 4 && chary == 5) {
						$("#stairs").css('display', '');
						$("#db2a").css('display', 'none');
						$("#ub1a").css('display', '');
						$("#db3a").css('display', 'none');
						$("#ub2a").css('display', 'none');
						$("#db4a").css('display', 'none');
						$("#ub3a").css('display', 'none');
						$("#db5a").css('display', 'none');
						$("#ub4a").css('display', 'none');
						$("#db3b").css('display', 'none');
						$("#ub2b").css('display', 'none');
						$("#db2b").css('display', 'none');
						$("#ub1b").css('display', 'none');
						$("#db3c").css('display', 'none');
						$("#ub2c").css('display', 'none');
						$("#db2d").css('display', 'none');
						$("#ub1d").css('display', 'none');
						$("#db3d").css('display', 'none');
						$("#ub2d").css('display', 'none');
					}
					else if (charx == 2 && chary == 2) {
						$("#stairs").css('display', '');
						$("#db2a").css('display', 'none');
						$("#ub1a").css('display', 'none');
						$("#db3a").css('display', '');
						$("#ub2a").css('display', 'none');
						$("#db4a").css('display', 'none');
						$("#ub3a").css('display', 'none');
						$("#db5a").css('display', 'none');
						$("#ub4a").css('display', 'none');
						$("#db3b").css('display', 'none');
						$("#ub2b").css('display', 'none');
						$("#db2b").css('display', 'none');
						$("#ub1b").css('display', 'none');
						$("#db3c").css('display', 'none');
						$("#ub2c").css('display', 'none');
						$("#db2d").css('display', 'none');
						$("#ub1d").css('display', 'none');
						$("#db3d").css('display', 'none');
						$("#ub2d").css('display', 'none');
					}
					else if (charx == 17 && chary == 17) {
						$("#stairs").css('display', '');
						$("#db2a").css('display', 'none');
						$("#ub1a").css('display', 'none');
						$("#ub3a").css('display', 'none');
						$("#ub2a").css('display', '');
						$("#db4a").css('display', 'none');
						$("#db3a").css('display', 'none');
						$("#db5a").css('display', 'none');
						$("#ub4a").css('display', 'none');
						$("#db3b").css('display', 'none');
						$("#ub2b").css('display', 'none');
						$("#db2b").css('display', 'none');
						$("#ub1b").css('display', 'none');
						$("#db3c").css('display', 'none');
						$("#ub2c").css('display', 'none');
						$("#db2d").css('display', 'none');
						$("#ub1d").css('display', 'none');
						$("#db3d").css('display', 'none');
						$("#ub2d").css('display', 'none');
					}
					else if (charx == 18 && chary == 18) {
						$("#stairs").css('display', '');
						$("#db2a").css('display', 'none');
						$("#ub1a").css('display', 'none');
						$("#db3a").css('display', 'none');
						$("#ub2a").css('display', 'none');
						$("#db4a").css('display', '');
						$("#ub3a").css('display', 'none');
						$("#db5a").css('display', 'none');
						$("#ub4a").css('display', 'none');
						$("#db3b").css('display', 'none');
						$("#ub2b").css('display', 'none');
						$("#db2b").css('display', 'none');
						$("#ub1b").css('display', 'none');
						$("#db3c").css('display', 'none');
						$("#ub2c").css('display', 'none');
						$("#db2d").css('display', 'none');
						$("#ub1d").css('display', 'none');
						$("#db3d").css('display', 'none');
						$("#ub2d").css('display', 'none');
					}
					else if (charx == 17 && chary == 14) {
						$("#stairs").css('display', '');
						$("#db2a").css('display', 'none');
						$("#ub1a").css('display', 'none');
						$("#db3a").css('display', 'none');
						$("#ub2a").css('display', 'none');
						$("#db4a").css('display', 'none');
						$("#ub3a").css('display', '');
						$("#db5a").css('display', 'none');
						$("#ub4a").css('display', 'none');
						$("#db3b").css('display', 'none');
						$("#ub2b").css('display', 'none');
						$("#db2b").css('display', 'none');
						$("#ub1b").css('display', 'none');
						$("#db3c").css('display', 'none');
						$("#ub2c").css('display', 'none');
						$("#db2d").css('display', 'none');
						$("#ub1d").css('display', 'none');
						$("#db3d").css('display', 'none');
						$("#ub2d").css('display', 'none');
					}
					else if (charx == 18 && chary == 12) {
						$("#stairs").css('display', '');
						$("#db2a").css('display', 'none');
						$("#ub1a").css('display', 'none');
						$("#db3a").css('display', 'none');
						$("#ub2a").css('display', 'none');
						$("#db4a").css('display', 'none');
						$("#ub3a").css('display', 'none');
						$("#db5a").css('display', '');
						$("#ub4a").css('display', 'none');
						$("#db3b").css('display', 'none');
						$("#ub2b").css('display', 'none');
						$("#db2b").css('display', 'none');
						$("#ub1b").css('display', 'none');
						$("#db3c").css('display', 'none');
						$("#ub2c").css('display', 'none');
						$("#db2d").css('display', 'none');
						$("#ub1d").css('display', 'none');
						$("#db3d").css('display', 'none');
						$("#ub2d").css('display', 'none');
					}
					else if (charx == 17 && chary == 1) {
						$("#stairs").css('display', '');
						$("#db2a").css('display', 'none');
						$("#ub1a").css('display', 'none');
						$("#db3a").css('display', 'none');
						$("#ub2a").css('display', 'none');
						$("#db4a").css('display', 'none');
						$("#ub3a").css('display', 'none');
						$("#db5a").css('display', 'none');
						$("#ub4a").css('display', '');
						$("#db3b").css('display', 'none');
						$("#ub2b").css('display', 'none');
						$("#db2b").css('display', 'none');
						$("#ub1b").css('display', 'none');
						$("#db3c").css('display', 'none');
						$("#ub2c").css('display', 'none');
						$("#db2d").css('display', 'none');
						$("#ub1d").css('display', 'none');
						$("#db3d").css('display', 'none');
						$("#ub2d").css('display', 'none');
					}
					else if (charx == 5 && chary == 6) {
						$("#stairs").css('display', '');
						$("#db2a").css('display', 'none');
						$("#ub1a").css('display', 'none');
						$("#db3a").css('display', 'none');
						$("#ub2a").css('display', 'none');
						$("#db4a").css('display', 'none');
						$("#ub3a").css('display', 'none');
						$("#db5a").css('display', 'none');
						$("#ub4a").css('display', 'none');
						$("#db3b").css('display', '');
						$("#ub2b").css('display', 'none');
						$("#db2b").css('display', 'none');
						$("#ub1b").css('display', 'none');
						$("#db3c").css('display', 'none');
						$("#ub2c").css('display', 'none');
						$("#db2d").css('display', 'none');
						$("#ub1d").css('display', 'none');
						$("#db3d").css('display', 'none');
						$("#ub2d").css('display', 'none');
					}
					else if (charx == 3 && chary == 18) {
						$("#stairs").css('display', '');
						$("#db2a").css('display', 'none');
						$("#ub1a").css('display', 'none');
						$("#db3a").css('display', 'none');
						$("#ub2a").css('display', 'none');
						$("#db4a").css('display', 'none');
						$("#ub3a").css('display', 'none');
						$("#db5a").css('display', 'none');
						$("#ub4a").css('display', 'none');
						$("#db3b").css('display', 'none');
						$("#ub2b").css('display', '');
						$("#db2b").css('display', 'none');
						$("#ub1b").css('display', 'none');
						$("#db3c").css('display', 'none');
						$("#ub2c").css('display', 'none');
						$("#db2d").css('display', 'none');
						$("#ub1d").css('display', 'none');
						$("#db3d").css('display', 'none');
						$("#ub2d").css('display', 'none');
					}
					else if (charx == 17 && chary == 9) {
						$("#stairs").css('display', '');
						$("#db2a").css('display', 'none');
						$("#ub1a").css('display', 'none');
						$("#db3a").css('display', 'none');
						$("#ub2a").css('display', 'none');
						$("#db4a").css('display', 'none');
						$("#ub3a").css('display', 'none');
						$("#db5a").css('display', 'none');
						$("#ub4a").css('display', 'none');
						$("#db3b").css('display', 'none');
						$("#ub2b").css('display', 'none');
						$("#db2b").css('display', '');
						$("#ub1b").css('display', 'none');
						$("#db3c").css('display', 'none');
						$("#ub2c").css('display', 'none');
						$("#db2d").css('display', 'none');
						$("#ub1d").css('display', 'none');
						$("#db3d").css('display', 'none');
						$("#ub2d").css('display', 'none');
					}
					else if (charx == 12 && chary == 18) {
						$("#stairs").css('display', '');
						$("#db2a").css('display', 'none');
						$("#ub1a").css('display', 'none');
						$("#db3a").css('display', 'none');
						$("#ub2a").css('display', 'none');
						$("#db4a").css('display', 'none');
						$("#ub3a").css('display', 'none');
						$("#db5a").css('display', 'none');
						$("#ub4a").css('display', 'none');
						$("#db3b").css('display', 'none');
						$("#ub2b").css('display', 'none');
						$("#db2b").css('display', 'none');
						$("#ub1b").css('display', '');
						$("#db3c").css('display', 'none');
						$("#ub2c").css('display', 'none');
						$("#db2d").css('display', 'none');
						$("#ub1d").css('display', 'none');
						$("#db3d").css('display', 'none');
						$("#ub2d").css('display', 'none');
					}
					else if (charx == 15 && chary == 16) {
						$("#stairs").css('display', '');
						$("#db2a").css('display', 'none');
						$("#ub1a").css('display', 'none');
						$("#db3a").css('display', 'none');
						$("#ub2a").css('display', 'none');
						$("#db4a").css('display', 'none');
						$("#ub3a").css('display', 'none');
						$("#db5a").css('display', 'none');
						$("#ub4a").css('display', 'none');
						$("#db3b").css('display', 'none');
						$("#ub2b").css('display', 'none');
						$("#db2b").css('display', 'none');
						$("#ub1b").css('display', 'none');
						$("#db3c").css('display', '');
						$("#ub2c").css('display', 'none');
						$("#db2d").css('display', 'none');
						$("#ub1d").css('display', 'none');
						$("#db3d").css('display', 'none');
						$("#ub2d").css('display', 'none');
					}
					else if (charx == 2 && chary == 15) {
						$("#stairs").css('display', '');
						$("#db2a").css('display', 'none');
						$("#ub1a").css('display', 'none');
						$("#db3a").css('display', 'none');
						$("#ub2a").css('display', 'none');
						$("#db4a").css('display', 'none');
						$("#ub3a").css('display', 'none');
						$("#db5a").css('display', 'none');
						$("#ub4a").css('display', 'none');
						$("#db3b").css('display', 'none');
						$("#ub2b").css('display', 'none');
						$("#db2b").css('display', 'none');
						$("#ub1b").css('display', 'none');
						$("#db3c").css('display', 'none');
						$("#ub2c").css('display', '');
						$("#db2d").css('display', 'none');
						$("#ub1d").css('display', 'none');
						$("#db3d").css('display', 'none');
						$("#ub2d").css('display', 'none');
					}
					else if (charx == 10 && chary == 12) {
						$("#stairs").css('display', '');
						$("#db2a").css('display', 'none');
						$("#ub1a").css('display', 'none');
						$("#db3a").css('display', 'none');
						$("#ub2a").css('display', 'none');
						$("#db4a").css('display', 'none');
						$("#ub3a").css('display', 'none');
						$("#db5a").css('display', 'none');
						$("#ub4a").css('display', 'none');
						$("#db3b").css('display', 'none');
						$("#ub2b").css('display', 'none');
						$("#db2b").css('display', 'none');
						$("#ub1b").css('display', 'none');
						$("#db3c").css('display', 'none');
						$("#ub2c").css('display', 'none');
						$("#db2d").css('display', '');
						$("#ub1d").css('display', 'none');
						$("#db3d").css('display', 'none');
						$("#ub2d").css('display', 'none');
					}
					else if (charx == 5 && chary == 17) {
						$("#stairs").css('display', '');
						$("#db2a").css('display', 'none');
						$("#ub1a").css('display', 'none');
						$("#db3a").css('display', 'none');
						$("#ub2a").css('display', 'none');
						$("#db4a").css('display', 'none');
						$("#ub3a").css('display', 'none');
						$("#db5a").css('display', 'none');
						$("#ub4a").css('display', 'none');
						$("#db3b").css('display', 'none');
						$("#ub2b").css('display', 'none');
						$("#db2b").css('display', 'none');
						$("#ub1b").css('display', 'none');
						$("#db3c").css('display', 'none');
						$("#ub2c").css('display', 'none');
						$("#db2d").css('display', 'none');
						$("#ub1d").css('display', '');
						$("#db3d").css('display', 'none');
						$("#ub2d").css('display', 'none');
					}
					else if (charx == 9 && chary == 13) {
						$("#stairs").css('display', '');
						$("#db2a").css('display', 'none');
						$("#ub1a").css('display', 'none');
						$("#db3a").css('display', 'none');
						$("#ub2a").css('display', 'none');
						$("#db4a").css('display', 'none');
						$("#ub3a").css('display', 'none');
						$("#db5a").css('display', 'none');
						$("#ub4a").css('display', 'none');
						$("#db3b").css('display', 'none');
						$("#ub2b").css('display', 'none');
						$("#db2b").css('display', 'none');
						$("#ub1b").css('display', 'none');
						$("#db3c").css('display', 'none');
						$("#ub2c").css('display', 'none');
						$("#db2d").css('display', 'none');
						$("#ub1d").css('display', 'none');
						$("#db3d").css('display', '');
						$("#ub2d").css('display', 'none');
					}
					else if (charx == 2 && chary == 10) {
						$("#stairs").css('display', '');
						$("#db2a").css('display', 'none');
						$("#ub1a").css('display', 'none');
						$("#db3a").css('display', 'none');
						$("#ub2a").css('display', 'none');
						$("#db4a").css('display', 'none');
						$("#ub3a").css('display', 'none');
						$("#db5a").css('display', 'none');
						$("#ub4a").css('display', 'none');
						$("#db3b").css('display', 'none');
						$("#ub2b").css('display', 'none');
						$("#db2b").css('display', 'none');
						$("#ub1b").css('display', 'none');
						$("#db3c").css('display', 'none');
						$("#ub2c").css('display', 'none');
						$("#db2d").css('display', 'none');
						$("#ub1d").css('display', 'none');
						$("#db3d").css('display', 'none');
						$("#ub2d").css('display', '');
					}
					else {
						$("#stairs").css('display', 'none');
					}
				}
			});
		}
	}
			
</script>
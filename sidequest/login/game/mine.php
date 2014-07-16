        
    	<div class="navigation">
        	<div class="return-button" id="retbutton">
            <a href="index.php?state=w01"><img src="game/images/navigation/arrow-bottom.png" alt="v" /></a>
            </div>
            <div class="bossroom" id="mineroom" style="display:none;">
            <img src="game/images/navigation/arrow-right.png" alt=">" onclick="bossBattle();" />
            </div>
            <div id="stairs" class="stairs">
            	<div id="db2" style="left:78px; top:234px;" onclick="chgFloor(0,-14);"></div>
                <div id="ub1" style="left:78px; top:234px;" onclick="chgFloor(0,14);"></div>
                <div id="db3" style="left:234px; top:234px;" onclick="chgFloor(-10,-1);"></div>
                <div id="ub2" style="left:234px; top:234px;" onclick="chgFloor(10,1);"></div>
                <div id="db4" style="left:78px; top:78px;" onclick="chgFloor(-1,4);"></div>
                <div id="ub3" style="left:78px; top:78px;" onclick="chgFloor(1,-4);"></div>
            </div>
        </div>
        <div id="taaskian-mine" class="overworld" style="width:5616px;"><?php include ('game/maps/mine-map.php'); ?></div>

<script type="text/javascript">

	function bossBattle() {
		move(1,0,1);
		battle(100, 'mineboss');
	}
	
	var charx = 9;
	var chary = 13;
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

		var world = document.getElementById('taaskian-mine');
		xpos = parseInt(world.style.marginLeft);
		ypos = parseInt(world.style.marginTop);
		boundary();
		
		if (nb !== 1) {
			battle(350, 'mine');
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
					
					var left = data.mine_lefttile;
					var right = data.mine_righttile;
					var top = data.mine_toptile;
					var bot = data.mine_bottomtile;
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
					
					if(tright == 2){
						addTask('dngn1area');
					}
					else {}
					
					if(right == 1){
						$("#aright").css('display', 'none');
					}
					else if(tright == 1){
						$("#aright").css('display', 'none');
						ajax(7,1);
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
					else if(tbot == 1){
						$("#abottom").css('display', 'none');
						ajax(7,1);
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
					
					if (charx == 9 && chary == 13) {
						$("#retbutton").css('display', '');
					}
					else {
						$("#retbutton").css('display', 'none');
					}
					
					if (charx == 2 && chary == 10) {
						$("#mineroom").css('display', 'none');
						addTask("d1boss");
					}
					else {
						$("#mineroom").css('display', 'none');
					}
					
					if (charx == 6 && chary == 15) {
						$("#stairs").css('display', '');
						$("#db2").css('display', '');
						$("#ub1").css('display', 'none');
						$("#db3").css('display', 'none');
						$("#ub2").css('display', 'none');
						$("#db4").css('display', 'none');
						$("#ub3").css('display', 'none');
					}
					else if (charx == 6 && chary == 1) {
						$("#stairs").css('display', '');
						$("#db2").css('display', 'none');
						$("#ub1").css('display', '');
						$("#db3").css('display', 'none');
						$("#ub2").css('display', 'none');
						$("#db4").css('display', 'none');
						$("#ub3").css('display', 'none');
					}
					else if (charx == 14 && chary == 6) {
						$("#stairs").css('display', '');
						$("#db2").css('display', 'none');
						$("#ub1").css('display', 'none');
						$("#db3").css('display', '');
						$("#ub2").css('display', 'none');
						$("#db4").css('display', 'none');
						$("#ub3").css('display', 'none');
					}
					else if (charx == 4 && chary == 5) {
						$("#stairs").css('display', '');
						$("#db2").css('display', 'none');
						$("#ub1").css('display', 'none');
						$("#db3").css('display', 'none');
						$("#ub2").css('display', '');
						$("#db4").css('display', 'none');
						$("#ub3").css('display', 'none');
					}
					else if (charx == 3 && chary == 6) {
						$("#stairs").css('display', '');
						$("#db2").css('display', 'none');
						$("#ub1").css('display', 'none');
						$("#db3").css('display', 'none');
						$("#ub2").css('display', 'none');
						$("#db4").css('display', '');
						$("#ub3").css('display', 'none');
					}
					else if (charx == 2 && chary == 10) {
						$("#stairs").css('display', '');
						$("#db2").css('display', 'none');
						$("#ub1").css('display', 'none');
						$("#db3").css('display', 'none');
						$("#ub2").css('display', 'none');
						$("#db4").css('display', 'none');
						$("#ub3").css('display', '');
					}
					else {
						$("#stairs").css('display', 'none');
					}
				}
			});
		}
	}
			
</script>
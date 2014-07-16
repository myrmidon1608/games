        
    	<div class="navigation">
        	<div class="return-button" id="retbutton">
            <a href="index.php?state=w02"><img src="game/images/navigation/arrow-bottom.png" alt="v" /></a>
            </div>
            <div class="bossroom" id="towerroom" style="position:absolute; display:none;">
            <img src="game/images/navigation/arrow-right.png" alt=">" onclick="bossBattle();" />
            </div>
            <div id="stairs" class="stairs">
            	<div id="uf2" style="left:234px; top:78px;" onclick="chgFloor(6,0);"></div>
                <div id="df1" style="left:234px; top:78px;" onclick="chgFloor(-6,0);"></div>
                <div id="uf3" style="left:234px; top:78px;" onclick="chgFloor(6,0);"></div>
                <div id="df2" style="left:234px; top:78px;" onclick="chgFloor(-6,0);"></div>
                <div id="uf4" style="left:234px; top:78px;" onclick="chgFloor(-12,6);"></div>
                <div id="df3" style="left:234px; top:78px;" onclick="chgFloor(12,-6);"></div>
                <div id="uf5" style="left:234px; top:78px;" onclick="chgFloor(6,0);"></div>
                <div id="df4" style="left:234px; top:78px;" onclick="chgFloor(-6,0);"></div>
                <div id="uf6" style="left:78px; top:78px;" onclick="chgFloor(2,0);"></div>
                <div id="df5" style="left:78px; top:78px;" onclick="chgFloor(-2,0);"></div>
            </div>
        </div>
        <div id="loyios-tower" class="overworld" style="width:6669px;"><?php include ('game/maps/tower-map.php'); ?></div>

<script type="text/javascript">

	function bossBattle() {
		move(1,0,1);
		battle(100, 'towerboss');
	}
	
	var charx = 3;
	var chary = 5;
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
		
		var world = document.getElementById('loyios-tower');
		xpos = parseInt(world.style.marginLeft);
		ypos = parseInt(world.style.marginTop);
		boundary();
		
		if (nb !== 1) {
			battle(350, 'tower');
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
					
					var left = data.tow_lefttile;
					var right = data.tow_righttile;
					var top = data.tow_toptile;
					var bot = data.tow_bottomtile;
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
					else if(ttop == 2){
						$("#atop").css('display', 'none');
						ajax(6,1);
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
					
					if (charx == 3 && chary == 5) {
						$("#retbutton").css('display', '');
					}
					else {
						$("#retbutton").css('display', 'none');
					}
					
					if (charx == 10 && chary == 7) {
						$("#towerroom").css('display', 'none');
						addTask("d2boss");
					}
					else {
						$("#towerroom").css('display', 'none');
					}
					
					if (charx == 2 && chary == 1) {
						$("#stairs").css('display', '');
						$("#uf2").css('display', '');
						$("#df1").css('display', 'none');
						$("#uf3").css('display', 'none');
						$("#df2").css('display', 'none');
						$("#uf4").css('display', 'none');
						$("#df3").css('display', 'none');
						$("#uf5").css('display', 'none');
						$("#df4").css('display', 'none');
						$("#uf6").css('display', 'none');
						$("#df5").css('display', 'none');
					}
					else if (charx == 8 && chary == 1) {
						$("#stairs").css('display', '');
						$("#uf2").css('display', 'none');
						$("#df1").css('display', '');
						$("#uf3").css('display', 'none');
						$("#df2").css('display', 'none');
						$("#uf4").css('display', 'none');
						$("#df3").css('display', 'none');
						$("#uf5").css('display', 'none');
						$("#df4").css('display', 'none');
						$("#uf6").css('display', 'none');
						$("#df5").css('display', 'none');
					}
					else if (charx == 10 && chary == 1) {
						$("#stairs").css('display', '');
						$("#uf2").css('display', 'none');
						$("#df1").css('display', 'none');
						$("#uf3").css('display', '');
						$("#df2").css('display', 'none');
						$("#uf4").css('display', 'none');
						$("#df3").css('display', 'none');
						$("#uf5").css('display', 'none');
						$("#df4").css('display', 'none');
						$("#uf6").css('display', 'none');
						$("#df5").css('display', 'none');
					}
					else if (charx == 16 && chary == 1) {
						$("#stairs").css('display', '');
						$("#uf2").css('display', 'none');
						$("#df1").css('display', 'none');
						$("#uf3").css('display', 'none');
						$("#df2").css('display', '');
						$("#uf4").css('display', 'none');
						$("#df3").css('display', 'none');
						$("#uf5").css('display', 'none');
						$("#df4").css('display', 'none');
						$("#uf6").css('display', 'none');
						$("#df5").css('display', 'none');
					}
					else if (charx == 14 && chary == 1) {
						$("#stairs").css('display', '');
						$("#uf2").css('display', 'none');
						$("#df1").css('display', 'none');
						$("#uf3").css('display', 'none');
						$("#df2").css('display', 'none');
						$("#uf4").css('display', '');
						$("#df3").css('display', 'none');
						$("#uf5").css('display', 'none');
						$("#df4").css('display', 'none');
						$("#uf6").css('display', 'none');
						$("#df5").css('display', 'none');
					}
					else if (charx == 2 && chary == 7) {
						$("#stairs").css('display', '');
						$("#uf2").css('display', 'none');
						$("#df1").css('display', 'none');
						$("#uf3").css('display', 'none');
						$("#df2").css('display', 'none');
						$("#uf4").css('display', 'none');
						$("#df3").css('display', '');
						$("#uf5").css('display', 'none');
						$("#df4").css('display', 'none');
						$("#uf6").css('display', 'none');
						$("#df5").css('display', 'none');
					}
					else if (charx == 3 && chary == 9) {
						$("#stairs").css('display', '');
						$("#uf2").css('display', 'none');
						$("#df1").css('display', 'none');
						$("#uf3").css('display', 'none');
						$("#df2").css('display', 'none');
						$("#uf4").css('display', 'none');
						$("#df3").css('display', 'none');
						$("#uf5").css('display', '');
						$("#df4").css('display', 'none');
						$("#uf6").css('display', 'none');
						$("#df5").css('display', 'none');
					}
					else if (charx == 9 && chary == 9) {
						$("#stairs").css('display', '');
						$("#uf2").css('display', 'none');
						$("#df1").css('display', 'none');
						$("#uf3").css('display', 'none');
						$("#df2").css('display', 'none');
						$("#uf4").css('display', 'none');
						$("#df3").css('display', 'none');
						$("#uf5").css('display', 'none');
						$("#df4").css('display', '');
						$("#uf6").css('display', 'none');
						$("#df5").css('display', 'none');
					}
					else if (charx == 8 && chary == 7) {
						$("#stairs").css('display', '');
						$("#uf2").css('display', 'none');
						$("#df1").css('display', 'none');
						$("#uf3").css('display', 'none');
						$("#df2").css('display', 'none');
						$("#uf4").css('display', 'none');
						$("#df3").css('display', 'none');
						$("#uf5").css('display', 'none');
						$("#df4").css('display', 'none');
						$("#uf6").css('display', '');
						$("#df5").css('display', 'none');
					}
					else if (charx == 10 && chary == 7) {
						$("#stairs").css('display', '');
						$("#uf2").css('display', 'none');
						$("#df1").css('display', 'none');
						$("#uf3").css('display', 'none');
						$("#df2").css('display', 'none');
						$("#uf4").css('display', 'none');
						$("#df3").css('display', 'none');
						$("#uf5").css('display', 'none');
						$("#df4").css('display', 'none');
						$("#uf6").css('display', 'none');
						$("#df5").css('display', '');
					}
					else {
						$("#stairs").css('display', 'none');
					}
				}
			});
		}
	}
		
</script>
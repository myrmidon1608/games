        
    	<div class="navigation">
            <div id="enter">
                <div id="entertown1" style="width:78px; height:39px; left:234px; top:78px;" onclick="enter();"></div>
                <div id="entertown2" style="width:78px; height:39px; left:39px; top:234px;" onclick="enter();"></div>
                <div id="entertown3" style="width:78px; height:39px; left:234px; top:78px;" onclick="enter();"></div>
                
                <a href="index.php?state=shr01"><div id="shrine1" style="width:39px; height:39px; left:78px; top:234px;"></div></a>
                <a href="index.php?state=shr02"><div id="shrine2" style="width:39px; height:39px; left:78px; top:234px;"></div></a>
                <a href="index.php?state=brk01"><div id="brkshn1" style="width:39px; height:39px; left:234px; top:78px;"></div></a>
                <a href="index.php?state=brk02"><div id="brkshn2" style="width:39px; height:39px; left:234px; top:78px;"></div></a>
                <a href="index.php?state=brk03"><div id="brkshn3" style="width:39px; height:39px; left:234px; top:234px;"></div></a>
                <a href="index.php?state=brk04"><div id="brkshn4" style="width:39px; height:39px; left:234px; top:234px;"></div></a>
                
                <a href="index.php?state=mn01"><div id="dngn1" style="width:39px; height:39px; left:78px; top:234px;"></div></a>
                <a href="index.php?state=tw01"><div id="dngn2" style="width:39px; height:78px; left:273px; top:234px;"></div></a>        
                <a href="index.php?state=bs01"><div id="dngn3" style="width:39px; height:39px; left:39px; top:275px;"></div></a>
            </div>
            <div id="exit" style="display:none;">
            	<div class="exit-button" onclick="exit('town');"><img src="game/images/navigation/arrow-exit.png" alt="<" /></div>
            </div>
        </div>
        
        <span class="datax" style="display:none;" onclick="exit('building');">X</span>
        <div id="town1name">
            <div>
                <div id="town1" class="town1">
                	<div style="background:url(game/images/navigation/enter-up.png); left:39px; top:39px;" onclick="enter('house');"></div>
                    <div style="background:url(game/images/navigation/enter-up.png); left:273px; top:39px;" onclick="enter('shop');"></div>
                    <div style="background:url(game/images/navigation/enter-down.png); left:78px; top:273px;" onclick="enter('inn');"></div>
                    <div style="background:url(game/images/navigation/enter-right.png); left:195px; top:234px;" onclick="enter('temple');"></div>
                </div>
                <div id="house1" class="town1build" style="display:none;">
					<?php town_building('nochar', 'THE DOOR IS LOCKED. KNOCK ON THE DOOR?', 'NO ONE ANSWERED.', '"house"', '"building"'); ?>
                </div>
                <div id="shop1" class="town1build" style="display:none;">
					<?php town_building('shopkeep', 'WELCOME! WOULD YOU LIKE TO TRADE?', 'TAKE A LOOK AT MY WARES.', '"shop"',  '"building"'); ?>
                    <div class="shop-box" style="display:none;">
                    	<ul>
                        	<li id="pn1"></li>
                            <li id="wp1"></li>
                            <li id="am1"></li>
                            <li id="ac1"></li>
                        </ul>
                    </div>
                </div>
                <div id="inn1" class="town1build" style="display:none;">
					<?php town_building('innkeep', 'WELCOME! WOULD YOU LIKE TO REST?', 'HAVE A GOOD NIGHT.', '"inn"', '"building"'); ?>
                    <div class="night" style="display:none;"></div>
                </div>
                <div id="temple1" class="town1build" style="display:none;">
                 	<img src="game/images/characters/priest-pray.png" class="pray-char" style="z-index:50; display:none;" />
					<?php town_building('priest', 'GOD IS ALWAYS WITH US. LET US PRAY.', '...',  '"temple"', '"building"'); ?>
                    <div class="prayer" style="display:none;">
                    	<span>AMEN.</span>
                    </div>
                </div>       
            </div>
        </div>
        <div id="town2name">
            <div>
                <div id="town2" class="town2">
                	<div style="background:url(game/images/navigation/enter-up.png); left:39px; top:39px;" onclick="enter('house');"></div>
                    <div style="background:url(game/images/navigation/enter-up.png); left:273px; top:39px;" onclick="enter('shop');"></div>
                    <div style="background:url(game/images/navigation/enter-down.png); left:78px; top:273px;" onclick="enter('inn');"></div>
                    <div style="background:url(game/images/navigation/enter-right.png); left:195px; top:234px;" onclick="enter('temple');"></div>
                </div>
                <div id="house2" class="town2build" style="display:none;">
					<?php town_building('nochar', 'THE DOOR IS LOCKED. KNOCK ON THE DOOR?', 'NO ONE ANSWERED.', '"house"', '"building"'); ?>
                </div>
                <div id="shop2" class="town2build" style="display:none;">
					<?php town_building('shopkeep', 'WELCOME! WOULD YOU LIKE TO TRADE?', 'TAKE A LOOK AT MY WARES.', '"shop"',  '"building"'); ?>
                    <div class="shop-box" style="display:none;">
                    	<ul>
                        	<li id="pn2"></li>
                            <li id="wp2"></li>
                            <li id="am2"></li>
                            <li id="ac2"></li>
                        </ul>
                    </div>
                </div>
                <div id="inn2" class="town2build" style="display:none;">
					<?php town_building('innkeep', 'WELCOME! WOULD YOU LIKE TO REST?', 'HAVE A GOOD NIGHT.', '"inn"', '"building"'); ?>
                    <div class="night" style="display:none;"></div>
                </div>
                <div id="temple2" class="town2build" style="display:none;">
                	<img src="game/images/characters/priest-pray.png" class="pray-char" style="z-index:50; display:none;" />
					<?php town_building('priest', 'GOD IS ALWAYS WITH US. LET US PRAY.', '...',  '"temple"', '"building"'); ?>
                    <div class="prayer" style="display:none;">
                    	<span>AMEN.</span>
                    </div>
                </div>      
            </div>
        </div>
        <div id="town3name">
            <div>
                <div id="town3" class="town3">
                	<div style="background:url(game/images/navigation/enter-up.png); left:39px; top:39px;" onclick="enter('house');"></div>
                    <div style="background:url(game/images/navigation/enter-up.png); left:273px; top:39px;" onclick="enter('shop');"></div>
                    <div style="background:url(game/images/navigation/enter-down.png); left:78px; top:273px;" onclick="enter('inn');"></div>
                    <div style="background:url(game/images/navigation/enter-right.png); left:195px; top:234px;" onclick="enter('temple');"></div>
                </div>
                <div id="house3" class="town3build" style="display:none;">
					<?php town_building('nochar', 'THE DOOR IS LOCKED. KNOCK ON THE DOOR?', 'NO ONE ANSWERED.', '"house"', '"building"'); ?>
                </div>
                <div id="shop3" class="town3build" style="display:none;">
					<?php town_building('shopkeep', 'WELCOME! WOULD YOU LIKE TO TRADE?', 'TAKE A LOOK AT MY WARES.', '"shop"',  '"building"'); ?>
                    <div class="shop-box" style="display:none;">
                    	<ul>
                        	<li id="pn3"></li>
                            <li id="wp3"></li>
                            <li id="am3"></li>
                            <li id="ac3"></li>
                        </ul>
                    </div>
                </div>
                <div id="inn3" class="town3build" style="display:none;">
					<?php town_building('innkeep', 'WELCOME! WOULD YOU LIKE TO REST?', 'HAVE A GOOD NIGHT.', '"inn"', '"building"'); ?>
                    <div class="night" style="display:none;"></div>
                </div>
                <div id="temple3" class="town3build" style="display:none;">
                	<img src="game/images/characters/priest-pray.png" class="pray-char" style="z-index:50; display:none;" />
					<?php town_building('priest', 'GOD IS ALWAYS WITH US. LET US PRAY.', '...',  '"temple"', '"building"'); ?>
                    <div class="prayer" style="display:none;">
                    	<span>AMEN.</span>
                    </div>
                </div>      
            </div>
        </div>
    	<div id="overworld" class="overworld" style="width:14040px; margin:0;"><?php include ('game/maps/world-map.php') ?></div>
        
<script>

	var t1x = 14;
	var t1y = 30;
	var t2x = 15;
	var t2y = 21;
	var t3x = 2;
	var t3y = 26;
	
	var sh1x = 5;
	var sh1y = 17;
	var sh2x = 5;
	var sh2y = 22;
	var sh3x = 18;
	var sh3y = 23;
	var sh4x = 26;
	var sh4y = 23;
	var sh5x = 30;
	var sh5y = 18;
	var sh6x = 30;
	var sh6y = 12;
	
</script>
<script type="text/javascript" src="game/insert-tasks.js"></script>
<script>
	
	function startGame() {
		$("#start-screen").css('display', 'none');
	}
	
	function shopItem(town) {
			var t = town;
			
			$.ajax({
				type: "POST",
				url: "php/itemcheck.php",
				dataType: "json",
				success: function(items) {
					var p = items.potion;
					var w = items.weapon;
					var a = items.armor;
					var m = items.access;
					
					var pid = items.pid;
					var wid = items.wid;
					var aid = items.aid;
					var mid = items.mid;

					var potion = document.getElementById("pn" + t);
					potion.innerHTML = p.toUpperCase();
					potion.onclick = function() {
						getItem(pid);
						exit('building');
					}
					var weapon = document.getElementById("wp" + t);
					weapon.innerHTML = w.toUpperCase();
					weapon.onclick = function() {
						getItem(wid);
						exit('building');
					}
					var armor = document.getElementById("am" + t);
					armor.innerHTML = a.toUpperCase();
					armor.onclick = function() {
						getItem(aid);
						exit('building');
					}
					var access = document.getElementById("ac" + t);
					access.innerHTML = m.toUpperCase();
					access.onclick = function() {
						getItem(mid);
						exit('building');
					}

					function getItem(id) {
						var itemid = id;
						
						$.ajax({
							type: "POST",
							url: "php/buycheck.php?id=" + itemid,
							dataType: "json"
						});
					}
				}
			});
		}
	
	function enter(area) {
		var a = area;

		$("#enter").css('display', 'none');
		$("#town1name").css('display', 'none');
		$("#town2name").css('display', 'none');
		$("#town3name").css('display', 'none');
		$('#town-text').css('display', '');
		$('.yes-ret').css('display', 'none');
		$('.town-ans1').css('display', '');
		$('.town-ans2').css('display', 'none');
		$("#start-ini").css('display', 'none');

		if (charx == t1x && chary == t1y) {
			shopItem(1);
			$("#overworld").css('display', 'none');
			$("#arrows").css('display', 'none');
			$("#town1name").css('display', '');
			$("#exit").css('display', '');
			
			if (a == "shop") {
				$('#shop1').css('display', '');
				$('#town1').css('display', 'none');
				$('#exit').css('display', 'none');
			}
			else if (a == "house") {
				$('#house1').css('display', '');
				$('#town1').css('display', 'none');
				$('#exit').css('display', 'none');
			}
			else if (a == "inn") {
				$('#inn1').css('display', '');
				$('#town1').css('display', 'none');
				$('#exit').css('display', 'none');
			}
			else if (a == "temple") {
				$('#temple1').css('display', '');
				$('#town1').css('display', 'none');
				$('#exit').css('display', 'none');
			}
		}
		else if (charx == t2x && chary == t2y) {
			shopItem(2);
			$("#overworld").css('display', 'none');
			$("#arrows").css('display', 'none');
			$("#town2name").css('display', '');
			$("#exit").css('display', '');
			
			if (a == "shop") {
				$('#shop2').css('display', '');
				$('#town2').css('display', 'none');
				$('#exit').css('display', 'none');
			}
			else if (a == "house") {
				$('#house2').css('display', '');
				$('#town2').css('display', 'none');
				$('#exit').css('display', 'none');
			}
			else if (a == "inn") {
				$('#inn2').css('display', '');
				$('#town2').css('display', 'none');
				$('#exit').css('display', 'none');
			}
			else if (a == "temple") {
				$('#temple2').css('display', '');
				$('#town2').css('display', 'none');
				$('#exit').css('display', 'none');
			}
		}
		else if (charx == t3x && chary == t3y) {
			shopItem(3);
			$("#overworld").css('display', 'none');
			$("#arrows").css('display', 'none');
			$("#town3name").css('display', '');
			$("#exit").css('display', '');
			
			if (a == "shop") {
				$('#shop3').css('display', '');
				$('#town3').css('display', 'none');
				$('#exit').css('display', 'none');
			}
			else if (a == "house") {
				$('#house3').css('display', '');
				$('#town3').css('display', 'none');
				$('#exit').css('display', 'none');
			}
			else if (a == "inn") {
				$('#inn3').css('display', '');
				$('#town3').css('display', 'none');
				$('#exit').css('display', 'none');
			}
			else if (a == "temple") {
				$('#temple3').css('display', '');
				$('#town3').css('display', 'none');
				$('#exit').css('display', 'none');
			}
		}
		else {
			$("#overworld").css('display', '');
			$("#arrows").css('display', '');
			$("#town1name").css('display', 'none');
			$("#town2name").css('display', 'none');
			$("#town3name").css('display', 'none');
			$("#exit").css('display', 'none');
		}
	}
	
	function interact(building) {
		var b = building;
		
		$('#town-text').css('display', 'none');
		$('.yes-ret').css('display', '');
		$('.prayer').css('display', 'none');
		$('.town-ans1').css('display', 'none');
		$('.town-ans2').css('display', '');
		$('.pray-char').css('display', '');
		
		if (b == 'shop') {
			$('.shop-box').css('display', '');
			$('.datax').css('display', '');
			$('.town-ans2').css('display', 'none');
			$('.pray-char').css('display', 'none');
		}
		else if (b == 'house') {
			$('.pray-char').css('display', 'none');
			exit('building');
		}
		else if (b == 'inn') {
			$.ajax({
				type: "POST",
				url: "php/inncheck.php",
				dataType: "json",
				success: function(inn) {
					$('.pray-char').css('display', 'none');
					$('.night').fadeIn(1500, function() {
						$('.night').delay(500).css('display', 'none');
						exit('building');
					});
				}
			});
		}
		else if (b == 'temple') {
			$('.pray-char').css('display', 'none');
			$('.yes-ret').css('display', 'none');
			$('.prayer').fadeIn(0).delay(1000).fadeOut(0);
			$('.town-ans2').fadeOut(0).delay(1000).fadeIn(0, function() {
				exit('building');
			});
		}
	}
	
	function exit(area) {
		var a = area;
		
		$("#exit").css('display', 'none');
		$('.shop-box').css('display', 'none');
		
		if (a == "town") {
		move(0, 0, 1);
		$("#start-ini").css('display', '');
			if(charx == t1x && chary == t1y) {
				$("#town1name").css('display', 'none');
				$("#overworld").css('display', '');
				$("#arrows").css('display', '');
				$("#enter").css('display', '');
			}
			else if (charx == t2x && chary == t2y) {
				$("#town2name").css('display', 'none');
				$("#overworld").css('display', '');
				$("#arrows").css('display', '');
				$("#enter").css('display', '');
			}
			else if (charx == t3x && chary == t3y) {
				$("#town3name").css('display', 'none');
				$("#overworld").css('display', '');
				$("#arrows").css('display', '');
				$("#enter").css('display', '');
			}
		}
		else if (a == "building") {
			$('#exit').css('display', '');
			$('.datax').css('display', 'none');
			
			if (charx == t1x && chary == t1y) {
				$('#town1').css('display', '');
				$('#house1').css('display', 'none');
				$('#shop1').css('display', 'none');
				$('#temple1').css('display', 'none');
				$('#inn1').css('display', 'none');
			}
			else if (charx == t2x && chary == t2y) {
				$('#town2').css('display', '');
				$('#house2').css('display', 'none');
				$('#shop2').css('display', 'none');
				$('#temple2').css('display', 'none');
				$('#inn2').css('display', 'none');
			}
			else if (charx == t3x && chary == t3y) {
				$('#town3').css('display', '');
				$('#house3').css('display', 'none');
				$('#shop3').css('display', 'none');
				$('#temple3').css('display', 'none');
				$('#inn3').css('display', 'none');
			}
		}
	}
	
	var charx = 0;
	var chary = 0;
	move(0,0,1);
	
	function savePlace() {
		$.ajax({
			type: "POST",
			url: "php/placecheck.php",
			data: {x:charx, y:chary},
			dataType: "json",
			success: function(pos) {
				$('#save-echo').css('display', '');
				$('#yes-save').css('display', '');
				$('#no-save').css('display', 'none');
				screenExit('start');
			}
		});
	}
	
	function move(mvx, mvy, nobattle) {
		var x = mvx;
		var y = mvy;
		var nb = nobattle;

		var world = document.getElementById('overworld');
		xpos = parseInt(world.style.marginLeft);
		ypos = parseInt(world.style.marginTop);
		boundary();
		
		if (nb !== 1) {
			battle(500000000, 'world');
		}
		else {}
		
		function boundary() {
			
			$.ajax({
				type: "POST",
				url: "php/tilecheck.php",
				dataType: "json",
				data:{x:charx + x, y:chary + y},
				success: function(data) {
					var id = data.id;
					charx += x;
					chary += y;
					
					var left = data.ow_lefttile;
					var right = data.ow_righttile;
					var top = data.ow_toptile;
					var bot = data.ow_bottomtile;
					var tleft = data.task_lefttile;
					var tright = data.task_righttile;
					var ttop = data.task_toptile;
					var tbot = data.task_bottomtile;

					var xypos = document.getElementById("coord");
					xypos.innerText = charx + ", " + chary;
					
					$("#exit").css('display', 'none');
					
					if(left == 1){
						$("#aleft").css('display', 'none');
					}
					else {
						$("#aleft").css('display', '');
					}
					
					if(right == 1 || id == 1){
						$("#aright").css('display', 'none');
					}
					else {
						$("#aright").css('display', '');
					}
					
					if(top == 1 || id == 1){
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
					
					if (charx == t1x && chary == t1y) {
						$("#entertown1").css('display', '');
					}
					else {
						$("#entertown1").css('display', 'none');
					}
					
					if (charx == t2x && chary == t2y) {
						$("#entertown2").css('display', '');
					}
					else {
						$("#entertown2").css('display', 'none');
					}
					
					if (charx == t3x && chary == t3y) {
						$("#entertown3").css('display', '');
					}
					else {
						$("#entertown3").css('display', 'none');
					}
					
					if(tleft == 1 && tbot == 2) {
						addTask("dngn1");
					}
					else {
						$("#dngn1").css('display', 'none');
					}
					if(ttop == 1 && tbot == 2) {
						addTask("dngn2");
					}
					else {
						$("#dngn2").css('display', 'none');
					}
					if (ttop == 3 && bot == 1 && right == 1) {
						addTask("dngn3");
					}
					else {
						$("#dngn3").css('display', 'none');
					}
					
					/*if (tright == 2 && top == 1 && left == 1) {
						addTask("shrine1");
					}
					else {
						$("#shrine1").css('display', 'none');
					}*/
					if (charx == sh1x && chary == sh1y) {
						$("#shrine1").css('display', '');
					}
					else {
						$("#shrine1").css('display', 'none');
					}/**/
					
					if (charx == sh2x && chary == sh2y) {
						$("#shrine2").css('display', '');
					}
					else {
						$("#shrine2").css('display', 'none');
					}
					if (charx == sh3x && chary == sh3y) {
						$("#brkshn1").css('display', '');
					}
					else {
						$("#brkshn1").css('display', 'none');
					}
					if (charx == sh4x && chary == sh4y) {
						$("#brkshn2").css('display', '');
					}
					else {
						$("#brkshn2").css('display', 'none');
					}
					if (charx == sh5x && chary == sh5y) {
						$("#brkshn3").css('display', '');
					}
					else {
						$("#brkshn3").css('display', 'none');
					}
					if (charx == sh6x && chary == sh6y) {
						$("#brkshn4").css('display', '');
					}
					else {
						$("#brkshn4").css('display', 'none');
					}

				}
			});
		}
	}

</script>

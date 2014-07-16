        
        <div id="pause-screen" class="pause-screen" style="padding:10px; display:none;" onload="pause('srncls');">
        	<span class="datax" style="display:none;" onclick="screenExit('stats');">X</span>
            
        	<div class="head-box">
            	<div><img src="game/images/screen/greet.png" alt="HELLO," />
				<?php echo "<span class='greet'>" .strtoupper($_SESSION['nickname']). "</span>"; ?>
                <span id="lvl" class="greet" style="margin:-23px 0px 0px 143px;"></span></div>
            </div>
            <div class="body-box">
            	<ul id="pause">
                	<li onclick="screenExit('start');"><img src="game/images/screen/continue.png" alt="CONTINUE" /></li>
                    <li onclick="itemBox();"><img src="game/images/screen/items.png" alt="ITEMS" /></li>
                    <li onclick="statBox();"><img src="game/images/screen/stats.png" alt="STATS" /></li>  
                    <li onclick="savePlace();"><img src="game/images/screen/save.png" alt="SAVE" /></li>
                    <li onclick="location.reload(true);"><img src="game/images/screen/quit.png" alt="QUIT" /></li>
                </ul>
            </div>

            <div class="pauseimg"></div>
            <div id="item-box" class="shop-box" style="display:none;">
                <ul>
                	<?php 
						session_start();
						
						$uid = $_SESSION['user_id'];
						
						$q = "SELECT item_id FROM user_items WHERE user_id = " .$uid. " ORDER BY item_id ASC";
						$ui = mysql_query($q);							
						
						while($inv = mysql_fetch_array($ui, MYSQL_ASSOC)) {
							$q = mysql_query("SELECT name FROM items WHERE item_id = " .$inv['item_id']);
							$item = mysql_fetch_array($q);
							$name = strtoupper($item['name']);
							echo "<li>{$name}</li>";
						}
					?>
                </ul>
        	</div>
            
            <div id="stat-box" class="stat-box" style="display:none;">
                <ul>
                	<li id="hth"></li>
                    <li id="exp"></li><br />
                    <li id="atk"></li>
                    <li id="def"></li><br />
                    <li id="tsk"></li><br />
                    <li>TIME :</li>
                </ul>
        	</div>
        </div>
        
        <div id="save-echo" class="echo" style="display:none;">
            <div>
                <div class="town-text">
                <span id="yes-save" style="display:none;">YOUR GAME HAS BEEN SAVED.</span>
                <span id="no-save" style="display:none;">YOU CANNOT SAVE HERE.</span>
                </div>
                <div class="task-ans">
                    <div style="cursor:pointer; padding-left:10px;" onclick="screenExit('save');">
                    <img src="game/images/screen/ok.png" alt="OK" />
                    </div>
                </div>
            </div>
        </div>
        
        <div id="task-echo" class="echo" style="display:none;">
            <div>
                <div class="town-text">
                <span>TASK: "<span id="nametask"></span>" HAS BEEN ADDED.</span>
                </div>
                <div class="task-ans">
                    <div style="cursor:pointer; padding-left:10px;" onclick="screenExit('task');">
                    <img src="game/images/screen/ok.png" alt="OK" />
                    </div>
                </div>
            </div>
        </div>   
    
    	<div class="char">
        <img id="ini" src="game/images/char-stand.png" style="display:none;" alt="|-|" />
        <img id="walk" src="game/images/char-walk.gif" style="display:none;" alt="|-|" />
        </div>
        
        <div class="navigation">
            <div id="arrows"><?php arrow_nav("move"); ?></div>
            <div class="trans" style="display:none;"></div>
        </div>
        
        <div id="battle" class="battle" style="display:none;">
        	<ul id="encounter">
                <li id="row1"></li>
                <li id="row2"></li>
                <li id="row3"></li>
                <li id="row4"></li>
                <li id="row5"></li>
                <li id="row6"></li>
                <li id="row7"></li>
                <li id="row8"></li>
                <li id="row9"></li>
            </ul>
            <ul id="encounter2">
                <li id="col1"></li>
                <li id="col2"></li>
                <li id="col3"></li>
                <li id="col4"></li>
                <li id="col5"></li>
                <li id="col6"></li>
                <li id="col7"></li>
                <li id="col8"></li>
                <li id="col9"></li>
            </ul>
        	<div id="cont" style="position:absolute; left:258px; top:327px; display:none;">
        		<a href="index.php"><img src="game/images/screen/continue.png" alt="CONTINUE" /></a>
            </div>
        	<?php include('game/toggle-enemy.php'); ?>
        </div>
        
        <div class="data">
            <span id="coord" style="float:right;"></span>
            <span id="start-ini" style="float:left;" onclick="pause();"></span>
        </div>
        
        <?php include ('game/maps/map-state.php'); ?>

        <script type="text/javascript">
  		var hideDiv = function(){
			$('.show-load').css('display', 'none');
			update();
			
		};
  		var oldLoad = window.onload;
  		var newLoad = oldLoad ? function(){
			hideDiv.call(this);
			oldLoad.call(this);
		} : hideDiv;
  		window.onload = newLoad;
		
		function pause() {
			$("#pause-screen").slideDown(500);
			$("#arrows").css('display', 'none');
			updateStats();
			updateItems();
		}

		$(window).load(function() {
			$('.show-load').fadeIn(0, function() {
				$('.show-load').delay(250).fadeOut(250);
			});
		});
		
		function updateStats() {
			$.ajax({
				type: "POST",
				url: "php/statcheck.php",
				dataType: "json",
				success: function(stat) {
					var lv = stat.plv;
					var xp = stat.plxp;
					var nl = stat.lvup;
					var chp = stat.chp;
					var thp = stat.plhp;
					var ap = stat.plap;
					var dp = stat.pldp;
					var tn = stat.tasks;
					
					var ph = document.getElementById("hth");
					ph.innerHTML = "HP : " + chp + " / " + thp;
					var px = document.getElementById("exp");
					px.innerHTML = "XP : " + xp + " / " + nl;
					var pa = document.getElementById("atk");
					pa.innerHTML = "ATK : " + ap;
					var pd = document.getElementById("def");
					pd.innerHTML = "DEF : " + dp;
					var tsk = document.getElementById("tsk");
					tsk.innerHTML = "TASKS : " + tn;
					var bph = document.getElementById("curhp");
					bph.innerHTML = "HP : " + chp;
					
					var pl = document.getElementById("lvl");
					pl.innerHTML = "LV : " + lv;
				}
			});
		}
			
		function updateItems() {
			$.ajax({
				type: "POST",
				url: "php/buycheck.php",
				dataType: "json"
			});
		}
		
		function retArea(xpos, ypos) {
			var orgx = xpos;
			var orgy = xpos;
			$.ajax({
				type: "POST",
				url: "php/placecheck.php",
				dataType: "json",
				success: function(pos) {
					var x = pos.x - 0;
					var y = pos.y - 0;
					move(x, y, 1);
				}
			});
		}
		
		function statBox() {
			$('.datax').css('display', '');
			$("#stat-box").css('display', '');
			$("#item-box").css('display', 'none');
		}
		
		function itemBox() {
			$('.datax').css('display', '');
			$("#item-box").css('display', '');
			$("#stat-box").css('display', 'none');
		}

		function screenExit(scn) {
			var s = scn;
		
			if (s == "start") {
				move(0, 0, 1);
				$("#pause-screen").css('display', 'none');
				$("#arrows").css('display', '');
				screenExit('stats');
			}
			else if (s == "stats") {
				$('.datax').css('display', 'none');
				$("#item-box").css('display', 'none');
				$("#stat-box").css('display', 'none');
				$(".shop-box").css('display', 'none');
			}
			else if (s == "task") {
				$('#task-start').css('display', 'none');
				$('#task-echo').css('display', 'none');
			}
			else if (s == "save") {
				$('#save-echo').css('display', 'none');
			}
		}
		
		function chgFloor(mx, my) {
			var x = mx;
			var y = my;
			$('.trans').fadeIn(100).delay(100).fadeOut(100);
			move(x,y,1);
		}		
        </script>
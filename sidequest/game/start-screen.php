	
	<div id="task-start" style="display:none;">
		<div>
			<div class="task-box">
			<span style="font-family:Verdana, Geneva, sans-serif; font-size:14px; font-weight:bold; line-height:20px;">TASK: "<span id="starttask"></span>" HAS BEEN ADDED.</span>
			</div>
			<div class="start-ans">
				<div style="cursor:pointer; padding-left:10px;" onclick="screenExit('task');">
				<img src="game/images/screen/ok.png" alt="OK" />
				</div>
			</div>
		</div>
	</div>   
	
	<div id='start-screen'>
		<div id='sslogo' style='width:100%; background:none; padding:0px;'><img src='game/images/screen/logo.png' alt='sideQUEST' /></div>
		<div id='ssng' style='cursor:pointer;' onclick='startGame();'><img src='game/images/screen/new-game.png' alt='NEW GAME' /></div>
		<div id='ssctn' style='cursor:pointer; display:none;' onclick='startGame();'><img src='game/images/screen/continue.png' alt='CONTINUE' /></div>
	</div>
	<script type='text/javascript'>
		var id = 1;
		$.ajax({
			type: "POST",
			url: "php/taskcheck.php?taskid=" + id,
			dataType: "json",
			success: function(task) {
				var tn = document.getElementById("starttask");
				var qn = task.name;
				var ts = task.status;
				var ta = task.active;
				var id = task.id;
				
				if(ta == 1 || ts == 1) {
					$(window).load(function() {
						$('#sslogo').fadeIn(1000, function() {
							$('#ssctn').fadeIn(1000);
							retArea(13,19);
						});
					});
				}
				else {
					$(window).load(function() {
						$('#sslogo').fadeIn(1000, function() {
							$('#ssng').fadeIn(1000, function() {
								$('#task-start').css('display', '');
								tn.innerHTML = qn.toUpperCase();
							});
						});
					});
				}
			}
		});
	</script>
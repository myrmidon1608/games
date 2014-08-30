
var PlayGame = {
    
    initId: 1,
    
    load: function() {
        $(".show-load").addClass("hide");
		/*$.ajax({
			type: "POST",
			url: "php/taskcheck.php?taskid=" + this.initId,
			dataType: "json",
			success: function(task) {
				var tn = document.getElementById("starttask");
				var qn = task.name;
				var ts = task.status;
				var ta = task.active;
				var id = task.id;
				
				if(ta == 1 || ts == 1) {
                    $('#sslogo').fadeIn(1000, function() {
                        $('#ssctn').fadeIn(1000);
                        retArea(13,19);
                    });
				}
				else {*/
                    $("#sslogo").fadeIn(1000, function() {
                        $("#ssng").fadeIn(1000, function() {
                            $("#task-start").removeClass("hide");
                            //tn.innerHTML = qn.toUpperCase();
                        });
                    });
				/*}
			}
		});*/
    },
    
    start: function(type) {
		$("#" + type + "-screen").addClass("hide");
    },
    
	move: function(mvx, mvy, noBattle) {
		var ajaxData  = {
                x: mvx,
                y: mvy
            };
		
		if (noBattle !== 1) {
			//battle(500000000, 'world');
		}
			
        $.ajax({
            type: "POST",
            url: "php/tilecheck.php",
            dataType: "json",
            data: ajaxData,
            success: function(data) {
                console.log(data);
                console.log(SIDEQUEST.initPos);
                console.log(SIDEQUEST.screenSize);
                console.log(SIDEQUEST.initPos[0] * SIDEQUEST.screenSize[0], SIDEQUEST.initPos[1] * SIDEQUEST.screenSize[1]);
                var id = data.id;

                /*var xypos = ("#coord");
                xypos.text(xpos + ", " + ypos);*/
                SIDEQUEST.setPosition(SIDEQUEST.initPos[0] + data.charx, SIDEQUEST.initPos[1] + data.chary);

                /*var left = data.ow_lefttile;
                var right = data.ow_righttile;
                var top = data.ow_toptile;
                var bot = data.ow_bottomtile;
                var tleft = data.task_lefttile;
                var tright = data.task_righttile;
                var ttop = data.task_toptile;
                var tbot = data.task_bottomtile;*/

                $("#exit").css('display', 'none');

                /*if(left == 1){
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

                if (xpos == t1x && ypos == t1y) {
                    $("#entertown1").css('display', '');
                }
                else {
                    $("#entertown1").css('display', 'none');
                }

                if (xpos == t2x && ypos == t2y) {
                    $("#entertown2").css('display', '');
                }
                else {
                    $("#entertown2").css('display', 'none');
                }

                if (xpos == t3x && ypos == t3y) {
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
                /*if (xpos == sh1x && ypos == sh1y) {
                    $("#shrine1").css('display', '');
                }
                else {
                    $("#shrine1").css('display', 'none');
                }

                if (xpos == sh2x && ypos == sh2y) {
                    $("#shrine2").css('display', '');
                }
                else {
                    $("#shrine2").css('display', 'none');
                }
                if (xpos == sh3x && ypos == sh3y) {
                    $("#brkshn1").css('display', '');
                }
                else {
                    $("#brkshn1").css('display', 'none');
                }
                if (xpos == sh4x && ypos == sh4y) {
                    $("#brkshn2").css('display', '');
                }
                else {
                    $("#brkshn2").css('display', 'none');
                }
                if (xpos == sh5x && ypos == sh5y) {
                    $("#brkshn3").css('display', '');
                }
                else {
                    $("#brkshn3").css('display', 'none');
                }
                if (xpos == sh6x && ypos == sh6y) {
                    $("#brkshn4").css('display', '');
                }
                else {
                    $("#brkshn4").css('display', 'none');
                }*/
            }
        });
	}
};
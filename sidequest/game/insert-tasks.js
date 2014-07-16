// JavaScript Document

function addTask(desc) {
	var d = desc;
	
	if(d == "dngn1") {
		ajax(2,0);
	}
	else if(d == "d1boss") {
		ajax(4,0);
	}
	else if(d == "dngn2") {
		ajax(3,0);
	}
	else if(d == "dngn2area") {
		ajax(6,0);
	}
	else if(d == "d2boss") {
		ajax(9,0);
	}
	else if(d == "shrine1") {
		ajax(11,0);
	}
	else if(d == "dngn3") {
		ajax(12,0);
	}
	else if(d == "d3boss") {
		ajax(17,0);
	}
}

function ajax(tid, chk) {
	var id = tid;
	var c = chk;
	
	$.ajax({
		type: "POST",
		url: "php/taskcheck.php?taskid=" + id,
		dataType: "json",
		success: function(task) {
			var tn = document.getElementById("nametask");
			var qn = task.name;
			var ts = task.status;
			var ta = task.active;
			var id = task.id;
			
			if(ta == 1 || ts == 1) {}
			else {
				$('#task-echo').css('display', '');
				tn.innerHTML = qn.toUpperCase();
				if(id == 2) {
					ajax(2,0);
				}
				else if(id == 3) {
					ajax(3,0);
				}
				else if(id == 11) {
					ajax(11,0);
				}
				else if(id == 12) {
					ajax(12,0);
				}
			}
			
			if(id == 2 && ta == 1) {
				$("#dngn1").css('display', 'none');
			}
			else if(charx == 11 && chary == 16 && ta == 0) {
				$("#dngn1").css('display', '');
			}
			
			if(c == 1) {
				if(id == 6 && ta == 0) {
					$("#atop").css('display', '');
				}
				else if(id == 7 && ta == 0) {
					$("#aright").css('display', '');
					$("#abottom").css('display', '');
				}
				else if(id == 13 && ta == 0) {
					$("#aleft").css('display', '');
				}
				else if(id == 14 && ta == 0) {
					$("#aright").css('display', '');
				}
				else if(id == 15 && ta == 0) {
					$("#atop").css('display', '');
				}
				else if(id == 16 && ta == 0) {
					$("#abottom").css('display', '');
				}
			}
			
			if(id == 4 && ta == 0) {
				$("#mineroom").css('display', '');
			}
			else{
				$("#mineroom").css('display', 'none');
			}
				
			if(id == 3 && ta == 1) {
				$("#dngn2").css('display', 'none');
			}
			else if(charx == 8 && chary == 10) {
				$("#dngn2").css('display', '');
			}
			
			if(id == 9 && ta == 0) {
				$("#towerroom").css('display', '');
			}
			else {
				$("#towerroom").css('display', 'none');
			}	
			
			/*if(id == 11 && ta == 1) {
				$("#shrine1").css('display', 'none');
			}
			else if(charx == sh1x && chary == sh1y) {
				$("#shrine1").css('display', '');
			}*/
			
			if(id == 12 && ta == 1) {
				$("#dngn3").css('display', 'none');
			}
			else if(charx == 1 && chary == 15) {
				$("#dngn3").css('display', '');
			}
			
			if(id == 17 && ta == 0) {
				$("#blessedroom").css('display', '');
			}
			else {
				$("#blessedroom").css('display', 'none');
			}
		}
	});
}

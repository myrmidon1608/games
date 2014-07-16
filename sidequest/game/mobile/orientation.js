
	window.addEventListener("load", function() {
		setTimeout(loaded, 100)
	}, false);
	
	function loaded() {
		document.getElementById("page_wrapper").style.visibility = "visible";
		window.scrollTo(0, 1);
	}

	window.onload = function initialLoad(){
		updateOrientation();
	}
	
	function updateOrientation(){
		var contentType = "show_";
		switch(window.orientation){
			case 0:
			contentType += "portrait";
			break;
			
			case -90:
			contentType += "landscape";
			break;
			
			case 90:
			contentType += "landscape";
			break;
		}
	document.getElementById("page_wrapper").setAttribute("class", contentType);
	}
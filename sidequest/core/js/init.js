
$(document).ready(init);

function init() {
    $("#sword").animate({ "left": "27%" }, 1000);
    
    PlayGame.load();
    
    $("[data-screen]").on("click", function(e) {
        var type = $(this).data("screen");
        
        SIDEQUEST.setPosition(30, 19);
        PlayGame.start(type);
    });
    
    $("[data-arrow]").on("click", function(e) {
        var arrow = $(this).data("arrow");
        
        PlayGame.move(SIDEQUEST.arrowCoords[arrow][0], SIDEQUEST.arrowCoords[arrow][1]);
    });
}

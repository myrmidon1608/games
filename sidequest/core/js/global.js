
var SIDEQUEST = {
    
    initPos: [30, 19],
    screenSize: [351, 351],
    
    arrowCoords: {
        "up":    [0, -1],
        "right": [1, 0],
        "down":  [0, 1],
        "left":  [-1, 0]
    },
    
    setPosition: function(xpos, ypos) {
        var worldNode = $("#overworld"),
            curDate   = new Date(),
            resetChar = curDate.getTime(), // Resets walking GIF
            charNode  = $("#character img"),
            charSrc   = "game/images/char-walk.gif?" + resetChar;
        
        this.initPos[0] = xpos;
        this.initPos[1] = ypos;

        
        charNode.removeClass("hide").attr("src", charSrc);
        worldNode.css("margin-left", ((-this.initPos[0] * this.screenSize[0]) + "px"));
        worldNode.css("margin-top", ((-this.initPos[1] * this.screenSize[1]) + "px"));
    }
}
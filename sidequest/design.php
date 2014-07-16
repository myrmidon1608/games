<?php $title= "Game Design Document";
$desc= "This is the official game design document for 'sideQUEST'. It is a living document; there will be various tweaks and changes over the course of the development process.";
include ('top.php'); ?>
            
            <p>This is the official game design document for "sideQUEST". It is a <b>living document</b>; there will be various tweaks and changes over the course of the development process. Keep checking back for new information as it is added.</p>
            <p><a href="sideQUEST.docx">Download the game design document</a> (.docx).</p>
            <div id="t1">
            	<ul class="gdd">
                	<li tabindex="0" style="color:#700003; margin-right:108px;">DESIGN</li>
                    <li tabindex="0" style="color:#003C70;">ENGINEERING</li>
                    <li tabindex="0" style="color:#000000; margin-left:108px;">MANAGEMENT</li>
                </ul>
                <div style="padding-top:25px;">
                	<div>
                    <p>The only way to save the world is to believe in yourself; or just your ability to take out the trash.</p>
                    <?php include ('downloads/gdd-design.php'); ?>
                    </div>
                    <div><?php include ('downloads/gdd-engineering.php'); ?></div>
                    <div><?php include ('downloads/gdd-management.php'); ?></div>
            	</div>

<script>
var t1 = new Spry.Widget.TabbedPanels("t1");

/* Accordion Menu */

var expands = new Array();

function init() {
	var divs = document.getElementsByTagName( 'div' );
	for ( var i = 0; i < divs.length; i++ ) {
		if ( divs[i].className == 'expand' ) expands.push( divs[i] );
	}
	for ( var i = 0; i < expands.length; i++ ) {
		var h4 = getFirstChildWithTagName( expands[i], 'H4' );
		h4.onclick = toggleItem;
	}
	for ( var i = 1; i < expands.length; i++ ) {
		expands[i].className = 'expand hide';
	}
}

function toggleItem() {
	var itemClass = this.parentNode.className;
	for ( var i = 0; i < expands.length; i++ ) {
		expands[i].className = 'expand hide';
	}
	if ( itemClass == 'expand hide' ) {
		this.parentNode.className = 'expand';
	}
}

function getFirstChildWithTagName( element, tagName ) {
	for ( var i = 0; i < element.childNodes.length; i++ ) {
		if ( element.childNodes[i].nodeName == tagName ) return element.childNodes[i];
	}
}

onload = function(){
	if (document.getElementsByTagName)
	init();
}
</script>
            
<?php include ('bottom.php') ?>
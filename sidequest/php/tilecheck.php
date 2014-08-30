<?php

	include ("../start.php");
    
	$uid = $_SESSION["user_id"];
	$x = get("x", "POST");
	$y = get("y", "POST");
	
	$lefttile = select_tile(($x - 1), $y);
	$righttile = select_tile(($x + 1), $y);
	$toptile = select_tile($x, ($y - 1));
	$bottomtile = select_tile($x, ($y + 1));

	$reftask = select_task($uid);

	$json = array(
		"charx" => (int)$x,
		"chary" => (int)$y,
		"ow_lefttile" => $lefttile["world"], "ow_righttile" => $righttile["world"],
		"ow_toptile" => $toptile["world"], "ow_bottomtile" => $bottomtile["world"]
		/*"task_lefttile" => $lefttile["task_check"], "task_righttile" => $righttile["task_check"],
		"task_toptile" => $toptile["task_check"], "task_bottomtile" => $bottomtile["task_check"],
		"ow_lefttile" => $lefttile["ow_bound"], "ow_righttile" => $righttile["ow_bound"],
		"ow_toptile" => $toptile["ow_bound"], "ow_bottomtile" => $bottomtile["ow_bound"],
		"shrine_lefttile" => $lefttile["shrine_bound"], "shrine_righttile" => $righttile["shrine_bound"],
		"shrine_toptile" => $toptile["shrine_bound"], "shrine_bottomtile" => $bottomtile["shrine_bound"],
		"mine_lefttile" => $lefttile["mine_bound"], "mine_righttile" => $righttile["mine_bound"],
		"mine_toptile" => $toptile["mine_bound"], "mine_bottomtile" => $bottomtile["mine_bound"],
		"tow_lefttile" => $lefttile["tower_bound"], "tow_righttile" => $righttile["tower_bound"],
		"tow_toptile" => $toptile["tower_bound"], "tow_bottomtile" => $bottomtile["tower_bound"],
		"bless_lefttile" => $lefttile["bless_bound"], "bless_righttile" => $righttile["bless_bound"],
		"bless_toptile" => $toptile["bless_bound"], "bless_bottomtile" => $bottomtile["bless_bound"],
		"id" => $reftask["task_id"]*/
	);

	$output = json_encode($json);
	echo $output;
    
    function select_tile($xpos, $ypos) {
        global $dbh;
        
        $sql = $dbh -> prepare("SELECT *
                                FROM tiles2
                                WHERE xpos = :xpos AND
                                      ypos = :ypos LIMIT 1");
        
        $sql -> bindParam(":xpos", $xpos, PDO::PARAM_INT);
        $sql -> bindParam(":ypos", $ypos, PDO::PARAM_INT);
        $sql -> execute();
        $result = $sql -> fetch(PDO::FETCH_ASSOC);
        
        return $result;
    }
    
    function select_task($id) {
        global $dbh;
        
        $sql = $dbh -> prepare("SELECT task_id
                                FROM user_tasks
                                WHERE user_id = :uid AND
                                      taskactive = 1 LIMIT 1");
        
        $sql -> bindParam(":uid", $id, PDO::PARAM_INT);
        $sql -> execute();
        $result = $sql -> fetch(PDO::FETCH_ASSOC);
        
        return $result;
    }
	
?>
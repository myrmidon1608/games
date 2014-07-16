<?php

	loading();

	 switch($_GET['state']) {
				
				case "shr01":
                    ret_shrine(4,6,1);
                    break;
					
				case "shr02":
                    ret_shrine(4,11,1);
                    break;
					
				case "brk01":
                    ret_shrine(17,12,1);
                    break;
				
                case "mn01":
                    echo "<div id='mine'>";
                    include ('game/mine.php');
                    echo "</div>"; 
                    break;

                case "tw01":
                    echo "<div id='tower'>";
                    include ('game/tower.php');
                    echo "</div>";
                    break;
					
				case "bs01":
					echo "<div id='bshrine'>";
                    include ('game/blessed.php');
                    echo "</div>";
                    break;
					
				case "w01":
					ret_world(-2,-3,1);
					break;
										
				case "w02":
					ret_world(-5,-9,1);
					break;
										
				case "w03":
					ret_world(-9,-13,1);
					break;
					
				case "w04":
					ret_world(-9,-8,1);
					break;
					
				case "w05":
					ret_world(-12,-4,1);
					break;
					
				case "w06":
					ret_world(4,-7,1);
					break;
					
				default:
					include ('game/start-screen.php');
					echo "<div id='worldmap'>";
                    include ('game/overworld.php');
                    echo "</div>";
					break;
            }

?>
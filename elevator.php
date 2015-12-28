<?php


$e_dir = "up";
$e_floor = 5;
$p_dir = "down";
$p_floor = 6;
$decision = " ";


	if ($e_dir == $p_dir)	{
		if ($p_dir == "up")	{
			if($e_floor <= $p_floor) {
				$decision = "yes pickup, you are going the same way";
		}	else {
				$decision = "no pickup, the elevator is above you";
			}
		}
		elseif ($e_floor >= $p_floor)	{
			if($p_dir == "down") {
				$decision = "yes pickup, you are going the same direction";
			}
		}	else {
				$decision = "no pickup, the elevator is below you";
			}
		}		
	else {
		$decision = "no pickup, you are going the wrong direction";
	} 
	echo $decision

?>
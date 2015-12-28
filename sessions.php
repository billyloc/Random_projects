<?php 

session_start();



if(isset($_SESSION["visit_count"])) {
	$_SESSION["visit_count"]++;
} else {
	$_SESSION["visit_count"] = 1;
}

$visit_count = $_SESSION["visit_count"];

 ?>


 You've been here <?= $visit_count ?> times.
<?php 

session_start();


$username = "";

if(isset($_SESSION["username"]) && strlen($_SESSION["username"])) {
	$username = $_SESSION["username"];
} else {
	header("Location: loginsession.php");
	exit();
}


 ?>


 Hello <?= $username ?>, welcome back to our awesome site!

<a href="logout.php">Logout</a>


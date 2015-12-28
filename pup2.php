<?php 
session_start();

$msg = "";
$snoop = "";
$pups = "";
$homies = [];

if(isset($_POST["pups"])) {
	$pups = $_POST["pups"];
}

if(isset($_SESSION["homies"])) {
	$homies = $_SESSION["homies"];
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
if(strlen($pups) > 2) {
	if(strlen($pups) <= 60) {
		array_push($homies, $pups);
		$_SESSION["homies"] = $homies;
	}
}
}

foreach ($homies as $homie) {
	$snoop .= "<li>" . $homie . "<button class=\"off\">X</button></li>";
}


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<form action="pup2.php" method="POST">
		PUPPY NAME <input type="text" name="pups">
		<button>ADD</button>
			<?= $msg  ?>
		<ol>
			<?= $snoop  ?>
		</ol>
		

	</form>
	
</body>
</html>
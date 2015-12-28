<?php 

session_start();

$name = "";
$dogs = [];
$list = "";
$msg = "";

if(isset($_POST["pups"])) {
 $name = $_POST["pups"];
}

if(isset($_SESSION["dogs"])) {
	$dogs = $_SESSION["dogs"];
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
if(strlen($name) > 2) {
	if(strlen($name) < 60) {
		array_push($dogs, $name);
		$_SESSION["dogs"] = $dogs;
	} 
} else {
	$msg = "bad puppy name";
}
}


foreach($dogs as $dog) {
	$list .= "<li>" . $dog . "<button class=\"remove\">REMOVE</button></li>";
}



?>






<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="puppies.php" method="POST">
	Puppy Name <input type="text" name="pups">
	<button>ADD</button>
	<?= $msg  ?>
	</form>
	<ol>
		<?= $list  ?>

	</ol>



	
</body>
</html>
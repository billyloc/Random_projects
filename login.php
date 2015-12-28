<?php  

$username = ["John Smith" => "ghyritol78", "John Doe" => "hyritlnk78", "Jane Doe" => "polgnklr65", "Jane Smith" => "bmfgrhtu00"];


$name = "";
$value = "";
$state = "";
$password = "";





if(isset($_GET["gender"])){
	$gender = $_GET["gender"];
}
if(isset($_GET["states"])){
	$state = $_GET["states"];
}
if(isset($_GET["username"])){
	$name = $_GET["username"];
}

if(isset($_GET["password"])){
	$password = $_GET["password"];
}
	
if(array_key_exists($name, $username)){
	if(strlen($password) == 10){
		if(is_numeric(substr($password, 8,2))){
		echo  "Hello " . $name . ", you are a " . $gender . " from " . $state . ".";
	}
	} elseif(strlen($password != 10)){
		echo "im sorry your password is invalid";
	}
} else {
	echo "im sorry your username is invalid";
}


if(is_numeric(substr($password, 8,2)) == false){
	echo "I'm sorry, the structure of your password is invalid";
}


?>


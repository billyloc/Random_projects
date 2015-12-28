<?php 

$username = ["Billy" => "lucky4dj89" , "Sasha" => "punmrvdh44", "Ramon" => "ebntgepl12", "Mariah" => "brfcpitmhg", "Sandra" => "fvcb3fd00", "Danielle" => "4bfgt7ng90"];


$users = "";
$password ="";
$gender = "";
$state = "";


if(isset($_GET["username"])){
	$users = $_GET["username"];
}

if(isset($_GET["password"])){
	$password = $_GET["password"];
}

if(isset($_GET["gender"])){
	$gender = $_GET["gender"];
}

if(isset($_GET["states"])){
	$state = $_GET["states"];
}


if(array_key_exists($users,$username) == $username){
	if(strlen($password) == 10){
		if(is_numeric(substr($password,8,2))){
			echo "Hello " . $users . " you are a " . $gender . " from " . $state;
		} else {
			echo "your information is invalid";
		} 
	} else {
		echo "Your password is invalid";
	}
} else {
	echo "your username is invalid";
}








 ?>
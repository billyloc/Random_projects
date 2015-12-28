<?php 

print_r($_GET);
$temp = "";

if(isset($_GET["temp"])) {
	$temp = $_GET["temp"];



if($temp = " ") {
	echo "you didnt specify a temperature";
} elseif($temp < 100) {
	echo "feels good outside";
}  else {
	echo "damn its hot";
}

if(isset($_GET["color"])) {
	$color = $_GET["color"];

	if($color === "red") {
		echo $color . " is my favorite color";
	} elseif($color == "green") {
		echo "Green is ok i guess";
	} elseif($color == "brown") {
		echo "brown is dirty";
	} else {
		echo "$color, meh...";
	}
} else {
	echo "no input";
}
}

 ?>
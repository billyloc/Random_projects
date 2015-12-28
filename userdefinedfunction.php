<?php 

function add($x, $y){
	return $x + $y;
}

$num = 5;

echo "2+3 = " . add($num,3);

echo "<br>";

function multiply($a,$b){
	return $a * $b;
}



echo multiply(3,9);

echo "<br>";

function isvalidUsername($username){
	return strlen($username) <= 7;
}



$u = "12345";
if(isvalidUsername($u)) {
	echo "$u is valid";
} else {
	echo "$u is NOT valid";
}

echo "<br>";

function getNthChar($string, $n){
	return substr($string, $n-1, 1);
}

if(getNthChar("don",2) == "o"){
	echo "this is correct";
} else {
	echo "this is incorrect";
}

echo "<br>";

print_r(str_split("motorcycle"));

function my_strrev($input) {
	$chars = str_split($input);
	$output = "";
	for ($i = count($chars)-1; $i >= 0 ; $i --) { 
		$output .= $chars[$i];
	}
	return $output;
}

echo my_strrev("cat");

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


$name = "no value";
if(isset($_get["name"])){
	$name = $_GET["name"];
}
// return $_GET[$paramater_name] or "" if it doesnt exist.
function getStuff($parameter_name, $default="") {
	if(isset($_GET[$parameter_name])) {
		return $_GET[$parameter_name];
	}  else {
		return $default;
	}	
}

$x = "name";
 
$name = getStuff($x, "no value");

echo "name is " . $name	;


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


//implement implode

function myjoin($glue,$pieces){
	$output = "";
	foreach($pieces as $idx=>$piece) {
		$output .= $piece;
		if($idx < count($pieces)-1) {
			$output .=$glue;
		}
	}
	return $output;
}

$glue = ":";
$a = ["cat", "bat", "rat"];
echo myjoin($glue,$a);
// should return "cat:dog:rat"


function combine($puzzles, $glue){
	$output = "";
	foreach($puzzles as $puzzle)
}



 ?>
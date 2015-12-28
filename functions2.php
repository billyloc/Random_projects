<?php

$message = "the system is down";
$text = "i can program";
$password = "5rep-thucat_at&56AfecRafum";
$age = 25;

function add($a,$b){
	return ($a + $b);
}

function three($d,$e,$f){
	return ($d + $e + $f);
}

function four($g,$h,$i,$j){
	return ($g + $h + $i + $j);
}

function absolute(){
	if ($a - $b == float){
		echo abs($a - $b);
	}
}

function combine($first,$lastname){
	echo ($first.$lastname);
}





function checkIt($str){
	if(strlen($str) >= 20){

	}	else {
		return "FAIL";
	}
}




$test = "hello there ";
echo("It is:" . checkIt($test));

$test = "Hello there is this more than 20?";
echo("It is" . checkIt($test));




echo strlen($message);
echo strlen("variable");
echo strlen($password);
echo is_numeric($age);
if (is_numeric($password)){
	echo "isNumeric";
}	else {
	echo "Not Numeric";
}
echo strtoupper($text);
echo ucwords($text);
echo ucwords($message);
echo ucfirst($message);
echo ucfirst($text);
echo substr($message,0,3);
echo substr($message,5,6);
echo substr($message,14,4);
echo substr($password,0,4);
echo is_numeric(substr($password, 15,2));
echo htmlentities($password);














?>
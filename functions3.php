<?php 


function moveforward() {

		echo("Move Forward");
}

function turn($direction){
	echo("Turn" . $direction);
}

function add($x, $y){

	return $x + $y;
}

moveforward();
moveforward();
turn("Right");
moveforward();

$ans = add(3,4);

echo($ans);

echo "<br>";

// challenge create a function that returns a / b

function divide($a, $b){
	return $a / $b;
}

function getbignumber(){
	return 5;
}

$result = divide(3,3);

echo $result;

$ans = add(3,getbignumber());
echo($ans);

echo(strlen("Billy"));

if(is_numeric("hello")){
	echo "Yep";
}
else {
	echo "Nope";
}

echo(ucwords("so much depends upon the red wheel barrow"));

//ucfirst, is_numeric,ucwords,substr,strlen,str_replace

echo(substr("This is rad", 0, 2));


echo(str_replace("e","!", "here is a sentance with vowels and verbs subject"));











 ?>
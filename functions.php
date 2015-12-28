<?php

function moveforward(){
	echo "move forward ";
}

function turn($direction){
	echo("turn " . $direction);
}

function bark(){
	echo("bark ");
}

function add($a, $b){
	return $a + $b;
}

function bignumber(){
	return 5;
}




moveforward();
moveforward();
moveforward();
turn("left ");
moveforward();
turn("right ");
turn("right ");
moveforward();
bark();

$ans = add(4,5);

echo ($ans);

$ans = add(6, bignumber());
echo ($ans . "<br>");

echo (ucfirst("baba hello asld;kf askdjhf"));
echo ("<br>");

echo (substr("abwertwerbabba", 6, 4));
echo ("<br>");s

echo (htmlentities("i love <this> so much"))




//

?>



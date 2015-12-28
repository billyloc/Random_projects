<?php 


class Duck{
	protected $sound;

	public function __construct($name){
		$this->sound= "Quack Quack";
	}

	public function speak($phrase){

		if(strlen($phrase) > 0) {
			echo $phrase . "" . $this->sound;
		}
		else {
			throw new Exception("Phrase is required");
		}


		echo $phrase . " " . $this->sound;
	}

}

class rubberDuck extends Duck{
	public function __construct(){
		$this->sound = "Squeek Squeek";
	}

}

class decoyDuck extends Duck{
	public function __construct(){
		$this->sound = "";
	}
}

$darkwing = new Duck("Drake Mallard"); 
$darkwing->speak("I am the terror that flaps in the night.");

$bill = new rubberDuck("bad Brig");
$bill->speak("You're the one");

$decoy = new decoyDuck();
$decoy->speak("3...2...1...");

try {
	$decoy->speak("");
}
catch(Exception $ex){
	echo "failed";
}

echo "<br>";


// function add($x,$y){
// 	if(is_numeric($x)){
// 		if(is_numeric($y)){
// 			return $x + $y;
// 		} else {
// 			throw new Exception("Invalid Parameter: Must be number");
// 		}
// 	}
// 	else {
// 		echo "Invalid Parameter: Must be number";
// 	}
// }

class InvalidParameterException extends Exception {

}


function add($x, $y){
	if(!is_numeric($x)  ||  !is_numeric($y)){
		throw new InvalidParameterException("Must be number");
	}

	if($x < 0 || $y < 0){
		throw new InvalidParameterException("Must be positive");
	}

	if($x == 5){
		throw new Exception();
	}

	return $x + $y;
}

	
// $first = 5;


// // echo add(1,3);
// //


// echo add($first, $second);

// try{
// 	echo add($first, $second);
// }
// catch(InvalidParameterException $ex){
// 	echo "Please check your inputs" . $ex->getMessage();
// }

// try{
// 	echo add("a", "b");
// }
// catch(Exception $ex){
// 	echo "Unknown Failure" . $ex->getMessage();
// }

echo "<br>";






// $colors = ["green", "red", "blue", "black", "yellow","pink"];
// foreach($colors as $color);


function powerRanger($type){


	$colors = ["green", "red", "blue", "black", "yellow","pink"];
	$valid = false;

	foreach($colors as $color){
		if($type == $color){
			$valid = true;{
			}
		} 

	}

	if($valid == false){
		throw new Exception("Your power ranger color is invalid");
	} else {
		echo "good job with your power ranger";
	}
}





try {
	echo powerRanger("alsdkfh");
}
catch (Exception $ex) {
	echo "Bad Power Ranger" . $ex->getMessage();
}

echo "<br>";





function powerRangr($hue){
	$colors = ["black", "blue", "yellow", "green", "orange"];
	$valid = false;

	foreach($colors as $color){
		if($hue == $color){
			$valid = true;{
			}
		}
	}

	if($valid == false){
		throw new Exception ("bad color for your power ranger");
	} else {
		echo "hello Mr Power Ranger.";
	}
}

try {
	echo powerRangr("blue");

}
catch (Exception $ll){
	echo "bad power ranger yo";
}























 ?>
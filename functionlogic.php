<?php 

$validObject = ["apple", "hammer", "car", "banana"];
$objectColor = "red";
$objectHasJuice = true;
$objectName = "apple"; // Apple, Hammer, Car, Banana,


function isApple($objectName){

	if($objectName == "apple"){
		return true;
	} else {
		return false;
	}
}

function isJuicy($objectHasJuice){

	if($ojectHasJuice == true){
		return true;
	} else {
		return false;
	}
}

function isRed($objectColor){

	if($objectColor == "red"){
		return true;
	} else {
		return false;
	}
}

function isValidInput(){

	if(isset($_GET["name"])){
		$userItem = $_GET["name"];
		if(isValidTerm($userItem)){
			return true;
		} else {
			return false;
		}	
	} else {
		return false;
	}

}

function isValidTerm(){

	foreach($validItems as $item){

		if($item == $userItem){
			return true;

		} else {
			//continue
		}
	}

	return false;
}

if(isValidInput()){
	if(isApple($objectName)){
		if(isJuicy($objectHasJuice)){
			if(isRed($objectColor)){
				echo "Buy, this is a red juicy apple";
			} else {
				echo "Do Not Buy, this is not a red, juicy, apple";
			}
		} else {
			echo "Do Not Buy, this is not a red, juicy, apple";
		}
	} else {
		echo "Do Not Buy, this is not a red, juicy, apple";
	}
} else {
	echo "Invalid input";
}	

echo "<br>";


$numbers = [5, 8, 20, 12, 4];

$sum = 0;

// $numbers = [5, 8, 20, 12, 4];

// $sum = 0;
// foreach($numbers as $key => $value){
//     $sum += $value;
// }


// for($i = 0;$i < count($numbers);$i++){
//     $sum += $numbers[$i];
// } echo $sum;
    	
for ($i=0; $i < count($numbers); $i++){
	$sum += $numbers[$i];
} echo $sum;


 ?>

<?php 

$cars = ["mustang","camaro","lambo","ferrari","maserati"];


$cars[] = "BMW";

print_r($cars);


echo "<br>";

$fruit = ["apple", "pear", "squash", "orange", "kiwi"];

echo $fruit[3];

echo "<br>";

$prime = ["2","3","5","7","11","13"];

echo $prime[5];


echo "<br>";

$states = ["santa fe" => "New Mexico","phoenix" => "Arizona", "Reno" => "Nevada"];

$ratings = ["great" => "The Dark Knight", "good" => "Big Hero 6", "Awesome" => "The Breakfast Club"];

foreach($ratings as $key => $value){
echo "The movie $value is $key <br>";
}

echo "<br>";



$string = "i can put whatever i want in here and see what explode does";

print_r (explode(" ",$string));

print_r (implode(" ",$states));

echo "<br>";

$ratings["Amazing"] = "Avengers";

print_r ($ratings);

echo "<br>";

$letters = ["a"=>"1", "b"=>2, "c"=> 3];

if(array_key_exists("5",$letters)){
	echo "yes it exists";
}else {
	echo "no it does not exist";
}
echo "<br>";

if(array_key_exists("bad",$ratings)){
	echo "yes it exists";
}	else {
	echo "no it does not exist";
}

echo "<br>";

array_pop($fruit);
print_r($fruit);

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


// $_GET["coast"];
// $_GET["temp"];

// $coast = $_GET["coast"];
// $temp = $_GET["temp"];

$temp = "hot";
$coast = "west";




if($temp == "cold"){
	if($coast == "west"){
		echo "Maine";
	} elseif($coast == "east"){
		echo "New York";	
	}
} elseif($temp == "hot"){
	if($coast == "east"){
		echo "Florida";
	} elseif($coast == "west"){
		echo "Arizona";
	}	
}


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";



$fruits = ["apple", "cherry", "orange", "kiwi", "pear","watermelon"];

echo $fruits[3];

echo "<br>";

$prm_numbers = ["2","3","5","7","11","13","15"];

echo $prm_numbers[5];

echo "<br>";

$states2 = ["nm" => "newmexico", "az" => "arizona", "fl" => "miami"];

foreach($states2 as $key1 => $value1);
	echo "you live in $key1 which is the short version of $value1";

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

$poem = "roses are red, violets are blue, I am home alone, and I do not like it. I miss my wife";

print_r (explode(" ",$poem));

echo "<br>";
echo "<br>";

$food = ["i","love","beans"];

print_r (implode(" ",$food));


echo "<br>";

if(array_key_exists("nm", $states2)) {
	echo "yes it exists";
} else {
	echo "no it does not exist";
}

echo "<br>";
echo "<br>";


$colors2 = ["blue","red","orange","black","white","yellow","green","pink"];


array_pop($colors2);

print_r($colors2);

echo "<br>";
echo "<br>";

array_push($colors2,"pink");

print_r($colors2);




echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";




$fruit3 = ["1","2","3","4","5","6","7"];

echo $fruit3[3];
echo "<br>";


$prime2 = ["1","2","3","4","5","6","7","8","9","10"];

echo $prime2[5];

echo "<br>";

$movies3 = ["bat" => "batman", "spider" => "spiderman", "suit" => "ironman"];

foreach($movies3 as $title => $moves)
	echo "$title<br>";

echo "<br>";

$poem3 = "this is the third time i make a poem and im getting tired of it lol";

print_r(explode(" ",$poem3));

echo "<br>";

$array4 = ["i","love","beans"];

print_r(implode(" ",$array4));

echo "<br>";

if(array_key_exists("good",$movies3)){
	echo "yes it exists";
} else {
	echo "no it does not exist";
}

echo "<br>";

$colors7 = ["red","white","blue","gold","silver"];

array_push($colors7,"platinum");

print_r($colors7);

echo "<br>";

array_pop($colors7);

print_r($colors7);
echo "<br>";
array_pop($colors7);
print_r($colors7);

echo "<br>";

array_push($colors7, "fuscia");
print_r($colors7);

























 ?>
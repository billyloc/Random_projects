<?php

$states = Array("AL", "AK", "AZ", "AR");

echo $states[3];

$cities = ["Boston", "Phenix", "Salt Lake"];
echo $cities[2];


// add a new item to the array
$cities[] = "Mesa";
echo $cities[3];

// update an exisiting value
echo $cities[1];
$cities[1] = "Phoenix";
echo $cities[1];

//associative array

$x = Array('first_name' => 'Joe', 'last_name' => 'Smith');
echo ($x["first_name"]);

echo ("<br>");


$fruit = Array("Apple", "Pear", "Orange", "Kiwi");

echo $fruit[3];

$prime = ["2", "3", "5", "7", "11","13"];
echo $prime[5];

$cap = Array('Arizona' => 'Phoenix', 'New Mexico' => 'Santa Fe');
echo $cap['New Mexico'];

$movie = Array('Scarface' => 'AWESOME!!!', 'Pulp Fiction' => 'AWESOMER');
echo $movie['Pulp Fiction'];











echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";





$fruit = ["cherry", "kiwi", "blueberry", "cumquat", "banana"];

echo $fruit[3];

echo "<br>";
echo "<br>";

$prime = ["2", "3", "5", "7", "11", "13"];

echo $prime[5];

echo "<br>";

$state = ["new mexico" => "albuquerque", "arizona" => "Phoenix", "Nevada" => "Las Vegas"];

echo $state["new mexico"];
echo "<br>";

$movies = ["zombieland" => "fantastic", "MIB" => "great", "The Dark Knight" => "Best Joker"];

echo $movies["zombieland"];
echo "<br>";
echo $movies["MIB"];
echo "<br>";
echo $movies["The Dark Knight"];
echo "<br>";


$direction = ["north", "south", "east", "west"];
echo explode($direction);

?>
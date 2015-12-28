<?php  
$names = ["billy","sasha","ramon","sandra","joe","vicky", "ciera", "emiliano", "isabella"];

$name2 =[];

foreach($names as $name) {
	if(is_numeric($name)){
		$name2[] = $name;
	}
}


print_r ($name2);

$animals = ["dog","cat","horse","tiger","fish"];

foreach($animals as $animal){
	echo "i would like to have a " . $animal . '<br>';
}

echo "<br>";

$team = [
    'name' => 'The Suns',
    'players' => 12,
    'primary_color' => 'orange',
    'record' => '5-20',
    'last_championship' => 'never'
];

foreach($team as $key=> $value){
	echo "$key : $value <br>";
}

echo "<br>";

$states = ['Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California', 'Colorado', 'Connecticut'];

$state_opt = "";

foreach($states as $state) {
	$state_opt .= "<option>$state</option>";
}

echo "<br>";

$products = [
    '7897wej2' => 'desk',
    '2342314asdf' => 'chair',
    '23314sdf' => 'boat',
    '734253eah' => 'car'
];

$opts = "";


foreach($products as $key=>$product) {
	$opts .= "<option value=\"$key\"> $product </option>";
}


// $colors2 =[];

// foreach($colors as $key=>$color) {
// 	if($key%3 == 0){
// 		$colors2[] = $color;
// 	}

// 	print_r($colors2);
// }



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<select name="states" id="">
	<?=$state_opt?>

<option value=""></option>
</select>
<br>
<form action="testloop.php">
<select name="products_4" id="">
	<?=$opts?>
</select>
<button>Buy It NOW</button>
</form>


	
</body>
</html>
<?php 

/*$items = ["dog", "cat", "fish", "horse", "bird"];
$i = 0;

$i = 0;
while ($i <= 10){
  echo $i++ . "<br>";
}

// while loops //


while ($i < count($items)){
	echo $items[$i] . "<br>";
	$i++;
}

// for loops


for ($i = 1; $i <= count($items); $i++){
	echo $items[$i] . "<br>";
}

//foreach loops
for($i=0; $i < count($items); $i++) {
	$val = $items[$i];
	echo $val;
}
echo "<br>";
foreach($items as $val) {
	echo $val;
}

echo "<br>";

$nums = [12,6,13,7,21,0,1,455];


// will echo only the odd numbers
foreach($nums as $num) {
	if($num % 2 == 1) {
		echo $num, "<br>";
	}
}
	echo $num, ":", $num % 2, "<br>";

*/


$person = ["name" => "fred", "age" => 17, "color" => "blue"];

foreach($person as $key=>$value) {
	echo $key, ": ", $value, "<br>";
}

echo "<br>";

$products = ["1234" => "desk", "12345" => "chair", "123456" => "boat", "1234567" => "car", "horse" => "horse"];

$options = " ";

foreach($products as $key=>$product) {
	$options .= '<option value="' . $key . '">' . $product . '</option>';
}

echo $options;

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="">
	select a product: <select name="prod_id"><?= $options ?></select>
	<button>Go</button>
	</form>
	
</body>
</html>
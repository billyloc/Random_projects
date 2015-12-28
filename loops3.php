<?php 

$colors = ['red', 'green', 'blue', 'yellow', 'pink', 'orange', 'purple', 'black', 'lime', 'teal'];

// $colors2 =[];

// foreach($colors as $key=>$color) {
// 	if($key%3 == 0){
// 		$colors2[] = $color;
// 	}

// 	print_r($colors2);
// }

// $opt = "";

// foreach($colors as $color) {
// 	if(strlen($color) <= 4){
// 		$colors2[] = $color;
// 	}
// }

// print_r($colors2);






$opt = "";

foreach($colors as $key=>$color) {
	$opt .="<option value =" .  $key  ."> ".  $color . "</option>";
}



// $array = "";

// foreach((count($colors => $key))

// $out = "";

// foreach($colors as $key=>$color) {
// 	$out .= "<form><select>color " . ($key) . ": " . $color . "</form></select>";
// }



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<form action="">
<select name="whatever" id="123">
	
<?= $opt ?>


</select>
	
</form>
</body>
</html>





 